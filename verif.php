<?php
 session_start();

if (!isset($_SESSION['logged']) || !$_SESSION['logged']) {
    header('location: log.php?error=3');
}
         $login = $_SESSION['nom'];
