<?php
echo "데이터를 추가합니다.<br>";
echo $_SERVER['REQUEST_URI'];

// $_GET 배열
echo "<br>";
if(isset($_GET['title'])) {
    echo "입력한 값은 = ".$_GET['title'];
    $dbinfo = include "../dbinfo.php";  // 암호 보안 기법 

    $db0 = new mysqli(
        $dbinfo['master']['dbhost'],  // mysql 서버 주소
        $dbinfo['master']['dbuser'],  // 사용자 아이디
        $dbinfo['master']['dbpass'],  // 사용자 비밀번호
        $dbinfo['master']['dbschema']  // 스키마
    );
        $query = "INSERT INTO `phpdaelim4`.`members` (`username`) VALUES ('".$_GET['title']."')";
        echo $query;
        $result = mysqli_query($db0, $query);
} else {
    echo "값이 없어요ㅠㅠ";
}