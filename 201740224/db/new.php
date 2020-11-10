<?php
include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);

if ($db0) {
    //DB접속 성공
    $title = $_POST[title];
    if($title){
        print_r($_POST);
        //$query = "INSERT INTO `phpdaelim5`.`instagram` (`title`) VALUES ('".$title."');";
        $query = "INSERT phpdaelim5." . "`instagram`" . " SET ";
        foreach($_POST as $key => $value){
            $query.= "`".$key."`='".$value."',";
        }
       // $query .= "`description`='".$_POST['description']."',";
       // $query .= "`title=`".$title."',`regdate`='".date("Y-m-d",time())."'";
       $query .= "`regdate`='".date("Y-m-d",time())."'";
        echo $query;
        //exit;
        $result = mysqli_query($db0, $query); // DB서버로 전송
        
        $url = "insta.php";
        header("location:" . $url);
    }

} else {
    echo "접속 실패";
}

echo "새글을 작성합니다.";
if(isset($_POST[title])){
    echo "작성한 새글은=".$_POST['title'];
}

$form = file_get_contents("../resource/new.html");
echo $form;