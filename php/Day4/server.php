<?php

require "connection.php";
require "navbar.php";
/// register 

/**
 * select data from form 
 * --- register   btn-register
 * -- login       btn-login
 */


// var_dump($_POST); // Associative Array  
//[
//    "key" : "value"  ====> "name" => "test" 
//     btn-register   ===> isSet ===>  variable already exist  or not      // empty ===> variable already exist + has no value

// ]

// array(4) { ["name"]=> string(4) "test" ["email"]=> string(14) "tset@gmail.com" ["password"]=> string(5) "ayaat" ["btn-register"]=> string(0) "" }



if (isset($_POST['btn-register'])) {

    /**
     * Register ====> insert data 
     * select data from form  ==> $_POST
     *  insert into data base   ==> connection
     * 
     */


    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    // $enreptedPassword = md5($password);

// hash password
    /**
     * md5      
     * hash   ==> $2y$10$cJLWplg8KxvymlruXkV6ZO06HFT2mcoUHnvgWPErDBRW./YaYUKAq
     */
    /**
     * validation on data 
     * pattern   ==> https://regexr.com/ 
     * /^  
     * [a-z]
     * [A-Z]
     * [a-zA-Z ]
     * d
     * s 
     * $/
     */

    // insert   'drop table orders' or '1'='1'  // login

    // $query=" insert into users (name,email,password)values('$name','$email','$password')"; 

    // 2-named parametares 

    // validation on name   ===> preg_matsh (perform regular expression)
    // $namePattern = "/^[a-zA-Z]{3,}$/";
    $namePattern = "/^[a-zA-Z]{3,}$/";
    if (!preg_match($namePattern, $name)) {
        header("location:register.php?errorMessage=enter valid name must be more then 3 characters");
        exit;
    }
    // validation on password
    $passwordPattern = "/^[0-9]{5,15}$/";

    if (!preg_match($passwordPattern, $password)) {
        header("location:register.php?errorMessage=enter valid password must be more then 5 numbers");
        exit;
    }
    // validation on email
    // $emailPattern='';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location:register.php?errorMessage=enter valid email");
        exit;
    }

    $enreptedPassword = password_hash($password, PASSWORD_DEFAULT);
    try {
        //code...
        $query = " insert into users (name,email,password)values(:name,:email,:password)";
        $sqlQuery = $connection->prepare($query);  // '' ''
        $sqlQuery->execute(
            [
                ':name' => $name,
                ':email' => $email,
                ':password' => $enreptedPassword,
            ]

        );
    } catch (Error $e) {
        //throw $th;
        echo $e->getMessage();
    }


    // 2. Positional Parameters (?)  ?drop 
    // $query=" insert into users (name,email,password)values(?,?,?)"; 
    // $sqlQuery=$connection->prepare($query);  // '' ''
    // $sqlQuery->execute(
    // [
    //     $name,
    //     $email,
    //     $password,
    // ]

    // );

    // SQL Injection   (query parametares)



}






if (isset($_POST['btn-login'])) {
}
