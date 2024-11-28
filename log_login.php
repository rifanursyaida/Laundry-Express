<!DOCTYPE html>
<html>
<?php
include "configuration/config_connect.php";

?>

<head>
  <title>History Login</title>
  <link rel="stylesheet" type="text/css" href="page/css/main.css">
  <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

</head>

<body>
  <div class="container">
    <div class="table-responsive">
      <table class="table table-hover caption-top">
        <caption>History Login</caption>
        <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Login At</th>
          </tr>
        </thead>
        <?php 
        require('configuration/config_connect.php');
        $tod = "SELECT * FROM login_history ORDER BY id DESC";
        $Tampil = mysqli_query($conn, $tod);
        $nomer = 0;
        while ($hasil = mysqli_fetch_array($Tampil)) {
        ?>
          <tr>
            <td><?php echo $hasil['id'] ?></td>
            <td><?php echo $hasil['userna_me'] ?></td>
            <td><?php echo $hasil['login_at'] ?></td>
          </tr>
        <?php
        }
        // $nomer++;
        ?>
      </table>
    </div>
  </div>
</body>

</html>