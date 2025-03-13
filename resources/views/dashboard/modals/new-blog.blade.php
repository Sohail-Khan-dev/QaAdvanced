<div class="modal fade" id="new-blog-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Blog</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
        <div class="modal-body">
            <form id="new-blog-form" method="POST" enctype="multipart/form-data">
                @csrf
               
                <div class="mb-3">
                    <label for="category" class="form-label">Learning Category</label>
                    <select class="form-select category-id" id="category-id" name="category_id" required>
                        <option value="">Select Topic</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                {{-- we will add a select picker here and add topic names recently we have add ids to it  --}}
                <div class="mb-3">
                    <label for="topic" class="form-label">Topic</label>
                    <select class="form-select" id="topic-id" name="topic_id" required>
                        <option value="">Select Topic</option>
                        {{-- These options are created on run time by JQuery  --}}
                    </select>
                </div>
               
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control name" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="editor" class="form-label">Content</label>
                    <div class="topic-html"></div>
                </div>
              
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary save-btn" id="save-btn">Save</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    // Function to populate select options
    function populateTopics(topics) {  // Here we will pass the array of required Category from dahboard.js file
        let $select = $('#topic-id');
        $select.find('option:not(:first)').remove(); // Clear previous options except the first one
        $.each(topics, function(index, topic) {
            let option = `<option value="${topic.topic_id}">${topic.name}</option>`;
            $select.append(option);
        });
    }
   
  </script>