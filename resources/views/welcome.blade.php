<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Dashboard</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Styles -->

</head>
<style>
    .card-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
    }
    .dashboard-title {
        font-size: 2rem;
        font-weight: bold;
    }
    .card-content {
        padding: 2rem;
    }
    .btn-custom {
        margin: 0.5rem;
    }
    .section-title {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }
</style>
</head>
<body>
<div class="container my-4">
    <!-- User Dashboard -->
    <div class="card">
        <div class="card-header">
            <h1 class="dashboard-title">User Dashboard</h1>
        </div>
        <div class="card-content">
            <h2 class="section-title bg-danger text-light text-center p-3">User</h2>
            <div class="d-flex justify-content-around mb-3">
                <a href="{{ route('UserViewData') }}" class="btn btn-primary btn-custom">View Data</a>
                <a href="{{ route('UserViewRegister') }}" class="btn btn-secondary btn-custom">View Register</a>
                <a href="{{ route('UserViewLogin') }}" class="btn btn-info btn-custom">View Login</a>
            </div>
        </div>
    </div>

    <!-- Admin Dashboard -->
    <div class="card mt-4">
        <div class="card-header">
            <h1 class="dashboard-title">Admin Dashboard</h1>
        </div>
        <div class="card-content">
            <h2 class="section-title bg-primary text-light text-center p-3">Admin</h2>
            <div class="d-flex justify-content-around mb-3">
                <a href="{{ route('AdminViewData') }}" class="btn btn-primary btn-custom">View Data</a>
                <a href="{{ route('AdminViewRegister') }}" class="btn btn-secondary btn-custom">View Register</a>
                <a href="{{ route('AdminViewLogin') }}" class="btn btn-info btn-custom">View Login</a>
            </div>
        </div>
    </div>

     {{-- <!-- Admin Dashboard -->/ --}}
     {{-- <div class="card mt-4">
        <div class="card-header">
            <h1 class="dashboard-title">client</h1>
        </div>
        <div class="card-content">
            <h2 class="section-title bg-primary text-light text-center p-3">Client</h2>
            <div class="d-flex justify-content-around mb-3">
                <a href="{{ route('ClientViewData') }}" class="btn btn-primary btn-custom">View Data</a>
                <a href="{{ route('ClientViewRegister') }}" class="btn btn-secondary btn-custom">View Register</a>
                <a href="{{ route('ClientViewLogin') }}" class="btn btn-info btn-custom">View Login</a>
            </div>
        </div>
    </div> --}}

         <!-- Admin Dashboard -->
         {{-- <div class="card mt-4">
            <div class="card-header">
                <h1 class="dashboard-title">Attendence</h1>
            </div>
            <div class="card-content">
                <h2 class="section-title bg-primary text-light text-center p-3">Attendence</h2>
                <div class="d-flex justify-content-around mb-3">
                    <a href="{{ route('ShowData') }}" class="btn btn-primary btn-custom">View Data</a>
                    <a href="{{ route('ShowCreate') }}" class="btn btn-secondary btn-custom">add Attendence</a>
                </div>
            </div>
        </div>

</div> --}} 

    <!-- Bootstrap JS (optional but recommended) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha384-Dh1Axz4fiMwWym1RyB0U4D6YqPvj8Iw1szLzphuL3Vw7D/1v5qxJ8I4R7l4cT0j" crossorigin="anonymous"></script>
</body>
</html>
