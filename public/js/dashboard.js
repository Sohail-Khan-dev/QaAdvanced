$(document).ready(function () {
    let actionsBtn = `<a href="#" class="btn btn-success btn-sm">Edit</a><a href="#" class="btn btn-danger btn-sm">Delete</a>`;
    loadSummernote();
    $(document).on("submit", "#new-blog-form", function (e) {
        e.preventDefault();
        let markupStr = $(this).find('.topic-html').summernote('code');
        let formData = new FormData(this);
        formData.append('content', markupStr);
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
                resetHtmlContent();
                loadTopic('/get-blog', 'blog-content', 'blog-dataTable');
                var table = $("#blog-dataTable").DataTable();
                // table.clear().draw();
                var textContent = $(response.blog.content).text(); // Extract text content only
                var words = textContent.split(/\s+/).slice(0, 25).join(' '); // Get first 25 words
                table.row.add([
                    response.blog.title,
                    words,
                    response.blog.slug,
                    actionsBtn
                ]).draw(false);
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText, status, error);
            }
        });

    });
    $(document).on("submit", "#new-quiz-form", function (e) {
        e.preventDefault();
        $(this).find("#save-btn").prop('disabled', true);

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
                resetHtmlContent();
                loadTopic('/get-quizzes', 'quiz-content', 'quiz-dataTable');
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText, status, error);
            }
        });

    });
    $(document).on("submit", "#learning-category-form", function (e) {
        e.preventDefault();
        $(this).find("#save-btn").prop('disabled', true);

        let slug = $(this).find('.topic-html').summernote('code');
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
                resetHtmlContent();
                populateCategory(response.categories); // this function is written down in new-blog.blade.php file there it is handled 
                var table = $("#learning-category-dataTable").DataTable();
                // table.clear().draw();
                    table.row.add([
                        response.category.id,
                        response.category.name,
                        actionsBtn
                    ]).draw(false);
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText, status, error);
            }
        });

    });
    $(document).on("submit", "#topic-list-form", function (e) {
        e.preventDefault();
        $(this).find("#save-btn").prop('disabled', true);

        let slug = $(this).find('.topic-html').summernote('code');
        let formData = new FormData(this);
        formData.append('slug', slug);
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
                resetHtmlContent();
                topics = response.topics; //  this is for the dropdown in the dashboard 
                var table = $("#topic-list-dataTable").DataTable();
                // table.clear().draw();
                // topics.forEach(function (item) {
                    console.log(response);
                    table.row.add([
                        response.topic.id,
                        response.topic.name,
                        response.topic.learning_category_id,
                        actionsBtn
                    ]).draw(false);
                // });
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText, status, error);
            }
        });

    });
    $(document).on("click", "#new-blog-btn, #new-quiz-btn, #topic-list-btn, #learning-category-btn", function () {
        // Enable Save button click 
        console.log("button is clicked : ");
        console.log($(".save-btn"));
        $(".save-btn").prop('disabled', false);
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
                var table = $("#" + tableId).DataTable();
                table.clear().draw();
                data.forEach(function (item) {
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
        loadTopic(url, content, dataTable); // we will edit this for the Quiz
    });
    function hideAllContent() {
        $("#blog-content").addClass('d-none');
        $("#quiz-content").addClass('d-none');
        $("#learning-category").addClass('d-none');
        $("#topic-list").addClass('d-none');

    }
    function resetHtmlContent() {
        $("#topic-id").val("");
        $(".name").val("");
        $(".category-id").val("");
        $('.topic-html').summernote('code', '');
        $('.topic-html').trigger('summernote.change'); // Force event trigger

        // $('.note-placeholder').show();
        // $("#topic-id").val("");
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
    let topicsData = $('#topics-data').attr('data-topics');
    let topics = JSON.parse(topicsData); // Convert to JavaScript object   
    $("#category-id").on("change", function(){
        getTopicOfCategory($(this).val());
    });
    function getTopicOfCategory(category_id){
        let filteredTopics = topics.filter(topic => topic.learning_category_id == category_id);
        populateTopics(filteredTopics); 
    }
    function populateCategory(categories){
        let select = $(".category-id");
        select.find('option:not(:first)').remove();
        $.each(categories,function(index,category){
           let option = `<option value="${category.id}">${category.name}</option>`;
           select.append(option);
        });
    }
});