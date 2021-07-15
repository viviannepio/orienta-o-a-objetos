<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$banco = new PDO("mysql:host=localhost;dbname=sigaa", "root", "");
$name = $_GET["name"];
$user = $_GET["user"];
$email = $_GET["email"];
$password = $_GET["password"];
$stmt = $banco->prepare("INSERT INTO sigaa_users (name, user, email, password) VALUES(?, ?, ?, ?)");
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $user);
$stmt->bindParam(3, $email);
$stmt->bindParam(4, md5($password));
$stmt->execute();
header("location: index.php");
?>