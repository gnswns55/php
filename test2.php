<?php
$oxo = array(array('x1','x2','x3'),
    array('y1','y2','y3'),
    array('z1','z2','z3')
);
echo $oxo [1] [1];

echo "<br>";
$num = 10;
echo $num + 1;
echo "<br>";
echo $num - 1;
echo "<br>";
echo $num / 1;
echo "<br>";
echo $num * 1;
echo "<br>";
echo $num % 1;
echo "<br>";
// 거스름돈
$user_input = 10000;
$item_price = 7300;
//연산
$change_money_total = $user_input-$item_price;
$change_money_1000 = (int)($change_money_total/1000);
$change_money_500 = (int)(($change_money_total%1000)/500);
$change_money_100 = (int)((($change_money_total%1000)%500)/100);
echo "<br>";
echo "거스름돈 총계 : ", $change_money_total,"<br>";
echo "1000원 : ", $change_money_1000, "개<br>";
echo "500원 : ", $change_money_500, "개<br>";
echo "100원 : ", $change_money_100, "개<br>";

echo "<br>연산자 예제<br>";
$num = 10;
echo "연산 전 : ", $num, "<br>";
$num -= 10;
echo "연산 후 : ", $num, "<br>";
echo "연산 전 : ", $num, "<br>";
$num *= 10;
echo "연산 후 : ", $num, "<br>";
echo "연산 전 : ", $num, "<br>";
$num /= 10;
echo "연산 후 : ", $num, "<br>";
echo "연산 전 : ", $num, "<br>";
$num %= 10;
echo "연산 후 : ", $num, "<br>";
$l_name = "lee";
$r_name = "eunah";
$f_name = $l_name. $r_name;
echo $f_name;
echo "<br>";
echo "<br>";

//첫번째 예제
$author = "LEE EUNAH";
echo "Developers, Developers, deverlopers, developers, deverlopers,
deverlopers, deverlopers, deverlopers, deverlopers!

-$author.";

//두번째 예제
echo "<br>";
echo "<br>";
$author_2 = "Gildong Hong";
$text = "Measuring programing progress by lines of  code is like
Measuring aircraft building progress by weight.

-$author_2.";
echo $text;

?>