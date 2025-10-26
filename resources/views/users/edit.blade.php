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
