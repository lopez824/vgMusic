?php
session_start();
require_once 'Dao.php';

$color = htmlspecialchars($_GET['mood']);
$dao = new Dao();
$songIDs = array();
if ($color === 'red' || $color === 'green' || $color === 'blue' || $color === 'yellow') {
    $rows = $dao->getSongs($color);
    foreach($rows as $row) {
        array_push($songIDs,$row['id']);
    }
    $_SESSION['moodColor'] = $songIDs;
    header("Location: http://vgmusic.herokuapp.com/index.php");
    exit();
}
else {
    echo 'Shoo!';
} 
?>
