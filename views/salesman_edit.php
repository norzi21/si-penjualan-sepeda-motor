<?php
$id_sales=$_GET['id_sales'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM salesman WHERE id_sales='$id_sales'") or die ("SQL Edit error");
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
                            <label for="id_sales" class="col-sm-3 control-label">ID Salesman</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_sales" value="<?=$data['id_sales']?>" class="form-control" id="inputEmail3" placeholder="ID Sales">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nm_sales" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_sales" value="<?=$data['nm_sales']?>" class="form-control" id="inputEmail3" placeholder="Nama Sales">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-3">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="no_telp" class="col-sm-3 control-label">Nomor Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telp" value="<?=$data['no_telp']?>" class="form-control" id="inputEmail3" placeholder="No. Telepon">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="target" class="col-sm-3 control-label">Target Penjualan</label>
                            <div class="col-sm-9">
                                <input type="text" name="target" value="<?=$data['target']?>" class="form-control" id="inputEmail3" placeholder="Target Penjualan Sepeda Motor">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pinjaman</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=salesman&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Salesman
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $id_sales=$_POST['id_sales'];
    $nm_sales=$_POST['nm_sales'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];
    $target=$_POST['target'];
    //buat sql
    $sql="UPDATE salesman SET nm_sales = '$nm_sales', alamat='$alamat', no_telp='$no_telp', target='$target'
            WHERE id_sales='$id_sales'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=salesman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



