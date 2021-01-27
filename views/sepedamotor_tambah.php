<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Sepeda Motor</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
						 <div class="form-group">
                            <label for="id_penjualan" class="col-sm-3 control-label">KODE SEPEDA MOTOR</label>
                            <div class="col-sm-9">
                                <input type="text" name="kd_sepedamotor" class="form-control" id="inputEmail3" placeholder="Inputkan ID Penjualan" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nm_pembeli" class="col-sm-3 control-label">MERK / TYPE</label>
                            <div class="col-sm-9">
                                <input type="text" name="merk" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pembeli" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_telp" class="col-sm-3 control-label">STOK</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Hp" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">HARGA JUAL</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_jual"class="form-control" id="inputEmail3" placeholder="Inputkan Alamat Pembeli" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Sepeda Motor</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=sepedamotor&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Sepeda Motor
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $kd_sepedamotor=$_POST['kd_sepedamotor'];
  $merk=$_POST['merk'];
  $stok=$_POST['stok'];
  $harga_jual=$_POST['harga_jual'];
  

    //buat sql
    $sql="INSERT INTO sepeda_motor VALUES ('$kd_sepedamotor','$merk','$stok','$harga_jual')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Penjualan Error");
    if ($query){
        echo "<script>window.location.assign('?page=sepedamotor&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
