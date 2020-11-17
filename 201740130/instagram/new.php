<?php
include "theme.conf.php";
include "../dbinfo.php";
$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema']
    );

    if($db0) {
        $tablename = "instagram";
        $title = $_POST['title'];
    
            if($title) {
                //print_r($_POST);
                //$query = "INSERT INTO ".$tablename."(title) values('".$title."');";
                $query = "INSERT ".$tablename." SET ";
                foreach($_POST as $key => $value) {
                    $query .= "`".$key."`= '".$value."', ";
                }
                //$query .= "`title`='".$title."', ";
                //$query .= "`description`= '".$_POST['description']."', ";
                $query .= "`regdate`='".date("Y-m-d", time())."'";
                echo $query;
                //exit;
                $result = mysqli_query($db0, $query);

                $url = "/";
                header("location:".$url);
            }
        } else {
            echo "DB 접속 실패";
        }

$layout = file_get_contents($theme['layout']);
$contents = file_get_contents($theme['new']);

$param = [
    'title' => [
        'title' => "제목",
        'name' => "title",
        'description' => "제목을 입력해주세요."
    ],
    'description' => [
        'title' => "내용",
        'name' => "description",
        'description' => "내용을 입력해주세요."
    ],
    'picture' => [
        'title' => "사진",
        'name' => "picture",
        'description' => "사진을 등록해주세요."
    ]
];
$inputs = "";
foreach($param as $p) {
    $inputs .= form_input($p);
}

$contents = str_replace("[{formlist}]",$inputs,$contents); //항목 삽입

$layout = str_replace("[{contents}]",$contents,$layout);

echo $layout;

function form_input($arg) {
    global $path;
    //$arg 1차원 배열
    extract($arg); //배열의 키값으로 지역변수를 자동으로 생성.
    //# 폼의 항목 1개 생성
$form_input = file_get_contents($path."form.input.html");
$form_input = str_replace("[{title}]",$title,$form_input);
$form_input = str_replace("[{name}]",$name,$form_input);
$form_input = str_replace("[{description}]",$description,$form_input);
return $form_input;
}