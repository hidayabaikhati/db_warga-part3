<?php
include("koneksi.php");
if(isset($_POST['DAFTAR'])){
    $username =$_POST['username'];
    $password =$_POST['password'];
        $umur =$_POST['umur'];
   

    $sql ="INSERT INTO user (username, password, umur) VALUES ('$username', '$password', '$umur')";
    $query = mysqli_query ($koneksi, $sql);
    if($query){
        header('location:login.php?status=sukses');
    }else{
        header('location:login.php?status=gagal');
    }
}

?>