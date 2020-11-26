<?php
include "../dbinfo.php";

try{
    $db = new PDO("mysql:host=localhost;dbname=phpdaelim5;","daelim5","123456");
    if($db){
        echo "DB 접속 성공";
    } else{
        echo "DB 접속 실패";
    }
} catch(PDOException $e){
    echo $e->getMessage();
}