<?php        

// function : user defined functions || predefined functions  (getType , setType)

// ****************** user defined functions ******************

/**
 * prametarized    (a,b)
 * non parametarized ()
 * void    ==>  print
 * return   ==> return
 */


// function fun_Name()   .// signature 
// {

//   body of function 

// }

// call function


//   viod not parametarized 
// function  show()
// {
//     echo "<h1 style='color:red ; text-align:center'> Functions </h1>";
// }


// show()


// return   not parametarized 

function  show()
{
    return "<h1 style='color:red ; text-align:center'> Functions </h1>";
}


echo show(); 


// function  sayHello($trackName)
// {
//     echo "<h2 style='color:red ; text-align:center'> track :  $trackName  </h2>";
// }

// sayHello("PHP")


// function  printNum(int $n1) : void
// {
//     echo $n1;
//     // return "<h2 style='color:red ; text-align:center'> track :  $trackName  </h2>";
// }
// function  sayHelloTrack( string $trackName ) : string
// {
//     // echo $n1;
//     return "<h2 style='color:red ; text-align:center'> track :  $trackName  </h2>";
// }

// sayHelloTrack("sdhkshdjksjdghsa")

// Anounoms function     ===> closure function 

// $test="clousre";

// $result=function ()
// {
//     global $test;   
//     echo $test;
// };

// $result();


// $result=function () use($test)
// {
   
//     echo $test;
// };

// $result();


/**
 * Scoping 
 * 
 * global scope  
 * 
 * block scope   {}
 * 
 */

// Arrow functions    fn()=>;

// $test="clousre";


// // $result=fn ()=> "hello";
// $result=fn ($name)=> "hello $name";

//    echo $result("php");



/**
 * Call By Value  : copy value of varabile
 * Call By Refrence  : copy from refrence of varible
 */

// $n=10;
// $y=$n; //10   Call By Value 
// $y=5;  // 5 
// echo $n ,"<br>" , $y;


// $n=10;
// $y=&$n; // call by refrence
// $y=5;  
// $n=4;
// echo $n ,"<br>" , $y;

// Variable of Variable
/**
 * take value of variable as another variable
 */

// $x = "mohammed";
// $$x = "Engineer";  // $mohammed
// echo $x, $mohammed;


// $track = "php";
// $$track; // $php

/**
  * س =5
   *  س ص =10
   * ص =10 
  */


// Array Functions 
// $arr=[1,2,3];
// $arr2=array(1,2,15);
//  print , echo , var_dump , print_r
// print_r($arr);

/**
 * Add elemnt to array
 * push 
 * unshift
 * 
 * remove element from array
 * pop
 * shift
 */
// $arr=[1,2,3];

// array_pop($arr); // remove from end
// print_r($arr); // [1,2]
// echo "<br>";

// array_shift($arr); // remove from first
// print_r($arr); //[2]
// echo "<br>";

// array_push($arr,["iti","php"]); // add from end
// print_r($arr); // [2,[iti , php]]
// echo "<br>";

// array_unshift($arr,["track","summer training"]); // add from start
// print_r($arr); //  [[track , summer training],2,[iti , php]]
// echo "<br>";


// implode || explode 
/**
 * implode :  Join array elements with a string
 * 
 * implode($separator = "", $array): string
 * Join array elements with a string
 * 
 * explode : Split a string by a string (sperator) to get array
 */


// $arr=["iti","track","php"];
// // $str= implode(" ",$arr);  // 
// // echo gettype($arr) ,"<br>";
// // echo gettype($str) , "<br>";
// // echo $str , "<br>";

// $text="summer*training*php";

// $arr2=explode("*" ,$text);
// print_r($arr2);

// ["mohammed","cairo"]
// implode(',',$data)
// mohammed,cairo
// insert into students(name,address)
//values('mohammed','cairo');


// $data=["mohammed","cairo","engineer"];
//        //         'mohammed','cairo'
// // $result="'".implode("','",$data) ."'";
// //           mohammed ','cairo','engineer
// $result=implode("','",$data) ;
// echo $result;
// insert into students(phone,name,address)values($result);




// string methods 
$text="Hello php track php";
echo strlen($text) , "<br>";
echo strtoupper($text) ,"<br>";
echo strtolower($text) ,"<br>";
echo trim($text) ,"<br>";
echo str_word_count($text) ,"<br>";
echo strrev($text) ,"<br>";
echo str_replace("php","summer training",$text) ,"<br>";

str_contains($text,"php")?print"exist":print("not exist");

echo strpos($text,"track") , "<br>";
var_dump(str_ends_with($text,"track"));
var_dump(str_starts_with($text,"Hello"));
var_dump(substr($text,5,10));