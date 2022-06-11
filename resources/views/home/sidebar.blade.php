<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary">WooDY</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="about.html" class="nav-item nav-link">About</a>
            <a href="project.html" class="nav-item nav-link">Project</a>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
            <div class="nav-item dropdown">
                @php
                    $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
                @endphp
                <a href="#" class="nav-item dropdown" data-bs-toggle="dropdown">SERVİSLER</a>
                <div class="dropdown-menu fade-up m-0">
                    @foreach($mainCategories as $rs)


                        <a href="feature.html" class="dropdown-item">{{$rs->title}}</a>
                        <div class="custom-menu">
                            <div class="row">

                            @if(count($rs->children))
                                @include('home.categorytree',['children' => $rs->children])
                            @endif

                        </div>
                </div>

                @endforeach

            </div>

        </div>
        <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->
