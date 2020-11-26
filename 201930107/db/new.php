<?php
include "../dbInfo.php";

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
        $url = "insta.php";
        // post redirect get pattern
        // header("HTTP/1.1 301 Moved Permanently");
        header("location:$url");
    }

} else {
    echo "접속 실패";
}

echo "새글을 작성합니다.";
$title = $_POST['title'];
if (isset($title)) {
    echo "작성한 새 글은 = $title";
}

$form = file_get_contents("../resource/new.html");
echo $form;