<?php


include "../dbinfo.php";
$db0 = new mysqli($dbinfo['master']['dbhost'],
                 $dbinfo['master']['dbuser'],
                 $dbinfo['master']['dbpass'],
                 $dbinfo['master']['dbschema'],
                 $dbinfo['master']['dbport']
);

if ($db0) {

    $tablename = "instagram";
    $title = $_POST['title'];
    if($title){
        print_r($_POST);
    //$query = "INSERT INTO phpdaelim5.".$tablename." (`title`) VALUES ('".$title."');";
    $query = "INSERT phpdaelim5.".$tablename." SET ";
    foreach($_POST as $key => $value){
        $query .= "`".$key."`='".$value."', ";
    }
    //$query .= "`title` = '".$title."', ";
    //$query .="`description`='".$_POST['description']."', ";
    $query .="`regdate`='".date("Y-m-d", time())."'";
    echo $query;
       //exit; // 프로그램 중단
    $result = mysqli_query($db0, $query);
    $url = "insta.php";
  
    //header("HTTP/1.1 301 Moved Permanently");
    header("location:" . $url);
    

    }

} else {
    echo "접속실패";
}

echo "새 글을 작성합니다.";
if(isset($_POST['title'])){
    echo "작성한 새 글은=".$_POST['title'];
}
$form = file_get_contents("../resource/new.html"); // 상위폴데에 있는 new.html을 읽어주세요
echo $form;