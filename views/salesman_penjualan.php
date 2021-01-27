<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Penjualan</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Id Penjualan</th>
                                <th>Nama Sales</th>
                                <th>Nama Pembeli</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat</th>
                                <th>Jenis Motor</th>
                                <th>Tanggal Pembelian</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM penjualan,salesman,sepeda_motor where penjualan.nm_sales=id_sales and penjualan.jenis_motor=kd_sepedamotor";
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
                                    <td><?= $data['id_penjualan'] ?></td>
                                    <td><?= $data['nm_sales'] ?></td>
                                    <td><?= $data['nm_pembeli'] ?></td>
                                    <td><?= $data['no_telp'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['merk'] ?></td>
                                    <td><?= $data['tgl_beli'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

