<?php
session_start();
require_once '../Dao.php';
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$dao = new Dao();
$rows = $dao->getUser($username, $password);
$userData = $rows->fetch();
echo json_encode($userData);
exit();
?>