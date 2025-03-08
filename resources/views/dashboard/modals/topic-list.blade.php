
<!-- Modal -->
<div class="modal fade" id="topic-list-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Topic</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
        <div class="modal-body">
            <form id="topic-list-form" method="POST" enctype="multipart/form-data">
                @csrf
                @php $categories = \App\Models\LearningCategory::all(); @endphp
                <div class="mb-3">
                    <label for="category" class="form-label">Learning Category</label>
                    <select class="form-select" id="category-id" name="category_id" required>
                        <option value="">Select Topic</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="topic_id" class="form-label">Topic ID</label>
                    <input type="text" class="form-control" id="topic_id" name="topic_id" required>
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">Details</label>
                    <div class="topic-html"></div>
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