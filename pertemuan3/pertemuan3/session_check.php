<?php
session_start(); 
if (!isset($_SESSION['username'])) 
{
    pecho "<hr> <a href='session_logout.php'>Silakan Login Kembali </a
>"; 
    exit; 
} 
?>
