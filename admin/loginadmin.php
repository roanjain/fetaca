<?php
session_start();
if($_REQUEST['usr']=="root" && $_REQUEST['pswd']=="root"){
$_SESSION['usr'] = "root";
$_SESSION['pswd'] = "root";
header("Location: admin.php");
}
else{
header("Location: loginform.php");
}
?>