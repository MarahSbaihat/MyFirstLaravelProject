<nav class="fixed-top navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="img w-25 h-25" src="assets/image/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">ِAbout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('project')}}">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('album')}}">Album</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('services')}}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('faqs')}}">FAQs</a>
                </li>
            </ul>
            <ul class="d-flex">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="btn">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('login')}}" class="btn">Sign in</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn">Sign up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
