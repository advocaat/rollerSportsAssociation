<?php
session_start();
unset($_SESSION['user_fname']);
header("Location: index.php");
?>