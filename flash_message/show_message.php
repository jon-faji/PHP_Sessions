<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Message Result</title>
</head>
<body>
    <h2>Flash Message Output</h2>

<?php
if(isset($_SESSION['flash_message'])) {
    echo '<p>' . $_SESSION['flash_message'] . '</p>';
    unset($_SESSION['flash_message']);
} else {
    echo '<p>No flash message to display.</p>';
}

?>

<br>
<a href="flash.html">Back</a>
</body>
</html>