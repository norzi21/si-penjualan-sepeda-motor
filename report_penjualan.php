<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Laporan Penjualan Sepeda Motor</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th width="17%">TANGGAL</th><th>KODE PENJUALAN</th><th width="15%">MERK/TYPE</th>
                                <th width="15%">HARGA</th><th width="15%">NAMA SALES</th><th width="15%">NAMA PEMBELI</th>
                                <th width="15%">ALAMAT PEMBELI</th><th width="10%">NO. TELEPON</th><th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            $id_penjualan = $_GET['id_penjualan'];
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT penjualan.id_penjualan, penjualan.nm_sales, penjualan.nm_pembeli, penjualan.no_telp, penjualan.alamat,
                                    penjualan.jenis_motor, penjualan.tgl_beli, salesman.nm_sales, sepeda_motor.merk, sepeda_motor.harga_jual
                                    FROM penjualan INNER JOIN salesman INNER JOIN sepeda_motor
                                    ON penjualan.id_penjualan=salesman.kd_sales AND penjualan.id_penjualan=sepeda_motor.kd_sepedamotor
                                    WHERE penjualan.id_penjualan='$id_penjualan'";
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
                                    <td><?= $data['harga_jual'] ?></td>
                                    <td><?= $data['nm_sales'] ?></td>
                                    <td><?= $data['nm_pembeli'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['no_telp'] ?></td>
                                    <td>
                                        <a href="report/laporan_penjualan.php?id_penjualan=<?= $data['id_penjualan'] ?>" target="_blank" class="btn btn-info btn-xs">
                                            <span class="fa fa-print"></span>
                                        </a>

                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">
                                    <a href="report/laporan_semua.php" target="_blank" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Semua laporan
                                    </a>
                                    <a href="report/laporan_perbulan.php" target="_blank" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Laporan Perbulan
                                    </a>
                                    <a href="report/laporan_pertahun.php" target="_blank" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Laporan Pertahun
                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="cetak_perbulan" class="modalDialog">
    <div>
        <a href="#" title="Close" class="close">X</a>

        <form  target="_blank" action="report/arsip_perbulan.php" method="post">
        <h4>Pilih bulan </h4>
        <select name="bulan" class="form-control">
          <option value="12"> Desember </option>
          <option value="11"> November </option>
          <option value="10"> Oktober </option>
          <option value="09"> September </option>
          <option value="08"> Agustus </option>
          <option value="07"> Juli </option>
          <option value="06"> Juni </option>
          <option value="05"> Mei </option>
          <option value="04"> April </option>
          <option value="03"> Maret </option>
          <option value="02"> Februari </option>
          <option value="01"> Januari </option>
        </select>
        <h4>Pilih tahun</h4>
        <select name="tahun" class="form-control">
          <?
            for ($i=substr(date("d-m-Y"),6,4); $i > substr(date("d-m-Y"),6,4)-5; $i--) { ?>
              <option value="<?=$i?>"> <?=$i?> </option>
          <?  }
          ?>
        </select>

        <button type="submit">OK</button>
        </form>
    </div>
</div>

<div id="cetak_pertahun" class="modalDialog">
    <div>
        <a href="#" title="Close" class="close">X</a>

        <form  target="_blank" action="report/arsip_pertahun.php" method="post">
        <h4>Pilih tahun</h4>
        <select name="tahun" class="form-control">
          <?
            for ($i=substr(date("d-m-Y"),6,4); $i > substr(date("d-m-Y"),6,4)-5; $i--) { ?>
              <option value="<?=$i?>"> <?=$i?> </option>
          <?  }
          ?>
        </select>

        <button type="submit">OK</button>
        </form>
    </div>
</div>
