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
                    <div class="select-container">
                    <select name="user" id="user" class="custom-select">
                        <option value="">Select a user...&MediumSpace;&MediumSpace;</option>
                        <?php
                            include("mysqliConnection.php");
                            $mysqli = sqlInit();
                            $query = "SELECT * FROM Users";
                            $result = $mysqli->query($query);
                            if ($result->num_rows>0) {
                                while($row = $result->fetch_assoc()) {
                                    if (isset($_POST['submit'])) {
                                        if ($_POST['user'] == $row['user_id']) {
                                            echo "<option selected value='{$row["user_id"]}'>{$row["user_id"]}</option>";
                                            continue;
                                        }
                                    }
                                    echo "<option value='{$row["user_id"]}'>{$row["user_id"]}</option>";
                                }
                            }
                        ?>
                    </select>
                    </div>
                    </div>
                    <input class="button" type="submit" name="submit" value="View Posts from User">
                </form>
            </div>
            <div style="overflow: auto;">
                <?php
                $username = "";
                if (!isset($_POST)) {
                    die("not post");
                }
                if ($_POST['user'] != "") {
                    $username = $_POST['user'];
                }
                else {
                    die("user not selected");
                }
                include_once("ViewPost.php");
                $query = "SELECT post_id FROM Posts WHERE author_id='$username'";
                $result = $mysqli->query($query);
                if ($result->num_rows>0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo displayPost($mysqli, $row['post_id']);
                    }
                } 
                else {
                    echo "No posts found from $username." . "<br/>";
                }
                $mysqli->close();
                ?>
            </div>
        </div>
    </body>
</html>