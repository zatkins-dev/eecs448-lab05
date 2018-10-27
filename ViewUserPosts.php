<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="selectbox.js"></script>
        <title>
            View User Posts
        </title>
    </head>
    <body>
        <div class="main">
            <div>
                <select>
                    <?php
                        include("mysqliConnection.php");
                        $mysqli = sqlInit();
                        $query = "SELECT * FROM Users";
                        $result = $mysqli->query($query);
                        if ($result->num_rows>0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<option value='{$row["user_id"]}'>";
                            }
                        } 
                        $mysqli->close();
                    ?>
                </select>
            </div>
            <div style="overflow: auto;">
                <?php
                include("mysqliConnection.php");
                $mysqli = sqlInit();
                $query = "SELECT * FROM Posts WHERE author_id='$username'";
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
                $mysqli->close();
                ?>
            </div>
        </div>
    </body>
</html>