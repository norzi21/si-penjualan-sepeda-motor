<?php
//membuat query untuk hapus data
$sql="DELETE FROM sepeda_motor WHERE kd_sepedamotor ='".$_GET['kd_sepedamotor']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=sepedamotor&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=peminjaman&actions=tampil');</scripr>";
}

