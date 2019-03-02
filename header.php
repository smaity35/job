<?php 
$page=basename($_SERVER['PHP_SELF']);
$select1=$select2=$select3=$select4=$select5=$select6=$select7=$select8=$select9=null;

if($page=="black-list.php"){
    $select1=' class="active"';
}
if($page==""){
    $select2=' class="active"';
}
if($page=="upload-resume.php"){
    $select3=' class="active"';
}
if($page=="annotation.php"){
    $select4=' class="active"';
}
if($page=="update-model.php"){
    $select5=' class="active"';
}


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Nexa IT Solution" />

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title itemprop="name">Job</title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- <link rel="icon" href="images/favico.png" >-->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/jquery.timepicker.min.css.css">
        <link href="css/uikit.min.css" rel="stylesheet">
        <link href="css/ionicons.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/fancybox.css" rel="stylesheet">
        <link href="css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="css/easy-responsive-tabs.css" rel="stylesheet">
        <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet">
        <link href="css/slick.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

        <style>
            .loder-cover {
                position: fixed;
                top: 0;
                left: 0;
                height: 100vh;
                width: 100%;
                background-color: #fff;
                background-image: url(images/load.gif);
                z-index: 9999;
                background-position: center;
                background-size: 400px;
                background-repeat: no-repeat;
                -webkit-transition: all 0.5s 3s;
                -moz-transition: all 0.5s 3s;
                -ms-transition: all 0.5s 3s;
                transition: all 0.5s 3s;
            }
            
            .loder-cover.remove {
                -webkit-transform: scale(0);
                -moz-transform: scale(0);
                transform: scale(0);
            }
        </style>
    </head>

    <body>
        <!-- <div class="loder-cover"></div>-->

        <header>
                <section class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 logo">
                                <a href="index.php"><img src="images/logo.png"></a>
                            </div>
                            <div class="col-md-9 right-side">
                                <div class="admin-prof">
                                    <span>Super Admin</span>
                                    <div class="img-box" style="background-image: url('images/t3.jpg')"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bottom-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 main-nav">
                                <nav>
                                    <ul>
                                        <li <?php echo $select1;?>><a href="black-list.php">Black list employee</a></li>
                                        <li <?php echo $select2;?>><a href="#">Black list candidate</a></li>
                                        <li <?php echo $select3;?>><a href="upload-resume.php">Parse resume</a></li>
                                        <li <?php echo $select4;?>><a href="annotation.php">Annotation</a></li>
                                        <li <?php echo $select5;?>><a href="update-model.php">Update model</a></li>
                                    </ul>
                                </nav>

                                <!-- <div class="nav-btn"><i class="fa fa-bars" aria-hidden="true"></i></div> -->
                            </div>
                        </div>
                    </div>
                </section>
        </header>



        <div class="side-menu">
            <nav>
                <ul>
                    <li><a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                <li><a href=""><i class="fa fa-gift" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
        </div>