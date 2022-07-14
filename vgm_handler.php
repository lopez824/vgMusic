<?php
header('Access-Control-Allow-Origin: *');
session_start();
require_once 'Dao.php';

$color = htmlspecialchars($_GET['mood']);
$dao = new Dao();
$songIDs = array();
if ($color === 'red' || $color === 'blue' || $color === 'yellow') {
    $rows = $dao->getSongs($color);
    foreach($rows as $row) {
        array_push($songIDs,$row['id']);
    }
    $_SESSION['moodColor'] = $songIDs;
    echo json_encode($_SESSION['moodColor']);
    exit();
}
else {
    echo 'Shoo!';
} 
?>
