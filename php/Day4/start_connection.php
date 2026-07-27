<?php 
$dbhost ="localhost"; // default port 3306 other ==>"localhost:3307"
$dbtype="mysql";
$dbName="sm_php_g1";
$userName="root";
$password="";          // dsn
$connection=new PDO("$dbtype:host=$dbhost;dbname=$dbName",$userName,$password);
// var_dump($connection);
/**
 * create 
 * select
 * insert
 * update 
 * delete 
 */

// Select all data
// $query=" select * from users "; // string
// var_dump($query);

// string statement ==> sql statement

// $sqlQuery=$connection->prepare($query);
// // var_dump($sqlQuery);
// $sqlQuery->execute(); 

// $sqlQuery=$connection->query($query); // prepare + execute

// // select data  ==> fetch
// /**
//  * fetch   ==> signle row
//  * fetchAll ==> multi rows
//  */
// $users_data=$sqlQuery->fetchAll(PDO::FETCH_ASSOC); // select data
// // var_dump($users_data);

// foreach ($users_data as $key => $user) {
//     # code...
//     var_dump($user);
//     echo "<br>";
// }

// // insert 

// $insertQuery="insert into users (name,email,password) values('laravel','laravel@gmail.com','12345')";  // string

// // string ==> sql
// // $sqlInsert=$connection->query($insertQuery); // prepare + execute

// $sqlInsert=$connection->prepare($insertQuery);
// // var_dump($sqlQuery);
// $sqlInsert->execute(); 
?>