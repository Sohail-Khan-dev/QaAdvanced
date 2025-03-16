$(document).ready(function () {
    loadSummernote();
    // These topics, Categories and Blogs are used to store the data from the server and then use for dropdown and edit and delete.
    let topics = window.topics; 
    let categories = null;
    let blogs = null;
    $(document).on("submit", "#new-blog-form", function (e) {
        e.preventDefault();
        $(this).find("#save-btn").prop('disabled',true)
        let markupStr = $(this).find('.topic-html').summernote('code');
        const recordId = $(this).find('.form-id').val();
        const url = recordId ? `/update-blog` : '/store-blog';
        let formData = new FormData(this);
        formData.append('content', markupStr);
        $.ajax({
            url: url,
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
                refreshDataTable('blog-dataTable', response.blogs, 'blog-content');
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText, status, error);
            }
        });

    });
    $(document).on("submit", "#new-question-form", function (e) {
        e.preventDefault();
        $(this).find("#save-btn").prop('disabled', true);
        let question = $(this).find('.topic-html').summernote('code');
        let formData = new FormData(this);
        formData.append('question', question);
        $.ajax({
            url: "/store-question",
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('#new-question-modal').modal('hide');
                resetHtmlContent();
                getData('/get-questions', 'question-content', 'question-dataTable');
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText, status, error);
            }
        });

    });
    $(document).on("submit", "#learning-category-form", function (e) {
        e.preventDefault();
        $(this).find("#save-btn").prop('disabled', true);
        const recordId = $(this).find('.form-id').val();
        const url = recordId ? `/update-category` : '/store-category';
        let slug = $(this).find('.topic-html').summernote('code');
        let formData = new FormData(this);
        formData.append('slug', slug);
        
        $.ajax({
            url: url,
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
                refreshDataTable('learning-category-dataTable', response.categories, 'learning-category');
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText, status, error);
            }
        });

    });
    $(document).on("submit", "#topic-list-form", function (e) {
        e.preventDefault();
        $(this).find("#save-btn").prop('disabled', true);
        const recordId = $(this).find('.form-id').val();        
        const url = recordId ? `/update-topic` : '/store-topic';
        let slug = $(this).find('.topic-html').summernote('code');
        let formData = new FormData(this);
        formData.append('slug', slug);
        $.ajax({
            url: url,
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
                refreshDataTable('topic-list-dataTable', response.topics, 'topic-list');
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText, status, error);
            }
        });
    });

    $(document).on("submit","#quiz-category-form",function(e){
        e.preventDefault();
        $(this).find("#save-btn").prop('disabled',true);
        let formData = new FormData(this);
        $.ajax({
            url:'store-quiz-category',
            method : "post",
            data : formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success : function(params) {
               $("#quiz-category-modal").modal('hide');
               resetHtmlContent();               
               refreshDataTable('quiz-category-dataTable',params.quizCategories,'quiz-category');    
            },

        });
    });
    $(document).on("submit","#new-quiz-form", function(e){
        e.preventDefault();
        $(this).find("#save-btn").prop("disabled",true);
        let formData = new FormData(this);
        $.ajax({
            url : "/store-quiz",
            method : "post",
            data : formData,
            contentType : false,
            processData : false,
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response){
                $("#new-quiz-modal").modal('hide');
                resetHtmlContent();
                refreshDataTable('quiz-dataTable', response.quizzes, 'quiz-content');
            }
        });
    });
    $(document).on("click", "#new-blog-btn, #new-question-btn, #topic-list-btn, #learning-category-btn, #new-quiz-btn, #new-quiz-category-btn", function () {
        // Enable Save button click 
        resetHtmlContent();
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
        $(".save-btn").prop('disabled', false);
        let id = $(this).data('id');
        $(".form-id").val(id);
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
            console.log(blog);
            
            $("#blog-id").val(blog.id);
            $("#category-id").val(blog.learning_category_id).change();
            $("#title").val(blog.title);
            $("#topic-id").val(blog.slug);
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
                    blogs = response.blogs;
                    refreshDataTable('blog-dataTable', response.blogs, 'blog-content');
                },
                error: function (xhr) {
                    console.error("Error deleting blog:", xhr.responseText);
                    alert("Error deleting blog: " + xhr.responseText); // Alert error message
                }
            });
        }
        else if ($(this).closest("#quiz-content").length) {
            let url = "/delete-quiz/" + id;
            $.ajax({
                url: url,
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    refreshDataTable('quiz-dataTable', response, 'quiz-content');
                },
                error: function (xhr) {
                    console.error("Error deleting quiz:", xhr.responseText);
                    alert("Error deleting quiz: " + xhr.responseText); // Alert error message
                }
            });
        }
        else if($(this).closest("#quiz-category").length){
            let url = "/delete-quiz-category/" + id;
            $.ajax({
                url:url,
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response){
                    refreshDataTable('quiz-category-dataTable', response, 'quiz-category');
                },
                error: function(xhr) {
                    console.error("Error deleting quiz category:", xhr.responseText);
                    alert("Error deleting quiz category: " + xhr.responseText); // Alert error message
                }
            });
        }
        else if($(this).closest("#question-content").length){
            let url = "/delete-question/" + id;
            $.ajax({
                url:url,
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response){
                    refreshDataTable('question-dataTable', response, 'question-content');
                },
                error: function(xhr) {
                    console.error("Error deleting question:", xhr.responseText);
                    alert("Error deleting question: " + xhr.responseText); // Alert error message
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
            } else if (content === "question-content") {
                var optionsText = item.options.map(option => option.option ? option.option : "N/A").join(" | ");
                 // Extract correct answer text(s)
                var correctAnswers = item.options.filter(option => option.is_correct == 1) // Filter correct answers
                .map(option => option.option) // Get only the text
                .join(", "); // Join if multiple correct answers
                table.row.add([
                    item.id,
                    item.question,
                    optionsText,
                    correctAnswers,
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
            } else if (content === 'quiz-content'){
                table.row.add([
                    item.id,
                    item.title,
                    item.questions == undefined ? "No Question" : item.questions.length,
                    getActionbuttons(item.id)
                ]).draw(false);
            } else if (content == 'quiz-category'){
                table.row.add([
                    item.id,
                    item.name,
                    getActionbuttons(item.id),
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
        $("#question-content").addClass('d-none');
        $("#learning-category").addClass('d-none');
        $("#topic-list").addClass('d-none');
        $("#quiz-content").addClass('d-none');
        $("#quiz-category").addClass("d-none");
    }
    function resetHtmlContent() {
        $("#topic-id").val("");
        $(".name").val("");
        $(".category-id").val("");
        $('.topic-html').summernote('code', '');
        $('.topic-html').trigger('summernote.change'); // Force event trigger
        $(".form-id").val("");
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