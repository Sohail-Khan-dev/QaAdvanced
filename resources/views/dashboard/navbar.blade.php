<style>
    #blog-detail-collapse>ul>li>a, #quiz-detail-collapse>ul>li>a {
        padding: .2rem .5rem;
        color: var(--bs-primary);;
        border: none;
        border-radius: 0;
    }
    .dashboard-nav-btn.btn:focus {
        box-shadow: none;
    }
    .dashboard-nav {
        position: fixed;
        left: 0;
        top: 0;
        width: 8rem;
        z-index: 1021;
    }
    @media (min-width: 768px) {
        .dashboard-nav {
            width: 10rem;            
        }
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-end vh-100 d-flex flex-column align-items-start h-100 dashboard-nav">
    <div class="mt-5" id="navbarCollapse">
            <button class="btn dashboard-nav-btn" data-bs-toggle="collapse" data-bs-target="#blog-detail-collapse" aria-expanded="true">
              Blog Details
            </button>
            <div class="collapse show" id="blog-detail-collapse" style="margin-left: 1rem;">
              <ul class="list-unstyled fw-normal pb-1 small">
                  <li><a href="#" class="list-group-item blog-link " data-content="learning-category" data-url="/get-category" data-table="learning-category-dataTable">Add Category</a></li>
                  <li><a href="#" class="list-group-item blog-link " data-content="topic-list" data-url="/get-topic" data-table="topic-list-dataTable">Add Topic</a></li>
                  <li><a href="#" data-content='blog-content' data-url="/get-blog" class="list-group-item blog-link" data-table="blog-dataTable">Add Details</a></li>
              </ul>
            </div>
            <button class="btn dashboard-nav-btn" data-bs-toggle="collapse" data-bs-target="#quiz-detail-collapse" aria-expanded="true">
              Quiz Details
            </button>
            <div class="collapse show" id="quiz-detail-collapse" style="margin-left: 1rem;">
              <ul class="list-unstyled fw-normal pb-1 small">
                  <li><a href="#" class="list-group-item blog-link " data-content='quiz-content' data-url="/get-quizzes" data-table="quiz-dataTable">Add Quiz</a></li>
                  <li><a href="#" class="list-group-item blog-link " data-content='question-content' data-url="/get-questions" data-table="question-dataTable">Add Question</a></li>
              </ul>
            </div>
            <button  class="btn blog-link dashboard-nav-btn">coming Soon</button>
        </div>
    </div>
</nav>