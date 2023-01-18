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


     /* Variable Typing */
?>