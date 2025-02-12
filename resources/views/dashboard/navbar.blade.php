<nav class="navbar navbar-expand-lg navbar-light bg-white border-end vh-100 d-flex flex-column align-items-start h-100" 
     style="position: fixed; left: 0; top: 0; width: 10rem; padding: 1rem;">
    <div class="mt-5" id="navbarCollapse">
        <div class="navbar-nav w-100 flex-column">
            <a href= {{ url("dashboard/index") }} class="nav-item nav-link" data-url='getTopic'>Add Topic</a>
            <a href= {{ url("dashboard/quiz") }} class="nav-item nav-link">Add Quiz</a>
            <a href="{{ url('dashboard/contact') }}" class="nav-item nav-link">coming Soon</a>
        </div>
    </div>
</nav>
