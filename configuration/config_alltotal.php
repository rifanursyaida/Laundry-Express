<?php
include 'config_connect.php';
date_default_timezone_set("Asia/Jakarta");
$harisekarang=date('d');
$bulansekarang=date('m');
$tahunsekarang=date('Y');
$today=date('Y-m-d');
$besok=date('Y-m-d', strtotime(' +1 day'));

// Laura Data Terima
$slaura="SELECT COUNT(nota) as data FROM bayar WHERE status='Diterima' ";
$xlaura=mysqli_query($conn,$slaura);
$laurarow=mysqli_fetch_assoc($xlaura);
$terima=$laurarow['data'];

// Laura Data Proses
$slaura1="SELECT COUNT(nota) as data FROM bayar WHERE status='proses' ";
$xlaura1=mysqli_query($conn,$slaura1);
$laurarow1=mysqli_fetch_assoc($xlaura1);
$proses=$laurarow1['data'];

// Laura Data Ambil Hari Besok
$slaura2="SELECT COUNT(nota) as data FROM bayar WHERE YEAR(tgldeadline)='$tahunsekarang' AND MONTH(tgldeadline)='$bulansekarang' AND (DAY(tgldeadline)-'$harisekarang')='1' AND status !='lunas' ";
$xlaura2=mysqli_query($conn,$slaura2);
$laurarow2=mysqli_fetch_assoc($xlaura2);
$dekat=$laurarow2['data'];

// Laura Data Ambil Hari besok
$slaura3="SELECT COUNT(nota) as data FROM bayar WHERE YEAR(tgldeadline)='$tahunsekarang' AND MONTH(tgldeadline)='$bulansekarang' AND DAY(tgldeadline)='$harisekarang' ";
$xlaura3=mysqli_query($conn,$slaura3);
$laurarow3=mysqli_fetch_assoc($xlaura3);
$ambil=$laurarow3['data'];


// Total Data1

$sqlx2="SELECT COUNT(userna_me) as data FROM user";
$hasilx2=mysqli_query($conn,$sqlx2);
$row=mysqli_fetch_assoc($hasilx2);
$datax1=$row['data'];

// Total Data2

$sqlx2="SELECT COUNT(kode) as data FROM pelanggan";
$hasilx2=mysqli_query($conn,$sqlx2);
$row=mysqli_fetch_assoc($hasilx2);
$datax2=$row['data'];

// Total Data3

$sqlx2="SELECT COUNT(kode) as data FROM jenis";
$hasilx2=mysqli_query($conn,$sqlx2);
$row=mysqli_fetch_assoc($hasilx2);
$datax3=$row['data'];

// Total Data4

$sqlx2="SELECT COUNT(kode) as data FROM satuan";
$hasilx2=mysqli_query($conn,$sqlx2);
$row=mysqli_fetch_assoc($hasilx2);
$datax4=$row['data'];

// Total Data5

// $sqlx2="SELECT COUNT(kode) as data FROM outlet";
// $hasilx2=mysqli_query($conn,$sqlx2);
// $row=mysqli_fetch_assoc($hasilx2);
// $datax5=$row['data'];


  // Total Data1 ------------------------------------------------------------------

  $sqlx2="SELECT COUNT(nota) as data FROM bayar WHERE nota NOT IN (SELECT nota FROM transaksimasuk)";
	$hasilx2=mysqli_query($conn,$sqlx2);
	$row=mysqli_fetch_assoc($hasilx2);
	$data1=$row['data'];

  // Total Data2

  $sqlx2="SELECT COUNT(nota) as data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk)";
  $hasilx2=mysqli_query($conn,$sqlx2);
  $row=mysqli_fetch_assoc($hasilx2);
  $data2=$row['data'];

  // Total Data3

  $sqlx2="SELECT COUNT(nota) as data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk) AND tglmasuk LIKE '$tahunsekarang-$bulansekarang-%'";
  $hasilx2=mysqli_query($conn,$sqlx2);
  $row=mysqli_fetch_assoc($hasilx2);
  $data3=$row['data'];

  // Total Data4

  $sqlx2="SELECT COUNT(nota) as data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk) AND tglmasuk LIKE '$tahunsekarang-$bulansekarang-$harisekarang'";
  $hasilx2=mysqli_query($conn,$sqlx2);
  $row=mysqli_fetch_assoc($hasilx2);
  $data4=$row['data'];



  // Total Data1-------------------------------------------------------------------

  $sqlx2="SELECT SUM(total) AS data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk) and status='lunas'";
	$hasilx2=mysqli_query($conn,$sqlx2);
	$row=mysqli_fetch_assoc($hasilx2);
	$data12=$row['data'];

  // Total Data2

  $sqlx2="SELECT SUM(total) AS data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk) AND tglmasuk LIKE '$tahunsekarang-%' and status='lunas'";
  $hasilx2=mysqli_query($conn,$sqlx2);
  $row=mysqli_fetch_assoc($hasilx2);
  $data22=$row['data'];

  // Total Data3

  $sqlx2="SELECT SUM(total) AS data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk) AND tglmasuk LIKE '$tahunsekarang-$bulansekarang-%' and status='lunas'";
  $hasilx2=mysqli_query($conn,$sqlx2);
  $row=mysqli_fetch_assoc($hasilx2);
  $data32=$row['data'];

  // Total Data4

  $sqlx2="SELECT SUM(total) AS data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk) AND tglmasuk LIKE '$tahunsekarang-$bulansekarang-$harisekarang' and status='lunas'";
  $hasilx2=mysqli_query($conn,$sqlx2);
  $row=mysqli_fetch_assoc($hasilx2);
  $data42=$row['data'];


  // Total Data1-------------------------------------------------------------------

  // Total Data1-------------------------------------------------------------------

  $sqlx2="SELECT SUM(biaya) AS data FROM operasional";
	$hasilx2=mysqli_query($conn,$sqlx2);
	$row=mysqli_fetch_assoc($hasilx2);
	$data14=$row['data'];

  // Total Data2

  $sqlx2="SELECT SUM(biaya) AS data FROM operasional WHERE tanggal LIKE '$tahunsekarang-%'";
  $hasilx2=mysqli_query($conn,$sqlx2);
  $row=mysqli_fetch_assoc($hasilx2);
  $data24=$row['data'];

  // Total Data3

  $sqlx2="SELECT SUM(biaya) AS data FROM operasional WHERE tanggal LIKE '$tahunsekarang-$bulansekarang-%'";
  $hasilx2=mysqli_query($conn,$sqlx2);
  $row=mysqli_fetch_assoc($hasilx2);
  $data34=$row['data'];

  // Total Data4

  $sqlx2="SELECT SUM(biaya) AS data FROM operasional WHERE tanggal LIKE '$tahunsekarang-$bulansekarang-$harisekarang'";
  $hasilx2=mysqli_query($conn,$sqlx2);
  $row=mysqli_fetch_assoc($hasilx2);
  $data44=$row['data'];
