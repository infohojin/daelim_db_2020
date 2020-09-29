<?php
// 소스 코드
// MVC -> C(Controller)
# echo "여기가 시작이야~!";

$filename = "../";  // 상위 폴더
$filename .= "resource/layout.html";

# echo $filename;
// 함수
$body = file_get_contents("$filename");  // 함수의 값을 대입, 파일을 읽어서 값을 반환함
// 전달받은 문자열과 동일한 파일을 찾아서 읽어서 반환한다.

$header = file_get_contents("../resource/header.html"); 
# echo $header;
$body = str_replace("{{header}}", $header, $body);  // 문자열을 찾아서 치환해줌

$footer = file_get_contents("../resource/footer.html");
$body = str_replace("{{footer}}", $footer, $body);

// 함수 선언 
function main($filename, $body)  // 두 개의 값을 받음
{
    // 코드를 함수로 만들기
    // 코드를 묶어주어야 함
    $main = file_get_contents($filename);
    $body = str_replace("{{main}}", $main, $body);

    return $body;
}
// 함수 사용
$body = main("../resource/main.html", $body);

echo $body;