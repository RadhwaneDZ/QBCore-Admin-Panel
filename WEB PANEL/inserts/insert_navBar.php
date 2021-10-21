<?php
require_once(__DIR__ . "/config.php");
session_start();
?>

<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
        <li class="app-sidebar__heading">General</li>
            <li><a href="index.php" class="mm-active"><i class="metismenu-icon pe-7s-rocket"></i>Dashboard</a></li>
            <li class="app-sidebar__heading">Out-Of-Character Management</li>
                <li><a href="playerSearch.php"><i class="metismenu-icon pe-7s-drawer"></i>Search All Players</a></li>
                <li><a href="characterSearch.php"><i class="metismenu-icon pe-7s-drawer"></i>Current Online Players</a></li>
                <li><a href="characterSearch.php"><i class="metismenu-icon pe-7s-diamond"></i>All Player Punishments<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
                    <ul>
                        <li><a href="banlist.php"><i class="metismenu-icon"></i>Player Bans</a></li> 
                        <li><a href="kicklist.php"><i class="metismenu-icon"></i>Player Kicks</a></li>  
                        <li><a href="noteslist.php"><i class="metismenu-icon"></i>Player Notes</a></li>
                    </ul>
            <li class="app-sidebar__heading">In-Character Management</li>
                <li><a href="characterSearch.php"><i class="metismenu-icon pe-7s-drawer"></i>Search Characters</a></li>
                <li><a href="vehicleSearch.php"><i class="metismenu-icon pe-7s-car"></i>Search Vehicles</a>
            </li>
        </div>
    </div>
</div>   