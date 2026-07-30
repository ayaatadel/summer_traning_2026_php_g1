<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    {{-- @dd($categories) --}}
    {{-- @dump($categories) --}}
    <h1> All Categories</h1>
    @foreach($categories as $key => $category)
    {{-- <div class="">
       <p>{{ $category['name'] }}</p>
       <p>{{ $category['description'] }}</p>
       <p></p>
    </div> --}}

    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $category['name'] }}</h5>
    <p class="card-text">{{ $category['description'] }}.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
       @endforeach
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
