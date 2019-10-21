<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Print Cups | Sublimando tus Gustos Tazas Decorativas"/>
    <meta name="author" content=""/>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png"/>
    <title>Print Cups | <?php echo $title; ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/animate.min.css" rel="stylesheet">
    <?php
        if($mode === "light"){
           echo'<link href="css/style.css" rel="stylesheet"/>';
        }else{
            echo '<link href="css/styleDark.css" rel="stylesheet"/>';
        }
    ?>
</head>
<body id="page-top">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0"></script>
    <?php 
    require_once('navbar.php');
    echo $content;
    require_once('footer.php');?>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/pace.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/inspinia.js"></script>
</html>