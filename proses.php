<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('db');
$nama=$_POST['nama'];
$pass=md5($_POST['password']);
$query=mysql_query("select * from reg where nama='$nama' and password='$pass'");
$jumlah= mysql_num_rows($query);
if($jumlah>0)
{
    $r=mysql_fetch_array($query);
    $_SESSION['status']=true;
    $_SESSION['nama']=$r['nama'];
    $_SESSION['password']=$r['password'];
    $_SESSION['email']=$r['email'];
    $_SESSION['kota']=$r['kota'];
    $_SESSION['alamat']=$r['alamat'];
    $_SESSION['tgllahir']=$r['tgllahir'];
    $_SESSION['bulan']=$r['bulan'];
    $_SESSION['tahun']=$r['tahun'];
    $_SESSION['pria']=$r['pria'];
    $_SESSION['wanita']=$r['wanita'];
    $_SESSION['id']=$r['id'];
    header("location:index2.php");
}else{
    header("location:a_login.php");
}
?>

