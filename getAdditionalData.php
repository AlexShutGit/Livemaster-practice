<?php
include 'connect.php';
if (isset($_GET['getId'])) {
    $id = $_GET['getId'];

    $sql = "SELECT `birthday`,`profileLink` FROM `students_info` WHERE `id`=$id";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);

    $birthday = $data['birthday'];
    $profileLink = $data['profileLink'];

    echo json_encode($data);
}
?>
