<?php
include "../dbinfo.php";
$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);

if($db0) {
    // DB 접속 성공 부분
    // 쿼리 스키마.테이블
    $tablename = "instagram";
    $title = $_POST['title'];
    if($title){
        //print_r($_POST);
        //$query = "INSERT INTO phpdaelim5.".$tablename." (`title`) VALUES ('".$title."');";
        //sql문 생성
        $query = "INSERT phpdaelim5.".$tablename." SET ";
        foreach ($_POST as $key => $value) {
            $query .= "`".$key."`='".$value."', ";
        }
        //$query .= "`title`='".$title."', ";
        //$query .= "`description`='".$_POST['description']."', ";
        $query .= "`regdate`='".date("Y-m-d", time())."'";
        echo $query;
        //exit; // 프로그램 중단
        $result = mysqli_query($db0, $query); // db서버로 전송

        // 페이지를 이동합니다.
        $url = "insta.php";
        header("location:" . $url);
    }
} else{
    echo "접속 실패";
}

echo "새글을 작성합니다.";
if(isset($_POST['title'])){
    echo "작성한 새글은=".$_POST['title'];
}

$form = file_get_contents("../resource/new.html");
echo $form;