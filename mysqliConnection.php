<?php
    function sqlInit() {
        $mysqli = new mysqli("mysql.eecs.ku.edu", "z455a818", jah4uY3u, "z455a818");
        if ($mysqli->connect_error) {
          die("Connection error " . $mysqli->connect_error . "<br/>");
        }
        return $mysqli;
    }
?>