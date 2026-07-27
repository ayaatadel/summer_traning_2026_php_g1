<?php
require "navbar.php";
class DB
{
    protected $dbhost; // default port 3306 other ==>"localhost:3307"
    protected $dbtype;
    protected $dbName;
    protected $userName;
    protected $password;
    protected $connection;



    function __construct($dbhost, $dbtype, $dbName, $userName, $password)
    {
        $this->dbName = $dbName;
        $this->dbtype = $dbtype;
        $this->dbhost = $dbhost;
        $this->userName = $userName;
        $this->password = $password;
        $this->connection = new PDO("$this->dbtype:host=$this->dbhost;dbname=$this->dbName", $this->userName, $this->password);
    }


    function index($table) // select all data
    {
        try {
            //code...

            $query = " select * from $table"; // string

            $sqlQuery = $this->connection->prepare($query);
            // var_dump($sqlQuery);
            $sqlQuery->execute();
            $result = $sqlQuery->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
                return $result;
            } else {
                echo "data Empty";
            }
        } catch (Error $e) {
            //throw $th;
           
            echo $e->getMessage();
        }
    }

    function show($table,$id)
    {
            try {
            //code...

            $query = " select * from $table where id=:id"; // string

            $sqlQuery = $this->connection->prepare($query);
            // var_dump($sqlQuery);
            $sqlQuery->execute(
                [
                    ":id" =>$id
                ]
            );
            $result = $sqlQuery->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
                return $result;
            } else {
                echo "data Empty";
            }
        } catch (Error $e) {
            //throw $th;
            echo $e->getMessage();
        }
    }


      function delete($table,$id)
    {
            try {
            //code...

            $query = "  delete from $table where id=:id"; // string

            $sqlQuery = $this->connection->prepare($query);
            // var_dump($sqlQuery);
            $result=$sqlQuery->execute(
                [
                    ":id" =>$id
                ]
            );
            
            if ($result) {
                return "deleted successfully";
            } else {
                echo "check your data";
            }
        } catch (Error $e) {
            //throw $th;
            echo $e->getMessage();
        }
    }

        function create($table,$data)  // insert
    {
            try {
            //code...
            // insert into $table (name,email,password) values ('iti','iti@dmail.com','12345')
          $dataKeys=array_keys($data); //[name,email,password]
          $stringDataKeys=implode( ',',$dataKeys); 
          // name,email,password
          $dataValues=array_values($data); //['iti','iti@dmail.com','12345']
            // $stringDataValues="'".(implode(" ','",$dataValues))."'"; //'iti','iti@dmail.com','12345'

            $query = "  insert into $table ($stringDataKeys) values (?,?,?)"; // string

            $sqlQuery = $this->connection->prepare($query);
            // var_dump($sqlQuery);
            $result=$sqlQuery->execute(
                [  
                    $data['name'],$data['email'],$data['password']
                    
                ]
            );
            
            if ($result) {
                return "deleted successfully";
            } else {
                echo "check your data";
            }
        } catch (Error $e) {
            //throw $th;
            echo $e->getMessage();
        }
    }

    // update 

         function update($table,$data,$id)  // insert
    {
          
}}



$db = new DB("localhost", "mysql", "sm_php_g1", "root", "");

class Users extends DB{ 

}
