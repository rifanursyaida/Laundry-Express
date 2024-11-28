<?php
require("configuration/config_connect.php");
$user = $_GET['userna_me'];

$sql = mysqli_query($conn, "SELECT * FROM user WHERE userna_me = '$user' ");
$cari = mysqli_num_rows($sql);

if ($cari < 1) {
    echo "<script>alert ('monggo dilanjut..');document.location='add_admin.php?status_username=true'</script>";
} else {
    echo "<script>alert ('ngapunten cuy, data sudah terisi');document.location='add_admin.php?status_username=false'</script>";
}
// if(isset)
