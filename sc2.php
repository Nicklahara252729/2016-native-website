<?php
$koneksi=mysql_connect('localhost','root','');
mysql_select_db('db');
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
$name=$_POST['nama'];
$password=md5($_POST['password']);
$email=$_POST['email'];
$kota=$_POST['kota'];
$alamat=$_POST['alamat'];
$tgllahir=$_POST['tgl'];
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$pria=$_POST['pria'];
$wanita=$_POST['wanita'];
$perintah=mysql_query("insert into reg set nama='$name',password='$password',email='$email',kota='$kota',alamat='$alamat',tgllahir='$tgllahir',bulan='$bulan',tahun='$tahun',pria='$pria',wanita='$wanita'");
header("location:login.php");
?>