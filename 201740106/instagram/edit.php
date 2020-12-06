<?php
include "theme.conf.php";
include "../dbinfo.php";

include "desc.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);

if ($db0) {
    // DB접속 성공...
    // 쿼리 스키마.테이블
    $tablename = "instargram";
    $title = $_POST['title'];
    if ($title) {
        // print_r($_POST);
        // $query = "INSERT INTO phpdaemin5.".$tablename." (`title`) VALUES ('".$title."');";
        //$query = "INSERT phpdaemin5.".$tablename." SET ";
        $query = "UPDATE phpdaelim5.".$tablename." SET ";
        foreach($_POST as $key => $value) {
            $query .= "`".$key."`='".$value."',";
        }

        $query = rtrim($query, ",");
        // $query .= "`title`='".$title."', ";
        // $query .= "`description`='".$_POST['description']."', ";
        //$query .= "`regdate`='".date("Y-m-d", time())."'";

        $query .= " where id='".$_POST['id']."'";
        
        
        echo $query;
        //exit; // 프로그램 중단
        $result = mysqli_query($db0, $query); // DB서버로 전송

        // 페이지를 이동합니다.
        $url = "/";
        header("location:" . $url);
    }

} else {
    echo "접속 실패";
}

$layout = file_get_contents($theme['layout']);
$contents = file_get_contents($theme['edit']);

//echo $_GET['id'];
$contents = str_replace("{{id}}", $_GET['id'], $contents);

// 2차원 배열
/*
$param = [
    'title' => [
        'title' => "제목",
        'name' => "title",
        'description' => "제목을 입력해 주세요"
    ],
    'description' => [
        'title' => "내용",
        'name' => "description",
        'description' => "내용을 입력해 주세요"
    ],
    'picture' => [
        'title' => "사진",
        'name' => "picture",
        'description' => "사진을 등록해 주세요"
    ]
];
$inputs = "";
foreach($param as $p) {
    $inputs .= form_input($p);
}
*/

$tablename = "instargram";
$query = "SELECT * FROM phpdaelim5." . $tablename . " where id=".$_GET['id'].";"; // SQL 쿼리문
echo $query; //쿼리가 실행
$result = mysqli_query($db0, $query);
if ($result) {
    $row = mysqli_fetch_object($result);
    print_r($row);
}
    

$inputs = "";
$tableinfo = desc($db0, $tablename);
$bootstapInput = file_get_contents("../resource/bootstrap/form_input.html");
foreach($tableinfo as $fieldname) {
    if($fieldname == "id" || 
        $fieldname == 'regdate') continue;
    // html input 테그 생성
    /*
    $inputs .= $fieldname;
    $inputs .= "<input type=text name='".$fieldname."' >";
    $inputs .= "<br>";
    */
    $inputForm = $bootstapInput;
    $inputForm = str_replace("{{name}}", $fieldname, $inputForm);
    $inputForm = str_replace("{{title}}", $fieldname, $inputForm);

    // 값...
    $inputForm = str_replace("{{value}}", $row->$fieldname, $inputForm);

    $inputs .= $inputForm;
}

$inputs .= "<input type=hidden name=id value=".$_GET['id'].">";



$contents = str_replace("{{formlist}}", $inputs, $contents); // 항목 삽입

$layout = str_replace("{{contents}}",$contents,$layout);

echo $layout;

function form_input($arg) {
    global $path;
    
    // $arg 1차원 배열
    extract($arg); // 베열의 키값으로 지역변수를 자동으로 생성.
    //$title = $arg['title'];
    //$name = $arg['name'];
    //$desctiption = $arg['description'];

    //# 폼의 항목 1개 생성
    $form_input = file_get_contents($path."form_input.html");

    $form_input = str_replace("{{title}}", $title, $form_input);
    $form_input = str_replace("{{name}}", $name, $form_input);
    $form_input = str_replace("{{description}}", $desctiption, $form_input);
    return $form_input;
}