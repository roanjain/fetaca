<?php
session_start();
session_destroy();
header('Location: e-faculty.php');
exit;
?> 