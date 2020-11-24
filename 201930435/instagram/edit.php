<?php

include "theme.conf.php";
include "desc.php";

// $tablename = "instagram";

// post 값이 있으면 뭔가 해줘 <div class=""></div>
$dbinfo = include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'], // mysql 서버 주소
    $dbinfo['master']['dbuser'], // 사용자 아이디
    $dbinfo['master']['dbpass'], // 패스워드
    $dbinfo['master']['dbschema'] // 스키마
);

// POST 값
if(isset($_POST['title'])){

    // SQL
    // $query = "INSERT INTO `phpdaelim4`.`instagram` (`title`,`description`) VALUES ('".$_POST['title']."','".$_POST['description']."');";
    
    // print_r($_POST);
    
    // $query = "INSERT `phpdaelim4`.`".$tablename."` SET ";
    $query = "UPDATE `phpdaelim4`.`".$tablename."` SET ";
    foreach($_POST as $key => $value){
        $query .= "`".$key."` = '".$value."',";
    }
    $query = rtrim($query, ",");
    // $query .= "`title` = '".$_POST['title']."',";
    // $query .= "`description` = '".$_POST['description']."'";
    $query .= " where id='".$_POST['id']."'";

    // echo $query;
    // exit;

    $result = mysqli_query($db0, $query);

    header("location:/");
}

// 파일을 읽어서 변수에 넣어주세요
$layout = file_get_contents($theme['layout']);

    // 알맹이
    $contents = file_get_contents($theme['edit']);
    // 2차 배열로 개선
    /*
    $formlist = [
        "title" => [
            'label' => "제목",
            'name' => "title",
            'description' => "제목을 입력해 주세요"
        ], 
        "description" => [
            'label' => "설명",
            'name' => "description",
            'description' => "설명을 입력해 주세요"
        ], 
        "location" => [
            'label' => "위치",
            'name' => "location",
            'description' => "위치를 입력해 주세요"
        ], 
        "regdate" => [
            'label' => "등록일",
            'name' => "regdate",
            'description' => "등록일을 선택해 주세요"
        ]
    ];
    */
    $form_str = "";

    $fields = desc($db0, $tablename);
    print_r($fields);

    $query = "select * from phpdaelim4.".$tablename." where id='".$_GET['id']."';";
    echo $query;
    $result = mysqli_query($db0, $query);
    if($result){ 
        $data = mysqli_fetch_object($result);
        print_r($data);
    }

    // 1차원 배열
    foreach($fields as $name){ 
        if($name == "id") continue; // id는 제외
        // $value 값
        $form_str .= form_input($name, $data);
    }
    $form_str .= "<input type=hidden name=id value='".$_GET['id']."'>";
    $contents = str_replace("{{formlist}}", $form_str, $contents);

$layout = str_replace("{{contents}}", $contents, $layout);  
echo $layout;

function form_input($name, $data)
{
    global $path;
    // 함수 안은 지역변수
    // 배열로 받은 데이터를 지역변수로 할당

    $form_str = file_get_contents($path."edit_input.html");
    $form_str = str_replace("{{name}}", $name, $form_str);

    $form_str = str_replace("{{value}}", $data->$name, $form_str);

    $form_str = str_replace("{{title}}", $name, $form_str);
    $form_str = str_replace("{{description}}", $description, $form_str);
    return $form_str;
}