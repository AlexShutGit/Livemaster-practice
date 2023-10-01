<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'connect.php';
if (isset($_GET['getId'])) {
    $id = $_GET['getId'];

    $sql = "SELECT `birthday`,`profileLink` FROM `students_info` WHERE `id`=$id";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    
    $birthday = $data['birthday'];
    $profileLink = $data['profileLink'];

    if ($result) {
        header('location:index.php?bd=' . $birthday . '&pl=' . $profileLink . '#modal');
    } else {
        die(mysqli_error($con));
    }
}
?>
