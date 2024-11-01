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
      padding: 10px;
      margin: 10px;
    }
    .table th, .table td {
      border: 1px solid #ddd;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      {{-- <a class="navbar-brand" href="{{ route('view.register') }}">Register Your Account</a> --}}
      <form action="{{ route('Adminlogout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout User</button>
    </form>
    </div>
  </div>
</nav>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Table -->
<div class="container justify-content-center">
  <div class="custom-card p-4 col-md-10 mt-5">
    <div class="table-responsive justify-content-center">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Firstname</th>
            <th>Email</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($admins as $admin)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $admin->name }}</td>
            <td>{{ $admin->email }}</td>
            <td>
              <!-- Add delete button or link here if needed -->
              
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="alert alert-info text-center fw-bold p-3">Total number of users: {{ $admin->count() }}</div>
    </div>
  </div>
</div>

</body>
</html>
