<?php
include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbJost'],
    $dbinfo['master']['dbUser'],           
    $dbinfo['master']['dbPwd'],
    $dbinfo['master']['dbSchema']
);

if ($db0) {
    // echo "DB 접속 성공"."<br>";
    $tablename = "instargram";
    $title = $_POST['title'];
    
    if($title){
        print_r($_POST);
        // $query = "INSERT INTO `phpdaelim5`.".$tablename." (`title`) VALUES ('".$title."');";
        $query = "INSERT phpdaelim5.".$tablename." SET ";
        foreach($_POST as $key => $value){
            $query .= "`".$key."`='".$value."', ";
        }
        // $query .= "`title`='".$title."', ";
        // $query .= "`description`='".$_POST['description']."', ";
        $query .= "`regdate`='".date("Y-m-d",time())."'";
        echo $query;
        
        // 프로그램 중단
        // exit;

        $result = mysqli_query($db0, $query); //DB 서버로 전송
        
        // 페이지 이동
        $url = "instar.php";
        header("HTTP/1.1 301 Moved Permanently");
        header("location : " . $url);
    }
} else{
    echo "접속 실패";
}

echo "<br>새 글을 작성합니다.";
echo "<br>작성한 새 글 = ".$_POST['title'];
$form = file_get_contents("../resource/new.html");
echo $form;