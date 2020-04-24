<?php
  session_start();
  include '../covid/config.php';
    
    if(isset($_POST['login'])){
    $nama  = $_POST['nama'];
    $hasil = "Negatif";
    $sql   = mysqli_query($koneksi, "SELECT hasil FROM t_pasien WHERE nama='$nama'") or die(mysqli_error($koneksi));
    $nc    = mysqli_query($koneksi, "UPDATE t_pasien SET hasil='$hasil' WHERE nama='$nama'");
    if($nc){
      echo '<script>alert("Selamat Anda Negatif COVID-19."); document.location="sehat.php?id='.$id.'";</script>';
    }else{
      echo '<div class="alert alert-warning">Gagal mengedit data anggota.</div>';
    }
  }
  ?>
