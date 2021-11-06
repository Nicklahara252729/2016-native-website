<!DOCTYPE HTML>
<html>
    <head>
        <title>Log In</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
         <style>
        .login{
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
            <div class="datang">Selamat Datang</div>
            <form action="proses.php" method="post">
            <input type="text" name="nama" class="nama1" placeholder="Username" required>
            <input type="password" name="password" class="password" placeholder="password" required>
            <button type="submit" class="submit">Log In</button>
            <button type="reset" class="reset">Reset</button>
            </form></div></div>
    </body>
</html>