//    var btn= document.getElementById("btn");

//        btn.addEventListener("click",function(){
//             alert('welcpome in js ')
//         })




// comment   =============> single line //
// multi line comment ====> /* */

/* 
js 
comment*/



// ================  Variable  (place in momory store value) ==================
/**
 * var      +++++++++++++++++++++++++++++++ 
 * let  ****************
 * const   ---------------> constant variable  (const PI=3.14)  ===> capital
 * 
 * int x= 5
 * string y="iti"
 * 
 * loosely typed language  
 * data type =======> value
 * 
 * html ==> document
 * console ===> 
 * 
 * 
 * var x ==========> declare 
 * x=10 ========> assignment
 */


// var x=15;   //  (declare + assign value)
// // get data type of variable (getType (x))


// console.log(typeof(x));

// // redeclare + reassign
// var x="php";

// console.log(typeof(x));

// // redeclare
// var x=true;

// console.log(typeof(x));



//  types of data types

// primitive data types (number , string , boolean ,undefined  , null , BigInt)

// refrence data type (object , array , function )


// const PI=3.14;
// console.log(PI);
// PI=5;
// console.log(PI);



// ---------------- convension of write vaiable (rules)

/**
 * 1-  only used   _ ,  $     
 * 2- you mustn't  reserved key word   (function , var , let , array , undefined , null , if , switch )
 * 3- you not allowed to use space in variable name
 * 4- case sensitive
 * 5- camel case (userName)
 * 6- vaariable name it must be expressive 
 * 7- constant variable ===> const = capital  ======> const MAX_USERS=5
 */

// var _x=10;
// console.log(_x);

// var $x=15;
// console.log($x);

// // var function=15;

// // var user name ="mahmoud";

// /**
//  * userName
//  * user_name
//  */


// var r=5;
// var R =10;
// console.log(R);
// console.log(r);




///// operators 

/**
 * Arethmatic operators  (+ , - ,* , / , % , ** )  // (10^3)  === 10**3 =1000
 * logical operators 
 * assginment operators
 * comparison operators 
 */

// var n1=10;
// var n2=3;

// ====================== Arethmatic operators  ==========================


// console.log("n1+n2" , n1 + n2); //  13
// console.log("n1-n2" , n1 - n2); // 7
// console.log("n1*n2" , n1 * n2); // 30
// console.log("n1/n2" , n1 / n2); // 3.3
// console.log("n1%n2" , n1 % n2); // 1     // 10/3 =3  ===> 3*3 =9 10-9 =1
// console.log("n1**n2" , n1 ** n2);  //1000

// // 10 %2  ==  10 / 2 =5 === 5*2 =10 ====?> 10-10 =0
// // 8 % 5 =  8/5 = 1  ---> 1*5 =5  ==== 8-5 =3


// //  10 % 3
// // 10 / 3
// //      3
// //      -----
// // 9
// // ----------
// // 1




// ====================== logical operators  ==========================

/**
 * && ===> (trur && true = true )  , (true && false = false ) , (false && false = false ) , (false && true = false )
 * || ==>  (false || false = false ) , (trur || true = true )  , (true || false = true ) ,  (false || true = true )
 * !   ==> !(true) = false   , !(false) = true
 */


// ====================== assignment operators  ==========================

/**
 * =    -----------------> x=5
 * =+  -----------------> x+=5 ====> x= x + 5
 * =-  -----------------> x-=5 ====> x= x - 5
 * =* -----------------> x*=5 ====> x= x * 5
 * =/ -----------------> x/=5 ====> x= x / 5
 * =% ----------------> x%=5 ====> x= x % 5

 */


// var x=10;
// x+=3;
// console.log(x);  //13
// var x=10;
// x-=3;
// console.log(x);  //7
// var x=10;
// x*=3;
// console.log(x);  // 30
// var x=10;
// x/=3;
// console.log(x);  // 3.3
// var x=10;
// x%=3;
// console.log(x);  // 1



// ====================== increment & Decrement operators  ==========================

// var x=12 ;
// x++;     // 13          
// console.log(x);  //13   ==============> 

// var x=12 ;
// ++x;   // 13
// console.log(x);  //  13
// var x=12 ;
// x--;  // 11
// console.log(x);  //  11
// var x=12 ;
// --x;  // 11
// console.log(x);  // 11

// //========================

// var x=12 ;
          
// console.log(x++);  //12   --- 13
// console.log(++x);  //  14  ----> 14  === 14

// console.log(x--);  //  14   ---> 13

// console.log(--x);  //12 ------> 12 


/**
 * 12
 *  x++ ==> x=x+1    ====> 
 * x++;       ===> 12 + 1 =13             
 * console.log(x);    ===> 13
 * 
 * ---------------------------
 * console.log(x++)   ===> log(x)  (12)  + x++  (13)
 * console.log(++x)   ===> x+=1   (14)    ===> log(x)   ===> 14
 * 
 * 
 * -------------------------------
 */



// ====================== comparison operators  ==========================

/**
 * x=5
 * y=10
 * 
 * >     (x>y)  ===> false
 * <     (x<y)  ===> true
 * <=     (x<=y)  ===> true
 * =>
 * ==   -------------------->  value
 * !=   -------------------> value
 * ===   ------------------->  value && data type
 * !==  ----------------------> value && data type
 */

