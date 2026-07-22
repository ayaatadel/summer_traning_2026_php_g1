<?php 
require("./navbar.php");
// require("./navbar.js");

// 
#   Comment 

/**
 * 
 * 
 * 
 */

$name = "iti";

// data types
/**
 * string 
 * integer 
 * array 
 * boolean
 * null
 * resource
 * object
 */



// echo $name;
$age = 55;
$isTrue = true;
$courses = ["php", "js", "database"];

// get datatype of variable 
// echo gettype($name,  $age , $isTrue,$courses ); // error take one argument
// echo gettype($name ) , "<br>";
// echo gettype(  $age  ), "<br>";
// echo gettype( $isTrue ), "<br>";
// echo gettype($courses ), "<br>";


// print 
// print_r
// var_dump

// echo (gettype($name ) );
// print (gettype($name ));
// echo "<br>";
// print_r ($courses); // at most 2 arguments
// echo "<br>";
// // var_dump (gettype($name ) ,"<br>" , 5 ,[1,2,3]);

// print ("$courses");

/**
 * echo             print     print_r      var_dump
 * ()=>single        single     at most 2      more than arguments
 * any data type except array       array          array+ any data type
 * true(1) 
 * fale ==> space 
 */



//================ Casting 

// $x="5";
// // echo gettype($x);
// // settype($x,"integer");
// // echo gettype($x);
// // echo gettype($x);

// $y=(int)($x);   
// echo gettype($x);
// echo gettype($y);

//

// $x=5;
// $x=12;
// // echo $x;

// // const PI=3.14;
// // echo PI;
// // $PI=12.6;
// // echo $PI;
// // echo PI;

// define("PI",3.14);
// // PI="iti";



// Common functions


// $x=5;
// $dataTypeX=gettype($x);
// if($dataTypeX=="integer"){
//     echo "integer";
// }

// is_int
// is_bool
// is_string

// $testType=is_bool($x);
// // echo $testType , "<br>";
// var_dump(is_bool($x))


// ===============

// Operators
/**
 * logical operators
 * arethmatic operators  (+ , - )
 * comparison
 * assignment
 * increment , decrement
 *  
 */


//  arethmatic operators  (+ , - ,* / % , **)

// $n1=5;
// $n2=2;
// echo $n1+$n2 , "<br>";
// echo $n1-$n2 , "<br>";
// echo $n1*$n2 , "<br>";
// echo $n1/$n2 , "<br>";
// echo $n1**$n2 , "<br>";
// echo $n1%$n2 , "<br>";

// logical operator
/**
 * && 
 * ||
 * !
 */

// comparison operator 
/**
 * >
 * <
 * >=
 * <=
 * !=
 * <>
 */


// Assignment operator
/**
 * ==
 * ===
 * !=
 * !==
 */
// $x=5;
// $y="5";
// var_dump($x==$y);
// // echo "<br>";
// var_dump($x===$y);
// // echo "<br>";

//
// $x=5;
// echo $x++; //5
// echo ++$x; // 7
// echo $x--; // 7
// echo --$x; //5

$x = 15;
$y = 10;

// Conditional statement  (if , switch , ternary operator)
// if($x<$y)
//     {
//         echo "less than  <br>";
//     }else {
//          echo "greater than  <br>";
//     }


// ($x>$y)?print("greater than"):print("less than");
// echo ($x>$y)?("greater than"):("less than");
// ($x>$y)?echo("greater than"):echo("less than");  // error 
// $grade=90;
// switch ($grade) {
//     case 90:
//         # code...
//         echo "Grade A";
//         break;
    
//     case 80:
//         # code...
//         echo "Grade B";
//         break;
//     case 70:
//         # code...
//         echo "Grade C";
//         break;
    
//     default:
//         # code...
//         break;
// }



// loops
/**
 * for 
 * while
 * do while
 * foreach
 */

// Array 
$arr = [1, 2, 3];  /// index , lenght
$arr = array(1, 2, 3);

/** 
 * index  start =0 , length : n.array elemets ===> count($arr_name)
 * indexed array   ===> $arr=[1,2,3];  ===> index 
 * multi dmension array   ==>  $arr=[[1,2,3],[4,5,6]];   
 * associative array   ==> ["key" : value ]
 * 
 */


// $data=["malak", 24, "0102345678"];

// // $arr_name[index]// value
// echo $data[2];


// for($index=0;$index<count($data);$index ++)
//     {
//         echo "<p style='color:blue'> $data[$index] </p>" ;

//     }

// $data=[
//     ["malak", 24, "0102345678"],
//     ["nada", 22, "0112345678"],
//     ["sara", 23, "0123459855"],
// ];

// // for ($i=0; $i <count($data) ; $i++) { 
// //     # code...
// //     // print_r ($data[$i]); // array
// //     // echo "<br>";

// //     for ($j=0; $j<count($data[$i]) ; $j++) { 
// //         # code...s
// //         echo $data[$i][$j] ,"<br>";
// //     }
// // }
//          // array   index      value[index]

//          echo "<table border=1>";
//          echo "<thead>

//          <td> name</td>
//          <td> age</td>
//          <td> phone</td>

//          </thead>";
//            echo "<tbody>";
// foreach ($data as $key => $value) {
//     # code...  key : index ==> $value ==> $data[index]
//     // echo "<br>*********** Key************* <br>";
//     // var_dump($key);
//     // echo "<br>*********** Value************* <br>";
//     // var_dump($value);
//             // array     index    value

//        echo "<tr>";
//     foreach ($value as $index => $result) {
//         echo "<td>".  $result   ."</td>";
//         // echo $result."<br>";
//         # code...
//     }
//        echo "<tr>";

// }
//  echo "</tbody>";


// associative array    [key : value]

// $data=[
//     "name"=>"iti",
//     "address"=>"menoufia",
// ];
$data = [
    "name" => ["nada", "mohammed", "mahmoud"],
    "address" => "menoufia",
];

// var_dump($data["name"]); 

$data = [
    ["name" => "malak", "age" => 22],
    ["name" => "mohamed", "age" => 25],
    ["name" => "mahmoud", "age" => 27],
];
// array   // index  // [key:value]


echo "<table border=1>";
echo "<thead>
         <td> name</td>
         <td> age</td>
         </thead>";
echo "<tbody>";
foreach ($data as $key => $value) {
    //    [key:value]    key    
    echo "<tr>";   
    foreach ($value as $index => $student) {
        # code...
        echo "<td> 
         $value[$index]
         </td>" ; 
        // echo $student;
        // echo $index;
    }
      echo "</tr>" ;
    # code...
}
echo "</tbody>";
echo "</table>";