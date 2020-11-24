<?php

include "theme.conf.php";

// POST값
if (isset($_POST['title'])) {
    // post 값이 있으면,,, 뭔가 해줘
    $dbinfo = include "../dbinfo.php";
    // 객체 생성
    $db0 = new mysqli(
        $dbinfo['master']['dbhost'], // mysql 서버주소
        $dbinfo['master']['dbuser'], // 사용자아이디
        $dbinfo['master']['dbpass'], // 패스워드
        $dbinfo['master']['dbschema'] // 스키마
    );
    //SQL
    //$query = "INSERT INTO `phpdaelim4`.`instagram` (`title`,`description`) 
    //VALUES ('".$_POST['title']."','".$_POST['description']."');";

    //print_r($_POST);
    
    $query = "INSERT `phpdaelim4`.`instagram` SET ";
    foreach($_POST as $key => $value) {
        $query .= "`".$key."` = '".$value."',";
    }
    $query = rtrim($query,",");
    //$query .= "`title` = '".$_POST['title']."',";
    // $query .= "`description`='".$_POST['description']."'";
    
    //echo $query;
    //exit;

    $result = mysqli_query($db0, $query); // DB서버로 전송

    header("location:/");
}

// 파일을 읽어서, 변수에 넣어 주세요.
$layout = file_get_contents($theme['layout']);

    //알맹이
    $contents = file_get_contents($theme['new']);
    // 2차배열로 개선...
    $formlist = [
        "title"=>[
            'label'=>"제목",
            'name'=>"title",
            'description'=>"제목을 입력해 주세요"
        ],
        "description"=>[
            'label'=>"설명",
            'name'=>"description",
            'description'=>"설명을 작성하세요."
        ],
        "location"=>[
            'label'=>"위치",
            'name'=>"location",
            'description'=>"위치를 입력해 주세요."
        ],
        "regdate"=>[
            'label'=>"등록일",
            'name'=>"regdate",
            'description'=>"등록일을 선택해 주세요."
        ]
    ];
    $form_str = "";
    
    foreach($formlist as $param) { // $param 1차원배열
        //$form_str .= '<input type="text" name="'.$name.'">';
        //$form_str .= "<br>";
        $form_str .= form_input($param);
    }
    $contents = str_replace("{{formlist}}", $form_str, $contents);
        
$layout = str_replace("{{contents}}", $contents, $layout );
echo $layout;

function form_input($arg)
{
    global $path; 
    //함수 지역변수
    // 배열로 받은 데이터를, 지역변수로 할당.
    $name = $arg['name'];
    $title = $arg['label'];
    $description = $arg['description'];

    $form_str = file_get_contents($path."form_input.html");
    $form_str = str_replace("{{name}}",$name,$form_str);

    $form_str = str_replace("{{title}}",$title,$form_str);
    $form_str = str_replace("{{description}}",$description,$form_str);
    return $form_str;
}