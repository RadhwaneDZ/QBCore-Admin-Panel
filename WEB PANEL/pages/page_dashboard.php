<?php
try{
    $database = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);} catch(PDOException $e) {echo "Connection failed: " . $e->getMessage();
}
$result = $database->query("SELECT count(*) FROM players"); 
$Stat1 = $result->fetchColumn();

$result2 = $database->query("SELECT count(*) FROM adminpanel_players"); 
$Stat2 = $result2->fetchColumn();

$result3 = $database->query("SELECT count(*) FROM adminpanel_bans"); 
$Stat3 = $result3->fetchColumn();

?>

<div class="app-main__outer">
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-menu icon-gradient qb-core">
                    </i>
                </div>
                <div>Dashboard
                    <div class="page-title-subheading">This dashboard shows all statistics about your server and is the main home page of the admin panel!
                    </div>
                </div>
            </div>
        </div>
    </div>       

<div class="row">
<div class="col-md-6 col-xl-4">
    <div class="card mb-3 widget-content">
        <div class="widget-content-outer">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Characters</div>
                    <div class="widget-subheading">Number of unique characters created on the server</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-danger"><?php echo $Stat1; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6 col-xl-4">
    <div class="card mb-3 widget-content">
        <div class="widget-content-outer">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Users</div>
                    <div class="widget-subheading">Number of unique players that have joined the server</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-danger"><?php echo $Stat2; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6 col-xl-4">
    <div class="card mb-3 widget-content">
        <div class="widget-content-outer">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Bans</div>
                    <div class="widget-subheading">Total number of unique bans served ever</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-danger"><?php echo $Stat3; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="tab-content">
<div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
    <div class="row">
        <div class="col-lg-4">
            <div class="card text-center">
                <div class="card-header">CURRENT SESSION INFO (FOR TESTING PURPOSES)</div>
                    <div class="card-body">
                    <p><b>Discord ID: </b><?php echo $_SESSION['user_id'] ?> </p>
                    <p><b>Discord ID: </b><?php echo $_SESSION['staffname'] ?> </p>
                    <p><b>Discord Name:</b> <?php echo $_SESSION['username'] . '#' . $_SESSION['discrim']; ?></p>
                    <p><b>Discord Profile Picture ID: </b><?php echo $_SESSION['user_avatar'] ?> </p>
                    <p><b>Discord Profile Picture : <img src="https://cdn.discordapp.com/avatars/<?php $extention = is_animated($_SESSION['user_avatar']);echo $_SESSION['user_id'] . "/" . $_SESSION['user_avatar'] . $extention; ?>" /></p></b>
                    <p><b>Staff Unique ID:</b> <?php echo $_SESSION['staff_id']; ?></p>
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo '<a href="functions/logout.php"><button class="primary">YOU ARE LOGGED IN</button></a>';
                    } else {
                        echo "<a href='/login.php'><button class='primary'>YOU ARE NOT LOGGED IN</button></a>";
                    }
                    
                    ?>
                    
                </div>
            </div>
        </div>