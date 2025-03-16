<style>
 .m-w-5rem{
    min-width: 5rem;
  }
  div:has(.m-w-5rem) {
    margin-bottom : 8px;
  }
</style>
<!-- Modal -->
<div class="modal fade" id="new-quiz-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Quiz</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
        <div class="modal-body">
            <form id="new-quiz-form" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="category" class="form-label">Quiz Category</label>
                  <select class="form-select category-id" id="category-id" name="category_id" required>
                      <option value="">Select Quiz Category</option>
                      @foreach ($quiz_categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                  </select>
              </div>
                <div class="mb-3">
                  <label for="quiz" class="form-label">Quiz Title</label>
                  <input type="text" class="form-control name" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Explanation</label>
                    <input type="textarea" class="form-control" id="description" name="description">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary save-btn " id="save-btn">Save</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>