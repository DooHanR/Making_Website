<?php
    // semicolon 반드시 사용.
    // echo "hello world\n<br>";
    
    /* 
    여러줄 주석
    가나다라
    마바사아
    자카파하
    */

    // 한줄 주석 

    // '$' symbole : variable 의미.
    $x += 10;
    $mycounter = 1;
    $mystring = "Hello";
    $myarray = array("One", "Two", "Three");

    /* '$' python 처럼 엄격하게 지켜야할 규칙이
    없는 편이긴하지만 지키는게 가독성등에 도움이 되긴 한다. */

    /* Variables */


    /* string variables */
    $username = "Fred Smith\n<br>";
    // echo $username;
    $current_user = $username;
    // echo $current_user;
    

    /* numeric variables */
    $count = 17.5;
    // echo $count;


    /* Arrays */
    $team = array('Hello<br>', 'This<br>', 'is<br>', 'my<br>',
                'world<br>');
    // echo $team[0];
    // echo $team[1];
    // echo $team;


    /* Two-dimensional arrays */
    $oxo = array(array('x', ' ', 'o'),
                 array('o', 'o', 'x'),
                 array('x', 'o', ' '));

    // print "<br>\n";
    // echo $oxo[0][0];
    // print "<br>\n";

    /* 
    Variable-naming rules
     
    대부분 여타 다른것과 유사하며 주의점이라면
    case-sensitive : ABC와 abc는 다른것.
    */


    /* Operators */
    $test = 6 + 2;
    // print "$test<br>\n";


    /* Arithmetic operators */
    $test = 5 + 1;
    ++$test;
    --$test;
    $test = $test**2; // 아 할당을 해줘야 바뀐다.
    // print "$test<br>\n";


    /* Assignment operators */
    // =, +=, -=, *=, /=, .=, %=
    $test += 1;
    $test = $test + 1;    
    // print "$test<br>\n";


    /* Comparison operators */
    // ==, !=, >, <, >=, <=, <>, ===, !==
    

    /* Logical operators */
    // &&(and), and(낮은 우선순위), ||(or), or(낮은 우선순위), !, xor
    $ammonia = True;
    $bleach = False;
    $ingredient = $ammonia xor $bleach;
    // print "$ingredient<br>\n";


    /* Varialbe Assignment. */
    $x += 10; // x = x + 10;
    $y -= 10; // y = y - 10;


    /* Variable Incremeting and decrementing */
    $x = 10;
    $y = 0;
    if (++$x == 10) print "$x<br>\n"; // 이 둘의 차이에 주목하라.
    // if ($y-- == 0) print "$y<br>\n";


    /* String concatenation */
    $msgs = 5;
    // echo "You have " . $msgs . " messages.<br>\n";
    // print "You have $msgs messages.<br>\n"; // '.'를 이용, append 한다


    /* String types */
    // 작은 따옴표(''), 큰 따옴표("")의 차이.
    $info = 'Preface variables with a $ like this : $variable';  
    // echo "This week $msgs people have viewed your profile<br>\n";


    /* Escaping characters */
    // $text = 'My splling's atroshus'; // 에러가 발생하는 경우
    $text = 'My splelling \'s still atroshus'; // 정상 작동.
    $text = "She wrote upon it, \"Return to sender\".<br>\n";
    // print $text;

    $heading = "Date\tName\tPayment<br>\n"; // \t, \n, \r 같은경우 가능.
    // print $heading;


    /* Multiline Commands */
    $author = "Steve Ballmer";

    // echo "Developers, developers, developres, developers
    // developers devloepelflsd kdskfsld
    
    // - $author.";

    $author = "Brian W. Kernighan";

    // echo <<<_exam
    // Debugging is twice as hard as writing the code in the first place.
    // Thre for, if you write the code as cleverly as possible, you are,
    // By definition, not smart enought to debug it.

    // - $author.
    // _exam;

    /* 위의 방식은 escape 문자가 필요가 없다라는 장점이 있고 html
     그대로 가져오는게 가능하다. 반면에 echo는 여러 escape 문자가 필요할 것이다.
     또한 '<<<'이 main 이며 추후에 나오는것은 이름에 불과하고 여타 function과
     구별하기위해 '_이름"의 형식으로 한 것이다. 이름에 정해진 규칙은 없다. 
     또한 주석사용에 유의하자. */


     /* Variable Typing 
      PHP는 느슨한 언어이다. 따라서 변수가 반드시 사전에 미리 선언될 필요가 없다.
    심지어 문맥에 맞춰서 변수의 type을 바꾸는 기능을 하기도 한다.*/

    $number = 12345 * 67890; // 838102050, 숫자 변수.
    // echo substr($number ,3 ,1); // substr은 string 대상 함수이다.

    $pi = "3.1415927"; // string 변수.
    $radius = 5; // 숫자 변수
    // echo $pi * ($radius * $radius); // string을 숫자처럼 대하는 모습.

    /* 이런 형변환은 여러모로 편하긴 하지만, 항상 작동하는게 아니니까 주의
    하도록 하자. */


    /* Constants 
     constant는 program의 remainder에 set 되어서 변하지 않는 값을 의미한다.
    constant는 보통 모두 대문자로 쓰는게 좋다. 그리고 constant를 사용할때
    '$'가 선행하지 않는다는을 기억하자.*/

    define("ROOT_LOCATION", "/usr/local/www/");
    $directory = ROOT_LOCATION;
    // echo ROOT_LOCATION; // $가 사용되지 않는 constant의 모습.
    // echo $directory


    /* Predefined Constants 
     php 에는 유용한 사전에 정의된 constant 들이 몇개 있고
    혹시나 중복 정의를 막기 위해 앞뒤로 두개의 언더바(__)를 사용한다.*/

    // __LINE__, __FILE__, __DIR__, __FUNCTION__, __CLASS__, __METHOD__, __NAMESPACE__

    // echo "this is line " . __LINE__ . " of file " . __FILE__;


    /* The Difference Between the echo and print Commands 
     echo와 print의 차이점. 
    echo 는 print보다 빠르지만 함수처럼 작동하지 않아 몇몇가지 출력에 한계가 있는 반면
    print는 함수처럼 변수를 받고 return 하는 형태를 취해, 응용성이 높지만 속도가 다소 느리다.*/

    // $b ? print "TRUE" : print "FALSE"; // 이게 echo로는 안됨.


    /* Functions 
     이전에 배운 함수와 같다. 불필요한 코드의 중복을 막고 수정을 용이하게 해주고
    필요할때마다 간편하게 호출할 수 있다.*/
    
    // function longdate($timestamp)
    // {
    //     return date("l F jS Y", $timestamp);
    // }  
 
    // print longdate(time()) . "<br>\n";


    /* Variable Scope 
     PHP 에서는 변수의 범위를 지정 해 줄 수 있다. 예를 들어 함수 내에서 사용후 
    함수가 return 하면 잊도록, 이게 바로 php 내에서 변수를 사용하는 방식이다.
    혹은 global로 선언해 프로그램 내 어디서든지 접근을 허용할 수 있다. */

    /* Local variables 
     지역 변수는 함수 내에서 생성되고, 사용된후 함수가 return 하기 전에 사라지는
    변수들을 의미한다. */

    // 개선 이전.
    
    // function longdate($timestamp)
    // {
    //     $temp = date("l F jS Y", $timestamp);
    //     return "The date is $temp";
    // }
    

    // 개선 1단계.
    function longdate($timestamp)
    {
        return date("l F jS Y", $timestamp);
    }

    $temp2 = longdate(time());
    print $temp2;
?>