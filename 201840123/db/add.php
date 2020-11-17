<?php
echo "데이터를 추가합니다";
echo $_SERVER['REQUEST_URI'];
// $_GET 배열
echo "<br>";
if(isset($_GET['title'])){
    echo "입력한 값은 = ".$_GET['title'];
    $dbinfo = include "../dbinfo.php";
    $db = new mysqli(
        $dbinfo['master']['dbhost'], // mysql 서버주소
        $dbinfo['master']['dbuser'], // 사용자아이디
        $dbinfo['master']['dbpass'], // 패스워드
        $dbinfo['master']['dbschema'] // 스키마
    );
    $query = "INSERT INTO `phpdaelim4`.`members` (`username`) VALUES ('".$_GET['title']."')";
    echo $query;
    $result = mysqli_query($db,$query);
}else{
    echo "값이없음";
}