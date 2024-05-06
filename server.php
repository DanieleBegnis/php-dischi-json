<?php
$disks_json = file_get_contents('dischi.json');
$disks = json_decode($disks_json, true);

header('Content-Type: application/json');
echo json_encode($disks);
?>