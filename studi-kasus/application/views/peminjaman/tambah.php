<div class="container mt-3 mb-5">

    <?= form_open(); ?>

    <!-- mahasiswa -->
    <!-- 
        yang akan kita kirim adalah id mahasiswa jadi yang akan kita periksa errornya adalah id mahasiswa
        karena name id mahasiswa type hidden, oleh karena itu errornya kita cetak pada input nim
        jadi ketika idnya kosong maka input nimnya akan error
    -->
    <div class="form-group">
        <label for="nim">Cari Mahasiswa <span class="text-danger">*</span></label>
        <input type="text" class="form-control <?= form_error('id_mahasiswa') ? 'is-invalid' : null; ?>" id="nim" placeholder="Masukan NIM Mahasiswa">
        <?= form_error('id_mahasiswa'); ?>
    </div>

    <div class="form-group">
        <label for="nama">Nama Lengkap <span class="text-danger">*</span></label>
        <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : null; ?>" id="nama" name="nama" autocomplete="off" readonly>
        <?= form_error('nama'); ?>
    </div>

    <input type="hidden" name="id_mahasiswa" id="id_mahasiswa">
    <!-- end mahasiswa -->

    <!-- buku -->
    <div class="form-group">
        <label for="judul">Cari Judul Buku <span class="text-danger">*</span></label>
        <input type="text" class="form-control <?= form_error('id_buku') ? 'is-invalid' : null; ?>" id="judul" placeholder="Masukan Judul Buku">
        <?= form_error('id_buku'); ?>
    </div>

    <div class="row">
        <div class="col-md-4">
            <img src="" alt="" height="400" class="w-100" id="gambar">
        </div>
        <div class="col-md-8">
            <p id="deskripsi"></p>
        </div>
    </div>

    <input type="hidden" name="id_buku" id="id_buku">
    <!-- end buku -->

    <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('peminjaman'); ?>" role="button"> Kembali</a>
    <button class="mt-3 btn btn-primary" type="submit">Tambah </button>

    </form>

</div>