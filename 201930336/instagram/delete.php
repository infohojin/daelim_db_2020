<?php
include "themeconf.php";
include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);

echo "게시물을 삭제합니다.";
print_r($_GET); // 배열값

if(isset($_GET['id'])) {
    //삭제 루틴
    echo "삭제 합니다.";
    if($db0) {
        echo "DB 작업이 준비되었습니다.";
        // ex2, 여기에서 삽입하는 DB 작업
    
        // ex3, 여기에서 실제 수정 DB 작업
    
        // ex4, 여기에서 실제 삭제 DB 작업
        $query = "DELETE FROM `phpdaelim5` . `instagram` WHERE (`id` = '".$GET['id']."');";    // SQL 문장을 변수에 저장
        $result = mysqli_query($db0, $query);

        if($result) {
            echo "<br>삭제 성공";

            // 페이지를 이동합니다.
            $url = "/";
            header("loacation:" . $url);
        }

    } else {
        echo "접속 실패";
    }

} else {
    //삭제할 게시물이 없습니다.
    echo "삭제할 게시물이 없습니다.";

    // ex, 목록을 출력하는 select
    // .... 작업

    // ex2, 삽입할 때
    // 여기에 입력 받을 수 있는 목록을 출력.

    // ex3, 수정할 때
    // 여기에서 DB를 조회, 수정 항목들을 표시

    // ex4, 삭제할 때
    // 삭제하기 전에 메시지를 출력해줘야 한다.
    // 여기 부분에 출력
}