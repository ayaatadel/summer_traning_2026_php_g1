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
    {{-- @dump($category) --}}

    <a href="{{ route('categories.index') }}">
        <x-btn-component class="primary" text="Back" />
    </a>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('put')
        <label for="name">Category Name:</label>
        <input type="text" name="name" placeholder="Category Name" value="{{ $category->name }}">

        <label for="description">Category Description:</label>

        <textarea name="description" placeholder="Description">{{ $category->description }}</textarea>
        <button type="submit">Update Category</button>
    </form>
    <x-bootstrap-Js />

</body>

</html>
