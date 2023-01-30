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

    // $month = "March"; // assign

    // if ($month == "March") echo "It's spring time"; // equality

    // php 에서는 자동 형변환이 자주 일어난다. 다음을 보자.

    // $a = "1000";
    // $b = "+1000"; // 둘 모두 string.

    // if ($a == $b) echo "1"; // 자동 형변환이 사용된 예
    // if ($a === $b) echo "2"; // '===' 연산자 사용으로 자동 형변환이 일어나지 않음

    // if ($a != $b) echo "1";
    // if ($a !== $b) echo "2"; // 이게 출력됨!


    /* Comparison operators */

    // $a = 5; $b = 5;

    // if ($a > $b) echo "$a is greater than $b<br>";
    // if ($a < $b) echo "$a is less than $b<br>";
    // if ($a >= $b) echo "$a is greter than or equal to $b<br>";
    // if ($a <= $b) echo "$a is less than or equal to $b<br>";


    /* Logical operators
    'AND', 'OR', 'XOR', '!' 로 대표되는 연산자 들이다. */

    // $a = 1; $b = 3;
    // echo ($a AND $b) . "<br>";
    // echo ($a or $b) . "<br>";
    // echo ($a XOR $b) . "<br>";
    // echo !$a . "<br>";

    /* OR 연산자는 예상치 못한 문제를 일으킬수 있다.
    예를 들어 A or B 일때, A가 참이면 B를 수행하지 않아서
    문제가 발생할 수 있다. 다음의 예시를 보자 */

    // if ($finished == 1 OR getnext() == 1) exit; // getnext() 가 영원히 실행되지 않음

    // $gn = getnext(); // 미리 실행시켜놓기.
    // if ($finished == 1 OR $gn == 1) exit;

    // if (getnext() == 1 OR $finsiehd == 1) exit;// 함수를 앞으로.

    // echo "i really hate sincheonge<br>\n";



    /* Conditionals (1/30) 
     오늘은 조건문에 대해서 배운다. 지금 까지 익히 해왔던
    'if', 'switch', '?' 에 해당하며 조건을 만족할때까지 반복하는 것도 공부해본다. */

    /* The if Statement */

?>
