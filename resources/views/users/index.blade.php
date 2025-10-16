<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Usuários Cadastrados</title>
</head>
<body>

      <header class  = 'bg-dark text-white text-center p-3 mb-4'>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
             <a class="navbar-brand fw-bold" href="{{ url('/') }}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                 <span class="navbar-toggler-icon"></span>
            </button>

      <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                     <a class="nav-link active" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                      <a class="nav-link" href="{{ route('users.create') }}">Create User</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="{{ route('users.index') }}">List Users</a>
                 </li>
             </ul>
        </div>
    </div>
</nav>


  <div class="container mt-4">
    @yield('content')
  </div>

    
        </header>
      @extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center">List of Users</h2>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-striped table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        <th scope = "col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td> 
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <button type = "submit" class = "btn btn-primary btn-sm me-2 d-inline">Editar</button>
                                <hr>
                    
                                <form action = "{{route('users.destroy', $user->id)}}" method = "POST">
                                    @csrf <!--Cross-Site Request Forgery protection.-->
                                    @method ('DELETE')
                                    <button type = "submit" class = "btn btn-danger btn-sm" onclick = "return confirm('Are you sure you want to delete this user?')">Delete</button>
                    
                                </form>

                                
                        </td>
                        </tr>
                  
                    @endforeach
                </tbody>
            </table>


            @if ($users->isEmpty())
                <div class="alert alert-warning text-center mt-3">
                    No users found.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection


      

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>