<?php
$kd_sepedamotor=$_GET['kd_sepedamotor'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM sepeda_motor WHERE kd_sepedamotor='$kd_sepedamotor'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Salesman</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="kd_sepedamotor" class="col-sm-3 control-label">KODE SEPEDA MOTOR</label>
                            <div class="col-sm-9">
                                <input type="text" name="kd_sepedamotor" value="<?=$data['kd_sepedamotor']?>" class="form-control" id="inputEmail3" placeholder="Kode sepeda motor">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="merk" class="col-sm-3 control-label">Merk / Type</label>
                            <div class="col-sm-9">
                                <input type="text" name="merk" value="<?=$data['merk']?>" class="form-control" id="inputEmail3" placeholder="Merk sepeda motor">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">stok</label>
                            <div class="col-sm-3">
                                <input type="text" name="stok" value="<?=$data['stok']?>" class="form-control" id="inputEmail3" placeholder="stok">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="harga_jual" class="col-sm-3 control-label">Harga Jual</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_jual" value="<?=$data['harga_jual']?>" class="form-control" id="inputEmail3" placeholder="Rp.">
                            </div>
                        </div>

						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Sepeda Motor</button>
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
    $sql="UPDATE sepeda_motor SET merk = '$merk', stok='$stok', harga_jual='$harga_jual'
            WHERE kd_sepedamotor='$kd_sepedamotor'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=sepedamotor&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



