<?php
    function displayPost($mysqli, $postId) {
        $query = "SELECT * FROM Posts WHERE (post_id=$postId)";
        if (!($result = $mysqli->query($query))) {
            $display = "<div class='post-frame'>\n"
                     . "\t<div class='post-error'>\n"
                     . "\t\t<p class='post-error-text'>Database Error: Post $postId not found.</p>\n"
                     . "\t</div>\n"
                     . "</div>\n";
            return $display;
        }
        else {
            $post = $result->fetch_assoc();
            $display = "<div class=\"post-frame\">
                            <div class=\"post-user-label\">
                                Username:
                            </div>
                            <div class=\"post-user-text\">
                                {$post['author_id']}
                            </div>
                            <div class=\"post-label\">
                                Post:
                            </div>
                            <div class=\"post-content\">
                                <p>
                                    {$post['content']}
                                </p>
                            </div>
                        </div>";
            return $display;
        }
    }
?>
