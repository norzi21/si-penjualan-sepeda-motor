<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Laporan Satu</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM penjualan,salesman,sepeda_motor WHERE penjualan.nm_sales=id_sales and penjualan.jenis_motor=kd_sepedamotor";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class>
                        <h2><center>PT. Anugrah Karya Abiwara </center></h2>
                        <h4><center>Jalan SM. RAJA KISARAN Email : akakisaran@gmail.com Telp. 12345678 Fax : 1234567</center></h4>
                        <hr>
                        <h3><center>DATA PENJUALAN</center></h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                            <td >Tanggal</td>
                            <td>:</td>
                            <td colspan="3"><?= $data['tgl_beli'] ?></td>
                        </tr>
                        <tr>
                            <td>Kode Penjualan</td>
                            <td>:</td>
                            <td colspan="3"><?= $data['id_penjualan'] ?></td>
                        </tr>
                        <tr>
                            <td>Type / Merk</td>
                            <td>:</td>
                            <td><?= $data['merk'] ?>
                        </tr>
                        <tr>
                            <td>Nama Sales</td>
                            <td>:</td>
                            <td colspan="3"><?= $data['nm_sales'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pembeli</td>
                            <td>:</td>
                            <td colspan="3"><?= $data['nm_pembeli'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Pembeli</td>
                            <td>:</td>
                            <td colspan="3"><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>No. Telepon</td>
                            <td>:</td>
                            <td colspan="3"><?= $data['no_telp'] ?></td>
                        </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag. Pemasaran<strong></u><br>
                                        NIP.
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>