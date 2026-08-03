<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
  <x-bootstrap-css></x-bootstrap-css>
</head>
<body>
<x-navbar></x-navbar>
       <form class="text-center w-75 m-auto border p-3 m-5" method="post" action=""{{ route('user.register') }}>
            @csrf
        <div class="mb-3">
             @error('name')
        <div class="alert alert-danger w-50 m-auto">{{ $message }}</div>
        @enderror
            <label for="exampleInputEmail1" class="form-label">User Name</label>
            <input placeholder="user name" type="text" class="form-control" id="exampleInputName1" aria-describedby="NameHelp" name="name">
             @error('email')
        <div class="alert alert-danger w-50 m-auto">{{ $message }}</div>
        @enderror
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input placeholder="user Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
             @error('password')
        <div class="alert alert-danger w-50 m-auto">{{ $message }}</div>
        @enderror
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input placeholder="user password" type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>

        <button type="submit" class="btn btn-primary" name="btn-register">Register</button>
    </form>
            <x-bootstrap-js></x-bootstrap-js>

</body>
</html>
