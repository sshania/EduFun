
<nav class="navbar navbar-expand-lg bg-white shadow-sm  text-black">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <img src="{{ asset('img/abi.png') }}" style="width: 50px; height: 50px;" alt="EduFunLogo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end me-2" id="navbarNavDropdown">
        <ul class="navbar-nav">
            
            <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'text-primary fw-bold' : 'text-dark' }}" 
            aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ Request::is('category*') ? 'text-primary fw-bold' : 'text-dark' }}" 
            href="{{route('category')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('articleByCategory', 1) }}">Interactive Multimedia</a></li>
                <li><a class="dropdown-item" href="{{ route('articleByCategory', 2) }}">Sofware Engineering</a></li>
            </ul>
            </li>
            
            <li class="nav-item">
            <a class="nav-link {{ Request::is('writers') ? 'text-primary fw-bold' : 'text-dark' }}" 
            href="{{route('writers')}}">Writers</a>
            </li>
            
            <li class="nav-item">
            <a class="nav-link {{ Request::is('aboutus') ? 'text-primary fw-bold' : 'text-dark' }}" 
            href="{{route('aboutus')}}">About Us</a>
            </li>

            <li class="nav-item">
            <a class="nav-link {{ Request::is('popular') ? 'text-primary fw-bold' : 'text-dark'}}" 
            href="{{route('popular')}}">Popular</a>
            </li>
            
        </ul>
        </div>

    </div>
</nav>