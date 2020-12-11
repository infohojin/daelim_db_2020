<?php
include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);
echo "게시물을 삭제합니다";
print_r($_GET); //배열값

if(isset($_GET['id']))
{
    echo "삭제를 합니다";
    if ($db0) 
    {
    $query = "DELETE FROM `phpdaelim5`.`instargram` WHERE (`id` = '".$_GET['id']."')";
    $result = mysqli_query($db0,$query);
    echo "삭제성공 <br>";
    $url = "/";
    header("location:".$url);
    } else {
        echo "접속 실패";
    }
}else
{
    echo"삭제할 게시물이 없습니다";
}