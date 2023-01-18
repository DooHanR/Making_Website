<?php
    // semicolon 반드시 사용.
    echo "hello world\n<br>";
    
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

    // Variables

    // string variables
    $username = "Fred Smith\n<br>";
    echo $username;
    $current_user = $username;
    echo $current_user;
    
    // numeric variables
    $count = 17.5;
    echo $count;

    // Arrays
    $team = array('Hello<br>', 'This<br>', 'is<br>', 'my<br>',
                'world<br>');
    echo $team[0];
    echo $team[1];
    echo $team;

    // Two-dimensional arrays
    $oxo = array(array('x', ' ', 'o'),
                 array('o', 'o', 'x'),
                 array('x', 'o', ' '));

    print "<br>\n";
    echo $oxo[0][0];
    print "<br>\n";

    /* 
    Variable-naming rules
     
    대부분 여타 다른것과 유사하며 주의점이라면
    case-sensitive : ABC와 abc는 다른것.
    */

    // Operators
    $test = 6 + 2;
    print "$test<br>\n";

    // Arithmetic operators
    $test = 5 + 1;
    ++$test;
    --$test;
    $test = $test**2; // 아 할당을 해줘야 바뀐다.
    print "$test<br>\n";

    // Assignment operators
    // =, +=, -=, *=, /=, .=, %=
    $test += 1;
    $test = $test + 1;    
    print "$test<br>\n";

    // Comparison operators
    // ==, !=, >, <, >=, <=, <>, ===, !==
    
    // Logical operators
    // &&(and), and(낮은 우선순위), ||(or), or(낮은 우선순위), !, xor
    $ammonia = True;
    $bleach = False;
    $ingredient = $ammonia xor $bleach;
    print "$ingredient<br>\n";

    // Varialbe Assignment.
    $x += 10; // x = x + 10;
    $y -= 10; // y = y - 10;
?>