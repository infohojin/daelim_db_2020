<?php
include "theme.conf.php";
include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);

echo "게시물을 삭제합니다.";
print_r($_GET);//배열값...

if (isset($_GET['id'])){
    //삭제루틴
    //echo "삭제를 합니다...";
    if ($db0) {
        echo "DB 작업을 할 준비가 되어 있어요.";

        
    //ex2, 여기에서 삽입하는 DB작업

    //ex3 여기에서 실제 수정 DB작업

    //ex4 여기에서 살재 삭제 DB작업
    $query = "DELETE FROM `phpdaelim5`.`instagram` WHERE (`id` = '".$_GET['id']."');";//SQL
    $result = mysqli_query($db0, $query);

    if($result) {
        echo "<br>삭제성공!!!";

        //페이지 이동
        $url = "/";
        header("location:" . $url);
    }
    
    } else {
        echo "접속 실패";
    }


} else {
    //삭제할 게시물이 없습니다.
    echo "삭제할 게시물이 없습니다.";

    //ex 목록을 출력하눈 select
    // ....작업

    //ex, 삽입할때
    //여기에 입력 받을 수 있는 목록을 출력.

    //ex3 수정할때
    //여기에서 DB를 조회해서 수정 항목들을 표시

    //ex4, 삭제할때
    //만일 삭제하기 전에 메세지를 출력해줘야 한다?
    //여기 부분
}
