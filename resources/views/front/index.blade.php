@extends('front.layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Welcome to My Website</h1>
        
        <!-- Example Content: Uncomment to display -->
        
        <h1 class="mt-4">Latest Blogs</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Blog Title 1</h5>
                        <p class="card-text">This is a short description of blog 1.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Blog Title 2</h5>
                        <p class="card-text">This is a short description of blog 2.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Blog Title 3</h5>
                        <p class="card-text">This is a short description of blog 3.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-5">What Our Clients Say</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="testimonial">
                    <p>"Great service and amazing support!"</p>
                    <footer class="blockquote-footer">John Doe</footer>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial">
                    <p>"I love the quality of the products!"</p>
                    <footer class="blockquote-footer">Jane Smith</footer>
                </div>
            </div>
        </div>

        <h2 class="mt-5">About Us</h2>
        <p>We are a dedicated team committed to providing the best service in our industry. Our mission is to deliver high-quality products and exceptional customer support.</p>

        <h2 class="mt-5">Our Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Service 1</h5>
                        <p class="card-text">Description of service 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Service 2</h5>
                        <p class="card-text">Description of service 2.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Service 3</h5>
                        <p class="card-text">Description of service 3.</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-5">Contact Us</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
        


    </div>
@endsection
