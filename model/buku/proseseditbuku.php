<?php 
    include "../../config/koneksi.php";

   
    $id_buku            = $_POST['id_buku'];
    $isbn               = $_POST['isbn'];
    $nama_buku          = $_POST['nama_buku'];
    $penulis            = $_POST['penulis'];
    $penerbit           = $_POST['penerbit'];
    $tahun_terbit       = $_POST['tahun_terbit'];
    


    $sql = "update buku set
    
        isbn            = '".$isbn."',
        nama_buku       = '".$nama_buku."',
        penulis         = '".$penulis."',
        penerbit        = '".$penerbit."',
        tahun_terbit    = '".$tahun_terbit."'

        where id_anggota = '".$id_buku."'
        ";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=buku');

?>
