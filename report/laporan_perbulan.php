<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip Perbulan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilbln=$_POST['bulan'];
        $ambilthn=$_POST['tahun'];
        $bulanNama;
        if ($ambilbln==12) {
          $bulanNama="DESEMBER";
        } elseif ($ambilbln==11) {
          $bulanNama="NOVEMBER";
        } elseif ($ambilbln==10) {
          $bulanNama="OKTOBER";
        } elseif ($ambilbln==9) {
          $bulanNama="SEPTEMBER";
        } elseif ($ambilbln==8) {
          $bulanNama="AGUSTUS";
        } elseif ($ambilbln==7) {
          $bulanNama="JULI";
        } elseif ($ambilbln==6) {
          $bulanNama="JUNI";
        } elseif ($ambilbln==5) {
          $bulanNama="MEI";
        } elseif ($ambilbln==4) {
          $bulanNama="APRIL";
        } elseif ($ambilbln==3) {
          $bulanNama="MARET";
        } elseif ($ambilbln==2) {
          $bulanNama="FEBRUARI";
        } elseif ($ambilbln==1) {
          $bulanNama="JANUARI";
        }

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class>
                        <h2><center>PT. Anugrah Karya Abiwara </center></h2>
                        <h4><center>Jalan SM. RAJA KISARAN Email : akakisaran@gmail.com Telp. 12345678 Fax : 1234567</center></h4>
                        <hr>
                        <h3><center>DATA ARSIP BULAN <?php echo "$bulanNama $ambilthn"; ?></center></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                        <thead>
                                <th>No.</th><th width="17%">TANGGAL</th><th>KODE PENJUALAN</th><th width="15%">MERK/TYPE</th>
                                <th width="15%">NAMA SALES</th><th width="15%">NAMA PEMBELI</th>
                                <th width="15%">ALAMAT PEMBELI</th><th width="10%">NO. TELEPON</th>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM penjualan,salesman,sepeda_motor WHERE penjualan.nm_sales=id_sales and penjualan.jenis_motor=kd_sepedamotor and substr(tgl_beli,1,7)='$ambilthn-$ambilbln'";
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
