<?php
session_start();
session_destroy();
header("Location: /ex-locadora-main/index.php");
exit();
?>