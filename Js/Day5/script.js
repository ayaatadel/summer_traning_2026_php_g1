// ========== bind call apply ====> change caller of  this
/**
 * call :  change caller of  this + run   (paramerts)
 * apply :change caller of  this + run   (paramerts [array])
 * bing : change caller of  this (paratemers) ==> let user run code  ==> bind store body of function
 * bing (log) || run || call
 */

// var obj = {
//   name: "iti",
//   email: "iti@gmail.com",
//   print() {
//     console.log(this); // obj
//   },
// };
// var obj1 = {
//   data(x) {
//         console.log(x);
//     // undefined  ===> caller : obj1
//     // change caller refer obj
//     console.log(this.name, this.email);
//   },
// };
// obj.print();
// // obj1.data.call(obj, 5);
// // obj1.data.call(obj,[10] );
// obj1.data.bind(obj,13)();
// console.log(obj1.data.bind(obj,13) // change caller of this
// );

// /**
//  * data(x) {
//         console.log(x);
//     // undefined  ===> caller : obj1
//     // change caller refer obj
//     console.log(this.name, this.email);
//   }
//  */

// ======================= Object  (key:value)
// ========== copy from object to another object (structuredClone , assign , spread operator)
//    -- object.assign()
//    -- object.keys
//    -- object.entries
//    -- object.values

// object ===> window

// var user={
//     id:1,
//     name:"php",
//     print()
//     {
//         console.log(id , name);

//     }

// }

// console.log(user);

// console.log(Object);

// console.log(Object.keys(user));  // array [keys of object]
// console.log(Object.values(user));  // array [values of object]

// console.log(Object.entries(user)); //===> object ==> array && each elment in array ==> array ["key", value]
/**
 * [Array(2), Array(2), Array(2)]
0
: 
 ['id', 1]
1
: 
 ['name', 'php']
2
: 
 ['print', ƒ]
 */

/**
 * api response ==> json ==> object
 */

// var user={
//     id:1,
//     name:"php",
//     print()
//     {
//         console.log(id , name);

//     }}
// var person ={
//     id:"2",
//     phone:"0123456789"
// }
// //  var x=5
// //  var x=10
// //             // target   source
// //  Object.assign(person,user)  // function (copy of object)  ==> two object has same prop ==> oversride
// //  console.log(person);
// //  console.log(user);

// //  console.log("******************************************* ");

// //  user.age=23
// //  person.address="menoufia";
// // console.log(person);
// // console.log(user);

// // var test ={}
// // Object.assign(test,person)
// // var test=Object.assign({},person)
// // console.log(test);

// // var test =person // any change apply to all  xxxxxxxxxxxxxxxxxxxxxxxxxxx
// // var test ={...person}  // on relation
// // console.log(test);

// //============== descruring

// var user={
//     id:1,
//     name:"php",
//     print()
//     {
//         console.log(id , name);

//     }}

//     // var name =user.fname;
//     // var id=user.uId;

//         // pro_obje=name
//     var{fname:name,uId:id}=user
//        // user.id=1=id   // user.name=php = name
//     var {id:id,name:name}=user
//                   // "php"
//     // user.fname=name
//     console.log(name);
//     console.log(id);

//     //=================
//     var data=[1,2,3];
//     // var x=data[0]
//     // var y=data[1]

// //     // var[x,y]=data
// //     // var[x,y]=[1,2]
// //     // console.log(x);
// //     // console.log(y);

// //     // var z=data[2];
// //     var [,,z]=data
// //     console.log(z);

// //===============================
// // function useArr()
// // {
// //     return [10,"mahmoud",function(){
// //         console.log("hello");

// //     }]
// // }

// // var [x,y,z]=useArr();  // [10,"mahmoud", fun]
// // console.log(z());

// // var z=function(){
// //         console.log("hello");

// //     }

//     // console.log(z);

// //

// /////// ================== Array api
// /**
//  * push
//  * pop
//  * shift
//  * unshift
//  * -------------   loop on array
//  * filter
//  * foreach
//  * map
//  */

// var arr=["mahmoud","hosaam","leena"]
// // for (let index = 0; index < arr.length; index++) {
// //    console.log(arr[index]);

// // }

// // function arrData(value,index,arr)
// // {
// //       console.log(value);
// //     console.log(index)
// //     console.log(arr);

// // }

// // for (let index = 0; index < arr.length; index++) {

// //    arrData(arr[index],index,arr)

