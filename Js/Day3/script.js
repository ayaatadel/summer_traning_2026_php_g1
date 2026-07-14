// object ==> {key:value}
// var arr = ["mahmoud", 27, "04802393"]; // index , value
//   console.log(arr[0]);

/**
 * create object
 * {}
 * new object
 *  factory function
 *  function construcor
 * class --> es6
 */

// var user = {
//   // properities
//   // proName:value,
//   // fumctions
//   /**
//    * fun_name:function(){}
//    * funcName(){}
//    */

//   name: "mahmoud",
//   age: 27,
//   "1phone": "01234567",
// //   print: function () {
// //     console.log("hello");
// //   },
// //   test() {
// //     console.log("test");
// //   },
//   address: { city: "cairo", streat: "123 abbas elaqad" },
//   hoppies: ["reading", "paint"],
//   canAccessData: true,
// };

// access on object ===> key
/**
 * dotnotation ===> .  ==>object.pro_name
 * parktese ==> []   ==> object["pro_name"]
 */

// console.log(user);

// console.log(user.name);
// console.log(user.print); // structure of function
// console.log(user.print()); // call function (run function)
// // console.log(user.name);

// properity  in object in another object
// console.log(user.address.streat);
// console.log(user.hoppies[1]);
// console.log(user."user name");  xxxx
// console.log(user."1phone");  xxxx

// Braktes notation
// userName , user_name

// console.log(user["user name"]);
// console.log(user["1phone"]);
// console.log(user["address"]["streat"]);
// console.log(user["hoppies"][1]);
// console.log(user["test"]());

// add properity
// var arr=["mahmoud",27,"04802393"]
// arr[5]="cairo"
// console.log(arr);

// object  ==> obj.newPro=value
// object  ==> obj["newPro"]=value
// user.work="engineer";
// user["isMarried"]=false;
// user["sayHello"]=function ()
// {
//     console.log("hello every one");

// }

// user.family={name:"hossam"}
// console.log(user);

// edit   ===> obj_name.prp_name=new value

// user["user name"]="hossam";
// console.log(user);

// user["test"]=function ()
// {
//     console.log("test all data");

// }

// console.log(user["test"]());

// delete properity  ==> delete obj_name.prop , obj_name["prop"]

// delete user["test"]
// console.log(user);

// ===================== equal two objects  ===> copy from object
// var person = user;
// person.name = "fahd";
// user.name = "mahmoud";
// console.log(person);
// console.log(user);

/**
 * strcuredclone
 * ...
 */

// var person = structuredClone(user);
// var person={...user}
// person.name = "fahd";
// user.name = "mahmoud";
// console.log(person);
// console.log(user);

// // ...  : reset param

// var arr1=["nada","mohmmed"];
// var arr2=[...arr1];
// arr1.push("adel");
// arr2.push("leena");
// console.log(arr1);
// console.log(arr2);

/// create object
// var boj_name= {}

// new object ()

// var data=new Object();
// data.id=1;
// data.name="iti";

// var obj=new Object(data);
// obj.id=5;
// console.log(data);
// console.log(obj);

// var user={
//     name:"iti",
//     age : 35
// }
// // var data=new Object(structuredClone(user));
// // var data=new Object({...user});
// var data=new Object({name:"mohammed",address:"cairo"});

// //  data.name=5;
//  console.log(data.name);
// //  console.log(user);

//=================== factory function  ===> generate objects

// function user()
// {
//     return { name:"nada",address:"cairo"  }

// }
// // console.log(user());

// function user(fname,address)
// {
//     return { name:fname,address:address  }

// }
// // console.log(user("iti","menoufia"));
// // var person=user("nada","cairo");
// // console.log(person);
// // var person2=user("test","menoufia");
// // console.log(person2);

// function data(u_name,u_age,u_address)
// {
//     return {name:u_name,age:u_age,address:{...u_address}}
// }

// var person=data("nada",24,{city:"cairo"})
// var user=data("mahmoud",25,{city:"menoufi"})

// console.log(person);
// console.log(user);

