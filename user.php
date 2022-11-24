<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pendataan Warga Ds.Sukamududur</title>
    <style>
        body{
    background-image:url('jui.jpg') 
    
}
</style>
</head>
<center>
<body>
    <h1 style="color:#E65758;">Aplikasi Pendataan Warga Ds.Sukamududur</h1>
<br/>
<!-- cek pesan notifikasi-->
<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "Login gagal! username dan password salah!";
    }else if($_GET['pesan'] == "logout"){
        echo"Anda telah berhasil logout";
    }else if($_GET['pesan'] == "belum_login"){
        echo"Anda harus login  untuk mengakses halaman admin";
    }
}
?>
<br/>
<br/>
<form method="POST" action="proses_daftar.php">

    <table>
        <tr>
           
    
<p>
            <label for="username"><h3 style="color:#711D32;">USERNAME:</label></h3>
            
            <input type="text" name="username" placeholder="Masukkan username">

</p>
<p>
             <label for="password"><h3 style="color:#711D32;">PASSWORD:</label></h3>
            
            <input type="password" name="password" placeholder="Masukkan password">
</p>
<p>
             <label for="umur"><h3 style="color:#711D32;">umur:</label></h3>
            
            <input type="number" name="umur" placeholder="Masukkan umur">
</p>

    
   <p><input type="submit" value="DAFTAR" name="DAFTAR"/></p>

</table>
</form>
</center>
</body>
</html>