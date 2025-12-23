<?php
session_start();
session_unset();
session_destroy();
header("Location: ../../Frontend/02-login.html");
exit();
?>
