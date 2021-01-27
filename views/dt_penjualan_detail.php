<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Penjualan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql =  "SELECT * FROM penjualan,salesman,sepeda_motor where penjualan.nm_sales=id_sales and penjualan.jenis_motor=kd_sepedamotor and id_penjualan ='" . $_GET ['id_penjualan'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID Penjualan</td> <td><?= $data['id_penjualan'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Salesman</td> <td><?= $data['nm_sales'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pembeli</td> <td><?= $data['nm_pembeli'] ?></td>
                        </tr>
						<tr>
                            <td>Nomor Telepon</td> <td><?= $data['no_telp'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Sepeda Motor</td> <td><?= $data['jenis_motor'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Pembelian</td> <td><?= $data['tgl_beli'] ?></td>
                        </tr>
                    </table>

				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=dt_penjualan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Penjualan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

