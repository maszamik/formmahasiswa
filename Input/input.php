<!DOCTYPE html>
<html>
        <?php
    include 'koneksi.php';
    ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .warning {
            color: red;
        }
        body {
            padding-left: 10%;
            background: #ffd700;
        }
    </style>
    <title>Data Mahasiswa</title>
</head>

<body>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Data Mahasiswa
                </div>
                <div class="card-body">
                    <form method="POST" action="simpan_data.php">
                        
                        <div class="form-group row">
                            <!-- Nama -->
                            <!--  -->
                            <label for="" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="" class="warning">
                            </div>
                        </div>
                         <!-- Email -->
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="" class="warning">
                            </div>
                        </div>
                         <!-- Alamat -->
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                               <textarea name="alamat"></textarea>
                            </div>
                        </div>
                        <!-- Jenis Kelamin -->
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input type="radio" name="jenis_kelamin" id="L"> Laki-Laki
                                 <input type="radio" name="jenis_kelamin" id="P"> Perempuan 
                            </div>
                        </div>
                         <!-- Jurusan -->
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-10">
                                <select name="jurusan">
                                    <option>Pilih Jurusan</option>
                                    <option id="Sistem Informasi">Sistem Informasi</option>
                                    <option id="Teknik Informatika">Teknik Informatika</option>
                                </select>
                            </div>
                        </div>
                        <!-- Pesan -->
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                               <input type="file" name="foto" id="foto">
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group row">
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary"> Kirim </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>