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
  <link rel="stylesheet" href="style.css" />
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
          <div class="tr headers">
            <div class="td">
              <h3>№</h3>
            </div>
            <div class="td">
              <h3>Имя фамилия</h3>
            </div>
            <div class="td">
              <h3>Направление</h3>
            </div>
            <div class="td"></div>
          </div>
          <?php foreach ($rows as $row) {
            echo "
          <div class='tr'>
            <div class='td'>" . $row['id'] . "</div>
            <div class='td'>" . $row['fullName'] . "</div>
            <div class='td'>" . $row['position'] . "</div>
            <div class='td'><img id=" . $row['id'] . " class='open-button' src='menu.png' width='40' height='40'/></div>
          </div>";
          }
          ?>
        </div>
      </div>

      <div class="modal" id="modal">
        <div class="modal-dialog">
          <div class="modal-header">
            Дополнительная информация
            <button class="btn-close">X</button>
          </div>
          <div class="modal-body">
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="index.js"></script>

</body>

</html>