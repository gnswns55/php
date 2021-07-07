<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>네이버 : 회원가입</title>
    <style>
        table, th, td {
            border:1px solid #ccc;
        }
        td {
            padding:5px; /* 셀 테두리와 내용 사이의 간격(패딩) */
        }
        .div_center{
            display: flex;
            justify-content: center;
        }
    </style>
    
    <style>
        body {
            background-color:whitesmoke;
        }
        h1{
            color:rgb(75, 207, 141);
            font-size:75px;
            font-family:Georgia, 'Times New Roman', Times, serif;
        }
        #c{
            text-align: center;
        }
        #a{
            font-size: 20px;
            
        }
        #b{
            text-align: left;
            width : 230px;

        }
        #c{
            font-size: 20px;
        }
        .c{
            width : 230px;
        }
    </style>
</head>
<body>
    <div id ="c" class="container">
        <br><br>
    <h1>NAVER</h1>
    <br><br>
    <form action = "/content/join_query.php" method = "post" id="a">
        <div class="div_center">
            <div id="b">
                <strong>
                이름<br>
                <input type = "text" name='name' placeholder="이름을 입력하세요" ></input><br><br>
            </div>
        </div>
        <div class="div_center">
            <div id="b">
                <strong>
                아이디<br>
                <input type = "text" name='id' placeholder="아이디를 입력하세요" ></input><br><br>
            </div>
        </div>
        <div class="div_center">
            <div id="b">
                <strong>
                비밀번호<br>
                <input type = "text" name='pw' placeholder="비밀번호를 입력하세요" ></input><br><br>
            </div>
        </div>
        <div class="div_center">
            <div id="b">
                <strong>
                비밀번호 재확인<br>
                <input type = "text" name='r_pw'></input><br><br>
            </div>
        </div>
        <div class="div_center">
            <div id="b">
                <strong>
                생년월일<br>
                <input type = "text" name='bt'></input><br><br>
            </div>
        </div>
        <div class="div_center">
            <div id="b">
                <input type = "submit" value = "가입하기" class="btn btn-success c"></input></strong>
            </div>
        </div>
    </form>
    </div>


</body>
</html>