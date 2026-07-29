<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>All Users</title>
</head>

<body>

    <h1>
        All Users
    </h1>
    {{-- diretive --}}
    {{-- Key --}}
    {{-- @dump($users) --}}

    <table class='table table-striped w-75 my-3 m-auto '>
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Address</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $user)
            {{-- @dump($user) --}}
            {{-- <br> --}}

            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['address']}}</td>
                <td>
                    <button class="btn btn-warning">Show</button>
                    <button class="btn btn-info">update</button>
                    <button class="btn btn-danger">delete</button>
                </td>
            </tr>


            @endforeach
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
