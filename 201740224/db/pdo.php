<?php
include "../dbinfo.php";

try {
    $db0 = new PDO("mysql:host=localhost;port=8001;dbname=phpdaelim5;"
    ,"daelim5","123456");
    if($db0) {
        echo "DB접속 성공";
    } else {
        echo "DB접속 실패";
    }
} catch(PDOException $e) {
    echo $e->getMessage();
}