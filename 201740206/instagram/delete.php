<?php

include "theme.conf.php";
include "../dbinfo.php";

$db0 = new mysqli($dbinfo['master']['dbhost'],
                 $dbinfo['master']['dbuser'],
                 $dbinfo['master']['dbpass'],
                 $dbinfo['master']['dbschema'],
                 $dbinfo['master']['dbport']
);

echo "게시물을 삭제합니다.";
print_r($_GET);  // 배열값

if (isset($_GET['id'])) {
    // 삭제루틴
    echo "삭제합니다.";
    if ($db0) {
        echo "DB 삭제할 준비가 됐어요";
    } else {
        echo "DB접속실패";
    }
    // ex2, 여기에서 삽입하는 DB 작업

    // ex3, 여기서에서 실제 수정 DB 작업

    // ex4, 여기에서 실제 삭제 DB 작업
    $query = "";  // SQL문장을 (변수에) 저장
    $query = "DELETE FROM `phpdaelim5`.`instagram` WHERE (`id` = '".$_GET['id']."')";
    $result = mysqli_query($db0, $query);
    
    echo "<br>"."삭제성공!!!";

    // 삭제하고 다시 초기페이지로 넘김
    $url = "/";
    header("location:" . $url);

    /*
        header 아래에 화면출력부분(body)이 오면 안됨.
    */

} else {
    // 삭제할 게시물이 없습니다.
    echo "삭제할 게시물이 없습니다.";

    // ex1, 목록을 출력하는 select
    // ... 작업


    // ex2, 삽입할때
    // 여기에 입력 받을 수 있는 목록을 출력

    // ex3, 수정할때
    // 여기서 DB조회, 수정항목들을 표시

    // ex4, 삭제
    // 만일 삭제하기 전에 메시지를 출려해줘야 한다??
    // 여기 부분
}