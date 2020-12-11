<?php 
//echo "<p>게시물을 삭제페이지</P>";
include "./theme.conf.php";
include "../dbData/dbinfo.php";
include "./desc.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema']
);

// DB 접속
if ($db0) {
//    echo "<p>DB 작업을 할 준비가 되어 있어요.</p>";

    //print_r($_GET); // 배열값
    if (isset($_GET['id'])) {
//        echo "<p>삭제를 합니다.</P>" ; 
    } else {
//        echo "<p>삭제할 게시글이 없습니다.</P>" ;
    }

    // DB 삭제
    $query = "DELETE FROM instagram WHERE id = ".$_GET['id']; // 쿼리문

    // 만든 쿼리문 실행
    $result = mysqli_query($db0, $query); // DB서버로 전송

    if ($result) { // 삭제를 성공 했다면
//        echo "<p>삭제 성공</p>";

        // 삭제 후 돌아가기
        // 문제점 - 위에 echo는 body 태그 안에 들어가는데 header()가 나중에 나와
        //          서버에 dobu -> head 순으로 들어가 문제발생
        // 해결법 - 위의 echo를 주석처리
        $url = "/";
        // header를 사용할때 반드시 먼저 
        header("location:" . $url); 
    }

} else {
    echo "<p>접속 실패</p>";

}





