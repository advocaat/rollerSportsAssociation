<?php 



if(!isset($_SESSION['user_fname'])){
    echo"<div id='log'>";
    echo "<fieldset>";
    echo "<form method='post' action='processLogin.php'>";
    echo "<label for='user_email'>Email</label>"; 
    echo "<input name='user_email' id='user_email' type='text'>";
    echo "<label for='user_password'>Password</label>";  
    echo "<input name='user_password' id='user_password' type='text'>";
    echo "<input type='submit' name='login' value='Start'>";
    echo "</form>";
    echo "</fieldset>";
    echo "</div>";
}else{
    echo"<div id='logged'>";
    echo "Logged in as: ". $_SESSION['user_fname'];
    echo "\n<a href='logout.php'>Logout</a>";
    echo "</div>";
}

?>