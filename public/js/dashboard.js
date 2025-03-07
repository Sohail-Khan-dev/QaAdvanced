
$(document).ready(function () {
    loadSummernote();
    loadTopic('/get-topics');
    let title = $("#title");
    let topicContent = $("#topic-content");
    let quizContent = $("#quiz-content");
    $(document).on("submit", "#new-topic-form", function (e) {
        e.preventDefault();
        let title = $("#title").val();
        let markupStr = $('#topic-html').summernote('code');
       let slug = $("#topic-id").val();
        $.ajax({
            url: "/store-topic",
            method: 'POST',
            data: {
                title: title,
                content: markupStr,
                slug : slug
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('#new-topic-modal').modal('hide');
                resetTopicModal();
                loadTopic('/get-topics');
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
                loadTopic('/get-quizzes', 'quiz-content');
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText, status, error);
            }
        });

    });
    $(document).on("click", "#new-topic-btn #new-quiz-btn", function () {
        $("#save-btn").prop('disabled', false);
    })
    function loadTopic(url, content = 'topic-content') {
        $.ajax({
            url: url,
            method: 'GET',
            dataType: 'json',
            headers: {
                'Accept': 'application/json' // Tell Laravel to return JSON
            },
            success: function (data) {
                let actionsBtn = `<a href="#" class="btn btn-primary btn-sm">View</a> <a href="#" class="btn btn-success btn-sm">Edit</a><a href="#" class="btn btn-danger btn-sm">Delete</a>`;
                var tableId = content === 'topic-content' ? '#topic-dataTable' : '#quiz-dataTable';
                var table = $(tableId).DataTable();
                table.clear().draw();
                data.forEach(function (item) { 
                    var textContent = $(item.content).text(); // Extract text content only
                    var words = textContent.split(/\s+/).slice(0, 25).join(' '); // Get first 25 words
                    if (content === "topic-content") {
                        table.row.add([
                            item.title,
                            words,
                            item.slug,
                            actionsBtn
                        ]).draw(false);
                    } else {
                        table.row.add([
                            item.questions[0].question,
                            item.questions[0].options[0].option + ' | ' + item.questions[0].options[1].option + ' | ' + item.questions[0].options[2].option + ' | ' + item.questions[0].options[3].option,
                            'falhal none set it later',
                            actionsBtn
                        ]).draw(false);
                    }
                });
            }
        });
    }
    // Handle nav link clicks
    $('.nav-link #blog-detail-collapse.').on('click', function (e) {
        e.preventDefault();
        hideAllContent();
        var content = $(this).data('content');
        $("#" + content).removeClass('d-none');
        let url = content == 'topic-content' ? '/get-topics' : '/get-quizzes';
        loadTopic(url, content); // we will edit this for the Quiz
    });
    function hideAllContent() {
        topicContent.addClass('d-none');
        quizContent.addClass('d-none');

    }
    function resetTopicModal() {
        $("#title").val("");
        $('#topic-html').summernote('code', '');
        $('.note-placeholder').show();
        $("#topic-id").val("");
    }
    function loadSummernote() {
        $('#topic-html').summernote({
            height: 300,
            minHeight: 200,
            placeholder: 'Write your topic here...',
        });
        $('#question').summernote({
            height: 70,
            minHeight: 50,
            maxHeight: 300,
            placeholder: 'Write your question here...',
        });

    }
});