<?php
session_start();
if($_SESSION['isloged'] != "true"){
header('location: deconex.php');
}
?>