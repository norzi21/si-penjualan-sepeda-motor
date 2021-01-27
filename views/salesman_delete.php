<?php
//membuat query untuk hapus data
$sql="DELETE FROM salesman WHERE id_sales ='".$_GET['id_sales']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=salesman&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=peminjaman&actions=tampil');</scripr>";
}

