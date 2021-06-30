<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Creative - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">
                        <?php
                            echo "<br>";
                            ini_set('display_errors', '1');

                            $input_data = $_GET["val"];
                            $input_len = strlen($input_data);
                            $input_value = substr($input_data, 1, ($input_len - 1));
                            $level = substr($input_data, 0, 1);
                            switch($level)
                            {
                                case 0:
                                    masic_page($level,$input_value);
                                    break;
                                case 1:
                                    masic_page($level,$input_value);
                                    break;
                                case 2:
                                    masic_page($level,$input_value);
                                    break;
                                case 3:
                                    masic_page($level,$input_value);
                                    break;
                                case 4:
                                    masic_page($level,$input_value);
                                    break;
                                case 5:
                                    masic_page($level,$input_value);
                                    break;
                                case 6:
                                    result_page($input_value);
                                    break;
                            }

                            function masic_page($level, $current_value)
                            {
                                $in_count = 0;
                                $line_count = 0;
                                echo "<br><br>";
                                echo ($level+1),"<strong>단계 하단의 숫자 중 생각하신 숫자가 있으십니까?</strong><br>";
                                echo "<br><br>";
                                $point = pow(2,$level);

                                for($num = $point; $num < 50; $num++)
                                {
                                    if($in_count == $point)
                                    {
                                        $num += $point;
                                        $in_count = 0;
                                    }

                                    echo $num, "&nbsp;&nbsp;&nbsp;&nbsp;";
                                    $in_count++;
                                    
                                    if($line_count != 0 && $line_count % 5 == 0)
                                    {
                                        echo "<br>";
                                        //$line_count = 0;
                                    }
                                    $line_count++;
                                }
                                echo "<br><br>";

                                echo "<a class=\"btn btn-primary \" onClick='location.href=\"magic.php?val=",($level+1),($current_value +$point),"\"'>존재함</a> &nbsp;"; 
                                echo "<a class=\"btn btn-primary \" onClick='location.href=\"magic.php?val=",($level+1),($current_value),"\"'>존재하지 않음</a>";
                            }

                            function result_page($input_value)
                            {
                                echo "당신이 생각한 숫자는 ", $input_value, "입니다.";
                            }
                        ?>
                        </p>
                    </div>
                </div>
            </div>
        </header>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>