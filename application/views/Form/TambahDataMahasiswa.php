
    <div class="container-fluid">
            <div class="card">
            <div class="card-body">
                <h2 class="card-title fw-semibold mb-4"><?php echo $judul; ?></h2>
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header justify-content-center">
                            Form Tambah Data Mahasiswa
                        </div>

                        <div class="card-body">
                            <form action="<?= base_url('Mahasiswa/upload'); ?>" method="post">
                                <div class="form-group mb-3">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="nim">NIM</label>
                                    <input type="text" name="nim" class="form-control" id="nik" placeholder="NIK">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                        <option value="">Jenis Kelamin</option>
                                        <option value="Laki - laki">Laki - laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="prodi">Prodi</label>
                                    <select name="prodi" id="prodi" class="form-control">
                                        <option value="">Pilih Prodi</option>
                                        <?php foreach ($prodi as $p) : ?>
                                            <option value ="<?= $p['id']; ?>"><?= $p['prodi']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="asal_sekolah">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" placeholder="asal sekolah">
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label for="no_hp">No Handphone</label>
                                    <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No hp">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat">
                                </div>

                                <a href="<?=base_url('Mahasiswa')?> " class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Mahasiswa</button>
                            </form>
                        </div>
                    </div>
                </div>

                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    