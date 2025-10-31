<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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


<div class="container mt-5">
    <h1>Cadastro de Usuário</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <form action="{{ route('users.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Senha:</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Confirmar Senha:</label>
        <input type="password" name="password_confirmation" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
