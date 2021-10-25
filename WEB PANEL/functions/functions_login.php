<?php

require __DIR__ . "/functions_discord.php";
require __DIR__ . "/functions_main.php";
require "../config.php";

# Initializing all the required values for the script to work
init($redirect_url, $client_id, $secret_id, $bot_token);

# Fetching user details
get_user();

# Redirecting to home page once all data has been fetched
redirect("../index.php");
?>
