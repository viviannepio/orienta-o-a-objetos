<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$banco = new PDO("mysql:host=localhost;dbname=sigaa", "root", "");
$user = $_GET["user"];
$password = $_GET["password"];

if($password == NULL) {
  header("location: index.php");
}

$crypt = md5($password);

$stmt = $banco->query("SELECT * FROM sigaa_users WHERE user='$user' and password='$crypt';");
$data = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($data);

if($data != NULL && count($data)) {
  header("location: users.php");
} else {
  header("location: index.php");
}
?>