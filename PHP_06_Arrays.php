<?php

    /* 6. PHP Arrays 
     여기서는 이제부터 PHP 에서의 배열에 대한 본격적인 공부를 하게 될 것. 
    이전의 C언어와는 다르게 그 성능이 뛰어난 거 같다. */
    
    echo "Hello. this page is for studying PHP Arrays. Good to see you.<br><br>";



    /* 6.1 Basic Access 
     배열은 이어붙인 성냥갑, 이어진 여러개의 구슬처럼 생각할 수 있다. 
    여기서 성냥갑, 구슬은 숫자, 문자열, 또다른 배열이 될 수 있다.
     일부 배열은 숫자 인덱스로 참조될 수 있으며, 알파벳 확인자도 마찬가지입니다. 
    그리고 내장 함수에서 정렬, 추가, 삭제 등 다양한 기능을 제공합니다. 
    또한 n차원의 배열 또한 만들 수 있습니다. */


    /* 6.1.1 Numerically indexed Arrays 
     지역 사무용품 회사를 위한 웹사이트를 만든다 가정. 
    그중 종이 섹션을 개발한다고 생각해봅시다. */

     /* 이 경우에는 자동적으로 비어있는곳에 하나씩 앞에서부터 삽입하게 된다. 
    따라서 0에 Copier .. 3에 Photo 할당되게 되며, paper array의 모든 내용을
    출력하기 위해 print_r 함수를 사용하였다. */

    // $paper[] = "Copier";
    // $paper[] = "Inkjet";
    // $paper[] = "Laser";
    // $paper[] = "Photo";

    // print_r($paper);

    /* 아래의 코드는 각각의 item 의 배열내의 정확한 위치를 명시해준다. 
    보시다시피, 더 많은 타이핑을 해야하고 제거하거나 삽입할때 더 많은 수고를
    해야하기 때문에, 특정한 순서를 원하지 않는 이상 권장하지 않는 방법이다. */
    
    // $paper[0] = "Copier";
    // $paper[1] = "Inkjet";
    // $paper[2] = "Laser";
    // $paper[3] = "Photo";

    // print_r($paper);

    /* 실제 웹사이트에서는 print_r을 쓰지않기 떄문에 다른 방법을 이용한
    출력을 보여줍니다. 이렇게 배열을 표현하는 여러방식을 봤지만 이는 매우
    간소한 것으로, 앞으로 더 보겠지만 다른 type의 array에 대해 볼 것이다. */

    // $paper[] = "Copier";
    // $paper[] = "Inkjet";
    // $paper[] = "Laser";
    // $paper[] = "Photo";

    // for($i = 0; $i < 4 ; ++$i)
    // {
    //     echo "$i: $paper[$i]<br>";
    // }


    /* 6.1.2 Associative Arrays 
     기존의 인덱스를 통해 배열내의 요소를 추적하는 것은 무엇이 어느것을
    가리키는지 파악할 필요가 있으며, 다른 프로그래머가 이해하기 어려울 수 있다. 
     이 때문에 연관 배열(Associative Array)이 나오게 된다.
    이 배열을 이용하면 각 요소를 숫자가 아닌 이름으로 참조할 수 있다.
    다음의 예시를 보자. */

    // $paper['copier'] = "Copier $ Multipurpose";
    // $paper['inkjet'] = "Inkjet Printer";
    // $paper['laser'] = "Laser Printer";
    // $paper['photo'] = "Photographic Paper";

    // echo $paper['laser'];

    /* 이처럼 기존의 위치만 나타내던 숫자 인덱스말고 연관 배열을 사용하면 
    직관적으로 key 와 value를 파악할 수 있는, php 의 특징이다. 
     특히 XML, HTML 에서 정보를 뽑아낼때 유용하다.
    $html['title'] = ... , $html['body*] ... 와 같이 활용가능하기 때문이다. 
    이런 방식을 통해 페이지 내의 link를 array로 분해할 수 있는 장점도 있다. */


    /* 6.1.3 Assignment Using the array Keyword 
     'array' keyword를 통해 여러개를 한꺼번에 할당하기. */

    //  $p1 = array("Copier", "Inkjet", "Laser", "Photo");

    //  echo "p1 element: " . $p1[2] . "<br>";

    //  $p2 = array('copier' => "Copier & Multipurpose",
    //              'inkjet' => "Inkjet Printer",
    //              'laser' => "Laser printer",
    //              'photo' => "Photographic Paper");

    // echo "p2 element: " . $p2['inkjet'] . "<br>";

    /* array keyword를 통해 배열을 만드는 모습이다. 이때 두번째
    연관배열을 만들떄 '=>' 연산자를 사용하는 것에 주의해라. 
    이는 'key=>value' 형식이다. */



    /* 6.2 The foreach...as Loop 
     php 개발자가 더 편하게 사용하기 위해 만든 'foreach.. as' loop가 있다. 
    이 루프는 배열 내의 모든 요소를 한번에 하나씩 훑어보며 무언가를 수행할 수 있다.
    심지어 맨처음에서 시작하고, 끝에서 마무리 하기때문에 몇개가 있는지 파악할 필요도 없다. */

    /* 고전 버전 */

    // $paper = array("Copier", "Inkjet", "Laser", "Photo");
    // $j = 0;

    // foreach($paper as $item)
    // {
    //     echo "$j: $item<br>";
    //     ++$j;
    // }

    /* 연관 배열 버전.*/

    // $paper = array('copier' => "Copier & AndSoWhat",
    //                'inkjet' => "Inkjet Printer",
    //                'laser' => "Laser Printer",
    //                'photo' => "Photographic Paper");

    // foreach($paper as $item => $description)
    // {
    //     echo "$item: $description<br>";
    // }

    /* 연관 배열을 직접 만든 myEach와 list 함수를 통해 살펴보기 */

    // $paper = array('copier' => "Copier & AndSoWhat",
    // 'inkjet' => "Inkjet Printer",
    // 'laser' => "Laser Printer",
    // 'photo' => "Photographic Paper");

    // while (list($item, $description) = myEach($paper))
    //     echo "$item: $description<br>";

    // function myEach($array)
    // {
    //     $key = key($array);
    //     $result = ($key === null) ? false :
    //               [$key, current($array), 'key', 'value' => current($array)];
    //     next($array);
    //     return $result;
    // }

    /* list function 사용예시 */

    // list($a, $b) = array('Alice', 'Bob');
    // secho "a=$a, b=$b;"


    /* 6.3 Multidimensional Arrays 
     php 에서도 마찬가지로 다차수 배열이 가능하다! */

    /* 이 예시는 연관 배열을 이용한것으로 배열안에 배열을 만들어낸 모습이다. 
    그후 foreach 문을 반복적으로 사용해서 출력한다. 
    echo $products['misc']['glue]; 와 같은 방식으로 특정 내용을 뽑아낼 수 있음.*/

    // $products = array (
    //     'paper' => array(
    //         'copier' => "Copier & Multipurpose",
    //         'inkjet' => "Inkjet Printer",
    //         'laser' => "Laser printer",
    //         'photo' => "Photographic Paper"),

    //     'pens' => array(
    //         'ball' => "Ball point",
    //         'hilite' => "Hightlighters",
    //         'marker' => "Markers"),


    //     'misc' => array(
    //         'tape' => "Sticky Tape",
    //         'glue' => "Adhensives",
    //         'clips' => "Paperclips")
    //     );

    //     echo "<pre>";

    //     foreach($products as $section => $itmes)
    //         foreach($itmes as $key => $value)
    //             echo "$section:\t$key\t($value)<br>";

    //     echo "</pre>";

        /* Creating a multidimensional numeric array 
        출력 결과를 예상하고 어떻게 작동하는지 잘 파악해둬라. */

        // $chessboard = array(
        //     array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
        //     array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
        //     array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        //     array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        //     array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        //     array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        //     array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
        //     array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
        //   );
        
        //   echo "<pre>";
        
        //   foreach($chessboard as $row)
        //   {
        //     foreach ($row as $piece)
        //       echo "$piece ";
        
        //     echo "<br>";
        //   }
        
        //   echo "</pre>";



    /* 6.4 Using array Functions 
     array function 에는 다양한 종류가 있고, 앞서 봤던 'list', 'each'가 그에 해당한다. 
    하지만 그중에서도 특히 중요한것들을 다뤄볼 필요가 있다! */


    /* 6.4.1 is_array 
     배열과 변수가 똑같이 '$'를 사용하기 때문에 구별할 필요가 있다. 
    그래서 'is_array' 함수를 사용하면 알 수 있음. */

    // echo (is_array($fred)) ? "Is an array<br>" : "Is not an array<br>";


    /* 6.4.2 count 
    'each', 'foreach..as' 로 배열의 내용을 파악할 수 있긴 하지만
    정확한 수를 알야아 할떄는 'count' 함수를 이용해야 한다. 
    또한 재귀 함수에서도 사용가능한데, 두번째 인자가 추가되어
    '0' 일때는 최상위 레벨만, '1' 모든 하위 배열에 대해서 시행한다. */

    // echo count($fred);
    // echo count($fred, 1);


    /* 6.4.3 sort 
     php 에서의 정렬은 단순히 정렬된 새로운 배열을 만들어 내는게 아니라
    제공받은 배열에 대해 작동한다는 점에 주의 하십시오.
     또한 단순 정렬뿐만 아니라 두번째 인자로 무엇을 넣느냐에 따라 숫자나
    알파벳 순으로 정렬 할 수도 있습니다.
     그리고 성공시 TRUE, 실패시 ERROR를 반환한다는 점도 알아두십시오. */

    // sort($fred, SORT_NUMERIC);
    // sort($fred, SORT_STRING);
    // rsort($fred, SORT_NUMERIC); // 역순
    // rsort($fred, SORT_STRING); // 역순


    /* 6.4.4 shuffle 
     마구잡이로 섞을때 필요합니다. 정렬과 마찬가지로 제공된 배열에 대해
    작업을 합니다. */

    // shuffle($cards);


    /* 6.4.5 explode 
     특정 문자열을 문자를 기준으로 여러개의 배열에 나눌 수 있는 기능. 마치
    폭탄으로 폭팔 시켜서 이리저리 흩어지게 하는 것과 같다. */

    // $temp = explode(' ', "This is a sentence with seven words<br>");
    // print_r($temp);

    // $temp = explode('***', "A***sentence***with***asterisks<br>");
    // print_r($temp);

    
    /* 6.4.6 extract 
     배열의 키/값 쌍을 php 변수로 바꾸는게 편리할 때가 있다. 
    php 에 전송된 $_GET, $_POST 변수를 처리할때 라는데, 웹을 통해
    양식이 제출 되면 웹 서버에서는 전달받은 변수를 php의 연관배열로
    압축을 해제한다고 한다.
     이때 GET, POST 에따라 $_POST, $_GET 연관배열로 배치된다.
    그렇게 연관배열로 배치된 값을 나중에 사용하기 위해 변수로
    바꿔서 저장하고싶을때가 있는데, 이때 extract를 사용하는 것이다. */

    /* $a[x] = 111, $a[y];,  extract(a); -> x = 111; y = 222 */

    // extract($_GET); // 연관배열 $_GET를 변수로 변경.

    /* 이렇게하면 'q' 라는 새변수가 생기고 해당 변수에 값이 할당되는데
    중복되는 이름이 있을 경우 덮어 쓰게 된다. 따라서 이와 같은
    경우를 피하기 위해 다음과 같은 매개변수를 추가하면 된다. */

    // extract($_GET, EXTR_PREFIX_ALL, 'fromget'); // '$q'->'$fromget_g'

    /* 의도적으로 중복되는 키를 제출해서 웹사이트를 망칠 수 있으므로
    다음과 같이 매개변수를 추가한 extract를 사용하는게 좋을것이다. */


    /* 6.4.7 Using compact 
     기존에 'extract' 가 배열을 통해 변수와 값을 만들어내는 것이였다면
    'compact' 는 변수, 값을 통해 배열을 만들어 낸다.*/

    // $fname = "Doctor";
    // $sname = "Who";
    // $planet = "Gallifrey";
    // $system = "Gridlock";
    // $constellation = "Kasterborous";

    // $contact = compact('fname', 'sname', 'planet', 'system', 'constellation');

    // print_r($contact);

    /* 디버깅 할때도 유용하게 쓸 수 있다. 각 변수와 변수의 값을 알고싶을때. */

    // $j = 23;
    // $temp = "Hello";
    // $address = "1 Old Street";
    // $age = 61;

    // print_r(compact(explode(' ', "j temp address age")));

    /* 6.4.8 reset 
     'reset' 함수는 배열의 포인터를 맨처음으로 이동시키고 그 값을 반환합니다. */

    //  reset($fred);
    //  $item = reset($fred); // item 의 배열내 첫번째 element를 반환.


    /* 6.4.9 end 
      'end' 함수는 내부 배열 포인터를 마지막으로 옮기고 element 를 return 함. */

    // end($fred);
    // $item = end($fred);

?>