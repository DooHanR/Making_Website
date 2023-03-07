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

    // echo date(DATE_ATOM) . "<br>";
    // echo date(DATE_COOKIE) . "<br>";
    // echo date(DATE_RSS) . "<br>";
    // echo date(DATE_W3C) . "<br>";

    /* https://tinyurl.com/phpdatetime 에 완전한 list가 있으니 참고 바람. */

    
    /* 7.2.2 Using Checkdate 
     사용자가 유효한 날짜를 제출했는지를 확인하는 법. checkdate() 함수 사용하면 됨. 
    유효할때 TRUE, 그렇지 않으면 FASLE 리턴. 예를들어 어느년도의 9월 31일은 항상 FALSE.*/

    // $month = 9;
    // $day = 31;
    // $year = 2025;

    // if(checkdate($month, $day, $year))
    //     echo "Date is valid<br>";
    // else
    //     echo "Date is not vaild, or invalid<br>";



    /* 7.3 File Handling
     MySQL 에만 모든 데이터를 저장하고, 가공할 순 없으며 때때로 
    로컬에서 데이터를 처리하거나 저장, 가공 해야할 때가 있습니다. 
     그럴때 이렇게 직접 php에서 파일을 다루는게 도움이 되는데
    한가지 주의 할점은 대소문자 구별법이 모두 다르기 때문에
    항상 소문자 filename 으로 작성하는게 좋습니다. */


    /* 7.3.1 Checking Whetere a File exists 
     file_exists() 함수로 파일의 존재 여부 확인하기. */

    // if (file_exists("testfile.txt"))
    //     echo "File exists.<br>";
    // else
    //     echo "파일이 없어용.<br>";


    /* 7.3.2 Creating a File 
     존재하지 않는 파일 만들기. 
    die 호출시에 프로그램 종료와 동시에 자동으로 파일을 닫는다. */

    // $fh = fopen("testfile.txt", 'w') or die("Failed to create file");
    // $text = <<<_END
    // LINE 1
    // LINE 2
    // LINE 3
    // _END;

    // fwrite($fh, $text) or die("Coult not write to file");
    // fclose($fh);
    // echo "File 'testfile.txt' written successfully<br>"; 

    /* fopen mode 와도 관련 된 것은
    'r' : 파일 시작점에서 부터 읽기. 존재하지 않을경우 FALSE.
    'r+' : 파일 읽고 쓰기. 존재하지 않을 경우 FALSE.
    'w' : 파일에 읽기. 존재하지 않을 경우 생성.
    'w+' : 파읽 읽고 쓰기. 존재하지 않을 경우 생성.
    'a' : 파일 쓰기. 파일의 끝에서부터 씀. 없을 경우 생성. 
    'a+' : 파일 읽고 쓰기. 파일의 끝에서 부터, 없을 경우 생성. */


    /* 7.3.3 Reading from Files. */

    /* fgets 로 읽기. 줄단위. */
    // $fh = fopen("testfile.txt", 'r') or
    //     die("File does not exist or you lack permission to open it");

    // $line = fgets($fh);
    // fclose($fh);
    // echo $line;

    /* fread 로 읽기. 바이트단위. */
    // $fh = fopen("testfile.txt", 'r') or
    // die("File does not exist or you lack permission to open it");

    // $text = fread($fh, 3);
    // fclose($fh);
    // echo $text;


    /* 7.3.4 Copying Files 
     testfile.txt 의 copy 인 copyfile.txt 를 만들어봅시다. */

    // copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
    // echo "File successfully copied to 'testfile2.txt'<br>";

    // /* 복사가 실패해도 die 가 실행되어 프로그램 종료 하는것을 막고싶을때 */
    // if (!copy('testfile.txt', 'testfile2.txt'))
    //     echo "Could not copy file";
    // else
    //     echo "File successfully copied to 'testfile2.txt'";


    /* 7.3.5 Moving a File 
     파일을 이동시키는데 rename 을 통해서? 번역이 이상한 건가? */

    // if (rename('testfile2.txt', 'testfile2.new'))
    //     echo "File has been renamed";
    // else   
    //     echo "Could not rename file";

    // 원본이 존재하지 않을 경우 생기는 오류를 막기위해 file_exists() 함수를 사용해 확인하라.


    /* 7.3.6 Deleting a File 
     파일 삭제할때 주의할 것은, 해당 파일을 삭제해도 되는지 그리고 권한이 있는지
    조심해야 합니다. */

    // if (unlink('testfile2.new'))
    //     echo "Fils has been deleted";
    // else
    //     echo "Could not delete file";


    /* 7.3.7 Updating Files 
     파일을 수정하는것은 r+, w, w+, a+, a 와 같은 기능으로 수행하면 된다. 
    이때 각 기능마다 파일 포인터의 위치가 다르고, 파일이 부재시에 행하는 동작들도
    모두 다르기 때문에 그점을 유의해줘야 할 것이다. */

    // $fh = fopen("testfile.txt", r+) or die("Failed to open file<br>");
    // $text = fgets($fh);
    // fseek($fh, 0, SEEK_END); // 파일의 끝까지 이동후 해당 지점에서 '0' 만큼 이동.
    // // fseek($fh, 18, SEEK_SET); // 시작 file pointer 에서 18만큼 이동(0->18).
    // // fseek($fh, 5, SEEK_CUR); // 현재 file pointer 에서 5만큼 이동 (18->23).
    // fwrite($fh, "\n$text") or die("Coult not write to file<br>");
    // fclose($fh);

    // echo "File 'testfile.txt' successfully updated";

  
    /* 7.3.8 Locking Files for Multiple Accesses 
     웹 프로그램에는 여러 사람이 동시에 사용하는 경우가 많은데 
    파일을 다룰때 동시에 처리하면 손상이 일어날 가능성이 있다. 
     이를 위해 파일 잠금 플록 기능을 통해, 파일을 사용하는 동안
    다른 요청들을 대기열에 기다리게 합니다. 예제를 봅시다. */

    // $fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
    // $text = fgets($fh);

    // if (flock($fh, LOCK_EX))
    // {
    //     fseek($fh, 0, SEEK_END);
    //     fwrite($fh, "$text") or die("Coult not write to file");
    //     flock($fh, LOCK_UN);
    // }

    // fclose($fh);
    // echo "File 'testfile.txt' successfully updated"; 

    /* 웹사이트의 응답속도를 빠르게 유지하기 위해 변경직전에 flock 을 시행하고
    변경 하자마자 flock을 풀어주어야 한다.
     그리고 또 유의 할점은 flock 이 모든 system 에서 호환 되는게 아니기 때문에
    제대로 잠겼는지 확인할 필요가 있다. */

    /* 또한 ISAPI 와 같은 멀티스레드 서버나 네트워크 파일 시스템에서는 flock
    이 작동하지 않습니다. 그렇기 때문에 확신이 필요한 경우 test file에
    flock 을 걸어 확인하는게 좋지만, 꼭 잠금을 해제해줘야 합니다.
    또한 'die' 호출시 자동으로 잠금이 해제되고 파일이 닫힌다는 점을 주의하십시오. */


    /* 7.3.9 Reading an Entire File 
    파일 열고 뭐하는 file handle 없이 파일 전체내용 읽기. 
    'file_get_contents()' 함수를 이용하면 됨.
    실제로는 훨씬 유용한데, internet 을 통해서도 가져올 수 있기 때문. */

    // echo "<pre>";
    // echo file_get_contents("testfile.txt");
    // echo "</pre>";

    // echo file_get_contents('http://oreilly.com'); // 와 이런 세상에 통으로 가져오네.


    /* 7.3.10 Uploading Files 
    파일 업로드하는게 어렵다고 느껴질 수 있지만 아래처럼
    형식만 지정해준 후에는 나머지는 브라우저가 모두 처리 해준다.
    한번 예시를 봅시다. */

    // echo <<<_END
    // <html><head><title>PHP Form Upload</title></head><body>
    // <form method='post' action='upload.php' enctype='multipart/form-data'>
    // Select File: <input type='file' name='filename' size='10'>
    // <input type='submit' value='Upload'>
    // </form>
    // _END;

    // if ($_FILES)
    // {
    //     $name = $_FILES['filename']['name'];
    //     move_uploaded_file($_FILES['filename']['tmp_name'], $name);
    //     echo "Uploaded image '$name'<br><img src='$name'>";
    // }

    // echo "<body></html>";


    /* 7.3.10.1 Using $_FILES 
    파일이 업로드될때 $_FILES 배열에 다음의 다섯가지가 저장 된다. 
    
    1. $_FILES['file']['name']: 업로드 된 파일의 이름.
    2. $_FILES['file']['type']: 파일의 content type(image/jpeg).
    3. $_FILES['file']['size']: 파일의 byte 크기.
    4. $_FILES['file']['tmp_name']: 서버에 저장된 임시파일의 이름.
    5. $_FILES['file']['error']: 업로드 과정중에 생긴 에러 코드. */


    /* 7.3.10.2 Validation 
    검증은 중요합니다. server에 대한 해킹 시도 떄문만이 아니라, 파일이
    제대로 전송되었는지, type 등이 일치하는지 확인해야 하기 때문입니다. 
    아래의 예제는 위의 예제를 보다 안전하게 바꾼 것입니다. */

    // echo <<<_END
    // <html><head><title>PHP Form Upload</title></head><body>
    // <form method='post' action='upload2.php' enctype='multipart/form-data'>
    // Select a JPG, GIF, PNG or TIF File:
    // <input type='file' name='filename' size='10'>
    // <input type='submit' value='Upload'></form>
    // _END;

    // if ($_FILES)
    // {
    //   $name = $_FILES['filename']['name'];
  
    //   switch($_FILES['filename']['type'])
    //   {
    //     case 'image/jpeg': $ext = 'jpg'; break;
    //     case 'image/gif':  $ext = 'gif'; break;
    //     case 'image/png':  $ext = 'png'; break;
    //     case 'image/tiff': $ext = 'tif'; break;
    //     default:           $ext = '';    break;
    //   }
    //   if ($ext)
    //   {
    //     $n = "image.$ext";
    //     move_uploaded_file($_FILES['filename']['tmp_name'], $n);
    //     echo "Uploaded image '$name' as '$n':<br>";
    //     echo "<img src='$n'>";
    //   }
    //   else echo "'$name' is not an accepted image file";
    // }
    // else echo "No image has been uploaded";
  
    // echo "</body></html>";



    /* 7.4 System Calls 
     php 에는 없는 함수를, 운영체제를 통해 실행할 수 있다.
    'exec' 함수를 이용해서 'ls', 'dir' 명령을 실행할 수 있다. 예제를 보자. */

    /* exec.php */
    $cmd = "dir"; // window, mac, linux
    // $cmd = "ls"; // linux, unix & mac

    exec(escapeshellcmd($cmd), $output, $status);

    if ($status) echo "Exec command failed";
    else
    {
        echo "<pre>";
        // foreach($output as $line) echo htmlspecialchars("$line\n");
        print_r($output); // 이건되네
        echo "</pre>";
    }

    /* 이렇게 비슷한 exec 를 실행할때, unix나 윈도우 양쪽에서 모두 실행될 수 있도록
    하는것도 중요하고, web 에서 보안문제로 출력하지 않을 수 있으므로 해당 문제에
    대해서도 주의해야한다. */



    /* 7.5 XHTML or HTML5? 
    XHTML 대신 HTML5가 채택됐다. 아무튼 간단하고 좋다. 
    HTML5를 주로 사용해라~*/



    /* */
    /* */




?>
