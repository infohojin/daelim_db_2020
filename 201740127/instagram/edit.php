<?php

include "theme.conf.php";
include "desc.php";

$dbinfo = include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'], // mysql 서버주소
    $dbinfo['master']['dbuser'], // 사용자아이디
    $dbinfo['master']['dbpass'], // 패스워드
    $dbinfo['master']['dbschema'] // 스키마
);

// POST값
if (isset($_POST['title'])) {
    
    $query = "UPDATE `phpdaelim4`.`".$tablename."` SET ";
    foreach($_POST as $key => $value) {
        $query .= "`".$key."` = '".$value."',";
    }
    $query = rtrim($query,",");

    $query .= " where id='".$_POST['id']."'";

    $result = mysqli_query($db0, $query); // DB서버로 전송

    header("location:/");
}


$layout = file_get_contents($theme['layout']);

    $contents = file_get_contents($theme['edit']);
    
    $form_str = "";

    $fields = desc($db0, $tablename);
    print_r($fields);

    $query = "SELECT * FROM phpdaelim4.".$tablename." where id='".$_GET['id']."';"; 
    echo $query;
    $result = mysqli_query($db0, $query);
    if ($result) {
        $data = mysqli_fetch_object($result);
        print_r($data);
    }
    
    foreach($fields as $name) { 
        if($name == "id") continue; // id는 제외
        // $value  값 
        $form_str .= form_input($name, $data);
    }
    $form_str .= "<input type=hidden name=id value='".$_GET['id']."'>";
    $contents = str_replace("{{formlist}}", $form_str, $contents);

$contents = str_replace("{{id}}", $_GET['id'], $contents);
$layout = str_replace("{{contents}}", $contents, $layout );
echo $layout;

function form_input($name, $data)
{
    global $path; 


    $form_str = file_get_contents($path."edit_input.html");
    $form_str = str_replace("{{name}}",$name,$form_str);

    $form_str = str_replace("{{value}}",$data->$name,$form_str);

    $form_str = str_replace("{{title}}",$name,$form_str);
    $form_str = str_replace("{{description}}",$description,$form_str);
    return $form_str;
}

