<?php
include "theme.conf.php";
include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema']
    );


echo "게시글을 삭제합니다.";
print_r($_GET);

if (isset($_GET['id'])) {

    //삭제루틴
    //echo "삭제 중";
    
    if($db0) {
    //echo "DB 작업 할 준비완료";

    //여기에서 삽입하는 db 작업

    //여기에서 실제 수정 db 작업

    //여기에서 실제 삭제 db 작업 
    $query = "DELETE from instagram where id = ".$_GET['id'];
    $result = mysqli_query($db0, $query);
        
    $url = "/";
    header("location:".$url);
    

    } else {
        echo "접속 실패";
    }

    

    
} else {
    // 삭제할 게시글이 없습니다. 
    echo "삭제할 게시글이 없습니다.";
    //ex, 목록출력 select

    //ex2 삽입시
    //여기에 입력 받을 수 있는 목록을 출력

    //ex3 수정할때
    //겨이서 db조회, 수정항목 표시

    //ex4 삭제
    // 
}