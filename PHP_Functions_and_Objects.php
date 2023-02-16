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


    /* 5.4 PHP Objects*/


    /* 5.4.1 Terminology */


    /* 5.4.2 Declaring a Class */


    /* 5.4.3 Creating an Obejct */


    /* 5.4.4 Accessing Objects */


    /* 5.4.5 Cloning Objects */


    /* 5.4.6 Constructors */


    /* 5.4.7 Destructors */


    /* 5.4.8 Writing Methods */


    /* 5.4.9 Declaring Properties */


    /* 5.4.10 Declaring Constants*/
    

    /* 5.4.11 Property and Method Scope*/
    

    /* 5.4.12 Statice Methods */
    

    /* 5.4.13 Static Properties */
    

    /* 5.4.14 Inheritance*/



?>