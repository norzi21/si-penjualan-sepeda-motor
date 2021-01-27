<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Sepeda Motor</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM sepeda_motor WHERE kd_sepedamotor='" . $_GET ['kd_sepedamotor'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Kode Sepeda Motor</td> <td><?= $data['kd_sepedamotor'] ?></td>
                        </tr>
                        <tr>
                            <td>Merk / Type</td> <td><?= $data['merk'] ?></td>
                        </tr>
                        <tr>
                            <td>Stok</td> <td><?= $data['stok'] ?></td>
                        </tr>
						<tr>
                            <td>Harga Jual</td> <td><?= $data['harga_jual'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=sepedamotor&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Sepeda Motor </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

