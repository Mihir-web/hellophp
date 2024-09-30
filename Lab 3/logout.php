<?php
session_start();
session_unset();
session_destroy();


setcookie('remembered_user', '', time() - 3600);

header('Location: login_form.php');
exit;
?>
