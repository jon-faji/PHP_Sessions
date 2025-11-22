<?php
session_start();

$_SESSION['flash_message'] = 'Your changes have been saved successfully.';
header('Location: show_message.php');
exit;