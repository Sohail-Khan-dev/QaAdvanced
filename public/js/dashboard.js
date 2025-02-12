var quill = new Quill('#editor', {
    theme: 'snow',
    placeholder: 'Write something...',
    modules: {
        toolbar: [
            ['bold', 'italic', 'underline'],
            [{ list: 'ordered' }, { list: 'bullet' }],
            [{ align: [] }]
        ]
    }
});

quill.on('text-change', function () {
    document.querySelector("#content").value = quill.root.innerHTML;
});
$(document).ready(function() {
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
});