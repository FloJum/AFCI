<?php
session_start();
unset($_COOKIE['user_logged']);
setcookie('user_logged',null, time() -5);
unset($_COOKIE['role']);
setcookie('role',null, time()-5);
session_destroy();
header('Location: index.php');
exit;
?>