/////////////////   prevent add edit (freeze)
/////////////////   prevent add   (seal)  and permit edit
// var user={
//     name:"iti",
//     age : 35
// }
// // Object.freeze(user);
// // Object.seal(user);

// user.name="test";   // edit
// user.address="cairo"; // add
// console.log(user);

// this ====> refrence refer on caller

// var user={
//     // caller ==> object  // this
//     name:"iti",
//     age : 35,
//     print()
//     {
//         console.log(`userName:${this.name},userAge:${this.age}`);

//     }

// }
// console.log(user.print());

// function contructor

/**
 * create new object
 * this refre on new object
 * return object
 */

// function User(name, age) {
//   this.name = name;
//   this.age = age;
// }

// var user1 = new User("iti", 35);
// var user2 = new User("ndjhv", 233);
// console.log(user1);
// console.log(user2);

/// ============= class
// class User {
//   constructor(name, age) {
//     this.name = name;
//     this.age = age;
//   }
//   print() {
//     console.log(this.name, this.age);
//   }
// }

// var u = new User("iti", 35);
// // u.print();

// // ================ inheritance

// class Person extends User {
//   constructor(name,age,grade) {
//    super(name,age); // super refrence on constructor of parent
//    this.grade=grade;
//   }

//   great() {
//     console.log(this.name);
//   }
// }

// var p = new Person("nada",100,"a");
// p.print();
// console.log(p);

//=============================  call , bind , apply

//  ------------------    retrun  run of function

// call : change caller
//  this refer on onother caller
//============== apply  ==> change caller of this
//                accept argumnts ==> in array

var user = {
  name: "iti",
  age: 12,
};

var person = {
  login(x, y) {
    console.log(x);
    console.log(y);

    // this ---> person
    // this ---> user
    console.log(this.name, this.age);
  },
};

// person.login();
// person.login.call(user)  // caller
// person.login.call(user,3) // caller + arguments of function

//========= apply
// person.login.apply(user,[3,4])

//=================== bind ===> return ---> body of function
// console.log(person.login.bind(user,3,4)()   // event
// );

// =================== math object , date object

// console.log(Math.random()*10);

// console.log(Math.trunc(Math.random()*10)); // remove
// console.log(Math.trunc(-2.1)) // -2
// console.log(Math.floor(-2.1));  // -3
// console.log(Math.ceil(3.8));

// Date

// var date = new Date();

// // console.log(date);
// // console.log(date.getFullYear());
// // console.log(date.getMonth());
// console.log(date.getDate()); // day
// console.log(date.getDay()); // index ==> sunday ==> index 0
// var date2=date.setDate((date.getDate())+5);
// console.log(date2);

// DOM : Document Object Model
// DOM Tree  ==> node (element)

// document ==> html

console.log(document); // change on html page

// document.writeln("")

// select any elemnt    ====> document
/**
 * id
 * tagName
 * class
 * query selector
 * query selector all
 * parent Node
 * first child
 * last child
 * children
 */

// var content = document.getElementById("text"); // element
// console.log(content);

// var pg = document.getElementsByTagName("p"); // HTMLCollection ==> array  ===> index
// console.log(pg[1]);

// var allText=document.getElementsByClassName("container")  // HTMLCollection
// console.log(allText[0]);

/**
 * #idName
 * .className
 *
 * ======================= Query selector
//  */
// var txt = document.querySelector(".container"); // node element
// var txt = document.querySelectorAll(".container"); /// node List ===> array ==> index
// // console.log(txt);

// // =========== name
// var userData = document.getElementsByName("data"); // NodeList ==>
// console.log(userData);

// // select first child

// var txt = document.querySelector(".container"); // div

// // console.log(txt.firstChild);
// console.log(txt.lastChild);  // last element (txt)
// console.log(txt.lastElementChild); // last elemem parent 


//  write code 

var content = document.getElementById("text"); // element

//  inner html (write code html in page)
content.innerHTML=`
 <span style="color:red">
            java script
        </span>
`

// inner text ==> add text

var head=document.getElementById("header")

head.innerText="DOM"