<?php
require_once('connect.php');
$query = "SELECT * FROM `students_info`";
$result = mysqli_query($connect, $query);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <title>Livemaster</title>
</head>

<body>
  <div class="container">
    <div class="wrapper">
      <div class="header">
        <img src="logo.png" alt="logo" />
      </div>
      <div class="main">
        <div class="table">
          <div class="tr">
            <div class="td"><h3>№</h3></div>
            <div class="td"><h3>Имя фамилия</h3></div>
            <div class="td"><h3>Направление</h3></div>
            <div class="td"></div>
          </div>
          <?php foreach ($rows as $row) {
            echo "
          <div class='tr'>
            <div class='td'>" . $row['id'] . "</div>
            <div class='td'>" . $row['fullName'] . "</div>
            <div class='td'>" . $row['position'] . "</div>
            <div class='td'><a href=getAdditionalData.php?getId=" . $row['id'] . " id=" . $row['id'] . " class='btn-modal'><img class='button' src='menu.png' width='40' height='40'/></a></div>
          </div>";
          }
          ?>
        </div>
      </div>

      <div class="modal" id="modal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-header">
            Дополнительная информация
            <a href="#close" class="btn-close" aria-hidden="true">×</a>
          </div>
          <div class="modal-body">
            <?php
            if (isset($_GET["bd"]) || isset($_GET["pl"])) {

              $bd = $_GET["bd"];
              $pl = $_GET["pl"];

              echo "День рождения: " . $bd . '<br>';
              echo "Ссылка на профиль: <a href=" .$pl.">$pl<a/>";
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>