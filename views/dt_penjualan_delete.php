<?php
//membuat query untuk hapus data
$sql="DELETE FROM penjualan WHERE id_penjualan ='".$_GET['id_penjualan']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=dt_penjualan&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') 
    	window.location.assign('?page=arsip&actions=tampil');</scripr>";
}

