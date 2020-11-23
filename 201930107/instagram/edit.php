<?php
include "theme.conf.php";
include "../dbInfo.php"; // db 접속 정보
include "desc.php";

$db0 = new mysqli(
    $dbInfo['master']['dbHost'], 
    $dbInfo['master']['dbUser'], 
    $dbInfo['master']['dbPass'], 
    $dbInfo['master']['dbSchema'], 
    $dbInfo['master']['dbPort']
);

$id = $_GET['id'];

if($db0) {
    // DB접속 성공
    $tablename = "instagram";
    $dbName = $dbInfo['master']['dbSchema'];
    $post = $_POST;
    if ($post) {
        // $query = "INSERT INTO phpdaelim5.$tablename (title) VALUES ('$title');";
        $date = date("Y-m-d", time());
        $query = "UPDATE $dbName.$tablename SET ";
        $cnt = 0;
        foreach ($post as $k => $v) {
            $query .= "`$k`='$v',";
        }
        $query = rtrim($query, ",");
        $query .= " where id=".$_POST['id'];
        // $query .= "`regdate`='$date'";
        // $query .= "`title`='$title', ";
        // $query .= "`description`='$description'";
        echo $query;
        // exit;
        $result = mysqli_query($db0, $query); // DB서버로 전송
    
        // 페이지를 이동합니다.
        $url = "/";
        // post redirect get pattern
        // header("HTTP/1.1 301 Moved Permanently");
        header("location:$url");
    }

} else {
    // echo "접속 실패";
}

$layout = file_get_contents($theme['layout']);
$contents = file_get_contents($theme['edit']);

// echo $_GET['id'];
$contents = str_replace("{{id}}", $id, $contents);

$query = "select * from $dbName.$tablename where id=$id";
$result = mysqli_query($db0, $query); // DB서버로 전송
if ($result) {
    $row = mysqli_fetch_object($result);
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
}

$inputs = "";
$bootstrapInput = file_get_contents("../resource/bootstrap/form_input.html");
$tablename = "instagram";
$tableInfo = desc($db0, $tablename);

foreach ($tableInfo as $fieldName) {
    if ($fieldName == "id" || $fieldName == "regdate") {
        continue;
    }

    $inputForm = $bootstrapInput;
    $inputForm = str_replace("{{name}}", $fieldName, $inputForm);
    $inputForm = str_replace("{{title}}", $fieldName, $inputForm);
    $inputForm = str_replace("{{description}}", $fieldName, $inputForm);
    $inputForm = str_replace("{{value}}", $row->$fieldName, $inputForm);
    $inputs .= $inputForm;
}

$inputs .= "<input type='hidden' name='id' value='$id'>";

$contents = str_replace("{{formList}}", $inputs, $contents);

$layout = str_replace("{{contents}}",$contents,$layout);

echo $layout;

function form_input($arg) {
    global $path;
    extract($arg); // 배열의 키값으로 지역변수 생성
    // 폼의 항목 1개 생성 삽입

    $form_input = file_get_contents("$path/form_input.html");
    $form_input = str_replace("{{title}}", $title, $form_input);
    $form_input = str_replace("{{name}}", $name, $form_input);
    $form_input = str_replace("{{description}}", $description, $form_input);

    return $form_input;
}