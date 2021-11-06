<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<head>
    <title>Profil Perusahaan</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <style>
        .perusahaan{
            border-bottom: solid 4px white; 
        }
    </style>
</head>
    <body>
          <header>
              <img src="img/ubuntu-logo.jpg" class="logo">
              <form class="menu">
                  <a href="index2.php"><button type="button" class="home">Home</button></a>
                  <a href="perusahaan2.php"><button type="button" class="perusahaan">Perusahaan</button></a>
                  <a href="image2.php"><button type="button" class="img">Image</button></a>
                  <a href="visi-misi2.php"><button type="button" class="visi">Visi-misi</button></a>
                  <a href="struktur2.php"><button type="button" class="struktur">Struktur</button></a>
                  <input type="text" class="cari" placeholder="Masukkan kata kunci">
                  <button type="button" class="btn-cari">Cari</button>
                  <a href="#.php"><button type="button" class="register"><?php
session_start();
echo $_SESSION['nama'];
?></button></a>
                  <a href="logout.php"><button type="button" class="login">Log Out</button></a>
                  </form>
        </header>
        <div class="profil">
            <a href="about-me2.php"><img src="img/applemusicandroid_0.jpg" class="foto-profil">
            <div class="tag">
                <p class="me">About Me</p>
                </div></a>
        </div>
        <div class="kutipan">
            disini isikan kutipan favorit macam twitter
        </div>
        <div class="isi">
            <img src="img/infoadmin.png" class="user">
            <div class="user-tag">
                <?php
echo $_SESSION['nama'];
?>
            </div>
            <form action="sc.php" method="post">
            <textarea name="komentar" class="komen" placeholder="Your Comment"></textarea>
                <button type="submit" class="btn-komen" >Send</button>
            </form>
        </div>
        <div class="isi2">
            isi disini
        </div>
        <div class="komentar">
            <p class="current-comment">Komentar Masuk</p>
            <?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db";
$connect=mysql_connect($host, $username, $password);
$pilihdatabase = mysql_select_db($database,$connect);
if($pilihdatabase){
	
}else{
echo "Tidak dapat connect ke database";
}
?>
<?php
	$commentquery	= mysql_query("SELECT * FROM komen")or die .mysql_error();
	$commentNum		=mysql_num_rows($commentquery);
echo"<h4>"."Current comment(s)..."."</h4>";
echo"<b>".$commentNum."comment(s)so far. Leave a comment..."."</b>"."<br/>"."<br/>";	
echo"<hr>";
while($row=mysql_fetch_array($commentquery))
{
	echo"<b>".$row['nama']."</b>".""."|".""."<i>".$row['date']."</i>"."<br/>"."<br/>".$row['comment']."<br/>";
	echo"<hr>";

}
?>
        </div>
        
    </body>
</html>