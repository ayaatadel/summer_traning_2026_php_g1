<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
       <x-bootstrap-css />

</head>

<body>
    <!-- /resources/views/post/create.blade.php -->

    <h1>Create Post</h1>

    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    <!-- Create Post Form -->

    <form action="{{ route('categories.store') }}" method="POST">
  @error('name')
        <div class="alert alert-danger w-50 m-auto">{{ $message }}</div>
        @enderror
        <label for="name">Category Name:</label>
        <input type="text" name="name" placeholder="Category Name">
   @error('description')
        <div class="alert alert-danger w-50 m-auto">{{ $message }}</div>
        @enderror
        <label for="description">Category Description:</label>

        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Create Category</button>
    </form>
        <x-bootstrap-Js />

</body>

</html>
