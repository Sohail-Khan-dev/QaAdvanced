
$(document).ready(function() {
    $('#topic-html').summernote({
        height: 300,
        minHeight: 200,
        placeholder: 'Write your topic here...',
    });

    $(document).on("submit","#new-topic-form", function(e){
        e.preventDefault();
        let title = $("#title").val();
        let markupStr = $('#topic-html').summernote('code');
        let image = $("#image").val();
        
        let formData = new FormData();
        formData.append('_token', $('meta[name="csrf-token"]').attr('content')); // Get CSRF token
        formData.append('title', title);
        formData.append('content', markupStr);
        
        // Correct way to log
        for (let pair of formData.entries()) {
            console.log(pair[0] + ": " + pair[1]);
        }
        $.ajax({
            url : "/storeTopic",
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                title: title,
                content: markupStr
            },
           
            success: function(response){
                console.log(response);
                alert('Topic created successfully');
                $('#new-topic-modal').modal('hide');
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
                return;
                var table = $('#dataTable').DataTable();
                table.clear().draw();
                data.forEach(function(item) {
                    table.row.add([
                        item.id,
                        item.name,
                        item.value
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

    function destroyTopicHTML(){
        $('#topic-html').summernote('destroy');
    }
});