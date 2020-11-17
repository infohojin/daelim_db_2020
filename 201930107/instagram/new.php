<?php
include "theme.conf.php";
include "../dbInfo.php"; // db 접속 정보

$db0 = new mysqli(
    $dbInfo['master']['dbHost'], 
    $dbInfo['master']['dbUser'], 
    $dbInfo['master']['dbPass'], 
    $dbInfo['master']['dbSchema'], 
    $dbInfo['master']['dbPort']
);

if($db0) {
    // DB접속 성공
    $tablename = "instagram";
    $dbName = $dbInfo['master']['dbSchema'];
    $post = $_POST;
    if ($post) {
        // $query = "INSERT INTO phpdaelim5.$tablename (title) VALUES ('$title');";
        $date = date("Y-m-d", time());
        $query = "INSERT $dbName.$tablename SET ";
        foreach ($post as $k => $v) {
            $query .= "`$k`='$v', ";
        }
        // $query .= "`title`='$title', ";
        // $query .= "`description`='$description'";
        $query .= "`regdate`='$date'";
        echo $query;
        $result = mysqli_query($db0, $query); // DB서버로 전송
    
        // 페이지를 이동합니다.
        $url = "/";
        // post redirect get pattern
        // header("HTTP/1.1 301 Moved Permanently");
        header("location:$url");
    }

} else {
    echo "접속 실패";
}

$layout = file_get_contents($theme['layout']);
$contents = file_get_contents($theme['new']);

$param = [
    'title' => [
        'title' => "제목",
        'name' => "title",
        'description' => "제목 입력"
    ],
    'description' => [
        'title' => "내용",
        'name' => "description",
        'description' => "내용 입력"
    ],
    'aaa' => [
        'title' => "aaa",
        'name' => "aaa",
        'description' => "aaa"
    ],
    'picture' => [
        'title' => "이미지",
        'name' => "picture",
        'description' => "이미지"
    ]
];

$inputs = "";

foreach ($param as $v) {
    $inputs .= form_input($v);
}

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