<!DOCTYPE php>
<html>
<head>
  <link type="text/css" rel="stylesheet" href="style.css" />
  <title>
    Create User
  </title>
</head>
<body>
<header>
  <nav>
    <a href="../../index.html">Home</a>
    &#x2712;
    <a href="index.html">Lab 05</a>
    &#x2712;
    <a href="CreateUser.html">Create New User</a>
  </nav>
</header>
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "z455a818", jah4uY3u, "z455a818");
if ($mysqli->connect_error) {
  die("Connection error " . $mysqli->connect_error . "<br/>");
}
$username = $_POST["user"];
$query = "INSERT INTO Users (user_id) VALUES ('$username');";
if ($mysqli->query($query) === TRUE) {
  echo "Added $username to Users table" . "<br/>";
}
else {
  echo "$username already in table" . "<br/>";
}
$query = "SELECT user_id FROM Users";
$result = $mysqli->query($query);
if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["user_id"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results" . "<br/>";
}
$mysqli->close();

?>
<body>
<html>
