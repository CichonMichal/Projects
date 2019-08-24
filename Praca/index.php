<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script async type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <container class="container">
        <a href="index.php"><banner class="banner-image">Rzut na Graczy</banner></a>
        <?php include ('php/buttons.php'); ?>
        <div class="row">
            <div class="col-sm-8 body-style main-body"><?php include ('informations.php'); ?></div>
            <?php include ('php/logout.php'); ?>
        </div>
    </container>       
</body>
</html>