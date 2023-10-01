<?php
$connect = new mysqli('localhost', 'root', 'root', 'students');
if (!$connect) {
    die("Connection Error");
}
?>