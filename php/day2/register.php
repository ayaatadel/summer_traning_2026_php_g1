<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>

<body>
     <?php require "navbar.php";?>

    <h1 class="text-primary text-center"> Register Form</h1>
    <form class="text-center w-75 m-auto border p-3 m-5" method="POST" action="server.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Name</label>
            <input placeholder="user name" type="text" class="form-control" id="exampleInputName1" aria-describedby="NameHelp" name="name">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input placeholder="user Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
         
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input placeholder="user password" type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>

        <button type="submit" class="btn btn-primary" name="btn-register">Register</button>
    </form>
</body>

</html>