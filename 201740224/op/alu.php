<?

$sum = 1 + 2 + 3;//직접 더하기가 가능 (상수)
echo  $sum;
echo "<br>";

$a = 10;
$sum = $sum + $a;//변수에 대입 더하기
echo  $sum."<br>";//문자열을 결합할 때 .을 사용

$b = 3.14;
// $sum = 정수
// $b = 실수
//정수 + 실수 => 값
$sum = $sum +$b;//변수에 대입 더하기
echo $sum."<br>";//문자열 결합 .

echo "빼기 실습 <hr>";
echo 10-5; //상수만으로 연산하여 출력도 가능

echo "곱셉 실습 <hr>";
echo 2*3;

echo "증가연산자 실슬 <hr>";
$c = 1;
echo $c;
$c = $c +1;// 1
echo $c;
$c = $c +1;// 2
echo $c;
$c = $c +1;// 3

echo "<br>";
$d = 1;
echo $d++; // ++ => +1
echo $d++; //+ =숫자 , 그 숫자 만큼 증가
echo $d++;

echo "<br>";
$e = 1;
echo ++$e;
echo ++$e;
echo ++$e;