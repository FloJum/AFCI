<?php
session_start();
session_destroy();
unset($_COOKIE['user_logged']);
setcookie('user_logged',null, time() -5);
header('Location: index.php');
exit;
?>