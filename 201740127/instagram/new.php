<?php
$path = "../resource/bootstrap/";

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
    $title = $_POST['title'];
    if ($title) {
        $query = "INSERT phpdaelim4.".$tablename." SET ";
        foreach($_POST as $key => $value) {
            $query .= "`".$key."`='".$value."', ";
        }

        $query .= "`regdate`='".date("Y-m-d", time())."'";
        echo $query;
        $result = mysqli_query($db, $query);

        $url = "/";
        header("location:" . $url);
    }

} else {
    echo "접속 실패";
}

$layout = file_get_contents($theme['layout']);
$contents = file_get_contents($theme['new']);

$formlist = [
    'title' => [
        'label' => "제목",
        'name' => "title",
        'description' => "제목을 입력해 주세요"
    ],
    'description' => [
        'label' => "설명",
        'name' => "description",
        'description' => "설명을 작성하세요"
    ],
    'location' => [
        'label' => "위치",
        'name' => "location",
        'description' => "위치를 입력해주세요"
    ],
    'regdate' => [
        'label' => "등록일",
        'name' => "regdate",
        'description' => "등록일을 선택해주세요"
    ],
];
$inputs = "";
foreach($formlist as $param) {
    $inputs .= form_input($param);
}

$contents = str_replace("{{formlist}}", $inputs, $contents); // 항목 삽입

$layout = str_replace("{{contents}}",$contents,$layout);

echo $layout;

function form_input($arg) {
    global $path;

    $name = $arg['name'];
    $title = $arg['label'];
    $description = $arg['description'];
    
    $form_str = file_get_contents($path."form_input.html");
    
    $form_str = str_replace("{{name}}", $name, $form_str);
    $form_str = str_replace("{{title}}", $title, $form_str);
    $form_str = str_replace("{{description}}", $description, $form_str);
    
    return $form_str;
}
