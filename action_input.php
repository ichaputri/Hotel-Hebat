<?php
include "connect.php";

if($_POST['submit'] == "Submit"){
    //Membaca inputan yang diketik didalam form
    $tipe_kamar = $_POST['tipe_kamar']; 
    $jumlah_kamar = $_POST['jumlah_kamar'];
    
    //membuat query sql
    $sql = "INSERT INTO jumlah_kamar (TipeKamar,JumlahKamar) VALUES ('$tipe_kamar','$jumlah_kamar')";

    //Jalankan query
    if($conn->query($sql)===TRUE){
        echo '<div class="alert alert-primary" role="alert">';
        echo "Data Berhasil Ditambahkan!";
        echo "</div>";
        echo "<a href='view.php' class='btn btn-primary stretched-link'>Tampilkan Data</a>";
    }else{
        echo "Error :".$sql. "<br/>" .$conn->error;
        echo "<a href='view.php' class='btn btn-primary stretched-link'>Tampilkan Data</a>";
    }

    $conn->close();
}