//  var x=5 ;
//  var y=10 ;
//  console.log(x<=y);  // true   ==> (x<y) || (x==y)  ==> true || false = true
//  console.log(x>=y);  // false ==> (x>y) || (x==y)  ==> false || false = false
//  console.log(x==y);   // false  ==> (x==y) = false
//  console.log(x!=y);  // true    (x!=y) ===> !(x==y) ==> !(false) = true

//  var x=5;
//  var y ="5";
//  console.log(x==y);//  (5==5) // true
//  console.log(x===y); // false  ====> (5== 5) && (typeof(x ----> int) == (tpoe of(y --> string) ))  ==> true && false = false 
//  console.log(x!==y);  // true  ===> !((5==5)&&(int==string))= !(false) = true
 

//                                  condition

// =====================   if  , ifelse ,if ifelse else  


//     // if(condition)
// {
    //  true 
// }


// if(4<5)
// {
//     console.log("less than ");
    
// }
// console.log("efhe");


// if(7<5)
// {
//     console.log("less than");  // true
    
// }else{
//     console.log("greater than");  // false
    
// }


// nested conditions
// var x=0;
// if(x>0)
// {
//     console.log("positive");
    
// }else if(x<0)
// {
//     console.log("negative");
    
// }else{
//     console.log("qeual 0");
    
// }

// more than condition ====( depend on equal specific value)
// switch case  
/**
 * switch (key)
 * case value:
 *   log()
 *   break
 * -------------
 *    defualt :
 *     log()
 * break
 */

// var grade=90;
// switch (grade) {
//     case 90:
//         console.log("grade A");
        
//         break;
//     case 80:
//         console.log("grade B");
        
//         break;
//     case 70:
//         console.log("grade c");
        
//         break;
//     case 60:
//         console.log("grade D");
        
//         break;

//     default:
//         console.log("sorry you fail");
        

//         break;
// }



// ternary ooperator

// (condition)?true:false


// var x=1;
// // (x>0)?console.log("positive"):console.log("negative");


// (x==0)?console.log("qual 0"):(x>0)?console.log(">0"):console.log("<0");
// ;



/**
 * if (condition)
 * {
 * trure}
 * else if()
 * {
 * }else if (){
 * }else {
 * }
 *   
 * ()? ... : () ? ... : () >? ... : () 
 */

// if(x>100)
// {
//     if(x>80)
//     {

//     }
// }else if(x>90)
// {

// }else {

// }



// ================= looping
/**
 * for 
 * while
 * do while
 */

// console.log(1);
// console.log(2);
// console.log(3);
// console.log(4);
// console.log(5);

//   -------------->
                            // <----
// for(start ; condition , incre|| decrement)
// {            --->                       ^
            // value of true of conditon   ^
// }

// for(var i=1; i<=5;i++)
// {
//    console.log(i);
   
// }



// var i=10;
// for( ; i>=1 ;)
// {
//     console.log(i);
//     i--;
    

// }


// for( ;  ;)  // infinity loop



/////////////////////// while


// while(condiltion)
// {
//     true
// }

// var index=0;
// // while(index <=5)
// // {
// //    console.log(index);
// //    index++;
   
// // }

// // while(true)  
// // {

// //     dmvnmdm
// // }


// // do while   ==> ececute condition at least on time

// do{
//   console.log(index);
//   index++;
  
// }while(index<=5);

/////////////////////// Active with user


// var userName=prompt("Enter your name"); // string
// var userName=+prompt("Enter your name"); // integer
// var userName=Number(prompt("Enter your name")); // integer
// var userName=parseInt(prompt("Enter your name")); // integer
// console.log(typeof(userName));

// alert("check your data ")

// var userName=prompt("Enter your name");
// var userAge=prompt("Enter your Age");
// var userPhone=prompt("Enter your Phone");
// // console.log(userName);
// // console.log(userAge);
// // console.log(userPhone);

// // document.writeln(userName)
// // document.writeln(`<h1 style='color:red;'> userAge  </h1>`);
// document.writeln(`<h1 style='color:red;'><span style='color:black'>userName</span>: ${ userName } </h1>`);
// document.writeln(`<h1 style='color:red;'> userAge: ${ userAge } </h1>`);
// document.writeln(`<h1 style='color:red;'> userAge: ${ userAge } </h1>`);
// document.writeln(`<h1 style='color:red;'> userPhone: ${ userPhone } </h1>`);


/**
 * prompt ===> string
 * string --> integer 
 * Number(prompt ())
 * parseInt(prompt())
 * +prompt
 */

// alert : alert message
// confirm ===> window ===> true || false 


// var value = confirm("are you student");
// // console.log(value);
// // console.log(typeof(value));

// if(value)
// {
//    var grad= confirm("are you in last year");
//    if(grad)
//    {
//        console.log("in last year");

//    }else{
//     console.log("still student");
    
//    }
   
// }else{
//     console.log("graduated");
// }


// falsy values    (0 , null , [] , false, '' , undefined , nan)

// truthy values  (any number except 0 , [1,2] , ' ' , true)