
$(document).ready(function() {
    loadSummernote();
    loadTopic('/get-topics');
 
    $(document).on("submit","#new-topic-form", function(e){
        e.preventDefault();
        let title = $("#title").val();
        let markupStr = $('#topic-html').summernote('code');
        let image = $("#image").val();
        $("#save-btn").prop('disabled', true);
        let formData = new FormData();
        formData.append('title', title);
        formData.append('content', markupStr);
        $.ajax({
            url : "/store-topic",
            method: 'POST',
            data: {
                title: title,
                content: markupStr
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response){
                console.log(response);
                $('#new-topic-modal').modal('hide');
                resetTheModal();
                loadTopic('/get-topics');
            },
            error: function(xhr, status, error) {
                console.error("Error:", xhr.responseText , status , error);
            }
        });

    });
    $(document).on("click", "#new-topic-btn", function(){
        $("#save-btn").prop('disabled', false);
    })
    function loadTopic(url) {
        $.ajax({
            url: url,
            method: 'GET',
            dataType: 'json',
            headers: {
                'Accept': 'application/json' // Tell Laravel to return JSON
            },
            success: function(data) {
                console.log('return data : ' , data);
                var table = $('#dataTable').DataTable();
                table.clear().draw();
                data.forEach(function(item) {
                    var words = item.content.split(/\s+/).slice(0, 30).join(' '); // Get first 50 words
                    table.row.add([
                        item.title,
                        words,
                    ]).draw(false);
                });
            }
        });
    }

    // Initialize DataTable
    $('#dataTable').DataTable();

    // Handle nav link clicks
    $('.nav-link').on('click', function(e) {
        e.preventDefault();
        var url = $(this).data('url');
        
        loadTopic(url);
    });
    function resetTheModal(){
        // Clear all input fields
        $('#new-topic-form')[0].reset();

        // Clear Summernote content
        $('#topic-html').summernote('code', ''); 
        $('.note-placeholder').show();

    }
    function loadSummernote(){
        $('#topic-html').summernote({
            height: 300,
            minHeight: 200,
            placeholder: 'Write your topic here...',
        });
    }

    function destroyTopicHTML(){
        $('#topic-html').summernote('destroy');
    }
});