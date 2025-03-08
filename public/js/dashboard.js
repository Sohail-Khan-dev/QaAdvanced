$(document).ready(function () {
    loadSummernote();
    $(document).on("submit", "#new-blog-form", function (e) {
        e.preventDefault();
        // let title = $("#title").val();
        let markupStr = $(this).find('.topic-html').summernote('code');
        let formData = new FormData(this);
        console.log("markupStr", formData);

        formData.append('content', markupStr);
        // let slug = $("#topic-id").val();
        $.ajax({
            url: "/store-blog",
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('#new-topic-modal').modal('hide');
                resetTopicModal();
                loadTopic('/get-blog', 'blog-content', 'blog-dataTable');
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText, status, error);
            }
        });

    });
    $(document).on("submit", "#new-quiz-form", function (e) {
        e.preventDefault();
        $("#save-btn").prop('disabled', true);

        let question = $('#question').summernote('code');

        let formData = new FormData(this);
        formData.append('question', question);
        $.ajax({
            url: "/store-quizzes",
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('#new-quiz-modal').modal('hide');
                resetTopicModal();
                loadTopic('/get-quizzes', 'quiz-content', 'quiz-dataTable');
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText, status, error);
            }
        });

    });
    $(document).on("submit", "#learning-category-form", function (e) {
        e.preventDefault();
        $("#save-btn").prop('disabled', true);

        let slug = $(this).find('.topic-html').summernote('code');
        console.log("slug", slug);

        let formData = new FormData(this);
        formData.append('slug', slug);
        $.ajax({
            url: "/store-category",
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('#learning-category-modal').modal('hide');
                resetTopicModal();
                loadTopic('/get-category', 'learning-category', 'learning-category-dataTable');
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText, status, error);
            }
        });

    });
    $(document).on("submit", "#topic-list-form", function (e) {
        e.preventDefault();
        $("#save-btn").prop('disabled', true);

        let description = $(this).find('.topic-html').summernote('code');
        console.log("slug", description);

        let formData = new FormData(this);
        formData.append('slug', description);
        $.ajax({
            url: "/store-topic",
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('#topic-list-modal').modal('hide');
                resetTopicModal();
                loadTopic('/get-topic', 'topic-list', 'topic-list-dataTable');
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText, status, error);
            }
        });

    });
    $(document).on("click", "#new-blog-btn #new-quiz-btn #topic-list-btn #learning-category-btn", function () {
        // Enable Save button click 
        $("#save-btn").prop('disabled', false);
    });
    function loadTopic(url, content = null, tableId = null) {
        if (content === null) return;
        $.ajax({
            url: url,
            method: 'GET',
            dataType: 'json',
            headers: {
                'Accept': 'application/json' // Tell Laravel to return JSON
            },
            success: function (data) {
                console.log(data);
                let actionsBtn = `<a href="#" class="btn btn-primary btn-sm">View</a> <a href="#" class="btn btn-success btn-sm">Edit</a><a href="#" class="btn btn-danger btn-sm">Delete</a>`;
                // var tableId = content === 'blog-content' ? '#topic-dataTable' : '#quiz-dataTable';
                var table = $("#" + tableId).DataTable();
                console.log(content);
                table.clear().draw();
                data.forEach(function (item) {
                    // let mainText =  ? $(item.content) : $(item.name) ;
                    if (content === "blog-content") {
                        var textContent = $(item.content).text(); // Extract text content only
                        var words = textContent.split(/\s+/).slice(0, 25).join(' '); // Get first 25 words
                        table.row.add([
                            item.title,
                            words,
                            item.slug,
                            actionsBtn
                        ]).draw(false);
                    } else if (content === "quiz-content") {
                        table.row.add([
                            item.questions[0].question,
                            item.questions[0].options[0].option + ' | ' + item.questions[0].options[1].option + ' | ' + item.questions[0].options[2].option + ' | ' + item.questions[0].options[3].option,
                            'falhal none set it later',
                            actionsBtn
                        ]).draw(false);
                    } else if (content === "learning-category") {
                        table.row.add([
                            item.id,
                            item.name,
                            actionsBtn
                        ]).draw(false);
                    } else if (content === "topic-list") {
                        table.row.add([
                            item.id,
                            item.name,
                            item.learning_category_id,
                            actionsBtn
                        ]).draw(false);
                    }
                });
            }
        });
    }
    // Handle nav link clicks
    $('.blog-link').on('click', function (e) {
        e.preventDefault();
        hideAllContent();
        var content = $(this).data('content');
        $("#" + content).removeClass('d-none');
        let url = $(this).data('url');
        let dataTable = $(this).data('table');
        // console.log('clicked ' + url + ' ' + content);
        loadTopic(url, content, dataTable); // we will edit this for the Quiz
    });
    function hideAllContent() {
        $("#blog-content").addClass('d-none');
        $("#quiz-content").addClass('d-none');
        $("#learning-category").addClass('d-none');
        $("#topic-list").addClass('d-none');

    }
    function resetTopicModal() {
        $(".title").val("");
        $('.topic-html').summernote('code', '');
        $('.note-placeholder').show();
        $("#topic-id").val("");
    }
    function loadSummernote() {
        $('.topic-html').summernote({
            height: 300,
            minHeight: 200,
            placeholder: 'Write your detail here...',
        });
        $('#question').summernote({
            height: 70,
            minHeight: 50,
            maxHeight: 300,
            placeholder: 'Write your question here...',
        });

    }
});