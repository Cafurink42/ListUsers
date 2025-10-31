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
      @extends('layouts.app')

@section('content')
<div class = "mb-3">
    <form action ="{{route('users.file')}}" method ="POST"> <!--enctype="multipart/form-data"-->
        <label for ="formFile" class = "form-label">Escolha um arquivo para enviar</label>
        <input class  = "form-control" type="file" id = "fileUpload" name = "fileUpload">
        <br>
        <span class = "text-muted">Apenas arquivos .pdf serão aceitos</span>
        <button type="submit" class = "btn btn-primary">Enviar</button> 
    </form>
</div>

</body>
</html>