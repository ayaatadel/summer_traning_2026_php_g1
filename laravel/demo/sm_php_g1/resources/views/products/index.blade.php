<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-bootstrap-css />
    <title>Document</title>
</head>

{{-- component --}}
<a href="{{ route('categories.create') }}">
    <x-btn-component class="primary" text="Create New product" />
</a>

<body>
    {{-- @dd($categories) --}}`
    {{-- @dump($categories) --}}
    <h1> All Categories</h1>
    @foreach($products as $key => $product)
    {{-- <div class="">
        <p>{{ $product['name'] }}</p>
        <p>{{ $product['description'] }}</p>
        <p></p>
    </div> --}}

    <div class="card" style="width: 18rem; d-flex justify-content-between; align-items:center;">
        <div class="card-body">
            <h5 class="card-title">{{ $product['name'] }}</h5>
            <p class="card-text">{{ $product['description'] }}.</p>
            <a href="{{ route('products.show', $product['id']) }}">
                <x-btn-component class="info" text="View product" />
            </a>
                    <form action="{{ route('products.destroy',$product) }}"
                          method="POST"
                          class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">
                            Delete
                        </button>

                    </form>
            <form action="{{ route('products.edit', $product['id']) }}" method="post">

                <button type="submit" class="btn btn-primary">Edit</button>

            </form>

        </div>
    </div>
    @endforeach
    <x-bootstrap-js />
</body>

</html>
