<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Peminjaman Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_shift WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
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
								<tr>
                                    <td>Id</td> <td><?= $data['id'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama DOkter</td> <td><?= $data['nm_dokter'] ?></td>
                                </tr>
                                <tr>
                                    <td>Spesialis</td> <td><?= $data['spesialis'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Masuk</td> <td><?= $data['tgl_kerja'] ?></td>
                                </tr>
								<tr>
                                    <td>Jam Masuk</td> <td><?= $data['jam_masuk'] ?> hari</td>
                                </tr>
                                <tr>
                                    <td>Jam Keluar</td> <td><?= $data['jam_keluar'] ?> hari</td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
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
