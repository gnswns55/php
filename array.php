<?php
    //배열1
    $paper[] = "copier";
    $paper[] = "inkjet";
    $paper[] = "laser";
    $paper[] = "photo";

    echo "<pre>";
    print_r($paper);
    echo "<pre/>";

    //배열2
    $paper[0] = "copier";
    $paper[1] = "inkjet";
    $paper[2] = "laser";
    $paper[3] = "photo";

    echo "<pre>";
    print_r($paper);
    echo "<pre/>";

    echo "<pre>";
    var_dump($paper);
    echo "<pre>";

    for($i = 0; $i<4 )
    //연관 배열
    $paper['copier'] = "copier $multipurpose";
    $paper['inkjet'] = "inkjet $printer";
    $paper['laser'] = "laser $printer";
    $paper['photp'] = "photographic $paper";

    echo $paper['laser'];
?>