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

    $products = array (
        'paper' => array(
            'copier' => "Copier & Multipurpose",
            ''
        )
    )



    /* 6.4 Using array Functions */
    /* 6.4.1 is_array */
    /* 6.4.2 count */
    /* 6.4.3 sort */
    /* 6.4.4 shuffle */
    /* 6.4.5 explode */
    /* 6.4.6 extract */
    /* 6.4.7 Using compact */
    /* 6.4.8 rest */
    /* 6.4.9 end */

?>