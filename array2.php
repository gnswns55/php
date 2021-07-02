<?php
    $p1 = array("copier", "inkjet", "laser", "photo");

    echo "p1 element :" . $p1[2] . "<br />";

    $p2 = array('copier' => "copier & multipurpose",
                'inkjet' => "lnkjet printer",
                'laser' => "laser printer",
                'photo' => "photographic paper");

    echo "p2 element: " . $p2['inkjet'] . "<br />";

    echo "<br><br>";

    //foreach문
    $paper = array("copier", "Inkjet", "Laser", "Photo");
    $j = 0;

    foreach ($paper as $item)
    {
        echo "$j: $item<br>";
        ++$j;
    }

    //배열의 활용
    $paper = array('copier' => "copier & multipurpose",
                    'inkjet' => "lnkjet printer",
                    'laser' => "laser printer",
                    'photo' => "photographic paper");
    foreach ($paper as $item => $description)
    {
        echo "$item :  $description<br>";

    }

    //while문과 list 함수 이용한 연관배열 출력
    /*$paper = array('copier' => "copier & multipurpose",
                    'inkjet' => "lnkjet printer",
                    'laser' => "laser printer",
                    'photo' => "photographic paper");

    while (list($item, $description) = each($paper))
    {
        echo "$item: $description<br>";
    } */

    //다차원 연관 배열 생성 및 출력
    $products = array(
        'paper' => array(
            'copier' => "copier & multipurpose",
            'inkjet' => "lnkjet printer",
            'laser' => "laser printer",
            'photo' => "photographic paper"),
        'pens' => array(
            'ball' => "ball point",
            'hilite' => "highlighters",
            'market' => "markers"),
        'mics' => array(
            'tape' => "sticky tape",
            'glue' => "adherives",
            'clips' => "paperclips") );

        echo "<pre>";
        foreach ($products as $section => $item)
            foreach($item as $key => $value)
             echo "$section: \t$key\t($value)<br>";
        echo "</pre>";
    
    // 배열 관련 함수
    $season[0] = "fall";
    $season[1] = "winter";
    $season[2] = "summer";
    $season[3] = "spring";

    sort($season);
    print "<pre>";
    print_r($season);
    print "</pre>";

    rsort($season);
    print "<pre>";
    print_r($season);
    print "</pre>";

    shuffle($season);
    print "<pre>";
    print_r($season);
    print "</pre>";
    
    $number = array("A", "B", "C", "D", "E");
    sort($number);

    for($i =0; $i < count($number); $i++) {
        echo $number[$i];
        echo "<br>";
    }

    

?> 