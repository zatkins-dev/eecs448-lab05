<!DOCTYPE php>
<html>
<head>
  <link type="text/css" rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
    Create New Post
  </title>
</head>
<body>
<header>
  <nav>
    <a href="../../index.html">Home</a>
    &#x2712;
    <a href="index.html">Lab 05</a>
    &#x2712;
    <a href="CreatePosts.html">Create New Post</a>
  </nav>
</header>
<main>
<div style="overflow: auto;">
<div class="main">
<?php
include_once("ViewPost.php");
include_once("mysqliConnection.php");
$mysqli = sqlInit();
$username = $_POST["user"];
$usernameQuery = "SELECT * FROM Users WHERE (user_id='$username');";
if ($mysqli->query($usernameQuery) === FALSE) {
  die("Username '$username' not found: " . $mysqli->error);
}
$postsQuery = "SELECT * FROM Posts;";
$result = $mysqli->query($postsQuery);
$postId = $result->num_rows;
$post = $_POST['post'];
if ($post === "") {
    die("New post must contain content.");
}
$query = "INSERT INTO Posts (post_id, content, author_id) VALUES ('$postId','$post','$username')";
$result = $mysqli->query($query);
if (!$result) {
    die("Post Submission Error: Post not submitted <br>" . $mysqli->error);
}
else {
    echo "Successfully added new post." . "<br>";
    echo displayPost($postId);
}
$mysqli->close();
?>
</div>
</div>
</main>
</body>
</html>