<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    require "connection.php";
    require "navbar.php";
    if (isset($_GET['errorMessage'])) {
        /**
          * danger : red
          * success : green
          * primary : blue
          * info :  light blue
          * warning :  yellow
         */
        echo "<p class='w-50 my-4 m-auto p-3  text-center alert alert-danger'>" . $_GET['errorMessage'] . "</p>";
    }
    if (isset($_GET['successMessage'])) {
        /**
          * danger : red
          * success : green
          * primary : blue
          * info :  light blue
          * warning :  yellow
         */
        echo "<p class='w-50 my-4 m-auto p-3  text-center alert alert-success'>" . $_GET['successMessage'] . "</p>";
    }
    if(isset($_SESSION["loginID"]))
        {
            $user_id=$_SESSION["loginID"];
            var_dump($user_id);
      // select data of user
    $queryID = "SELECT * FROM users WHERE id=:id";
    $sqlID = $connection->prepare($queryID);

    $sqlID->execute(
        [':id' =>$user_id]
    );

    $user_data =$sqlID->fetch(PDO::FETCH_ASSOC); // [] , [data]
    var_dump( $user_data);

    

        }else{
               header("location:login.php?errorMessage=you must  login first");
        exit;
        }

    ?>
    <h1>Profile page</h1>
     


</body>
</html>