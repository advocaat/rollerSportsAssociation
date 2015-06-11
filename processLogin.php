<?php
    include("dbconnect.php");
    $sql = "select user_fname from user where user_password = '" .$_REQUEST['user_password']. "' and     user_email ='" .$_REQUEST['user_email'] ."'";
    if($result = $dbh->query($sql)){
        $row = $result->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION["user_fname"] = $row["user_fname"];
        echo $_SESSION['user_fname'];
        header("Location: index.php");
    }else{
        echo "nun";
    }
    
?>