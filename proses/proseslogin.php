<?php 
include '../koneksi.php';

if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password']; 
$sql ="SELECT * FROM petugas where nama_petugas= '$username' and password_petugas= '$password'";
 $result=mysqli_query($db, $sql);
    $num_rows=mysqli_num_rows($result);
    $row=mysqli_fetch_row($result);
if($num_rows>0){
        //session_start();
        //$_SESSION["nama"]=$row['username'];
        //$_SESSION["pass"]=$row['password'];
        echo "<script>alert('Anda berhasil Login')</script>";
        echo "<script>location='../content/index.php';</script>";
    } else {
        echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
        echo "<script>location='../index.php';</script>";
    }
}
?>