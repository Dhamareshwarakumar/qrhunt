<?php
require_once './config/db.php';

$team_name = "SELECT DISTINCT team_name FROM `details`";
$team_name_result = mysqli_query($conn, $team_name);


$team_names = array();

while ($row = mysqli_fetch_assoc($team_name_result)) {
    array_push($team_names, $row['team_name']);
}

echo json_encode($team_names);
