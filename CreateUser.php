<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "z455a818", jah4uY3u, "z455a818");

if ($mysqli->connect_errno) {
  printf("Connection error %s\n", $mysqli->connect_errno);
  exit();
}
$username = $_POST["user"];
if (!stype_alnum($username))
$query = "INSERT INTO Users ({$_POST["user"]});";
$mysqli->query($query);
stype
?>
