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
        <div id=loginpage>
            <div class="main-card mb-3 card">
                <div class="card text-center">
                    <div class="card-footer card text-center">
                        <b><?php echo SERVER_NAME;?> | Login Page</b>
                    </div>

                    <div class="card-body">Welcome to the <?php echo SERVER_NAME;?>'s Admin panel login page. Please login by clicking the "Login with Discord" button below to authorize your access to this site.<br>
                        <br><button class="btn btn-primary">
                            <b>LOGIN WITH DISCORD</b>   
                        </button>
                    </div>

                    <div class="card-footer card text-center">
                        <a href="https://github.com/aidanohart" class="nav-link">
                        QBCore Admin Panel - Made by aidanohart
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
