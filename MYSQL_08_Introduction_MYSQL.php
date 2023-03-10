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

    CREATE TABLE classics (
    author VARCHAR(128),
    title VARCHAR(128),
    type VARCHAR(16),
    year CHAR(4)) ENGINE InnoDB;

    DESCRIBE classics;


    /* 8.4.3 Data Types 
    - CHAR, VARCHAR : char 는 고정형, varchar 는 가변형이다. 
    char 는 크기에 미치지 못해도 공백으로 모두 채워지는 반면 varchar 는
    해당 크기에만 맞춰서 적용된다. 하지만 varchar 는 오버헤드를 호출하기때문에
    약간 속도가 char와 비교해 느린편이다. 
     그리고 year 도 보통 사용하지 않는 편인데, 2155년 까지 밖에 표기하지
    않기 때문. 당시 개발자들은 이게 2155년 까지 쓰일거라고 생각을 안했다. */
    
    
    /* 8.4.3.1 The CHAR data type 
    - CHAR(n) : Exactly n(<=2500) CHAR(5) 
    CHAR(5) 'Hello' ->5bytes
    CHAR(57) 'Hello' -> 57bytes
    
    - VARCHAR(n) : Up to n(<=65535)
    VARCHAR(7) 'Hello' -> 5bytes
    VARCHAR(100) 'Goodbye' -> 7bytes
    */
    
    
    /* 8.4.3.2 The BINARY data type
     - BINARY(n) : Exactly n(<=255) 
    CHAR와 유사, binary data 취급.

    - VARBINARY(n) : Up to n(<=65535)
    VARCHAR 와 마찬가지, binary data 취급.*/
    
    
    /* 8.4.3.3 The TEXT data types 
     VARCHAR 와 TEXT data의 차이점은 VARCHAR은 전체필드를 
    검색해야 할때 유용하고, TEXT 는 일부만 검색할때 유용합니다. 
    
    - TINYTEXT(n) : Up to n(<=255), string with a charater set
    - MEDIUMTEXT(n) : Up to n(<=1.67e + 7)
    - LONGTEXT(n) : Up to n(<=4.29e + 9)
    - TEXT(n) : Up to n(<=65535) */
    
    
    /* 8.4.3.4 The BLOB data types 
     BLOB(Binary Large Object), 65536 이상의 data type에 유용하다. 
    BLOB 와 BINARY data의 차이점은 BLOB는 기본값이 없다는 것이다. 
    
    - TINYBLOB(n) : Up to n(<=255), binaray data no character set.
    - BLOB(n) : Up to n(<=65535), 이하 동문
    - MEDIUMBLOB(n) : up to n(<=1.67e + 7), 동문
    - LONGBLOB(n) : Up to n(<=4.29e + 9), 동문 */


    /* 8.4.3.5 Numeric data types 
     MYSQL 에서는 아주 광범위한 크기의 숫자 데이터를 처리 할 수 있지만
    빠르고 간결한 데이터베이스를 위해 예상되는 최대 데이터 값을 처리할 수 있는
    가장 작은 데이터형을 고르는게 중요합니다. 
    
    - TINYINT     (1)
    - SMALLINT    (2)
    - MEDIUMINT   (3)
    - INT/INTEGER (4)
    - BIGINT      (8)
    - FLOAT       (4)
    - DOUBLE/REAL (8) */

    CREATE TABLE tablename (fieldname INT UNSIGNED);
    CREATE TABLE tablename (fieldname INT(4)); // 크기가 아닌 너비.
    CREATE TABLE tablename (fieldname INT(4) ZEROFILL); // 일반적인 방식.


    /* 8.4.3.6 DATE and TIME types 
    - DATETIME: '0000-00-00 00:00:00'
    - DATE:     '0000-00-00'
    - TIMESTAMP:'0000-00-00 00:00:00'
    - TIME:     '00:00:00'
    - YEAR:     '0000'(1901~2155) 
    
     DATETIME과 TIMESTAMP의 차이점은 TIMESTAMP 는 1970~2037 까지의 범위만 출력하고
    DATETIME은 조건없이 출력한다. */


    /* 8.4.3.7 THE AUTO_INCREMENT attribute */



    /* 8.4.3.8 */ 





    /* 8.5 Indexes */
    /* 8.5.1 Creating an Index */
    /* 8.5.2 Querying a MySQL database */ 
    /* 8.5.3 Joining Tables Together */
    /* 8.5.4 Using Logical Operators */


    /* 8.6 MySQL Functions */
    /* 8.7 Accessing MySQL via phpMyAdmin */





?>