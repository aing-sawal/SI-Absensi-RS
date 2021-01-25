<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Absen</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_absen WHERE id='" . $_GET ['id'] . "'";
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
                        <h3>DATA ABSEN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                                <tr>
                                    <td>ID</td> <td><?= $data['id'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Karyawan</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Divisi</td> <td><?= $data['divisi'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal Absen</td> <td><?= $data['tgl_absen'] ?></td>
                                </tr>
								<tr>
                                    <td>Waktu Masuk</td> <td><?= $data['waktu_masuk'] ?></td>
                                </tr>
								<tr>
                                    <td>Waktu Keluar</td> <td><?= $data['waktu_keluar'] ?></td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td> <td><?= $data['ket'] ?></td>
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