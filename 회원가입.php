<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 벤치마킹</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>
<h1 style="text-align:center"><strong> <span style = "color : brown">COU</span><span style = "color : tomato">P</span><span style = "color : gold">A</span><span style = "color :green">N</span><span style = "color : royalblue">G</span></strong></h1><br>
<p style="text-align:center"><strong>회원정보를 입력해주세요</strong></p><br>
<div style="width:530px; position: absolute;left: 60%;transform: translateX(-50%);">
    <form method = "POST" action="회원가입.php">
        <div class="mb-2">
        &nbsp;<input type="text" name="id" placeholder="아이디 (이메일)"/><br/>
        </div> 
        <div class="mb-2">
        &nbsp;<input type="text" name="pas" placeholder="비밀번호"/><br/>
        </div>
        <div class="mb-2">
        &nbsp;<input type="text" name="pascheck" placeholder="비밀번호 확인"/><br/>
        </div>
        <div class="mb-2">
        &nbsp;<input type="text" name="name" placeholder="이름"/><br/>
        </div>
        <div class="mb-2">
        &nbsp;<input type="text" name="pnum" placeholder="휴대폰 번호"/><br/>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" style="font-size:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;동의하고 가입하기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
    </form>
</div>
    <div style="position:fixed; bottom: 0; width:100%; font-size:9px; text-align:left;">
    <?php
        echo "아이디: ".$_POST['id']."<br/>";
        echo "비밀번호: ".$_POST['pas']."<br/>";
        echo "비밀번호 확인: ".$_POST['pascheck']."<br/>";
        echo "이름: ".$_POST['name']."<br/>";
        echo "휴대폰 번호: ".$_POST['pnum']."<br/>";

        if(strlen($_POST['pas'])>=8)
        {
            echo "아이디 : ".$_POST['pas']."<br/>";
            echo "비밀번호 : ".$_POST['pas']."좋음 <bt/>";
            echo "이메일 : " .$_POST['email']."<br/>";
        }else
        {
            echo "아이디 : ".$_POST['pas']."<br/>";
            echo "비밀번호 : ".$_POST['pas']."나쁨 <bt/>";
            echo "이메일 : " .$_POST['email']."<br/>";
        }
    ?>
    </div>
    
</body>
</html>