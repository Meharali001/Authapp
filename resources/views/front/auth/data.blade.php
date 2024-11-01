<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .custom-card {
      border: 2px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin: 20px 0;
    }
    .table th, .table td {
      border: 1px solid #ddd;
      text-align: center;
    }
    .table thead th {
      background-color: #f8f9fa;
    }
    .card-header {
      background-color: #007bff;
      color: #fff;
      border-bottom: 1px solid #0069d9;
    }
    .dashboard-title {
      font-size: 2rem;
      font-weight: bold;
    }
    .card-content {
      padding: 20px;
    }
    .btn-custom {
      margin: 0.5rem;
    }
    .section-title {
      font-size: 1.5rem;
      margin-bottom: 1rem;
      background-color: #007bff;
      color: #fff;
      padding: 10px;
      border-radius: 5px;
    }
    .navbar-brand {
      font-size: 1.5rem;
    }
    .alert {
      margin: 10px 0;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Student Dashboard</a>
      <form action="{{ route('Userlogout') }}" method="POST" class="navbar-form navbar-right">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
      </form>
    </div>
  </div>
</nav>

@if (session('success'))
<div class="container">
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
</div>
@endif

<!-- Table -->
<div class="container">
  <div class="custom-card">
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Firstname</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            {{-- <td>
              <!-- Example delete button -->
              <form action="{{ route('deleteUser', $user->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-xs">Delete</button>
              </form>
            </td> --}}
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="alert alert-info text-center fw-bold p-3">Total number of users: {{ $users->count() }}</div>
    </div>
  </div>
</div>

<!-- Cards -->
{{-- <div class="container">
  <div class="custom-card">
    <div class="card-header">
      <h1 class="dashboard-title text-center">Dashboard</h1>
    </div>
    <div class="card-content">
      <h2 class="section-title text-center">Public</h2>
      <div class="d-flex justify-content-around">
        <a href="{{ route('ViewCard') }}" class="btn btn-primary btn-custom">View Card </a>
        <a href="{{ route('ShowCard') }}" class="btn btn-success btn-custom">Create Card</a>

      </div>
    </div>
  </div>
</div> --}}

</body>
</html>
