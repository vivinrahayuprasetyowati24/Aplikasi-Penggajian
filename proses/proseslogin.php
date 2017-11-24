<?php
include '../koneksi.php';
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = md5($_POST['password']);
$login    = mysqli_query($connect, "SELECT * FROM pegawai WHERE nama_petugas='$username' AND password_petugas='$password'");
$result   = mysqli_num_rows($login);
if($result>0){
    $user = mysqli_fetch_array($login);
    session_start();
    $_SESSION['username'] = $user['username'];
    header("location='../content/index.php'");
}else{
	echo "<script>alert('Login Berhasil')</script>";
    echo "<script>location = '../content/index.php'</script>";
}
}
?>
