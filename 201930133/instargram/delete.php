<?php
// db 연결
include "theme.conf.php";
include "../dbinfo.php";
$db0 = new mysqli(
    $dbinfo['master']['dbHost'],
    $dbinfo['master']['dbUser'],           
    $dbinfo['master']['dbPwd'],
    $dbinfo['master']['dbSchema']
);






echo '<p>게시물을 삭제합니다</p>';

print_r($_GET); // 배열값을 읽어올 수 있다.
if(isset($_GET['id'])){
    // 삭제 루틴    
    if ($db0) {
        echo 'db 작업 준비 완료';
        
        // 2-2. 삽입하는 db 작업

        // 3-2. 수정 db 작업

        // 4-2. 삭제 db 작업

        $query = "DELETE FROM `phpdaelim5`.`instargram` WHERE (`id` = '".$_GET['id']."');"; // sql 문장을 변수로 저장
        $result = mysqli_query($db0, $query); //DB 서버로 전송

            // echo '삭제 성공';
            // 페이지 이동
            $url = "/";
            header("HTTP/1.1 301 Moved Permanently");
            header("location : " . $url);
        

    }else{
        echo 'db 접속 실패';
    }
} else{
    echo '삭제할 게시물이 없습니다.';


    // 1. 목록을 출력하는 select

    // 2-1. 삽입시, 입력받을 수 있는 목록 출력

    // 3-1. 수정 시, db 조회하고 수정 항목들 표시

    // 4-1. 삭제하기 전에 출력할 메세지 작성
}