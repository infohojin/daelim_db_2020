<?php

// $path = "../resource/bootstrap/"; // 전역변수
include "theme.conf.php"; // 다른 파일에도 동일한 부분이 있기 때문에 공유 할 수 있게함

if (isset($_POST['title'])) {
    $dbinfo = include "../dbinfo.php";
    $db = new mysqli(
        $dbinfo['master']['dbhost'], // mysql 서버주소
        $dbinfo['master']['dbuser'], // 사용자아이디
        $dbinfo['master']['dbpass'], // 패스워드
        $dbinfo['master']['dbschema'] // 스키마
    );
    // $query = "INSERT INTO `phpdaelim4`.`instagram` (`title`,`description`) 
    // VALUES ('".$_POST['title']."', '".$_POST['description']."');";

    // print_r($_POST);

    $query ="INSERT `phpdaelim4`.`instagram` SET ";
    foreach ($_POST as $key => $value) {
        $query .= "`".$key."` = '".$value."',";
    }
    $query = rtrim($query,",");
    // $query .= "`title` = '".$_POST['title']."',";
    // $query .= "`description`='".$_POST['description']."'";
    
    // echo $query; 
    // exit;

    $result = mysqli_query($db, $query);
    header("location:/");
}
$layout = file_get_contents($theme['layout']);
    $contents = file_get_contents($theme['new']);
    $formlist = [ // 2차원 배열로 개선
        "title" => [
            'label' => "제목",
            'name' => "title",
            'description' => "제목을 입력해주세요"
        ], 
        "description" => [
            'label' => "설명",
            'name' => "description",
            'description' => "설명을 작성해주세요"        
        ], 
        "location" => [
            'label' => "위치",
            'name' => "location",
            'description' => "위치을 입력해주세요"
        ], 
        "regdata" => [
            'label' => "등록일",
            'name' => "regdata",
            'description' => "등록일을 선택해주세요"
        ]
    ];
    $form_str = "";
    
    foreach($formlist as $param) { //$param 일차원 배열
        // $form_str .= '<input type="text" name="'.$name.'">';
        // $form_str .= "<br>";
        $form_str .= form_input($param);
    }
    $contents = str_replace("{{formlist}}", $form_str,$contents);
    
    $layout = str_replace("{{contents}}", $contents, $layout); 
    echo $layout;
    
function form_input($arg) {
    //함수 안에 변수는 지역 변수
    global $path; // 글로벌 함수를 이용해 전역변수로 사용 할 수 있게 한다.
    //배열로 받은 데이터 지역변수로 할당
    $name = $arg['name'];
    $title = $arg['label'];
    $description = $arg['description'];

    $form_str = file_get_contents($path."form_input.html"); 
    $form_str = str_replace("{{name}}", $name, $form_str);

    $form_str = str_replace("{{title}}", $title, $form_str);
    $form_str = str_replace("{{description}}", $description, $form_str);
    return $form_str;
}