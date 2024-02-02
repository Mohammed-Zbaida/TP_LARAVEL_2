@extends("index");

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Detaille</title>
</head>
<body>
  @section("content")
  @if(session('message_updated'))
  <div class="alert alert-info w-50 mx-auto" role="alert">
      
      {{ session('message_updated') }}
    </div>
@endif
@if(session('message_created'))
<div class="alert alert-success w-50 mx-auto" role="alert">
    
    {{ session('message_created') }}
  </div>
@endif
 
    
  
  <div class="w-50 my-5 p-5 bg-light mx-auto " style="border-radius: 20px">
    <h5 class="text-secondary">Libelle : <span class="text-dark">{{$produit['Libelle']}}</span></h5>
    <h5 class="text-secondary">Marque : <span class="text-dark">{{$produit['Marque']}}</span></h5>
    <h5 class="text-secondary">Prix : <span class="text-dark">{{$produit['Prix']}}</span></h5>
    <h5 class="text-secondary">Stock : <span class="text-dark">{{$produit['Stock']}}</span></h5>
    <div class="text-center"><img src="{{asset('storage/'.$produit['Image'])}}" alt="{{'storage/'.$produit['Image']}}" style="max-height: 200px;max-width: 200px"> </div>
      <div class="d-flex justify-content-center my-3">
    <a class="  nav-link btn btn-info text-white me-2" href="/produits/{{$produit['id']}}/edit">Modifier</a>
      <form action="{{ route('produits.destroy', ['produit' => $produit->id]) }}" method="post" class="my-0">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger py-2 " type="submit">Delete</button>
      </form>
      </div>
  </div>
  
  
  @endsection
</body>
</html>