// // }
// // value : value of element in array
// // index : index elemnt of array
// // array
// arr.forEach(function(value,index,arr){
//     console.log(value);
//     // console.log(index)
//     // console.log(arr);

// });

// var data = [
//   {
//     name: "hager",
//     age: 22,
//     address: "cairo",
//   },
//   {
//     name: "leena",
//     age: 25,
//     address: "shebin",
//   },
//   {
//     name: "hossam",
//     age: 26,
//     address: "sadat",
//   },
// ];

// function setData(uname,uage,uaddress)
// {
// var card=document.getElementById("card");
// var data=document.createElement("div");
// data.setAttribute("class","data");
// var name=document.createElement("p")

// name.innerText=`name:${uname}`;
// var age=document.createElement("p")
// age.innerText=`age:${uage}`;
// var address=document.createElement("p")
// address.innerText=`address:${uaddress}`;

// data.append(name,age,address);
// card.appendChild(data);

// }

// var result=data.forEach((value)=>{
//     // console.log(value.name);
// //  setData(value.name,value.age,value.address);
// return(value)

// })

// // console.log(result);  // undefined
// // map ====> return array

// var result=data.map((value) => {
// //   console.log(value);

// // return (value)
// });

// console.log(result);

// var result = data.filter((value) => {
//   //   console.log(value);
//   if (value.age > 22) {
//     return value.age;
//   }
// });

// console.log(result);

/**
 * foreach                map                 filter
 *  --------------      loop on arrray   ----------------
 * has no return          return (array)     return (array)
 *   ----------------------- filteration ========
 * conditions (log)         true(array[main array])   true (true)
 *                          false [undefined]          false []
 */

// =================== function ==========
/**'
 * synchroouns           Asnchrounos
 *   regular function      (action , time)  ==> event , setTimeOut , SetInterval
 *
 *
 */
// function test()
// {
//     console.log("test");

// }
// function test()
// {
// return ("test")
// }

// var x=10;

// var result=function(){
//     var y=12;
//     console.log(y);

//     console.log("synchronous");

// }
// console.log(x);

// result();   // call ====> synchronous function

//  setTimeout(()=>{
// console.log("Asynchronous");

//  },1000)

//================= Excecution  -------------
// ===== Js Engine

// call stack
/**
 * global execution context :
 * variables ===> var x =5  ==> x:undefined
 * function x () =>{}  ==> x:<func>
 * var result = function () {} ==> result : undefined
 *   ----- excute ----
 *    variable ===> value
 *
 * ------> log ===> user
 * -===> function call ==> execute function ====> execution context
 * ============================> run ----- > function remove
 *
 */

//  var x=10;

//  function first()
//  {
//     var x=15
//     x++;
//     console.log(x);

//     console.log("first");
//     function second(){
//         console.log("second");  //xxxxxxxxxxxxxxxx
//     }
//     console.log(second());

//  }
//  first();
// console.log(x);

/**
 *
 * 16
 * first
 * secnod
 * undefined
 * 10
 */
// js Engine

// global execution
/**  x=10
 *   first :<func>
 *
 *
 *
 *
 *
 *
 *
 */

/////////////////////// Asnchronous function
/**
 * js run time
 * --------- call back queues
 *  ====> call back function
 *  =====> event
 *
 * ----------- js engine
 *
 * ---------- event loop ===> check ==> js engine (finish) ===> pass funtion (call back queue)
 *
 * js apis -----> timers ====> functions ===> time ===> call back queue
 */

// var x = 10;
// // var y;
// var result = function () {
//   var y = 12;

//   setTimeout(() => {
//     y++;
//     console.log(y);
//     console.log("Asynchronous");
//   }, 1000);
//   setTimeout(() => {
//     y++;
//     console.log(y);
//     console.log("Asynchronous");
//   }, 2000);

//   function second() {
//     console.log(y);
//     console.log("second");
//   }
//   console.log(second());
// };
// console.log(x);
// // console.log(y); //   error ---> stop run
// result();
// ========================== Event

var btn = document.getElementById("btn");
btn.addEventListener("click", () => {
  console.log("click");
});
var x = 10;
var result = function () {
  var y = 12;

  setTimeout(() => {
    y++;
    console.log(y);
    console.log("Asynchronous1");
  }, 5000);
  setTimeout(() => {
    y++;
    console.log(y);
    console.log("Asynchronous2");
  }, 6000);

  function second() {
    console.log(y);
    console.log("second");
  }
  console.log(second());
};
result();
