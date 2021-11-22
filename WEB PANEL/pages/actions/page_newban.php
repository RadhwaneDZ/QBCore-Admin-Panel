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
                <i class="pe-7s-hammer icon-gradient qb-core">
                </i>
            </div>
                <div>Create New Ban
                    <div class="page-title-subheading">You're currently creating a new ban for
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
                    <div class="col-sm-10"><input class="form-control" readonly></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Player's Discord ID</label>
                    <div class="col-sm-10"><input class="form-control" placeholder="" readonly></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Player's Steam Identifier</label>
                    <div class="col-sm-10"><input class="form-control" placeholder="" readonly></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Player's Rockstar License </label>
                    <div class="col-sm-10"><input class="form-control" placeholder="" readonly></div>
                </div>
                <h5 class="card-title">Ban Length</h5>
                FOR PERMENANT BANS: If you wish to issue a permenant ban, leave Months, Days & Hours all as 0<br>
                <br><div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Months:</label>
                    <div class="col-sm-10"><input class="form-control" input type="number" value="0"></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Days:</label>
                    <div class="col-sm-10"><input class="form-control" input type="number" value="1"></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Hours:</label>
                    <div class="col-sm-10"><input class="form-control" input type="number" value="0"></div>
                </div>
                <h5 class="card-title">Other Ban Information</h5>
                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Ban Unique ID</label>
                    <div class="col-sm-10"><input class="form-control" readonly></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Ban Reason</label>
                    <div class="col-sm-10"><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                </div>
                <div class="position-relative row form-check">
                    <div class="col-sm-10 offset-sm-2">
                        <button class="btn btn-primary">Submit Ban</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>