<?php
try{
	$database = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
} catch(PDOException $ex)
{
	echo "Could not connect to your database. Please Make sure to Check your credentials in your config file! ".$ex->getMessage();
	die();
}

$citizenid = $_GET["citizenid"];

$character = $database->query("SELECT * FROM players WHERE citizenid = '$citizenid'");
foreach($character as $row) 
{
    $charid = $row["id"];
    $rockstar = $row["license"];
    $owner = $row["name"];
    $lastplayed = $row["last_updated"];

    $jsoncharinfo = $row["charinfo"];
    $charinfo = json_decode($jsoncharinfo);

    $jsonmetadata = $row["metadata"];
    $metadata = json_decode($jsonmetadata);

    $jsonmoney= $row["money"];
    $money = json_decode($jsonmoney);

    $jsonjob= $row["job"];
    $job = json_decode($jsonjob);

    $jsongang= $row["gang"];
    $gang = json_decode($jsongang);
}

?>

<div class="app-main__outer">
<div class="app-main__inner">
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient qb-core">
                </i>
            </div>
                <div>Character Information
                    <div class="page-title-subheading">On this page you can see more information about any character! If nothing shows go back to the Search Characters tab and try again!
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
                <div class="card-header">General Information (Out-Of-Character)</div>
                    <div class="card-body">
                    <p><b>Character ID: </b><?php echo $charid; ?> </p>
                    <p><b>Owned By:</b> <?php echo $owner; ?></p>
                    <p><b>Last Played:</b> <?php echo $lastplayed; ?></p>
                    <p><b>License:</b> <?php echo $rockstar; ?></p>
                    <p><b>Discord ID:</b> Pending Add</p>
                    <p><b>User ID:</b> Pending Add</p>



                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card text-center">
                <div class="card-header">General Information (In-Character)</div>
                    <div class="card-body">
                    <p><b>Character Name:</b> <?php echo $charinfo->{'firstname'}; ?> <?php echo $charinfo->{'lastname'}; ?></p>
                    <p><b>Citizen ID: </b> <?php echo $citizenid; ?></p>
                    <p><b>Nationality:</b> <?php echo $charinfo->{'nationality'}; ?></p>
                    <p><b>Gender:</b> <?php echo $charinfo->{'gender'}; ?></p>
                    <p><b>Birthdate:</b> <?php echo $charinfo->{'birthdate'}; ?></p>
                    <p><b>Phone Number:</b> <?php echo $charinfo->{'phone'}; ?></p>
                    <p><b>Blood Type:</b> <?php echo $metadata->{'bloodtype'}; ?></p>

                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper"> Change Phone Number</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card text-center">
                <div class="card-header">Banking Information</div>
                    <div class="card-body">
                    <p><b>Account Number:</b> $<?php echo $charinfo->{'account'}; ?></p>
                    <p><b>Wallet ID:</b> $<?php echo $metadata->{'walletid'}; ?></p>
                    <p><b>Bank:</b> $<?php echo $money->{'bank'}; ?></p>
                    <p><b>Cash:</b> $<?php echo $money->{'cash'}; ?></p>
                    <p><b>Crypto:</b> $<?php echo $money->{'crypto'}; ?></p>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper"> Alter Bank Amount </span>
                    </button>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper"> Alter Cash Amount </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card text-center">
                <div class="card-header">Job & Gang Information</div>
                    <div class="card-body">
                    <p><b>LEGAL JOB INFORMATION</b></p>
                    <p><b>Job:</b> <?php echo $job->{'label'}; ?></p>
                    <p><b>Job Grade:</b> <?php echo $job->{'grade, name'}; ?></p> <!-- GOTTA FIGURE OUT HOW TO DO JSON INSIDE JSON? *if that make sense* -->
                    <p><b>Job Payment:</b> <?php echo $job->{'payment'}; ?></p>
                    <p><b>GANG AFFILIATION INFORMATION</b></p>
                    <p><b>Gang Name:</b> <?php echo $gang->{'label'}; ?></p>
                    <p><b>Gang Rank:</b> <?php echo $gang->{'name'}; ?></p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>



