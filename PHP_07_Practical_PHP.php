<?php
    
    printf("This is page for Pracitcal PHP studying. <br><br>");

    /* 7. Practical PHP 
     앞서 배운것들은 기본적인 php의 구성요소들이 였다. 
    여기서부터는 문자열 다루는 법, 시간표시, 파일 관리 등에대해 공부할 것. */


    /* 7.1 Using printf 
     c언어 에서 쓰던것과 유사한데 $d 와 같은 매개변수를 통해 출력 포맷을
    지정해줄 수 있다. 예시를 보자. */

    // printf("There are $d items in your basket", 3);

    /* 적절한 '%' symbol 과 양식을 잘 맞춘다면 뭐든 출력 가능하다. */

    // printf("My name is %s. I'm %d years old, which is %X in hexadecimal<br>",
    //        'Simon', 33, 33);

    /* printf 로 색 부여하기. */

    // printf("<span style='color:#%X%X%X'>Hello<br></span>", 65, 127, 245);


    /* 7.1.1 Precision Setting 
     '정밀도 설정', 123.32 / 12 와 같이 정수로 딱 나뉘어 지지 않는 연산의 경우에서 
    소수점 몇번째 자리까지 표기할 것인지를 설정하는 것이다. */

    // printf("The result is: $%.2f\n<br>", 123.42 / 12);

    /* 몇가지 예시가 있다. */

    // Pad to 15 spaces
    // printf("The result is $%15f\n<br>", 123.32 / 12);

    // Pad to 15 spaces, fill with zeros
    // printf("The result is $%015f\n<br>", 123.42 / 12);

    // Pad to 15 spaces, 2 decimal places precision
    // printf("The result is $%15.2f\n<br>", 123.42/ 12);

    // Pad to 15 spaces, 2 decimal places precision, fill with zeros
    // printf("Thre reuslt is $%015.2f\n<br>", 123.42 / 12);

    // Pad to 15 spaces, 2 decimal places precision, fill with $ symbol
    // printf("The result is $%'#15.2f\n", 123.42 / 12);


    /* 7.1.2 String Padding 
     대체 시부럴 패딩이 무슨뜻이야? 덧대기? */

    //  echo "<pre>";

    // $h = 'Rasmus';

    // printf("[%s]\n",        $h); // Standard string output
    // printf("[%12s]\n",      $h); // Right justify with spaces
    // printf("[%-12s]\n",     $h); // Left justify with spaces
    // printf("[%012s]\n",     $h); // Zero padding
    // printf("[%'#12s]\n\n",  $h); // Use the custom padding character '#'
  
    // $d = 'Rasmus Lerdorf';
  
    // printf("[%12.8s]\n",    $d); // Right justify, cutoff of 8 characters
    // printf("[%-12.12s]\n",   $d); // Left justify, cutoff of 12 characters
    // printf("[%-'@12.10s]\n", $d); // Left justify, pad '@', cutoff 10 chars


    /* 7.1.3 Using sprintf 
     printf 의 결과를 출력하지 않고 저장하고 싶을때 'sprintf'를 사용하면 된다. 
    예시를 한번 봐보자. */

    // $out = sprintf("The result is: $%.2f", 123.42 / 12);
    // echo $out;



    /* 7.2 Date and Time Functions 
     PHP 에서는 Unix timestamp를 사용한다. 그러니까 1970년 1월 1일부터 카운트하는 그거.*/

    echo time(); // 그때부터 지금까지 흐른 초?


    /* 7.2.1 Date Constants */


    /* 7.2.2 Using Checkdate */



    /* 7.3 File Handling */


    /* 7.3.1 Checking Whetere a File exists*/


    /* 7.3.2 Creating a File */


    /* 7.3.3 Reading from Files */


    /* 7.3.4 Copying Files */


    /* 7.3.5 Moving a File */


    /* 7.3.6 Deleting a File */


    /* 7.3.7 Updating Files */


    /* 7.3.8 Locking Files for Multiple Accesses */


    /* 7.3.9 Reading an Entire File */


    /* 7.3.10 Uploading Files */



    /* 7.4 System Calls */



    /* 7.5 XHTML or HTML5? */



    /* */
    /* */




?>
