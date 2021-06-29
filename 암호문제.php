<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>암호문 입력</title>
</head>
<body>
<h1>암호문 입력</h1>
<form method = "POST" aaction = "암호문제.php">
   암호 입력 <input type = "text" name="secret">
        <input type = "submit" name="submit">
</form>

<?php
    $num = $_POST['secret'];
    $str = str_split($num); // split 출력했을 때 배열과 같이 나눠주는 역할
    $i = 0;
    while($i < count($str))
    {
        echo chr(ord($str[$i])-3),"&nbsp; "; // &nbsp는 공백
        $i++;
    }

?>

</body>
</html>

