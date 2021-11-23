<?php
try{
    $database = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);} catch(PDOException $e) {echo "Connection failed: " . $e->getMessage();
}

$playername = $_GET["playername"];
$playerid = $_GET["playerid"];




?>

<div class="app-main__outer">
<div class="app-main__inner">
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-hammer icon-gradient qb-core">
                </i>
            </div>
                <div>Create New Note
                    <div class="page-title-subheading">You're currently creating a new note for <?php echo $playername ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tab-content">
<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Player Info</h5>
            <form class="">
                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Player Name</label>
                    <div class="col-sm-10"><input class="form-control" name="player_name" value="<?php echo $playername ?>" readonly></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Player ID</label>
                    <div class="col-sm-10"><input class="form-control" name="player_id" value="<?php echo $playerid ?>" readonly></div>
                </div>
                <h5 class="card-title">Note Details</h5>
                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Note Reason</label>
                    <div class="col-sm-10"><input class="form-control" name="note_reason" placeholder="Remember to include your note reason!"></div>
                </div>
                <div class="position-relative row form-check">
                    <div class="col-sm-10 offset-sm-2">
                        <button class="btn btn-primary">Submit Note</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>