<?php
    header('Content-Type: text/html; charset=utf-8');
    $db = mysqli_connect('localhost', 'root', '', 'mysql');
    $db -> query("SET NAMES 'UTF8'");
?>