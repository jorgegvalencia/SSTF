<?php
session_destroy();
unset($_SESSION);
header("Location: http://localhost:8888/tracker.php/login");
die();

?>