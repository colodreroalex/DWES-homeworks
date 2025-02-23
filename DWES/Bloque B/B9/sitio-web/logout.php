<?php
require_once 'includes/sessions.php';
logout();
header("Location: login.php");
exit();
?>
