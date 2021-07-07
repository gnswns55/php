<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th width = "100">번호</th>
                <th width = "100">ID</th>
                <th width = "100">PW</th>
                <th width = "100">Phone</th>
                <th width = "100">date</th>
                <th width = "100">gender</th>
                <th width = "100">e-mail</th>
            </tr>
        </thead>
    
<?php
    $db_hostname = '127.0.0.1';
    $db_database = 'member';
    $db_username = 'root';
    $db_password = '1234';

    $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);
    if (!$db_server)
    echo "DB Server connect Error<br>";
    else 
    echo "DB Server connect<br>";

    $Select = "SELECT * FROM member_test";
    $result = mysqli_query($db_server, $Select);
    while($board = $result->fetch_array())
    {
        $m_no = $board['m_no'];
        $m_id = $board['m_id'];
        $m_pw = $board['m_pw'];
        $m_phone_num = $board['m_phone_num'];
        $m_date = $board['m_date'];
        $m_gender = $board['m_gender'];
        $m_email = $board['m_email'];
        echo <<< END
        <tbody>
            <tr>
                <td width = "100">$m_no</td>
                <td width = "100">$m_id</td>
                <td width = "100">$m_pw</td>
                <td width = "180">$m_phone_num</td>
                <td width = "100">$m_date</td>
                <td width = "100">$m_gender</td>
                <td width = "100">$m_email</td>
            </tr>
        </tbody>

    END;
    }
    $insert = "INSERT INTO member_test (
        m_id, m_pw, m_phone_num, m_date, m_ gender, m_email) VALUES (
        'id_test1', 'password', '010-2007-5145', '2021-07-07','남','test@naver.com')";
        $result = mysqli_query($db_server, $insert);
        if($result == false) {
            echo mysqli_error($db_server);
        }
    
?> 
    </table>
</body>
</html>