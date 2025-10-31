@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
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
                 <li class = "nav-item">
                    <a class = "nav-link" href = "{{route('users.file')}}">Upload File</a>
                 </li>
             </ul>
        </div>
    </div>
</nav>


  <div class="container mt-4">
    @yield('content')
  </div>

    
    </header>


    <div class="container">
        <h1>Edit User</h1>

        <form method="POST" action="{{route('users.update', $user->id)}}">
            @csrf
            @method('PUT')
            <div class ="form-group">
                <label for = "name">Name:</label>
                <input type = "text" class = "form-control" name = "name" value = "{{$user->name}}">
            </div>
            <div class = "form-group">
                <label for = "email">Email:</label>
                <input type = "email" class = "form-control" name = "email" value = "{{$user->email}}">
            </div>
            <br>
            <button type = "submit" class = "btn btn-primary">Update User</button>
           
        </form>
    </div>
    
</body>
</html>


@endsection
