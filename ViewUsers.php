<!DOCTYPE php>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        View Users
    </title>
</head>
<body>
    <main>
        <div class="content titlebox"><h1>View Users</h1></div>
        <div class="main">
            <?php
            include("mysqliConnection.php");
            $mysqli = sqlInit();
            $query = "SELECT * FROM Users";
            $result = $mysqli->query($query);
            if ($result->num_rows>0) {
                echo "<table><tr><th>ID</th></tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["user_id"]."</td></tr>";
                }
                echo "</table>";
            } 
            else {
            echo "0 results" . "<br/>";
            }
            ?>
        </div>
    </main>
</body>
</html>