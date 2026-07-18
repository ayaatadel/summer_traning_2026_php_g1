// var x=5;
// console.log(x* "hello");

// var w=null;
// console.log(w);

//============ function ======

// console.log(n1+n2);

// Declared function  : parseInt , Typeof
// user defined function
// Function Declaration==> function fnc_Name(){}   ==> invoked , calling ==> fnc_Name()

//     var n1=6;
// var n2=3;

/**
 * not prametarized function
 * void function
 */
// function sum()  // decleration
// {

//     // body
//     console.log(n1+n2);

// }
// sum();  // call
// console.log(n1);

//     var n1=6;
// var n2=3;

/**
 *
 *  return function
 */
// function sum(n1=0,n2=0,...w)  // decleration
// {
//     // ...w ===> reset params
//     console.log(arguments);
//     console.log(w);

//      // undefined + undefined = NaN
//     // body
//     return(n1+n2);

// }
// console.log( sum(1,4,5));
// console.log(n1);

//========= Function Expression ====

// var x=5;
// console.log(x);

// var result=function (n1=0,n2=0)
// {
// // console.log(n1+n2);
// return n1+n2;

// }

// console.log(result());
// console.log(result);

// ============
// var x = 10;
// var great = function (studentName) {
//   x = 11;
//   console.log(x);

//   return studentName;
// };

// console.log(x); //10
// x = 12;

// console.log(great); // 11 + str
// console.log(great()); // 11 + undef
// console.log(great("php")); // 11 + php

// // ================
// function print(std_name) {
//   var x = 11; // block scope
//   console.log(x, std_name);
// }

// console.log(print("iti"));
// // x = 5;
// console.log(x);

// ==============  anonymous Function===
// function () {

// }

//======== callback function : function called by another function =====

// function great($std_name, dep_name, n1) {
//   console.log(`welcome + ${$std_name}`);
//   console.log(dep_name);
//   dep_name(n1);
// }

// great(
//   "iti",
//   function welCs(n1) {
//     console.log("cs Details", n1);
//   },
//   8,
// );
// console.log("******************************");

// // great("iti", welIT);

// function welCs(n1) {
//   console.log("cs Details");
//   console.log(n1);
// }
// function welIT() {
//   console.log("IT Details");
// }
// // great("mahmoud", "cs");

// function great($std_name, dep_name) {
//   console.log(`welcome + ${$std_name}`);
//   console.log(dep_name);
//   dep_name();
// }

// great(
//   "iti",
//   function () {
//     welCs(5);
//   },
//   8,
// );

// function welCs() {
//   console.log("cs Details");
// }
// function welIT() {
//   console.log("IT Details");
// }

//============ self invoked function , IIFE

// (function x() {
//   console.log("php");
// })();

//============== higher order function

// function f1() {
//   console.log("main function ");
//   return function () {
//     // return ()
//     console.log("function 1");
//     return function () {
//       console.log("function 2");
//     };
//   };
// }
// // f1();
// console.log(f1()()());

// ========  arrow function

// var result=function (){
//     console.log("test");

// }

// var result = (n1) => {
// //   console.log("test");
//   console.log(n1);
// };

// // var result = (n1) => n1;
// // console.log(result(5));
// var result = (_) => "test";
// console.log(result());

// var btn=document.getElementById("btn");
// btn.addEventListener("click",()=>{
//     alert("hello");
// })
// btn.addEventListener("click",click)

// function click ()
// {
//       alert("hello");

// }

//=============  string

var text = "track php summer training";
// console.log(typeof text);

// caital

// console.log(text.toUpperCase());
// console.log(text.toLowerCase());
// console.log(text.length);
// console.log(text.charAt(11));
// console.log(text.trim());
// console.log(text.trimStart());
// console.log(text.trimEnd());
// console.log(text.toLowerCase().includes("php"));
// console.log(text.concat(" iti "));
// text = text.concat("iti");
// console.log(text);
// console.log(text.length);
// console.log(text.padStart(33, "iti "));
// console.log(text.padEnd(11, "*"));

// console.log(text.charAt(text.length - 1));

// console.log(text.replace("t", "*"));
// console.log(text.replace("php", "laravel"));
// console.log(text.replaceAll("t", "*"));

// console.log(text.indexOf("Php"));

//============ Array

// var data=["iti",12,[12,14],true,{}]

var arr = [1, 2, 3];
// index ===> 0
// length ==> count of array items

console.log(arr.length);

/**
 // add element to array 
 * start  ===> shift
 * end   ===> push
 // remove element to array
   * start  ===> unshift
 * end   ===> pop
 */
console.log(arr);
arr.pop();
console.log(arr);

arr.push(123);
console.log(arr);

arr.shift();
console.log(arr);

arr.unshift("iti");
var arr2 = ["mysql", "js"];
arr.unshift(...arr2);
console.log(arr);
