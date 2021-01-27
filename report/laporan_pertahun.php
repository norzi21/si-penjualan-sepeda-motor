<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class>
                        <h2><center>PT. Anugrah Karya Abiwara </center></h2>
                        <h4><center>Jalan SM. RAJA KISARAN Email : akakisaran@gmail.com Telp. 12345678 Fax : 1234567</center></h4>
                        <hr>
                        <h3><center>DATA ARSIP TAHUN   <?php echo "$ambilthn"; ?></center></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                        <thead>
								 <th>No.</th><th width="17%">TANGGAL</th><th>KODE PENJUALAN</th><th width="15%">MERK/TYPE</th>
                                <th width="15%">NAMA SALES</th><th width="15%">NAMA PEMBELI</th>
                                <th width="15%">ALAMAT PEMBELI</th><th width="10%">NO. TELEPON</th>
                            </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select

                            $sql = "SELECT * FROM penjualan,salesman,sepeda_motor WHERE penjualan.nm_sales=id_sales and penjualan.jenis_motor=kd_sepedamotor and substr(tgl_beli,1,4)='$ambilthn'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                     <td><?= $nomor ?></td>
                                    <td><?= $data['tgl_beli'] ?></td>
                                    <td><?= $data['id_penjualan'] ?></td>
                                    <td><?= $data['merk'] ?></td>
                                    <td><?= $data['nm_sales'] ?></td>
                                    <td><?= $data['nm_pembeli'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['no_telp'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Kisaran,  &nbsp <?= date("d-m-Y") ?>
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
