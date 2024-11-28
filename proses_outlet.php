<?php

require('configuration/config_connect.php');
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$query = mysqli_query($conn, "INSERT INTO outlet(nama,alamat,telp)
VALUES
(
'$nama',
'$alamat',
'$telp'
)
");

if ($query) {
    echo '<script>alert("Data Berhasil Disimpan");document.location="http:///laundry/outlet"</script>';
} else {
    echo '<script>alert("Data Gagal Disimpan");document.location="http://localhost/laundry/outlet"</script>';
}
