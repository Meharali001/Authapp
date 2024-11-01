<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">My Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('main') }}">Blogs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('testimonials') }}">Testimonials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('services') }}">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ContectUs') }}">Contact</a>
            </li>
        </ul>
        <form action="{{ route('Userlogout') }}" method="POST" class="form-inline my-2 my-lg-0">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
    
</nav>