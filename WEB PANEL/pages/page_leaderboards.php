<?php
try{
    $database = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);} catch(PDOException $e) {echo "Connection failed: " . $e->getMessage();
}


?>

<div class="app-main__outer">
<div class="app-main__inner">
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-network icon-gradient qb-core">
                </i>
            </div>
                <div>Leaderboards
                    <div class="page-title-subheading">On this page you can see all leaderboards for your server!
                </div>
            </div>
        </div>
    </div>
</div>
