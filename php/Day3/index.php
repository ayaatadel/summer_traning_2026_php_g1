<?php

/**
 * OOP pradigm                  ||  Procedural Paradigm
 * object(instance of class)            native (functions)
 * 
 * class : strurcure  (properities (variables) , methods(functions))
 * =========== 
 * Access Modifiers 
 * public ==> can be used in any where (class , inhertance class , name space) 
 * protected  => can be used in inhentace classes , same name space
 * private  ==> used only in class
 * 
 * ==============
 * constructor : function __construct() has no return 
 *    -- not parametarized
 *    -- parametarized
 * ----------- construcor called while creating object
 *  --------- Class has only one constructor in PHP ------
 * ====================
 * class variables (const , static )       
 *    self : refer on current class
 *    ClassName :: variable(const , static) || Self:: variable(const , static)  (perefered)
 * 
 */
class Person
{
    // Access Modifiers  
    //  public $name="iti";
    //  private $id="35";
    //  protected $phone="0489621";
    public $name;
    private $id;
    protected $phone;
    public const PI = 3.14;
    static $count = 0;


 // constructor : function __construct 
//  function __construct($person_name="default name",$person_id="default id",$person_phone="default phone")
//  {

//     // class = parameter 
//     $this->name=$person_name;
//     $this->id=$person_id;
//     $this->phone=$person_phone;

//  }


    /**
     * properites will take default values and others not 
     * put properities that will  not take default values in first
     */
    function __construct($person_name, $person_phone = "default phone")
    {

        // class = parameter 
        $this->name = $person_name;
        $this->phone = $person_phone;
        self::$count++;
    }

    function getId()
    {
        echo $this->id;
    }
    function setId($p_id)
    {
        echo $this->id = $p_id;
    }
    function getPhone()
    {
        echo $this->phone;
    }
    function setPhone($p_phone)
    {
        echo $this->phone = $p_phone;
    }


    function showData()
    {
        // echo "hello";
        // this ===> Refers to the current object
        // echo $this->name ,"<br>",$this->id,"<br>",$this->phone,"<br>" 
        // // self ==> refer current class ==> ClassName :: variable(const , static) || Self:: variable(const , static) 
        // , "PI = ", self::PI ;
        echo $this->name, "<br>", $this->getId(), "<br>", $this->getPhone(), "<br>"
        // self ==> refer current class ==> ClassName :: variable(const , static) || Self:: variable(const , static) 
        , "PI = ", Person::PI, "<br>", "count = ", self::$count;
    }
}

// $p =new Person("iti",22,"0125978"); // create object

/**
 * not depend on order  ==>pro_name : value
 * put value for specific properity  ==> pro_name : value ==> person_phone:"123456"
 * 
 */
$p = new Person(person_name: "iti", person_phone: "123456"); // create object
// $p2 = new Person(person_name: "iti2", person_phone: "123456"); // create object
// $p3 = new Person(person_name: "iti3", person_phone: "123456"); // create object
// $p4 = new Person(person_name: "iti4", person_phone: "123456"); // create object
// $p5 = new Person(person_name: "iti5", person_phone: "123456"); // create object

// $p->getId();
// $p->setId(66);
// // $p->name="iti cairo"; // update on properity
// // var_dump($p);
// $p->showData();
// // var_dump($p);


/**
 * Priceples of OOP 
 * ============= inheritance (extends)
 * inheritance  (++ accepted , -- not accepted)
 *   -- single inheritance  ++ (parent < child )
 *   -- multi level ingeritance ++ (parent < child  < child)
 *   -- hichracial inheritace ++  (parent <br (child , child))
 *   -- multible inheritace --
 *   -- hypried inheritance -- (hichracial inheritace,multible inheritace)
 * 
 * 
 * ========== Encapsulation (كبسوله)
 * getter  ==> get data
 * setter  ==> set data
 * 
 * ================== polymorphism  (تعدد الاشكال )
 * overriding   ++ (accepted ) : same name of funtion , arguments  (prototype )but return is different 
 * overloading  -- (not accepted): same name of funtion  , but arguments  and  return is different 
 */
echo "<br>******************************* <br>";
class Human extends person
{
    public $address;   // single inheritance

    function __construct($name, $phone, $address)
    {
        // call parent constructor 
        parent::__construct($name, $phone);  // $this->name=$name  ; $this->phone=$phone;
        $this->address = $address;
    }
    function allData()
    {   
        // parent :: parent class
        // parent::showData();
        echo "<br>", $this->address, "<br>" , parent::getPhone(),"<br>";
    }

     # override
    function showData()
    {
        return "hello";
    }
 
}
// extend construcor 
$h = new Human(name: "human class", address: "tanta", phone: "1234568");
// $h->setId(99);
// $h->getId();
// var_dump($h);
$h->allData();
