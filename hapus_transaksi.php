<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM tb_penjualan WHERE id=$id";
    $query = mysqli_query($mysqli, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: lihat_transaksi.php');
    } else {
        die("gagal menghapus...");
    }
}
?>