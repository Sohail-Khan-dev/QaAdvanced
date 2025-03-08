<style>
    #blog-detail-collapse>ul>li>a{
        padding: .2rem .5rem;
        color: var(--bs-primary);;
        border: none;
        border-radius: 0;
    }
    .blog-detail-btn.btn:focus {
        box-shadow: none;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-end vh-100 d-flex flex-column align-items-start h-100" 
     style="position: fixed; left: 0; top: 0; width: 10rem; padding: 1rem;">
    <div class="mt-5" id="navbarCollapse">
            <button class="btn blog-detail-btn" data-bs-toggle="collapse" data-bs-target="#blog-detail-collapse" aria-expanded="true">
              Blog Details
            </button>
            <div class="collapse show" id="blog-detail-collapse" style="margin-left: 1rem;">
              <ul class="list-unstyled fw-normal pb-1 small">
                  <li><a href="#" class="list-group-item blog-link " data-content="learning-category" data-url="/get-category">Add Category</a></li>
                  <li><a href="#" class="list-group-item blog-link " data-content="topic-list" data-url="/get-topic">Add Topic</a></li>
                  <li><a href="#" data-content='topic-content' data-url="/get-blog" class="list-group-item blog-link">Add Details</a></li>
              </ul>
            </div>
            <a  class="nav-item blog-link d-block" data-content='quiz-content' data-url="/get-quizzes">Add Quiz</a>
            <a  class="nav-item blog-link d-block">coming Soon</a>
        </div>
    </div>
</nav>