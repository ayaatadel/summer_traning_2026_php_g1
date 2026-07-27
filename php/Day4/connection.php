<?php 
$dbhost ="localhost"; // default port 3306 other ==>"localhost:3307"
$dbtype="mysql";
$dbName="sm_php_g1";
$userName="root";
$password="";          // dsn
$connection=new PDO("$dbtype:host=$dbhost;dbname=$dbName",$userName,$password);

?>