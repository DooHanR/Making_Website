<?php

    /* MAMP 접속방법 */
    cd C:\MAMP\bin\mysql\bin> 
    mysql -u root -psql // root에 root라는 비번을 입력해서 접속.

    /* 8. Intrudction to MYSQL */
    너무 기초적인 내용. 스킵.

    /* 8.2 MYSQL Basics */
    마찬가지로 너무 기초적 내용 스킵.


    /* 8.3 Summary of Database Terms */
    마찬가지. 너무 기초적 내용.


    /* 8.4 Accessing MySQL via the Command Line*/
    
    cd C:\MAMP\bin\mysql\bin> 
    mysql -u root -psql // root에 root라는 비번을 입력해서 접속.

    
    /* 8.4.1 Using the Command-Line interface 
    일단 mysql 에 접속했다면, 어느 os 에서든 실행방식은 동일하다. */


    /* 8.4.1.1 The semicolon 
     ';' semicolon 까지 입력을 해야 명령을 인식하며
    만약 ';' 없이 enter를 치면 여러줄의 명령어로 입력할 수 있는데
    긴 명령어를 입력할때 편하다. */


    /* 8.4.1.2 Canceling a command 
     열심히 명령어를 썼는데 쓰고싶지 않을경우, 백스페이로 일일히 지우기 귀찮은경우. 
    '\c'를 끝에 입력하면 된다. */

    meaningless gibberish to mysql \c
    meaningless "gibberish" to mysql \c // 따옴표는 \c 전에 항상 닫아줄 것.


    /* 8.4.2 MySQL Commands 
     지켜야할 2가지 규칙이 있다. 
    - SQL commands, keywords 는 대소문자를 구별하지 않는다. 하지만 항상 대문자로
    쓰는 것을 권장한다 ex) CREATE == create, CREATE 권장. 
    
    - Table 의 이름은 Linux, MacOS, window의 경우 모두 다르며 혹시 모를 호환성을 위해
    모두 소문자로 쓰는게 권장된다. ex) tablename. 
    
    - MySQL commands 의 명령어 리스트는 다음과 같다
    ALTER : database, table 수정
    BACKUP : table 백업.
    \c : input cancle.
    CREATE : database 생성.
    DELETE : table 에서 행 삭제.
    DESCRIBE : table의 columns describe.
    DROP : table, database 삭제.
    EXIT(Ctrl-C) : exit(특정 system에서만)
    GRANT : user privilege 변경.
    HELP : help를 display.
    INSERT : data 삽입.
    LOCK : table 잠금.
    QUIT(\q) : EXIT 과 동일.
    RENAME : table 이름바꾸기.
    SHOW : object 의 세부사항 List.
    SOURCE : 파일 실행
    STATUS (\s) : 현재 상태 출력.
    TRUNCATE : table 비우기.
    UNLOCK : table 언락.
    UPDATE : 존재하는 record 로 업데이트
    USE : database 사용. */


    /* 8.4.2.1 Creating a database */
    
    CREATE DATABASE publications; // DATABASE 생성.
    USE publications; // Database chagned


    /* 8.4.2.2  Creating Users 
     신규 유저를 만들때 항상 범위를 지정해주어야 하며 범위를 지정하지 않을경우
    비밀번호가 존재하지 않기 떄문에 심각한 보안 위혐을 초래 할 수 있다. 
     또한 접속시에 -p'비밀번호' 의 형태는 아주 위험하다.*/

    CREATE USER 'dhe'@'localhost' IDENTIFIED BY '7789';
    GRANT ALL ON publications.* TO 'dhe'@'localhost';


    /* 8.4.2.3 Creating a table 
     ENGINE innoDB 는 query를 지원하는 수많은 엔진중에 하나로 MYSQL 5.6
    이상에서 기본으로 제공하는 엔진입니다. 물론 생략해도 되지만 여기서는
    강조를 위해 사용됐습니다.
     그리고 명령어를 한줄로 쳐도 되지만 가독성을 위해서
    여러줄로 치는것을 권장합니다. */

    USE publications;

    CREATE TABLE claassics (
    author VARCHAR(128),
    title VARCHAR(128),
    type VARCHAR(16),
    year CHAR(4)) ENGINE InnoDB;

    DESCRIBE classics;


    /* 8.4.2.4 Data Types */
    /* 8.4.2.5 */


    
    /* 8.4.3 Data Types */
    /* 8.4.3.1
    /* 8.4.3.2
    /* 8.4.3.3
    /* 8.4.3.4





    /* 8.5 Indexes */
    /* 8.5.1 Creating an Index */
    /* 8.5.2 Querying a MySQL database */ 
    /* 8.5.3 Joining Tables Together */
    /* 8.5.4 Using Logical Operators */


    /* 8.6 MySQL Functions */
    /* 8.7 Accessing MySQL via phpMyAdmin */





?>