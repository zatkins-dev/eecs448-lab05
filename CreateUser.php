<?php
$mysqli = mysqli_connect("mysql.eecs.ku.edu", "z455a818", jah4uY3u, "z455a818");

if ($mysqli->connect_error) {
  die("Connection error " . $mysqli->connect_error);
}

$username = $_POST["user"];
$checkQuery = "SELECT user_id FROM Users WHERE user_id IS $username";
$result = $mysqli->query($query);
if (!$result) {
  $query = "INSERT INTO Users ({$_POST["user"]});";
  $mysqli->mysqli_query($query);
}


?>
