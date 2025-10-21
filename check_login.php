<?php
// This file is meant to be included at the beginning of any page that requires login.
// It will redirect the user to login.php if they are not logged in.

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header("location: login.php");
    exit;
}
?>