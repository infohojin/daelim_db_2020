<?php

$db = new mysqli("localhost", "root", "911059", "phpdaelim5");

if ($db -> connect_error) {
    echo "DB 접속 성공";
    $query = "selelct * from members";
    $result = mysql_query($query);
    if ($result) {
        $row = mysql_fetch_object($result);
        print_r($row);
    }
} else {
    echo "DB 접속 실패";
}