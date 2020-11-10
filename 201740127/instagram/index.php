<?php
include "theme.conf.php";
include "../dbinfo.php";


$db = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);

if ($db) {
    $tablename = "instagram";
    $query = "SELECT * FROM phpdaelim4." . $tablename . ";";

    $result = mysqli_query($db, $query);
    if ($result) {
        $rows = getRowData($result);
    } else {
    }

    $layout = file_get_contents($theme['layout']);

    $contents = file_get_contents($theme['list']);
    $contents = str_replace("{{datatable}}", viewTable($rows), $contents);

    $layout = str_replace("{{contents}}", $contents, $layout);

    echo $layout;

} else {
    echo "접속 실패";
}

function getRowData($result) {

    $cnt = mysqli_num_rows($result);
    
    $rows = [];
    for($i=0; $i<$cnt; $i++) {
        $rows []= mysqli_fetch_object($result);
    }
    return $rows;
}

function viewTable($rows) {
    $str = "";

    $str = "<table class=\"table table-striped\">";

    $str .= "<tr><td></td><td>제목</td><td>설명</td><td>위치</td><td>등록일</td></tr>";

    for($i=0;$i<count($rows);$i++) {
        $str .= "<tr>";

        foreach($rows[$i] as $value) {
            $str .= "<td>".$value."</td>";
        }

        $str .= "</tr>";
    }
    $str .= "</table>";
    return $str;
}



