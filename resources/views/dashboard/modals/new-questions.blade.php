<style>
    #correct-option-error {
        margin-top: 10px;
        padding: 8px 15px;
        border-radius: 4px;
        animation: fadeIn 0.3s ease-in;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
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
                    <label for="quiz_category" class="form-label">Select Quiz Category</label>
                    <select class="form-select" id="quiz_category" name="quiz_category" required>
                      <option value="">Select Quiz Category</option>
                      @foreach ($quiz_categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="quiz" class="form-label">Select Quiz</label>
                    <select class="form-select" id="quiz" name="quiz_id" required disabled>
                      <option value="">Select a category first</option>
                    </select>
                </div>
                <div class="mb-3">
                  <label for="question" class="form-label">Question</label>
                  <div class="topic-html" id="question-html"></div>
                </div>
                <div class="mb-3">
                  <label for="mcqs" class="form-label">Option for above question</label>

                  <div class="d-flex align-items-center mt-1">
                      <label class="me-2 m-w-5rem">Option 1:</label>
                      <input type="text" class="form-control me-2 option" name="options[1][text]">
                      <input type="radio" name="correct_option" value="1" class="form-check-input">
                  </div>

                  <div class="d-flex align-items-center mt-1">
                      <label class="me-2 m-w-5rem">Option 2:</label>
                      <input type="text" class="form-control me-2 option" name="options[2][text]">
                      <input type="radio" name="correct_option" value="2" class="form-check-input">
                  </div>

                  <div class="d-flex align-items-center mt-1">
                      <label class="me-2 m-w-5rem">Option 3:</label>
                      <input type="text" class="form-control me-2 option" name="options[3][text]">
                      <input type="radio" name="correct_option" value="3" class="form-check-input">
                  </div>

                  <div class="d-flex align-items-center mt-1">
                      <label class="me-2 m-w-5rem">Option 4:</label>
                      <input type="text" class="form-control me-2 option" name="options[4][text]">
                      <input type="radio" name="correct_option" value="4" class="form-check-input">
                  </div>
              </div>

                <div class="mb-3">
                    <label for="explanation" class="form-label">Explanation</label>
                    <div class="topic-html" id="explanation" name="explanation"></div>
                    {{-- <input type="textarea" class="form-control" id="explanation" name="explanation"> --}}
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
  <script>
    // Store quizzes data
    var quizzes = @json($quizzes);

    // Log quizzes data to verify it's loaded correctly
    // console.log("Quizzes data loaded:", quizzes.length, "quizzes available");

    // Use jQuery when document is ready
    $(document).ready(function() {
            // Also reset when the button is clicked
            $('#new-question-btn').on('click', function() {
                // console.log("New question button clicked, will reset form...");
                setTimeout(function() {
                    // $('#new-question-form')[0].reset();
                    resetQuizForm();
                }, 100); // Small delay to ensure modal is open
            });

            // Handle category selection change
            $("#quiz_category").on("change", function(){
                // console.log("Category selection changed");

                // Clear any previous error messages
                $("#correct-option-error").remove();

                // Get the selected category ID
                const categoryId = $(this).val();
                // console.log("Selected category ID:", categoryId);

                // Reset the quiz dropdown completely
                $("#quiz").empty();

                if (categoryId) {
                    // Enable the quiz dropdown
                    $("#quiz").prop("disabled", false);
                    // Add the default option
                    $("#quiz").append('<option value="">Select a quiz</option>');
                    // Get quizzes for the selected category
                    getQuizzes(categoryId);
                } else {
                    // Disable the quiz dropdown if no category is selected
                    $("#quiz").prop("disabled", true);
                    // Add the default option
                    $("#quiz").append('<option value="">Select a category first</option>');
                }
            });

            // Function to get quizzes for a category
            function getQuizzes(category_id){
                // If no category is selected, return
                if (!category_id) {
                    // console.log("No category ID provided");
                    return;
                }

                // console.log("Filtering quizzes for category ID:", category_id);
                // console.log("Total quizzes before filtering:", quizzes.length);

                // Filter quizzes by category ID
                let filteredQuizzes = quizzes.filter(quiz => {
                    // Convert both to strings for comparison to avoid type issues
                    return String(quiz.quiz_category_id) === String(category_id);
                });

                // console.log("Filtered quizzes:", filteredQuizzes.length);

                // Log the first few filtered quizzes for debugging
                // if (filteredQuizzes.length > 0) {
                    // console.log("Sample filtered quizzes:", filteredQuizzes.slice(0, 3));
                // }

                populateQuizDropdown(filteredQuizzes);
            }

            // Function to populate quiz dropdown
            function populateQuizDropdown(filteredQuizzes) {
                // console.log("Populating quiz dropdown with", filteredQuizzes.length, "quizzes");

                let $select = $('#quiz');
                // We don't need to remove options as we've already emptied the dropdown

                // Check if we have any quizzes for this category
                if (filteredQuizzes.length === 0) {
                    // No quizzes found for this category
                    $select.append('<option value="" disabled>No quizzes found for this category</option>');
                    // console.log("No quizzes found for this category");
                } else {
                    // Add each quiz to the dropdown
                    $.each(filteredQuizzes, function(_, quiz) {
                        // console.log("Adding quiz:", quiz.id, quiz.title);
                        let option = `<option value="${quiz.id}">${quiz.title}</option>`;
                        $select.append(option);
                    });
                }
            }

            // Function to reset the quiz form
            function resetQuizForm() {
                
                // Reset question and options using Summernote if available
                if (typeof $('.topic-html').summernote === 'function') {
                    $('.topic-html').each(function() {
                        $(this).summernote('code', '');
                    });
                }

                // // Reset option inputs explicitly
                // $("input.option").val("");

                // // Uncheck all radio buttons
                // $('input[name="correct_option"]').prop('checked', false);

                // // Remove any error messages
                // $("#correct-option-error").remove();

                // console.log("Form reset complete");
            }
    });
  </script>