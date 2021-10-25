<?php
require_once(__DIR__ . "/config.php");
session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title><?php echo SERVER_NAME;?> | Login</title>
        <meta name="description" content="<?php echo SERVER_DESCRIPTION;?>">
        <meta name="author" content="https://github.com/aidanohart">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="msapplication-tap-highlight" content="no">
        <link rel="shortcut icon" href="assets/images/logo-fav.png">
        <link href="./main.css" rel="stylesheet">
    </head>
    <body>
        <div class="app-wrapper-footer">
            <div class="app-footer">
                <div class="app-footer__inner">
                    <div class="app-footer-right">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="https://github.com/aidanohart" class="nav-link">
                                    QBCore Admin Panel - Made by aidanohart
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
