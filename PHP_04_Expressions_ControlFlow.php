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

    /* DeepL을 통한 학습. pdf에도 사용가능하다는 점이 매우 혁명적이다!
    지금까지 내 자신의 영어실력이 굉장히 형편없었음을 깨닫는중. 다시
    인터넷에 대해서 읽어보고 있다. 
    
    오늘까지 웹과 인터넷에 대한 간략한 공부를 해봤고 backend 공부를 위해
    다시 php, sql, javascript 에 대해 공부하게 될 것이다. 
    */



    /* Conditionals (1/30) 
     오늘은 조건문에 대해서 배운다. 지금 까지 익히 해왔던
    'if', 'switch', '?' 에 해당하며 조건을 만족할때까지 반복하는 것도 공부해본다. */


    /* The if Statement 
     php 에서의 if문은 중괄호를 사용하기도 하지만, 단일 라인에 경우는 생략이 가능하다. 
    하지만 중괄호를 생략할 경우, 이게 if문의 구성요소 인지 헷갈릴 경우가 생기고
    의도치 않은 버그가 생길수 있다(apple의 미허가 인증서 오류) */

    // if ($bank_balance < 100)
    // {
    //   $money = 1000;
    //   $bank_balance += $money;
    // }


    /* The else Statement
     조건문이 참이 아닐때, 메인 프로그램이 아닌 다른 동작을 하고싶을때. else문.
    마찬가지로 내용이 적더라도 중괄호는 항상 넣도록 하자! */

    // if ($bank_balnace < 100)
    // {
    //   $money = 1000;
    //   $bank_balance += $money;
    // }
    // else
    // {
    //   $savings += 50;
    //   $bank_balance -= 50;
    // }
    

    /* The elseif Statement 
     else 에 if문을 추가한것이다. 그냥 단순한 여러개의 조건문이라 생각하면 편하다.
     */

    // if ($bank_balnace < 100)
    // {
    //   $money = 1000;
    //   $bank_balance += $money;
    // }
    // elseif ($bank_balance > 200)
    // {
    //   $savings += 100;
    //   $bank_balance -= 100;
    // }
    // else
    // {
    //   $savings += 50;
    //   $bank_balance -= 50;
    // }

    // 무지성 elseif 보다는 switch가 나을때도 있다 (조건이 너무 늘어날때)


    /* The switch Statement */
   
    // switch ($page)
    // {
    //   case "Home":
    //     echo "You selected home";
    //     break;
    //   case "About":
    //     echo "You seleceted About";
    //     break;
    // }


    /* Breaking out 
     일반적으로 switch 에서 break를 쓰는것은 당연하다. 
    사용하지 않을 경우 자연스레 그 밑의 것들도 실행하기 때문인데, 아주
    흔하게 저지르는 오류중 하나이기도 하다. */


    /* Default action 
     모든 경우에 해당되지 않을경우를 고려해 작성해야하는 파트.*/

    // default:
    //   echo "Unrecognized selection";
    //   break;


    /* Alternative syntax 
     switch 에서 중괄호('{}') 대신에 ':' 와 "endswitch'로 대체 가능하다.*/

    //  switch ($page):
    //   case "Home":
    //     echo "You seleceted ..";
    //     break;

      // etc

      // case "Links":
      //   echo "You seleceted..";
      //   break;
      // endswitch; // 기존의 형태는 switch ($page) { ... }

      /* The ? (or ternary) Operator 
       삼항 연산자 '?', print에는 적용되지만 echo에는 x.
      주어진 expression 의 True, False 값에 따라 행동을 다르게
      정해주는 기능을 한다. 예시를 보자. */

      // $enought = $fuel <= 1 ? FALSE : TRUE; // 1 이상이면 True, 아니면 False.

      // 그리고 '?' 연산자는 다소 헷갈리는 부분도 있다. but 익숙해져야 한다.

      // $saved = $saved >= $new ? $saved : $new;
      // saved가 new보다 클때 saved가 할당, 아니면 new가 saved에 할당.



      /* Looping (2/10) 
       컴퓨터의 장점. 다른곳에서도 나온 반복문이다. */

      /* While Loops */

      // $fuel = 10;

      // while ($fule > 1)
      // {
      //   echo "There's enough fuel";
      // }

      // $count = 1;

      // while($count <= 12)
      // {
      //   echo "$count times 12 is" . $count * 12 . "<br>";
      //   ++$count;
      // }

      // 이것보다 더 좋은 방법이 있다.

      // $count = 0;

      // while (++$count <= 12)
      // {
      //   echo "$count times 12 is " . $count * 12 . "<br>";
      // }


      /* Do...while Loops 
       while의 간소한 변형으로, 최소한 한번 실행후 이후 조건 여부로
      실행되기를 결정한다. */
      
      // $count = 1;
      // do {
      //   echo "$count times 12 is " . $count * 12;
      //   echo "<br>";
      // }
      // while (++$count <=12);

      
      /* for Loops 
       루프 컨트롤 자체는 for문에서 해결하고 for문 내부에서 반복 행동을 집중하게 해준다.
      while vs for, while 일때는 조건의 변수가 규칙적으로 변화하지 않을때. */

      // for ($count = 1 ; $count <= 12 ; ++$count)
      // {
      //   echo "$count times 12 is " . $count * 12;
      //   echo "<br>";
      // }


      /* Breaking Out of a Loop 
      루프에 문제가 생겼을 경우 탈출하기 위한 'break', switch 에서도 본것들.
      코드가 여러개의 레이어에 중첩되있어도 'break 2;' 와 같이 여러개의
      레이어를 break 해낼 수 있다. */

      // $fp = fopen("text.txt", 'wb');

      // for($j = 0; $j < 100; ++$j)
      // {
      //   $written = fwrite($fp, "data");
        
      //   if($written == FALSE) break;
      // }

      // fclose($fp);


      /* The continue Statement 
       continue 은 break과 비슷하지만 다소 다르다. 
      현재 반복문을 중단하는건 같지만, break는 그상태에서 탈출하는 반면
      continue는 다음 반복문으로 넘어가게 된다. 해당 루프가 필요 없거나
      프로세서 등을 절약하기 위함. */

      // $j = 11;

      // while ($j > -10)
      // {
      //   $j--;

      //   if ($j == 0) continue; // 0으로 나누는것을 막기 위함.

      //   echo ( 10 / $j ) . "<br>";
      // }



      /* Implicit and Explicit Casting (암시적/명시적 캐스팅) 
       PHP는 다소 느슨한 언어로, type이 계산과정에서 자동으로 변하고는 하는데
      이를 암시적 캐스팅이라 한다. 하지만 의도치 않은 결과가 나오기도 한다.
       그래서 이를 방지하기위해 명시적 형변환을 통해 해결한다.*/

      $a = 56;
      $b = 12;
      $c = $a / $b;
      echo "$c<br>"; // 4.666667 이 호출된다.
      
      $c = (int)($a / $b);
      echo "$c<br>"; // 4



      /* PHP Dynamic Linking 
       한 사이트를 하나의 거대한 php로 작성할 수 있겠지만 이는 실제로는
      매우 비효율적이며 모듈로 나눠서 개발하는 것이 더 큰 도움이 된다. */

?>
