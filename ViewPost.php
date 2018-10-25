<?php
    include("mysqliConnection.php");
    function displayPost($postId) {
        $mysqli = sqlInit();
        $query = "SELECT (content, author_id) FROM Posts WHERE (post_id='$postId')";
        if (($result = $mysqli->query($query)) === TRUE) {
            $post = $result->fetch_assoc();
            $display = "<div class='post-frame'>\n"
                     . "\t<div class='post-username'>\n"
                     . "\t\t<span class='post-username-text'>{$post['author_id']}</span>"
                     . "\t</div>\n"
                     . "\t<div class='post-content'>\n"
                     . "\t\t<p class='post-content-text'>{$post['content']}</p>"
                     . "\t</div>\n"
                     . "</div>\n";
            return $display;
        }
        else {
            $display = "<div class='post-frame'>\n"
                     . "\t<div class='post-error'>\n"
                     . "\t\t<p class='post-error-text'>Database Error: Post $postId not found.</p>"
                     . "\t</div>\n"
                     . "</div>\n";
            return $display;
        }
    }
?>
