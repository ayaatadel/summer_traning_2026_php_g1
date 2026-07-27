<?php

require 'index.php';
$allUsers = $db->index("users");
// var_dump($allUsers);
// foreach ($allUsers as $key => $user) {
//     # code...
//     var_dump($user);
//     echo "<br>";
// }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

  



    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4">All Users</h2>
                <a href="delete.php?id=' . $user['id'] . '" class="btn btn-sm btn-danger">Add New Users</a>

            </div>
        </div>
        <div class="row">
            <?php
            // require "connection.php";
            // require "AllUsers.php";
            // var_dump($connection);
            echo "<br> ******************** <br>";

            if (!empty($allUsers)) {
                foreach ($allUsers as $user) {
                    echo '
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">' . htmlspecialchars($user['name']) . '</h5>
                                <p class="card-text">
                                    <strong>Email:</strong> ' . htmlspecialchars($user['email']) . '<br>
                                </p>
                            </div>
                            <div class="card-footer bg-white border-top text-center">
                                <a href="showUser.php?id=' . $user['id'] . '" class="btn btn-sm btn-warning">Show</a>
                                <a href="edit.php?id=' . $user['id'] . '" class="btn btn-sm btn-primary">Edit</a>
                                <a href="delete.php?id=' . $user['id'] . '" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                    ';
                }
            } else {
                echo '<div class="col-12"><p class="text-muted text-center">No users found.</p></div>';
            }
            ?>
        </div>
    </div>



    <?php require "bootstrapJs.php"; ?>

</body>

</html>