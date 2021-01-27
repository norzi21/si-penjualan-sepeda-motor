<?php
$id_penjualan=$_GET['id_penjualan'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM penjualan WHERE id_penjualan ='$id_penjualan'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Penjualan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="id_penjualan" class="col-sm-3 control-label">KODE PENJUALAN</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_penjualan" value="<?=$data['id_penjualan']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Salesman" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nm_sales" class="col-sm-3 control-label">NAMA SALESMAN</label>
                            <div class="col-sm-9">
                            <select type="text" name="nm_sales" class="form-control" required="required" value="<?=$data['nm_sales']?>">
                                                
                                                <?php 
                                                $sql = mysqli_query($koneksi, "SELECT * FROM salesman");
                                                while ($data_s = mysqli_fetch_array($sql)){
                                                 if ($data['nm_sales']==$data_s['id_sales']) {
                                                 $select="selected";
                                                }else{
                                                 $select="";
                                                }
                                                echo "<option $select>".$data_s['nm_sales']."</option>";
                                                }
                                                 ?>
                                            </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nm_pembeli" class="col-sm-3 control-label">NAMA PEMBELI</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_pembeli" value="<?=$data['nm_pembeli']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pembeli" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_telp" class="col-sm-3 control-label">NOMOR TELEPON</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telp" value="<?=$data['no_telp']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Hp" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">ALAMAT</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat Pembeli" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_motor" class="col-sm-3 control-label">JENIS SEPEDA MOTOR</label>
                            <div class="col-sm-9">
                              <select type="text" name="jenis_motor" class="form-control" required="required" value="<?=$data['jenis_motor']?>">
                                                
                                                <?php 
                                                $sql = mysqli_query($koneksi, "SELECT * FROM sepeda_motor");
                                                while ($data_s = mysqli_fetch_array($sql)){
                                                 if ($data['jenis_motor']==$data_s['kd_sepedamotor']) {
                                                 $select="selected";
                                                }else{
                                                 $select="";
                                                }
                                                echo "<option $select>".$data_s['merk']."</option>";
                                                }
                                                 ?>
                                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_beli" class="col-sm-3 control-label">TANGGAL PEMBELIAN</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_beli" value="<?=$data['tgl_beli']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Pembeli" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Penjualan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=dt_penjualan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penjualan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $id_penjualan=$_POST['id_penjualan'];
$nm_sales=$_POST['nm_sales'];
  $nm_pembeli=$_POST['nm_pembeli'];
  $no_telp=$_POST['no_telp'];
  $alamat=$_POST['alamat'];
  $jenis_motor=$_POST['jenis_motor'];
  $tgl_beli=$_POST['tgl_beli'];

    //buat sql
    $sql="UPDATE penjualan SET nm_sales='$nm_sales',nm_pembeli='$nm_pembeli',
	no_telp='$no_telp',alamat='$alamat',jenis_motor='$jenis_motor',tgl_beli='$tgl_beli' WHERE id_penjualan ='$id_penjualan'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=dt_penjualan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



