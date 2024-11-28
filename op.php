<?php
error_reporting(0);
session_start();
include "configuration/config_etc.php";
include "configuration/config_include.php";
include 'configuration/config_connect.php';
connect();
timing();
?>

<?php
$username = $password = "";


$tabeldatabase = "user"; // tabel database
$forward = mysqli_real_escape_string($conn, $tabeldatabase);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = mysqli_real_escape_string($conn, $_POST['txtuser']);
  $password = mysqli_real_escape_string($conn, $_POST['txtpass']);
  $password = md5($password);
  $password = sha1($password);

  $sql = "select * from $forward where userna_me='$username' and pa_ssword='$password'";
  $hasil = mysqli_query($conn, $sql);
  if (mysqli_num_rows($hasil) > 0) {
    $data = mysqli_fetch_assoc($hasil);
    $_SESSION['username'] = $data['userna_me'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['jabatan'] = $data['jabatan'];
    $_SESSION['avatar'] = $data['avatar'];
    $_SESSION['nouser'] = $data['no'];
    $_SESSION['baseurl'] = $baseurl;

    $userna_me = $data['userna_me'];;

    mysqli_query($conn, "INSERT INTO login_history (userna_me, login_at) VALUES ('$userna_me',now())");

    login_validate();
    header("Location: index");
  } else {
    header("Location: relogin");
  }
}




?>