<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comments</title>
</head>
<body>
<h1>comments</h1>
<?php 
foreach ($comments as $comment)
    echo "<div>";
    echo "<p>{{ $comment->content }}</p>";
    echo "</div>";
?>

</body>
</html>