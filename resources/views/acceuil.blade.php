<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar bg-dark text-light px-5 py-3  mb-5">
        <a class="navbar-brand text-white" href="/produits">Gestion de Produits</a>
        <a class="nav-link text-white btn btn-info" href="{{ route('produits.cart') }}">Cart</a>
    </nav>
    @if (!$produits)
        <div class="w-100 my-5">
            <h1 class="text-secondary mx-auto col-4">Theire is no Items yet</h1>
        </div>
    @else
        <div class="row jusitfy-content-between flex-wrap  countainer w-75 mx-auto p-0">
            @foreach ($produits as $produit)
                <div class="col-4 py-3 mb-5">
                    <div
                        style="height:300px;width:100%;background-repeat:no-repeat;background-size:cover;background-image: url({{ asset('storage/' . $produit['Image']) }})">
                    </div>
                    <h3 class="text-dark mx-4">{{ $produit['Libelle'] }}</h3>
                    <p class="text-secondary mx-4">{{ $produit['Marque'] }}</p>
                    <p class="text-secondary mx-4">{{ $produit['Prix'] }} DH</p>
                    <form action="{{route('produits.addtocart',['produit' => $produit->id])}}" method="POST">
                      @csrf
                      <button type="submit" class=" m nav-link btn btn-info text-white me-2">Add to cart</button>
                    </form>
                </div>
            @endforeach
        </div>
    @endif
</body>

</html>
