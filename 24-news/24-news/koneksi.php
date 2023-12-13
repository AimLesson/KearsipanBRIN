<?php
$servername = "localhost";
$username = "root";
$password = "";

$db = "perpus";

$kon = new mysqli($servername, $username, $password, $db);


if ($kon->connect_error) {
  die("Connection failed: " . $kon->connect_error);
}
echo "";
?>