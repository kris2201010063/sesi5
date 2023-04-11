<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT);

    if($cnn){
        $tbel="tbMAKUL";
        $sql="CREATE TABLE $tbel(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            kodemk VARCHAR(8),
            Makul VARCHAR(50),
            SKS INT



        )";
       $hasil= mysqli_query( $cnn,$sql );
       if($hasil){
        echo "pembuatan tabel".$tbel ." Sukses";
       }else{
        echo "pembuatan tabel".$tbel."gagal";
       }
    }else{
        echo "koneksi ke Mysql Gagal";
    }
    

    