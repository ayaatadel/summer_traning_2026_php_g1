<?php 

session_start(); // open session
echo "<h1 style='color:red; text-align:center; '> Server Page </h1>" ;


// var_dump($_SERVER);

// array(2) { ["email"]=> string(14) "nnnn@gmail.com" ["password"]=> string(4) "xzmc" }
// var_dump($_GET);
// var_dump($_POST);
// var_dump($_REQUEST["email"]);
// array(3) { ["email"]=> string(17) "dvnsdmv@gmail.com" ["password"]=> string(4) "sxmc" ["btn-register"]=> string(0) "" }


/**
 * isset  : exist or not
 * empty  : has value or not
 */
// session_destroy();
if(!isset($_SESSION["usersData"]))
    {
        // store variable in session
     $_SESSION["usersData"]=[];
    }


// var_dump($_SESSION["usersData"]);
if(isset($_POST["btn-register"]))
    {
        // echo "register Page";
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
      $users=[
        'name'=>$name,
        'email'=>$email,
        'password'=>$password,
      ];

      array_push( $_SESSION["usersData"],$users);

       header("location:login.php");
               exit;
    //   var_dump($_SESSION["usersData"]);

    }





if(isset($_POST["btn-login"]))
    {
        $email=$_POST["email"];
        $password=$_POST["password"];
    //  var_dump($_SESSION["usersData"]);

  foreach ($_SESSION["usersData"]as $key => $user) {
    # code...
 print_r($user);
    if(($user["email"]== $email)&&($user["password"]== $password))
        {
            // echo"exist";
               header("location:index.php?message='login successfully'");
               exit;
        }else{
            // echo"not exist";
            header("location:register.php");
               exit;
        }
  }

    // [
    //     [
    // name=>"mahmoud",
    // password=>"1234"
    // ],
        // [
    // name=>"mahmoud",
    // password=>"1234"
    // ],
    // ]



    }

?>