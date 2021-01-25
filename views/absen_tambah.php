<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Absensi</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">

						<div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="divisi" class="col-sm-3 control-label">Divisi</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="divisi" class="form-control">
                                    <option value="Dokter">Dokter</option>
                                    <option value="Perawat">Perawat</option>
                                    <option value="Administrasi">Administrasi</option>
                                    <option value="Tenaga Pendukung">Tenaga Pendukung</option>
                                </select>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tgl_absen" class="col-sm-3 control-label">Tanggal Absensi</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_absen" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Absensi" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="waktu_masuk" class="col-sm-3 control-label">Waktu Masuk</label>
                            <div class="col-sm-3">
                                <input type="time" name="waktu_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Jam Masuk RS" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="waktu_keluar" class="col-sm-3 control-label">Waktu Keluar</label>
                            <div class="col-sm-3">
                                <input type="time" name="waktu_keluar" class="form-control" id="inputEmail3" placeholder="Inputkan Jam Keluar RS" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="ket" class="form-control">
                                    <option value="hadir">Hadir</option>
                                    <option value="tidak_hadir">Tidak Hadir</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="panel-footer">
                    <a href="?page=absen&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Absensi
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nama      = $_POST['nama'];
    $divisi    = $_POST['divisi'];
	$tgl_absen = $_POST['tgl_absen'];
	$wk_msk    = $_POST['waktu_masuk'];
    $wk_klr    = $_POST['waktu_keluar'];
	$ket       = $_POST['ket'];
    //buat sql
    $sql="INSERT INTO tb_absen VALUES ('','$nama','$divisi','$tgl_absen','$wk_msk','$wk_klr','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Absensi Error");
    if ($query){
        echo "<script>window.location.assign('?page=absen&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
