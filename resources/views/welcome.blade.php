<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Welcome!</title>
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

    <h1 class  = 'text-center'> This is the Welcome Page!</h1>

    <div class  = 'd-flex flex-column justify-content-center align-items-center min-vh-100'>
        <img src = "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F4kwallpapers.com%2Fimages%2Fwallpapers%2Fgradient-background-2560x1440-10974.jpg&f=1&nofb=1&ipt=54b6d67c631b867c6496b257689ac36c38fe5f09ab518dcba373de3e76f13348" class = 'img-fluid img-thumbnail'>
            <h2 class = 'text-center'> Here you can create a new user </h2>
            <a href="{{route('users.create')}}" class = 'btn btn-primary'> Create New User </a>
    </div>
 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>