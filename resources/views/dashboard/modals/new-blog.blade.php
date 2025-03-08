
<!-- Modal -->
<div class="modal fade" id="new-topic-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Blog</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
        <div class="modal-body">
            <form id="new-topic-form" method="POST" enctype="multipart/form-data">
                @csrf
                @php $categories = \App\Models\LearningCategory::all(); @endphp
                <div class="mb-3">
                    <label for="category" class="form-label">Learning Category</label>
                    <select class="form-select" id="category-id" name="category" required>
                        <option value="">Select Topic</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->name}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                {{-- we will add a select picker here and add topic names recently we have add ids to it  --}}
                @php $topics = \App\Models\TopicName::all(); @endphp
                <div class="mb-3">
                    <label for="topic" class="form-label">Topic</label>
                    <select class="form-select" id="topic-id" name="topic" required>
                        <option value="">Select Topic</option>
                        @foreach ($topics as $topic)
                            <option value="{{$topic->topic_id}}">{{$topic->name}}</option>
                        @endforeach
                    </select>
                </div>
               
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="editor" class="form-label">Content</label>
                    <div id="topic-html"></div>
                </div>
              
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="save-btn">Save</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>