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
print_r($_GET); // 배열값...

if (isset($_GET['id'])) {
    
    echo "삭제를 합니다...";

    if ($db0) {

        echo "db 작업을 할 준비가 되어있어요!";
        /*
        여기에서 삽입하는 db작업
        여기에서 실제 수정 db작업
        여기에서 실제 삭제 db작업
        */
        $query = "DELETE from instagram where id = ".$_GET['id'];
        $result = mysqli_query($db0, $query);
         //sql 문장을 (변수)저장
             echo "<br>삭제 성공!!!";
         $url = "/";
         header("location" . $url);
         // header를 사용할 때 화면 출력하는 코드가 있으면  안 된다.
        
        } else {
            echo "접속 실패";

        }
} else {

    echo "삭제할 게시물이 없습니다.";
    /* 목록을 출력하는 select
     ... 작업

     삽입할 때
     여기에 입력 받을 수 있는 목록을 출력

     수정할 때
     여기에서 db조회, 수정 항목들을 표시

     삭제
     만일 삭제하기 전에 메세지를 출력해줘야 한다??
     여기 복붙
    
     */
}