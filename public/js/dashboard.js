$(document).ready(function () {
    loadSummernote();
    // These topics, Categories and Blogs are used to store the data from the server and then use for dropdown and edit and delete.
    let topics = window.topics; 
    let categories = null;
    let blogs = null;
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
                $('#new-blog-modal').modal('hide');
                resetHtmlContent();
                blogs = response.blogs;
                var table = $("#blog-dataTable").DataTable();
                var textContent = $(response.blog.content).text(); // Extract text content only
                var words = textContent.split(/\s+/).slice(0, 25).join(' '); // Get first 25 words
                table.row.add([
                    response.blog.title,
                    words,
                    response.blog.slug,
                    getActionbuttons(response.blog.id)
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
                getData('/get-quizzes', 'quiz-content', 'quiz-dataTable');
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
                categories = response.categories;
                populateCategory(categories); // this function is written down in new-blog.blade.php file there it is handled 
                var table = $("#learning-category-dataTable").DataTable();
                // table.clear().draw();
                    table.row.add([
                        response.category.id,
                        response.category.name,
                        getActionbuttons(response.category.id)
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
                        getActionbuttons(response.topic.id)
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
    function getData(url, content = null, tableId = null) {
        if (content === null) return;
        $.ajax({
            url: url,
            method: 'GET',
            dataType: 'json',
            headers: {
                'Accept': 'application/json' // Tell Laravel to return JSON
            },
            success: function (data) {
                if (content === "blog-content") {
                    blogs = data;
                }else if(content === "learning-category"){
                    categories = data;
                }else if(content === "topic-list"){
                    topics = data;
                }
                refreshDataTable(tableId, data,content);
            }
        });
    }
    function getActionbuttons(id){
        let actionsBtn = `<a href="#" class="btn btn-success btn-sm edit-btn" data-id=${id}>Edit</a><a href="#" class="btn btn-danger btn-sm del-btn" data-id=${id}>Delete</a>`;
        return actionsBtn;
    }
    $(document).on("click", ".edit-btn", function () {
        let id = $(this).data('id');
        console.log("edit button clicked", id);
        if($(this).closest("#learning-category").length){
            let category = categories.find(category => category.id == id);
            $("#category-id").val(category.id);
            $(".name").val(category.name);
            $('.topic-html').summernote('code', category.slug);
            $('.topic-html').trigger('summernote.change'); // Force event trigger
            $('#learning-category-modal').modal('show');
        }
        else if($(this).closest("#topic-list").length){
            let topic = topics.find(topic => topic.id == id);
            $("#topic-id").val(topic.id);
            $(".name").val(topic.name);
            $(".category-id").val(topic.learning_category_id);
            $('.topic-html').summernote('code', topic.slug);
            $('.topic-html').trigger('summernote.change'); // Force event trigger
            $('#topic-list-modal').modal('show');
        }
        else if($(this).closest("#blog-content").length){
            let blog = blogs.find(blog => blog.id == id);
            console.log("Blog is : " , blog);
            $("#blog-id").val(blog.id);
            $("#title").val(blog.title);
            $("#topic-id").val(blog.topic_id);
            $('.topic-html').summernote('code', blog.content);
            $('.topic-html').trigger('summernote.change'); // Force event trigger
            $('#new-blog-modal').modal('show');
        }
    });
    $(document).on("click", ".del-btn", function () {
        let id = $(this).data('id');
        if($(this).closest("#topic-list").length){
            let url = "/delete-topic/" + id;
            $.ajax({
                url:url,
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response){
                    console.log(response, " Topic deleted successfully");
                    topics = response.topics;
                    refreshDataTable('topic-list-dataTable', response.topics, 'topic-list');
                },
                error: function(xhr) {
                    console.error("Error deleting topic:", xhr.responseText);
                    alert("Error deleting topic: " + xhr.responseText); // Alert error message
                }
            });
        }
        else if($(this).closest("#learning-category").length){
            let url = "/delete-category/" + id;
            $.ajax({
                url:url,
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response){
                    console.log(response, " Category deleted successfully");
                    categories = response.categories;
                    populateCategory(categories);
                    refreshDataTable('learning-category-dataTable', response.categories, 'learning-category');
                },
                error: function(xhr) {
                    console.error("Error deleting category:", xhr.responseText);
                    alert("Error deleting category: " + xhr.responseText); // Alert error message
                }
            });
        }
        else if($(this).closest("#blog-content").length) {
            let url = "/delete-blog/" + id;
            $.ajax({
                url: url,
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    console.log(response, " Blog deleted successfully");
                    blogs = response.blogs;
                    refreshDataTable('blog-dataTable', response.blogs, 'blog-content');
                },
                error: function (xhr) {
                    console.error("Error deleting blog:", xhr.responseText);
                    alert("Error deleting blog: " + xhr.responseText); // Alert error message
                }
            });
        }

    });
    function refreshDataTable(tableId, data, content){
        var table = $("#" + tableId).DataTable().clear().draw();
        data.forEach(function (item) {
            if (content === "blog-content") {
                var textContent =item.content; // Extract text content only
                var words = textContent.split(/\s+/).slice(0, 25).join(' '); // Get first 25 words
                table.row.add([
                    item.title,
                    words,
                    item.slug,
                    getActionbuttons(item.id)
                ]).draw(false);
            } else if (content === "quiz-content") {
                table.row.add([
                    item.questions[0].question,
                    item.questions[0].options[0].option + ' | ' + item.questions[0].options[1].option + ' | ' + item.questions[0].options[2].option + ' | ' + item.questions[0].options[3].option,
                    'falhal none set it later',
                    getActionbuttons(item.id)
                ]).draw(false);
            } else if (content === "learning-category") {
                table.row.add([
                    item.id,
                    item.name,
                    getActionbuttons(item.id)
                ]).draw(false);
            } else if (content === "topic-list") {
                table.row.add([
                    item.id,
                    item.name,
                    item.learning_category_id,
                    getActionbuttons(item.id)
                ]).draw(false);
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
        getData(url, content, dataTable); // we will edit this for the Quiz
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