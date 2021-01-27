<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Salesman</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM salesman WHERE id_sales='" . $_GET ['id_sales'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID Sales</td> <td><?= $data['id_sales'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td> <td><?= $data['nm_sales'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
						<tr>
                            <td>No. Telepon</td> <td><?= $data['no_telp'] ?></td>
                        </tr>
                        <tr>
                            <td>Target Penjualan / Bulan</td> <td><?= $data['target'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=salesman&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Salesman </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

