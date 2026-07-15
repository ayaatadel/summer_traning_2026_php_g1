// DOM : document object model ---> html

/**
 * select element  by dom in js
 *
 * id   ===> elemnt
 * class  ===> html collection  ==> array
 * tag name ==>  html collection  ==> array
 * name   ==> list
 * query selector  ==> node elemnt
 * query selector all   ==> node list
 *
 *
 * =====================>
 * title
 * images
 * forms
 * links
 * body
 */

// console.log(document.title);
// console.log(document.images);
// console.log(document.links[0]);
// console.log(document.body);

// ====================================

// .. Create elemnt

// var navbar=document.createElement("nav")
// var body =document.body;

// nav ===> child body
// add child
/**
 * append clid
 * append
 * insertAdjacentHTML
 *
 */

// document.body.appendChild(navbar)
// body.insertAdjacentElement("afterbegin",navbar)
// body.insertAdjacentElement("beforebegin",navbar)
// body.insertAdjacentElement("beforeend",navbar)
// body.insertAdjacentElement("afterend",navbar)

//

/**
 * Add Content
 * inner html  ===> code html (add in page html ==> selected elemnt)
 * inner text  ===> code text (add in page html ==> selected elemnt)
 */
// var div=document.getElementById("container")
// var pg=document.createElement("p");
// var span1=document.createElement("span");
// var span2=document.createElement("span");
// // span1.innerText="Track PHP"
// // span2.innerText=" Day 4 Js";
// // pg.append(span1,span2);
// pg.innerHTML=`
// <span> Track PHP  </span>
// `
// // pg.innerText=" Day 4 Js";
// {/* <p> Day 4 Js</p> */}
// {/* <p> <span> js </span></p> */}

// div.appendChild(pg);

// add attributes on elemnt

/**
 * add   (eleName.attributeName , setAttribute("atr","value"))
 * remove attribute
 * edit on attribute
 * has attribute
 */

// var div=document.getElementById("container")
// var img=document.createElement("img")
// // add attribute   // eleName.attributeName
// img.src="./imgs/image.png";
// img.width="50";
// img.height="50";
// // img.alt="code img"
// img.title="code img"

// // setAtrribute
// img.setAttribute("alt","code js");

// // edit value of attribute
// /**
//  * ele.att="new value"
//  * ele.setAttribute("alt","new value");
//  */

// img.title="js"
// img.setAttribute("alt","code js img")

// // Remove attribute
// //======= ele_name.removeAttribute("attrib")

// img.removeAttribute("title")

// console.log(img.hasAttribute("alt"));
// console.log(img.hasAttribute("title"));

// ============== class
/**
 * add   ===> add class
 * remove class  ==> remove class
 * toggle  ==> if class exist (remove) else (add)
 */

// img.classList.add("test")
// // img.classList.remove("test")
// img.classList.toggle("test")

//---------------- Sytle
/**
 *  ele.style.pro="value";
 * ele.style.cssText=` style`
 */

// div.style.border="1px solid black";
// div.style.width="200px";
// div.style.height="200px";
// div.style.padding="20px";

// div.style.cssText=`
// border:1px solid black;
// width:200px;
// height:200px;
// padding:20px;
// `

// div.appendChild(img)

/**
 *  Generate card
 * img
 * text
 * img
 */

// var card=document.getElementById("card")
// var cardImg=document.createElement("img")
// cardImg.src="./imgs/image.png";
// cardImg.classList.add("card-img");

// var cardText= document.createElement("p")
// cardText.innerText="Code Text";
// cardText.classList.add("card-txt");
// cardText.style.cssText=`

// color:brown;
// padding:10px;

// `
// var cardBtn=document.createElement("button");
// cardBtn.innerText="BUY"
// cardBtn.classList.add("card-btn");

// card.append(cardImg,cardText,cardBtn);

//============================== Event  (action)=================
/**
 * click
 * doubleClick
 * load
 * change
 * keyup
 * keydown
 * mouseEnter
 * mouseleave
 *
 */

// Select Element

// var btn = document.getElementById("btn");

// handel event
/**
 * inline in html on element  (attribute)
 * ele.onclick (onEvent)
 * addEventListener
 *
 */

// function sayHello() {
//   console.log("hello");
// }

// btn.onclick=sayHello;
// btn.onclick=function print()
// {
//   console.log("js");

// }
// btn.onclick=()=>
// {
//   console.log("html");

// }

// ========= Add Event Listener (eventName, function)

// btn.addEventListener("click",function(){
// console.log("sa hello");

// })
// btn.addEventListener("click",()=>{
// console.log("sa hello");

// })

// btn.addEventListener("click",sayHello)
// btn.addEventListener("click", () => {
//   sayHello("iti");
// });

//==========
// var user = {
//   name: "iti php track",
//   sayHello(name) {
//     console.log(`hello ${this.name}`);
//     // console.log(name);
//   },
// };

// // btn.addEventListener("click",()=>{
// //     console.log(this);

// // })

// var result = function () {
//   console.log("reslut");
// };
// btn.addEventListener("click", result);
// this ===? event
// btn.addEventListener("click", user.sayHello.bind(user));
// btn.addEventListener("click", user.sayHello.bind(user));

//===========
/**
 * target
 *
 */

// var btn = document.getElementById("btn");
// // btn.addEventListener("click", (e) => {
// //   // console.log(e);
// //   console.log(e.target.name);

// //   console.log("hello");
// // });
// btn.addEventListener("click", (e) => {
//   // console.log(e);
// //   console.log(e.target.name);
//  e.preventDefault()
//   console.log("hello");
// });


// var inputName=document.getElementById("u-name");
// var p=document.getElementById("txt");
// inputName.addEventListener("keydown",(e)=>{
// // console.log(e.target.value);
// p.innerText=e.target.value;

// })
// inputName.addEventListener("keydown",(e)=>{
// // console.log(e.target.value);
// // p.innerText=e.target.value;
// // p.innerText=e.key;
// console.log(e.key);


// })
// inputName.addEventListener("input",(e)=>{
// // console.log(e.target.value);
// p.innerText=e.target.value;

// // execute change input

// })
// inputName.addEventListener("keyup",(e)=>{
// // console.log(e.target.value);
// // p.innerText=e.target.value;
// // p.innerText=e.key;
// console.log(e.key);



//=============== BOM : Browser Object Model 



// })