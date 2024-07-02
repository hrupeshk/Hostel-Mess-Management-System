<?php
session_start();
session_unset();
session_destroy();
header("Location: ../adminSign_in.php");
exit();
?>