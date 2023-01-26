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


    /* Operator Precedence, 연산자 우선순위.
     연산자는 종류별로 우선순위가 있고, 우선 순위가 같은 경우에는
    알다시피 나온 순서대로 계산하게 된다. */

    // echo (1 + 2 + 3 - 4 + 5) . "<br>\n";
    // echo (2 - 4 + 5 + 3 + 1) . "<br>\n"; // 순서를 바꿔도 그대로이다
    
    // echo (1 * 2 * 3 / 4 * 5) . "<br>\n";
    // echo (5 * 2 * 1 * 4 / 3) . "<br>\n"; // 이 두개는 바뀌는데?

    // echo (1 + (6) - (20)) . "<br>\n"; // 괄호가 있을경우 해당 부분 먼저
    // echo (2 - (60) + 1) . "<br>\n";


    /* Asoociativity 
     연산자 중의 몇몇은 통상적으로 좌측에서 우측으로 처리 되지만
    몇몇 예외의 경우는 우측에서 좌측을 향해서 처리 된다.
    예를 들어 a!, a++, a--, a+=, a=, a-= 등등이 해당 된다.*/

    $level = $score = $time = 0; // 예시. 우->좌


    /* Relation Operators 
     equality, comparison, logical 연산자 들을 의미한다. */

     /* Equality 
      Equality operator는 '=='로 assign operator인 '=' 와
    헷갈리지 않도록 주의하라. */

?>
