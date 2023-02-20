<?php

    /* 5. PHP Functions and Objects 

    여기서는 다른 프로그래밍 언어에서도 배웠던 함수, 객체에 대해 공부해볼 것입니다.
    여기서 객체는 함수와 함수가 사용하는 데이터를 클래스라는 구조내에 통합한것을 의미합니다.
    함수는 일전의 것들과 마찬가지로 특정 작업을 하는 코드를 모듈화 한것이라 보면 됩니다. 
    
    이 챕터에서는 함수, 그리고 객체에 대해 공부해볼것이다. */

    echo "hello this is Functions, Object Practice page.<br><br>";
    

    
    /* 5.1 PHP Functions */

    // echo date("l");
    // echo phpinfo(); // 매우 유용한 정보지만 해커에게도 유용 따라서 유의해라.
    // echo strrev(" .dlrow olleH") . "<br>"; // Reverse String
    // echo str_repeat("Hip ", 2) . "<br>"; // Repeat String
    // echo strtoupper("hooray!") . "<br>"; // String to uppercase
    

    /* 5.1.1 Defining a Function 
    
    여타의 언어들과 유사하다. */

    // function function_name([parameter])
    // {
    //      Statesment;
    // }


    /* 5.1.2 Returning a Value */

    // $lowered = strtolower("aNY # of Letters and Punctuation you WANT<br>") . "<br>";
    // echo $lowered;

    // $ucfixed = ucfirst("any $ of letters and punctuation you want") . "<br>";
    // echo $ucfixed;
  
    // function fix_names($n1, $n2, $n3)
    // {
    //     $n1 = ucfirst(strtolower($n1));
    //     $n2 = ucfirst(strtolower($n2));
    //     $n3 = ucfirst(strtolower($n3));

    //     return $n1 . " " . $n2 . " " . $n3;
    // }

    // echo fix_names("WILLIAM", "henry", "gatES");


    /* 5.1.3 Returning an Array */

    // function fix_names($n1, $n2, $n3)
    // {
    //     $n1 = ucfirst(strtolower($n1));
    //     $n2 = ucfirst(strtolower($n2));
    //     $n3 = ucfirst(strtolower($n3));

    //     return array($n1, $n2, $n3);
    // }

    // $names = fix_names("WILLIAM", "henry", "gatEs");
    // echo $names[0] . " " . $names[1] . " " . $names[2];
  
    
    /* 5.1.4 Passing Arguments by Reference 
    
    참조 방식은 변수를 '실'에 연결시키고 실의 끝을 함수에 연결하는 것과 같다. 
    실을통해 함수는 변수에 접근하는 것이다. 그리고 이를 통해 함수가
    변수의 값을 변경시킬 수 있는 것이다. */

    // $a1 = "WILLIAM";
    // $a2 = "henry";
    // $a3 = "gatES";

    // echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    // fix_names($a1, $a2, $a3);
    // echo $a1 . " " . $a2 . " " . $a3; // 원본이 변경되었음을 알 수 있다.
    
    // function fix_names(&$n1, &$n2, &$n3) // 참조로 매개변수 주기.
    // {
    //     $n1 = ucfirst(strtolower($n1));
    //     $n2 = ucfirst(strtolower($n2));
    //     $n3 = ucfirst(strtolower($n3));
    // }


    /* 5.1.5 Returning Global Variables

     전역 변수. 모든 코드 내에서 접근 가능한 변수.
    참조로 주지 않아도 값이 변경되는 것을 볼 수 있다. 
    하지만 전역변수는 최대한 사용을 자제하는게 좋겠지? */

    // $a1 = "WILLIAM";
    // $a2 = "henry";
    // $a3 = "gatES";

    // echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    // fix_names($a1, $a2, $a3);
    // echo $a1 . " " . $a2 . " " . $a3; // 원본이 변경되었음을 알 수 있다.
    
    // function fix_names()
    // {
    //     global $a1; $a1 = ucfirst(strtolower($n1));
    //     global $a2; $a2 = ucfirst(strtolower($n2));
    //     global $a3; $a3 = ucfirst(strtolower($n3));
    // }


    /* 5.1.6 Recap of Variable Scope

     변수의 종류는 세가지가 있다. 
     1. 지역 변수 : 정의된 곳에서만 사용 가능 한 것.
     
     2. 전역 변수 : 모든 곳에서 사용 가능 한 것.

     3. 정적 변수 : 선언된 함수 내에서만 사용가능하지만 여러번의
    반복 호출에도 값이 유지되는 변수. */



    /* 5.2 Including and Requiring Files

     php 에서는 자주 사용되는 함수들을 따로 별도의 파일에 저장하거나
    혹은 불러 올 수 있는데 바로 'Include' 와 'Require' 이다. */
  

    /* 5.2.1 The include Statement 

    'include' 명령어를 통해 특정 파일과 그 내용을 가져오도록 할 수 있다.*/

    //  include "library.php"; 
    

    /* 5.2.2 Using include_once 

     include 과정에 여러번 포함하게 되면 오류가 생기게 된다. 
    따라서 그것을 막기위해 'include_once'를 사용해 한번만 include하게 하는것이다.
    이 경우 추후에 include, include_once가 와도 자연스럽게 무시한다. */
  
    // include_once "library.php";


    /* 5.2.3 Using require and require_once 
 
     앞서 include의 문제점은 요청후, 파일이 들어왔든 안왔든 프로그램이 실행된다. 
    반면에 require, require_once는 반드시 파일이 들어온 후에 프로그램이 실행되므로
    혹시나 예상치 못한 문제를 예방할 수 있다. */

    // require_once "library.php";



    /* 5.3 PHP Version Compatibility 
  
     php 는 많은 버전이 있고, 버전에 따라 사용가능한 function 들도 다르기 때문에
    'function_exists' 함수를 통해 확인해볼 수 있다. */
  
    // if (function_exists("array_combine"))
    // {
    //     echo "Function exists<br>";
    //     echo "php version : " . phpversion();
    // }
    // else
    // {
    //     echo "Function does not exist - really it is";
    // }



    /* 5.4 PHP Objects

     객체 지향 프로그래밍, 객체는 함수와 데이터가 묶인 것으로 이를 통해
    웹사이트 등에서 고객의 정보를 저장하고, 관리하는 객체를 생성해 이용할 수 있다. */


    /* 5.4.1 Terminology (용어) 

    - 클래스 : 데이터, 함수를 결합한 복합체. 
    - 객체 : 클래스를 기반으로 만들어진 인스턴스.
    - 프로퍼티 : 객체와 관련된 데이터.
    - 매써드 : 객체의 함수. 
    - 캡슐화 : 해당 클래스 외부에서의 접근을 막기 위해
    해당 클래스 내부 혹은 매써드를 통해서만 변경등이 가능하게 하는 것.
    디버깅에 있어서 많은 장점을 보입니다. 
    - 상속 : 기존의 클래스와 유사한 성질의 클래스를 만드는 것. 
    상위 클래스와 하위 클래스로 나뉘어 지게되며, 상위 클래스가 변경되면
    하위 클래스에도 영향을 끼치게 된다. */


    /* 5.4.2 Declaring a Class 
    
    객체를 생성하기전에 class를 만들어주어야 한다. 
    클래스 : 프로퍼티 + 매써드 + 클래스 네임. */

    // $object = new User;
    // print_r($object);

    // class User
    // {
    //     public $name, $password;

    //     function save_user()
    //     {
    //         echo "Save User code goes here";
    //     }
    // }


    /* 5.4.3 Creating an Obejct 
    
    'new' 키워드로 클래스로 object 만들기. 
    ex) $object = new Class; */

    // $object = new User;
    // $temp = new User('name', 'password');


    /* 5.4.4 Accessing Objects 
     object 내부에 접근할때 $object->name 처럼 내부 변수에는 '$'를 붙이지 않는 모습. 
     그 이유는 $object->$name 으로 할경우 $name 에 할당된 변수를 참조하려고 한다. 
     $name이 아니라, 그래서 앞에 '$'를 생략하는 것이다. */

    // $object = new User;
    // print_r($object); echo "<br>";

    // $object->name = "Joe";
    // $object->password = "mypass";
    // print_r($object); echo "<br>";
    // $object->save_user();

    // class User
    // {
    //     public $name, $password;

    //     function save_user()
    //     {
    //         echo "Save User code goes here<br>";
    //     }
    // }



    /* 5.4.5 Cloning Objects 
    
     객체 생성후 매개 변수로 전해줄때 참조로 전달된다. 
    즉, 객체를 할당해도 객체 전체가 복사 되지는 않는다.
    
     아무튼 그건 그거고, 아래의 결과를 보면 '=' 연산자를 이용해 부여하면
     같은 객체를 참조하게 되어서 property를 변화시키면 같이 변하게 된다. 
     이를 막기 위해서는 'clone' 키워드를 사용하면 된다. */

    // $object1 = new User();
    // $object1->name = "Alice";
    // // $object2 = $object1;
    // $object2 = clone $object1;
    // $object2->name = "Amy";

    // echo "object1 name assigned Alice and Now : " . $object1->name . "<br>";
    // echo "object2 name assigned Amy and Now : " . $object2->name . "<br>";

    // class User
    // {
    //     public $name;
    // }


    /* 5.4.6 Constructors 
     객채 생성시 클래스에 인자 줘서 생성자로 하여금 내부 property를 
    다른값으로 초기화하기. class 내부에 __construct() 라는 생성자를
    만들어 주면된다. 에제를 한번 보자. */

    // class User
    // {
    //     function __construct($param1, $param2)
    //     {
    //         // Constructor instructor.
    //     }
    // }


    /* 5.4.7 Destructors 
     소멸자는 데이터베이스, 클래수 내부에서 예약한 리소스에 대한 연결을
    해제 할 수 있다. 이렇게 해제해주지 않으면 계속 차지 하기 때문에
    소멸자로 꼭 연결을 해지해주는게 좋다. */

    // class User
    // {
    //     function __destruct()
    //     {
    //         // Destructor goes here
    //     }
    // }


    /* 5.4.8 Writing Methods 
     Method(클래스 내 function) 작성시 유의 사항. 
    - (__)로 시작해서는 안됨. ex)'__construct'
    - '$this' 라는 특별한 변수를 통해
    현재 object의 property에 접근가능. */

    // class User
    // {
    //     public $name, $password;

    //     function get_password()
    //     {
    //         return $this->password;
    //     }
    // }

    // $object = new User;
    // $object->password = "secret";

    // echo $object->get_password();


    /* 5.4.9 Declaring Properties 
     PHP 에서는 반드시 class 내부의 property를 명시하지 않아도 암시적으로
    생성되곤 한다. 다음의 예시를 보면 알 수 있다. 
     하지만 이와 같이 암시적으로 될 경우 의도치 않은 버그가 생길 수 있으며 
    그렇기 떄문에 권장하지 않는다. 항상 명시적으로 property를 선언해주도록 해라.*/

    // $object1 = new User;
    // $object1->name = "Doo";

    // echo $object1->name;

    // class User {}

    /* 유효한 할당과 유효하지 않은 할당들.
     property 로 유효한것은 상수이여야 한다. 표현식, 함수는 허락되지않음. */

    // class Test
    // {
    //     public $name = "Paul Smith"; // 유효
    //     public $age = 42; // 유효
    //     public $time = time(); // 유효x, 함수
    //     public $score = $level * 2; // 유효x, 표현식 사용
    // }


    /* 5.4.10 Declaring Constants 
     define 함수로 전역 상수를 만들어내는 것처럼 클래스 내부에
    상수를 정의할 수 있다. 
     그리고 여기서 self, 와 '::' 연산자를 사용해 object를 사용하지않고
    내부함수를 바로 호출하는 모습을 볼 수 있다. 상수는 변하지 않는것에 주의해라. */
    
    // Translate::lookup(); // 객체 없이 클래스내의 함수 호출.

    // class Translate
    // {
    //     const ENGLISH = 0;
    //     const SPANISH = 1;
    //     const FRENCH = 2;
    //     const GERMAN = 3;

    //     static function lookup()
    //     {
    //         echo self::SPANISH;
    //     }
    // }


    /* 5.4.11 Property and Method Scope 
     php 에서도 마찬가지로 property와 method의 범위를 지정하는 세가지 키워드가 있다. 
    1. public, 2. protected, 3. private 이다. 
     1. public(var) : var, public으로 정의 되었을 경우. method는 default로 public이다. 
    어디에서든 참조 할 수 있다. 
     2. protected
    오직 object의 클래스와 subclass 에서만 참조 가능하다. 
     3. private
    오직 동일 클래스의 method 에서만 접근가능하며, subclass 조차 접근이 불가능. */
    
    // class Example
    // {
    //     var $name = "Michael";
    //     public $age = 23;
    //     protected $usercount;

    //     private function admin()
    //     {
    //         // admin code.
    //     }
    // }


    /* 5.4.12 Static Methods 
     object 가 아닌 class 에서 호출되는 static method. 
    static method는 어느 object property에도 접근 할 수 없다는데, 예시를 보자.
    클래스 자체에 관한 행동을 할때 유용하며, '->'가 아닌 '::'를 사용함에 주의하라. */
    
    // class User
    // {
    //     static function pwd_string()
    //     {
    //         echo "Please enter your password : ";
    //     }
    // }

    // User::pwd_string(); // '::'를 이용해 접근하는것 '->'는 사용시 error 발생.


    /* 5.4.13 Static Properties 
     object 별로 나눠 관리 하는게 아닌 ex)유저간 비밀번호, 생성시점
    class 가 모두 공유하는 property, method 는 static 의 형태로 사용됩니다. ex)전체 유저수
    또한 static의 경우 object 없이도 접근이 가능합니다. 
    static property의 경우에는 불가, static method는 
    클래스 내에서 정적속성, 상수에 액세스 하기위해서 self 키워드를 사용한다. */
    
    // $temp = new Test();

    // echo "Test A: " . Test::$static_property . "<br>";
    // echo "Test B: " . $temp->get_sp() . "<br>";
    // echo "Test C: " . $temp->static_property . "<br>"; // 출력 안됨.

    // class Test
    // {
    //     static $static_property = "I'm static";

    //     function get_sp()
    //     {
    //         return self::$static_property; // 예시.
    //     }
    // }


    /* 5.4.14 Inheritance 
     클래스를 재사용하기 위해 기존의 클래스에서 'extends' 키워드를 이용해 
    서브클래스를 생성해 사용하는 것. 코드 재작성하는 수고를 줄일 수 있다. */

    // $object = new Subscriber;
    // $object->name = "Fred";
    // $object->password = "pword";
    // $object->phone = "012 212 2222";
    // $object->email = "fred@blog.com";
    // $object->display();

    // class User
    // {
    //     public $name, $password;

    //     function save_user()
    //     {
    //         echo "Save User code here";
    //     }      
    // }

    // class Subscriber extends User
    // {
    //     public $phone, $emil;

    //     function display()
    //     {
    //         echo "Name: " . $this->name . "<br>";
    //         echo "Pass: " . $this->password . "<br>";
    //         echo "Phone: " . $this->phone . "<br>";
    //         echo "Email: " . $this->email . "<br>";
    //     }
    // }


    /* 5.4.14.1 The parent keyword 
     서브클래스에 기존클래스와 똑같은 method가 있을경우, override 되서 해당 method
    가 작동된다. 하지만 기존클래스의 method가 쓰고싶을때가 있는데 'parent' 연산자를
    사용하면 된다. */

    // $object = new Son;
    // $object->test();
    // $object->test2();

    // class Dad
    // {
    //     function test()
    //     {
    //         echo "[Class Dad] I am your Father<br>";
    //     }
    // }

    // class Son extends Dad
    // {
    //     function test()
    //     {
    //         echo "[Class Son] I am Luke<br>";
    //     }

    //     function test2()
    //     {
    //         parent::test(); // self::method(); -> 현재클래스의 method 호출시.
    //     }
    // }


    /* 5.4.14.2 Subclass constructors
     서브클래스의 생성자를 선언할때, php는 부모 클래스의 생성자까지는 자동 호출해주지 않는다. 
    따라서 부모 클래스도 initialization 되기 원한다면, 하위 클래스에서 부모 생성자를
    호출해줘야 한다. */

    // $object = new Tiger();

    // echo "Tigers have...<br>";
    // echo "Fur: " . $object->fur . "<br>";
    // echo "Stripes: " . $object->stripes;

    // class Wildcat
    // {
    //     public $fur;

    //     function __construct()
    //     {
    //         $this->fur = "TRUE";
    //     }
    // }

    // class Tiger extends Wildcat
    // {
    //     public $stripes;

    //     function __construct()
    //     {
    //         parent::__construct();
    //         $this->stripes = "TRUE";
    //     }
    // }


    /* 5.4.14.3 Final methods 
    서브클래스가 상위클래스의 methd를 oveerride 하는게 싫다면 final keyword를 사용하자. */

    // class User
    // {
    //     final function copyright()
    //     {
    //         echo "This class was written by Joe smith";
    //     }
    // }










?>