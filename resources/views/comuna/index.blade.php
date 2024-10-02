<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Communas</title>
    
  </head>
  <body>
  <h1>Comunas</h1>
    <a href="{{route('comunas.create')}}" class="btn btn-success">Add</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Comune</th>
      <th scope="col">Municipality</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
       @foreach ($comunas as $comuna)
    <tr>
      <th scope="row">{{ $comuna->comu_codi }}</th>
      <td>Mar{{ $comuna->comu_nomb }}k</td>
      <td>{{ $comuna->muni_nomb}}</td>
      <td>Actions</td>
    </tr>
       @endforeach
  </tbody>
</table>
  </body>
</html>