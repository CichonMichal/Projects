<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
            <div class="col-sm-8 body-style main-body">
            <div class="content faq">
                <div class="col-xs-12">
                    <h1 class="question">Moje dane nie są przesyłane do bazy danych, co robić?</h1>
                        <div class="row">
                            <div class="col-12 info">
                                <p>Typową przyczyną jest zawarcie emotikonów w informacjach, które pragniesz przesłać do bazy danych. Jeżeli je usuniesz, wszystko powinno zostać przesłane.</p>
                            </div>
                        </div> 
                </div>
            </div>
            <div class="content faq">
                <div class="col-xs-12">
                    <h1 class="question">W jaki sposób mam się kontaktować z innymi graczami?</h1>
                        <div class="row">
                            <div class="col-12 info">
                                <p>Strona służy przede wszystkim jako miejsce, gdzie użytkownicy mogą wstawiać swoje ogłoszenia. Na karcie każdego z użytkowników widnieje ich adres email, przez który należy się z daną osobą kontaktować.</p>
                            </div>
                        </div> 
                </div>
            </div>
            <div class="content faq">
                <div class="col-xs-12">
                    <h1 class="question">Czy strona będzie dalej rozwijana?</h1>
                        <div class="row">
                            <div class="col-12 info">
                                <p>Tak. Aktualny stan strony jest jedynie prototypem, który będzie ciągle wspierany i rozwijany. Przyszłe, przewidywane funkcje to możliwość tworzenia, oraz zapraszania graczy do grup, możliwość komunikacji przez modół czatu, oraz ustawianie daty i godziny sesji, o której przypominane będzie drogą mailową.</p>
                            </div>
                        </div> 
                </div>
            </div>
            </div>
            <?php include ('php/logout.php'); ?>
        </div>
    </container>       
</body>
</html>