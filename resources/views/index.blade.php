<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Produits</title>
</head>

<body>
    <nav class="navbar bg-dark text-light px-5 py-3  mb-5">
        <a class="navbar-brand text-white" href="/produits">Gestion de Produits</a>
        <a class="nav-link text-white btn btn-success" href="{{ route('produits.create') }}">Create</a>
    </nav>
 
    @yield('content')
    <div class="bg-dark w-100 text-light text-center py-4">
        <h5>@ 2024</h5>
    </div>
</body>

</html>
