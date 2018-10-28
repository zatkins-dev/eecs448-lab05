<?php
    if (!isset($_POST)) {
        die("not post");
    }
    include("mysqliConnection.php");
    $mysqli = sqlInit();
    foreach($_POST as $key=>$value)
    {
        $query = "DELETE FROM Posts WHERE post_id=$key";
        $mysqli->query($query);
    }
?>
<!DOCTYPE php>
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
        <div class="main-iframe">
            <div>
                <form method="POST" action="#">
                    <div>
                    <table>
                        <tr><th>Post</th><th>Delete?</th></tr>
                        <?php
                            include_once("ViewPost.php");
                            $query = "SELECT post_id FROM Posts";
                            $result = $mysqli->query($query);
                            if ($result->num_rows>0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".displayPost($mysqli, $row['post_id'])."</td>";
                                    echo "<td><input type=\"checkbox\" name=\"{$row['post_id']}\" value=\"{$row['post_id']}\"></td>";
                                    echo "</tr>";
                                }
                            }
                        ?>
                    </table>
                    </div>
                    <div style="margin-left:3px;margin-top:5px;"><input class="button" type="submit" name="submit" value="Delete Posts"></div>
                </form>
            </div>
        </div>
    </body>
</html>