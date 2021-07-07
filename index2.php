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
                <th width = "100">NAME</th>
                <th width = "100">ID</th>
                <th width = "100">PW</th>
                <th width = "100">birthday</th>
                <th width = "100">date</th>
            </tr>
        </thead>
    
<?php
    $db_hostname = '127.0.0.1';
    $db_database = 'test1';
    $db_username = 'root';
    $db_password = '1234';

    $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);
    if (!$db_server)
    echo "DB Server connect Error<br>";
    else 
    echo "DB Server connect<br>";

    $Select = "SELECT * FROM test1";
    $result = mysqli_query($db_server, $Select);
    while($board = $result->fetch_array())
    {
        $m_name = $board['m_name'];
        $m_id = $board['m_id'];
        $m_pw = $board['m_pw'];
        $m_birthday = $board['m_birthday'];
        $m_date = $board['m_date'];
        echo <<< END
        <tbody>
            <tr>
                <td width = "100">$m_name</td>
                <td width = "100">$m_id</td>
                <td width = "100">$m_pw</td>
                <td width = "180">$m_birthday</td>
                <td width = "100">$m_date</td>
            </tr>
        </tbody>

    END;
    }
    $insert = "INSERT INTO test1 (
        m_name, m_id, m_pw, m_date, m_birthday, m_date) VALUES ('이훈이',
        'gnswns55', '1234', '990921', '2021-07-07')";
        $result = mysqli_query($db_server, $insert);
        if($result == false) {
            echo mysqli_error($db_server);
        }
    
?> 
    </table>
</body>
</html>