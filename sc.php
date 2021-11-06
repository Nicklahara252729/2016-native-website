<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
$nama=$_SESSION['nama'];
$comment=$_POST['komentar'];
$sql = "INSERT INTO komen (nama,comment,date)
       values('$nama','$comment',NOW())";
mysql_select_db('db',$koneksi);
$tambahdata = mysql_query( $sql, $koneksi );
if(! $tambahdata )
{
  die('Gagal tambah data: ' . mysql_error());
}
header("location:index2.php");
?>