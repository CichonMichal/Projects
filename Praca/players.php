<?php include('server.php')?>
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
                    <div class="col-xs-12">
                            <?php
                            $username = $_SESSION['username']; 
                            $query = "SELECT * FROM users";
                            if ($result = $db->query($query)) {
                             
                                while ($row = $result->fetch_assoc()) {
                                    $username = $row["username"];
                                    $email = $row["email"];
                                    $name = $row["name"];
                                    $lastname = $row["lastname"];
                                    $age = $row["age"];
                                    $state = $row["state"];
                                    $city = $row["city"];
                                    $experience = $row["experience"];
                                    $role = $row["role"];
                                    $info = $row["info"];

                                    echo'   <div class="content user-display">
                                            <div class="col-xs-12">
                                            <h1 class="margin">Podróżnik ' .$name. ', zwany także jako <strong style="color: #E72C02;">' .$username. '</strong></h1>
                                            <div class="row">
                                                <div class="col-3 info">
                                                    <p>Imię: <p2 class="strong">' .$name. '</p2></p>
                                                </div>
                                                <div class="col-4 info">
                                                    <p>Nazwisko: <p2 class="strong">' .$lastname. '</p2></p>
                                                </div>
                                                <div class="col-5 info">
                                                    <p>Email: <p2 class="strong">' .$email. '</p2></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-3 info">
                                                    <p>Wiek: <p2 class="strong">' .$age. '</p2></p>
                                                </div>
                                                <div class="col-4 info">
                                                    <p>Województwo: <p2 class="strong">' .$state. '</p2></p>
                                                </div>
                                                <div class="col-5 info">
                                                    <p>Miasto: <p2 class="strong">' .$city. '</p2></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-3 info">
                                                    <p>Rola: <p2 class="strong">' .$role. '</p2></p>
                                                </div>
                                                <div class="col-7 info">
                                                    <p>Doświadczenie: <p2 class="strong">' .$experience. '</p2></p>
                                                </div>
                                                <div class="col-2 info"></div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-12 info">
                                                    <p>Informacje: <hr><br>' .$info. '</p>
                                                </div>
                                            </div>
                                            </div>
                                            </div>';
                                        }
                                        
                                        $result->free();
                                        }
                                        ?>            
                </div>
            </div>
            <?php include ('php/logout.php'); ?>
        </div>
    </container>       
</body>
</html>