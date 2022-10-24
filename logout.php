<?php
session_start();
if($_SESSION["namevar"] != ""){
    session_destroy();
    header("Location:../../login.php");
}
?>