<!DOCTYPE HTML>
<html>
    <head>
        <title>Registrasi</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
         <style>
        .register{
            border-bottom: solid 4px white; 
        }
    </style>
    </head>
    <body>
        <header>
              <img src="img/ubuntu-logo.jpg" class="logo">
              <form class="menu">
                  <a href="index.php"><button type="button" class="home">Home</button></a>
                  <a href="perusahaan.php"><button type="button" class="perusahaan">Perusahaan</button></a>
                  <a href="image.php"><button type="button" class="img">Image</button></a>
                  <a href="visi-misi.php"><button type="button" class="visi">Visi-misi</button></a>
                  <a href="struktur.php"><button type="button" class="struktur">Struktur</button></a>
                  <input type="text" class="cari" placeholder="Masukkan kata kunci">
                  <button type="button" class="btn-cari">Cari</button>
                  <a href="register.php"><button type="button" class="register">Register</button></a>
                  <a href="login.php"><button type="button" class="login">Log In</button></a>
                  </form>
        </header>
        <div class="container">
        <div class="form"></div>
        <div class="form1"></div>
        <div class="form2">
            <p class="reg">Registrasi</p>
            <form action="sc2.php" method="post">
            <input type="text" name="nama" class="nama" placeholder="Your Name" required>
            <input type="text" name="email" class="email" placeholder="Your Email" required>
            <input type="password" name="password" class="email" placeholder="Password" required>
                <select name="kota" id="r">
<option value="Kota Asal">Kota Asal</option>
  <option value="Banda Aceh">Banda Aceh</option>
  <option value="Medan">Medan</option>
  <option value="Padang">Padang</option>
  <option value="Pekanbaru">Pekanbaru</option>
  <option value="Jambi">Jambi</option>
  <option value="Bengkulu">Bengkulu</option>
  <option value="Palembang">Palembang</option>
  <option value="Riau">Riau</option>
  <option value="Bangka Belitung">Bangka Belitung</option>
  <option value="Bandar Lampung">Bandar Lampung</option>
  <option value="Jakarta">Jakarta</option>
  <option value="Bandung">Bandung</option>
  <option value="Semarang">Semarang</option>
  <option value="Yogyakarta">Yogyakarta</option>
  <option value="Surabaya">Surabaya</option>
  <option value="Pontianak">Pontianak</option>
  <option value="Palangkaraya">Palangkaraya</option>
  <option value="Banjarmasin">Banjarmasin</option>
  <option value="Samarinda">Samarinda</option>
  <option value="Denpasar">Denpasar</option>
  <option value="Mataram">Mataram</option>
  <option value="Kupang">Kupang</option>
  <option value="Ujungpandang">Ujungpandang</option>
  <option value="Palu">Palu</option>
  <option value="Gorontalo">Gorontalo</option>
  <option value="Manado">Manado</option>
  <option value="Kendari">Kendari</option>
  <option value="Sofifi">Sofifi</option>
  <option value="Ambon">Ambon</option>
  <option value="Jayapura">Jayapura</option>
</select>
                <textarea class="koment" name="alamat" placeholder="Your Address" required></textarea><br>
                <select name="tgl" class="tgl">
<?php
for($t=1;$t<=31;$t++)
{
echo"<option value='".$t."'>".$t."</option>";
}?>
</select>
        <select name="bulan" class="bulan">
<?php
$bulan=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
for($b=0;$b<=11;$b++)
{
echo "<option value=$bulan[$b]>$bulan[$b]</option>";
}?>
</select>
        <select name="tahun" class="tahun">
<?php
for($b=1990;$b<=2010;$b++)
{
echo "<option value='$b'>$b</option>";
}?>
                </select><br>
                <input type="radio" name="pria" value="L" class="radio">Laki - Laki
        <input type="radio" name="wanita" value="P" class="radio2">Perempuan<br>
            <button type="submit" class="submit">Send</button>
            <button type="reset" class="reset">Reset</button>
            </form></div></div>
    </body>
</html>