<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Shift Kerja</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                       
                        <h2>Sistem Informasi Absensi Karyawan Rumah Sakit Wira Husada</h2>
                        <h4>Jln kartini no 209 Kel. Sendang sari kec. Kisaran Barat<br> Kisaran, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA SHIFT KERJA DOKTER</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								 <th>No.</th>
                                <th>ID</th>
                                <th>Nama Dokter</th>
                                <th>Spesialis</th>
                                <th>Tanggal Masuk</th>
                                <th>Jam Masuk</th>
                                <th>Jam_Keluar</th>
                                <th>AKSI</th>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_shift";
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
                                    <td><?= $data['id'] ?></td>
                                    <td><?= $data['nm_dokter'] ?></td>
                                    <td><?= $data['spesialis'] ?></td>
                                    <td><?= $data['tgl_kerja'] ?></td>
                                    <td><?= $data['jam_masuk'] ?></td>
                                    <td><?= $data['jam_keluar'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Admin | Staff RS Wira Husada<strong></u><br>
                                    
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
