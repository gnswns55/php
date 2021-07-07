<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <style>
        .body_bg {
            background-color:whitesmoke;
        }
    </style>
</head>
<body id="body_bg">
<?php
    $r_name = $_POST['name'];
    $r_id = $_POST['id'];
    $r_pw = $_POST['pw'];
    $r_r_pw = $_POST['r_pw'];
    $r_bt = $_POST['bt'];
    // echo "받아온 데이터<br>";
    echo $r_name, "<br>";
    echo $r_id, "<br>";
    echo $r_pw, "<br>";
    echo $r_r_pw, "<br>";
    echo $r_bt, "<br>";

    $db_hostname = '127.0.0.1';
    $db_database = 'member';
    $db_username = 'root';
    $db_password = '1234';

    $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);
    if (!$db_server)
        echo "DB Server connect Error<br>";

    $insert = "INSERT INTO test1 (
        m_id, m_pw, m_phone_num, m_date, m_gender, m_email) VALUES (
        '$r_name', '$r_id', ' $r_pw', '$r_r_pw','$r_bt')";
    $result = mysqli_query($db_server, $insert);
    if($result == false) {
        echo mysqli_error($db_server);
    }
    header('Location: /content/test_join.php');

    
?>
</body>
</html>
