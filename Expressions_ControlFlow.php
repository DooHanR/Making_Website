<?php

    /* 이곳에서는 PHP 프로그래밍이 실제로 어떻게 작동하고
    program 의 flow을 어떻게 컨트롤 하는지에 대해 공부할 것이다. */


    /* Expressions 
     표현식은 값, 변수, 연산자, 함수의 조합을 통해 값을 return 하는 것이다.
    ex) y = 3 (|2x| + 4) 와 같이 말이다.*/
    
    
    /* TRUE OR FALSE? 
     TRUE, FALSE 도 predefined 된 상수이며 소문자의 형태로 사용하는게
    보다 안정적이다. 소문자의 경우는 재정의를 방지하기 때문이다. 
    하지만 대문자를 사용할 경우*/

    // echo "a: [". TRUE . "]<br>"; // 1이 출력.
    // echo "b: [". FALSE . "]<br>"; // PHP에서 FALSE는 NULL. 미출력.
    // echo "c: [". (1==0) . "]<br>";
    // echo "d: [". (1==1) . "]<br>";


    /* Literals and Variables */

    // $myname = "Brian";
    // $myage = 37;

    // echo "a: " . 73 . "<br>"; // numeric literal
    // echo "b: " . "Hello" . "<br>"; // String literal
    // echo "c: " . FALSE . "<br>"; // Constant literal
    // echo "d: " . $myname . "<br>"; // String variable
    // echo "e: " . $myage . "<br>"; // Numeric variable


    // $days_to_new_year = 366 - $day_number; // Expression

    // if ($days_to_new_year < 30)
    // {
    //     echo "Not long now till new year"; // statement
    // }
    // else 
    // {
    //     echo "Many day left till new year"; // statement
    // }
    

    /* Operators 
     여타 다른 언어처럼 다양한 연산자를 지원 한다.
    특히나 '.' 연산자는 string 끼리 연결하는 기능을 한다. 
    
    '+', '=', '^', '<', '++', 'and', '.' 등 다양한 종류가 있다.*/

?>
