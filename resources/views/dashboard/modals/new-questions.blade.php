<style>
 .m-w-5rem{
    min-width: 5rem;
  }
  div:has(.m-w-5rem) {
    margin-bottom : 8px;
  }
</style>
<!-- Modal -->
<div class="modal fade" id="new-question-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Question</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
        <div class="modal-body">
            <form id="new-question-form" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="quiz" class="form-label">Selecct Quiz</label>
                    <select class="form-select" id="quiz" name="quiz" required>
                        <option value="1">Quiz 1</option>
                        <option value="2">Quiz 2</option>
                        <option value="3">Quiz 3</option>
                        <option value="4">Quiz 4</option>
                    </select>
                </div>
                <div class="mb-3">
                  <label for="question" class="form-label">Question</label>
                  <div class="topic-html"></div>
                </div>
                <div class="mb-3">
                  <label for="mcqs" class="form-label">Option for above question</label>
              
                  <div class="d-flex align-items-center mt-1">
                      <label class="me-2 m-w-5rem">Option 1:</label>
                      <input type="text" class="form-control me-2" name="options[1][text]">
                      <input type="checkbox" name="options[1][is_correct]" value="1" class="form-check-input">
                  </div>
              
                  <div class="d-flex align-items-center mt-1">
                      <label class="me-2 m-w-5rem">Option 2:</label>
                      <input type="text" class="form-control me-2" name="options[2][text]">
                      <input type="checkbox" name="options[2][is_correct]" value="1" class="form-check-input">
                  </div>
              
                  <div class="d-flex align-items-center mt-1">
                      <label class="me-2 m-w-5rem">Option 3:</label>
                      <input type="text" class="form-control me-2" name="options[3][text]">
                      <input type="checkbox" name="options[3][is_correct]" value="1" class="form-check-input">
                  </div>
              
                  <div class="d-flex align-items-center mt-1">
                      <label class="me-2 m-w-5rem">Option 4:</label>
                      <input type="text" class="form-control me-2" name="options[4][text]">
                      <input type="checkbox" name="options[4][is_correct]" value="1" class="form-check-input">
                  </div>
              </div>
              
                <div class="mb-3">
                    <label for="explanation" class="form-label">Explanation</label>
                    <input type="textarea" class="form-control" id="explanation" name="explanation">
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