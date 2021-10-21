<?php
try{
	$database = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
} catch(PDOException $ex)
{
	echo "Could not connect to your database. Please Make sure to Check your credentials in your config file! ".$ex->getMessage();
	die();
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
                <div>Player-Owned Vehicle List
                    <div class="page-title-subheading">This page shows all player-owned vehicles that are owned on your server!
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title"></h4>
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Vehicle ID</th>
                                <th>Owned By (Click to View) </th>
                                <th>License Plate</th>
                                <th>Vehicle Model</th>
                                <th>Vehicle Model Hash</th>
                                <th>Current Garage</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php
                            $uniquevehicle = $database->query("SELECT * FROM player_vehicles");

                            foreach($uniquevehicle as $newrow)
                            {
                            echo 
                            '<td>'. $newrow['id'] .'</td>
                            <td><a id="accentcolor" href="characterInfo.php?citizenid=' . $newrow['citizenid'] . '">'. $newrow['citizenid'].' </td>
                            <td><a id="accentcolor" href="vehicleInfo.php?plate=' . $newrow['plate'] . '">'. $newrow['plate'].' </td>
                            <td>'. $newrow['vehicle'] .'</td>
                            <td>'. $newrow['hash'] .'</td>
                            <td>'. $newrow['garage'] .'</td>
                            </tr>';
                            }
                        ?>
                    </tbody>
                </table>
			</div>
		</div>
	</div>
</div>