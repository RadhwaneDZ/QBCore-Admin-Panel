<div class="app-main__outer">
<div class="app-main__inner">
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-drawer icon-gradient qb-core">
                </i>
            </div>
                <div>All Online Players
                    <div class="page-title-subheading">This page shows all players that are currently online!
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
                                <th>Online ID</th>
                                <th>Player Name</th>
                                <th>License (Rockstar License)</th>
                                <th>Discord ID</th>
                                <th>Steam Identifier</th>
                                <th>Ping</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php
                            $json = file_get_contents('http://51.89.153.238:30136/players.json'); /* USING SOME RANDOM SERVER TO GET PLAYER LIST FOR NOW - https://www.gs4u.net/en/s/183472.html */
                            $data = json_decode($json, true);
                            foreach ($data as $key => $newrow) {
                                
                            echo 
                            '<td>'. $newrow["id"] .'</td>
                            <td>'. $newrow["name"] .'</td>
                            <td>'. $newrow["identifiers"] .'</td>
                            <td>'. $newrow["j"] .'</td>
                            <td>'. $newrow["j"] .'</td>
                            <td>'. $newrow["ping"] .'</td>
                            </tr>';
                            }
                        ?>
                    </tbody>
                </table>
			</div>
		</div>
	</div>
</div>