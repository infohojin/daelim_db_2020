<?php
include "../dbinfo.php";

try {
    $db = new PDO("mysql:host=localhost;dbname=phpdaemin5;"
    ,"daelim5","123456");
    if($db) {
        echo "DB접속 성공";
    } else {
        echo "DB접속 실패";
    }
} catch(PDOException $e) {
    echo $e->getMessage();
}

//$this->stmt = $this->_conn->query($query); // 쿼리준비