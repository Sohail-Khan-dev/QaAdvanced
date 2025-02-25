
$(document).ready(function() {
    loadSummernote();
    loadTopic('/get-topics');
 
    $(document).on("submit","#new-topic-form", function(e){
        e.preventDefault();
        let title = $("#title").val();
        let markupStr = $('#topic-html').summernote('code');
        let image = $("#image").val();
        
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
                    // var lines = item.content.split('\n').filter(line => line.trim() !== ""); // Remove empty lines
                    // var trimmedContent = lines.length > 0 ? lines[0] : ''; // Get first non-empty line
                    var words = item.content.split(/\s+/).slice(0, 30).join(' '); // Get first 50 words
                    // var lines = item.content.split('\n').slice(0, 2).join('<br>'); // Get first two lines
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