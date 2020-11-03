<?php
include "../dbinfo.php";
$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema']
    );

    if($db0) {
        $tablename = "instagram";
        $title = $_POST['title'];
    
            if($title) {
                //print_r($_POST);
                //$query = "INSERT INTO ".$tablename."(title) values('".$title."');";
                $query = "INSERT ".$tablename." SET ";
                foreach($_POST as $key => $value) {
                    $query .= "`".$key."`= '".$value."', ";
                }
                //$query .= "`title`='".$title."', ";
                //$query .= "`description`= '".$_POST['description']."', ";
                $query .= "`regdate`='".date("Y-m-d", time())."'";
                echo $query;
                //exit;
                $result = mysqli_query($db0, $query);

                $url = "insta.php";
                header("location:".$url);
            }
        } else {
            echo "DB 접속 실패";
        }

echo "새 글을 작성합니다.";
if(isset($_POST['title'])){
echo "작성한 새 글은=".$_POST['title'];
}
$form = file_get_contents("../resource/new.html");
echo $form;



   