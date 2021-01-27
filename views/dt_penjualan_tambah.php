<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Penjualan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
						 <div class="form-group">
                            <label for="id_penjualan" class="col-sm-3 control-label">ID PENJUALAN</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_penjualan" class="form-control" id="inputEmail3" placeholder="Inputkan ID Penjualan" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nm_sales" class="col-sm-3 control-label">NAMA SALESMAN</label>
                            <div class="col-sm-9">
                                <select name="nm_sales" class="form-control" required="required">
                                                <option value="">-Pilih-</option>
                                                <?php 
                                                $salesman = mysqli_query($koneksi, "SELECT * FROM salesman");
                                                while ($data = mysqli_fetch_array($salesman)){
                                                ?>
                                                <option value="<?php echo $data['id_sales']; ?>"><?php echo $data['nm_sales']; ?></option>
                                                <?php } ?>
                                            </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nm_pembeli" class="col-sm-3 control-label">NAMA PEMBELI</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_pembeli" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pembeli" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_telp" class="col-sm-3 control-label">NOMOR TELEPON</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telp" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Hp" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">ALAMAT</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat"class="form-control" id="inputEmail3" placeholder="Inputkan Alamat Pembeli" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_motor" class="col-sm-3 control-label">JENIS SEPEDA MOTOR</label>
                            <div class="col-sm-9">
                                <select name="jenis_motor" class="form-control" required="required">
                                                <option value="">-Pilih-</option>
                                                <?php 
                                                $sql = mysqli_query($koneksi, "SELECT * FROM sepeda_motor");
                                                while ($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <option value="<?php echo $data['kd_sepedamotor']; ?>"><?php echo $data['merk']; ?></option>
                                                <?php } ?>
                                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_beli" class="col-sm-3 control-label">TANGGAL PEMBELIAN</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_beli" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Pembeli" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Penjualan</button>
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
    $sql="INSERT INTO penjualan VALUES ('$id_penjualan','$nm_sales','$nm_pembeli','$no_telp','$alamat','$jenis_motor','$tgl_beli')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Penjualan Error");
    if ($query){
        echo "<script>window.location.assign('?page=dt_penjualan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
