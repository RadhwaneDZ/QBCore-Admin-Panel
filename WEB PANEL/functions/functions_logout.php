<?php
require __DIR__ . "/functions_main.php";

session_start();
session_destroy(); # Closing the session and deleting all values associated with the session
redirect("../index.php");
?>
