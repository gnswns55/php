
    <?php
    /*echo "<h2>구구단 출력하기</h2>","<br>";
    echo "<h3>2단</h3>","<br>";
    $i = 1;
    while($i<=9){
        echo 2*$i,"<br>";
        $i++;
    }
    echo "<h3>3단</h3>","<br>";
    $i = 1;
    while($i<=9){
        echo 3*$i,"<br>";
        $i++;
    }
    echo "<h3>4단</h3>","<br>";
    $i = 1;
    while($i<=9){
        echo 4*$i,"<br>";
        $i++;
    }
    echo "<h3>5단</h3>","<br>";
    $i = 1;
    while($i<=9){
        echo 5*$i,"<br>";
        $i++;
    }
*/
    $num =2;
    $count = 1;
    $end =5;
    while($num<=$end)
    {
        if($count == 1)
            echo $num, "단<br>";
        echo $num, " x " ,$count, " = " , $num*$count,"<br>";
        $count++;
        if($count ==10)
        {
            $num++;
            $count =1;
            echo "<br>";
        }
    }



    ?>
