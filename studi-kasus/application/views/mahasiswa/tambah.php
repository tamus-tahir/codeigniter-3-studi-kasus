<div class="container mt-3 mb-5">

    <?= form_open(); ?>

    <div class="form-group">
        <label for="nama">Nama Lengkap <span class="text-danger">*</span></label>
        <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : null; ?>" id="nama" name="nama" autocomplete="off">
        <?= form_error('nama'); ?>
    </div>

    <div class="form-group">
        <label for="nim">NIM <span class="text-danger">*</span></label>
        <input type="text" class="form-control <?= form_error('nim') ? 'is-invalid' : null; ?>" id="nim" name="nim" autocomplete="off">
        <?= form_error('nim'); ?>
    </div>

    <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('mahasiswa'); ?>" role="button"> Kembali</a>
    <button class="mt-3 btn btn-primary" type="submit">Tambah </button>

    </form>

</div>