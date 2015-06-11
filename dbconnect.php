<?php
try {
    $dbh = new PDO("sqlite:rollerbase.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>