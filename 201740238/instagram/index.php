<?php

include "theme.conf.php";
$dbinfo = include "../dbinfo.php";  

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],  
    $dbinfo['master']['dbuser'],  
    $dbinfo['master']['dbpass'], 
    $dbinfo['master']['dbschema']  
);

if($db0) {
    $query = "SELECT * FROM phpdaelim3.instagram;";  
    $result = mysqli_query($db0, $query); 
    if($result){
        $rows = getRowData($result);
        
    }
    $layout = file_get_contents($theme['layout']);

    $contents = file_get_contents($theme['list']);
    $contents = str_replace("{{datatable}}", viewTable($rows), $contents);

    $layout = str_replace("{{contents}}", $contents, $layout);
    echo $layout;

} else {
    echo "DB 접속 실패"."<br>";
}

function getRowData($result) {
    $cnt = mysqli_num_rows($result);

    $rows = []; 
        for($i = 0; $i < $cnt; $i++) {
            $rows [] = mysqli_fetch_object($result);
        }
        return $rows;
}

function viewTable($rows) {
    $str = "<table class=\"table table-striped\">"; 

    for($i = 0; $i < count($rows); $i++) {
        $str .= "<tr>";

        foreach($rows[$i] as $value) {
            $str .= "<td>".$value."</td>";
        }
        
        $str .= "</tr>";
    }
    $str .= "</table>";
    return $str;
}
