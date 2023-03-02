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

    // echo time(); // 그때부터 지금까지 흐른 초?

    // 주어진 날짜에 대한 timestamp 구하기.
    // echo mktime(0, 0, 0, 12, 1, 2022); // 시, 분, 초, 월, 일, 년도

    // echo date("l F jS, Y - g:ia", time());

    
    /* 7.2.1 Date Constants
     date() 명령어와 함께 특정한 형식으로 날짜를 return 하기 위한 몇몇 상수들이 있다. 
    'DATE_ATOM', 'DATE_COOKIE', 'DATE_RSS', 'DATE_W3C' 등이 해당된다. */

    echo date(DATE_ATOM) . "<br>";
    echo date(DATE_COOKIE) . "<br>";
    echo date(DATE_RSS) . "<br>";
    echo date(DATE_W3C) . "<br>";

    /* https://tinyurl.com/phpdatetime 에 완전한 list가 있으니 참고 바람. */

    
    /* 7.2.2 Using Checkdate 
     사용자가 유효한 날짜를 제출했는지를 확인하는 법. checkdate() 함수 사용하면 됨. 
    유효할때 TRUE, 그렇지 않으면 FASLE 리턴. 예를들어 어느년도의 9월 31일은 항상 FALSE.*/

    $month = 9;
    $day = 31;
    $year = 2025;

    if(checkdate($month, $day, $year))
        echo "Date is valid<br>";
    else
        echo "Date is not vaild, or invalid<br>";



    /* 7.3 File Handling
     MySQL 에만 모든 데이터를 저장하고, 가공할 순 없으며 때때로 
    로컬에서 데이터를 처리하거나 저장, 가공 해야할 때가 있습니다. 
     그럴때 이렇게 직접 php에서 파일을 다루는게 도움이 되는데
    한가지 주의 할점은 대소문자 구별법이 모두 다르기 때문에
    항상 소문자 filename 으로 작성하는게 좋습니다. */


    /* 7.3.1 Checking Whetere a File exists 
     file_exists() 함수로 파일의 존재 여부 확인하기. */

    if (file_exists("testfile.txt"))
        echo "File exists";
    else
        echo "파일이 없어용.";


    /* 7.3.2 Creating a File 
     존재하지 않는 파일 만들기. */

    


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
