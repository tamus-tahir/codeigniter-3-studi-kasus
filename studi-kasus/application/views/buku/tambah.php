<div class="container mt-3 mb-5">

    <?php if ($this->session->flashdata('error')) : ?>
        <div class="alert alert-danger my-3" role="alert">
            <?= $this->session->flashdata('error'); ?>
        </div>
    <?php endif ?>

    <?= form_open_multipart(); ?>

    <div class="form-group">
        <label for="judul">Judul <span class="text-danger">*</span></label>
        <input type="text" class="form-control  <?= form_error('judul') ? 'is-invalid' : null; ?>" id="judul" name="judul" autocomplete="off">
        <?= form_error('judul'); ?>
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi <span class="text-danger">*</span></label>
        <textarea class="form-control ckeditor <?= form_error('deskripsi') ? 'is-invalid' : null; ?>" id="deskripsi" name="deskripsi" rows="3"></textarea>
        <?= form_error('deskripsi'); ?>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <div class="form-group">
                <label for="jumlah">Jumlah <span class="text-danger">*</span></label>
                <input type="number" class="form-control <?= form_error('jumlah') ? 'is-invalid' : null; ?>" id="jumlah" name="jumlah" autocomplete="off">
                <?= form_error('jumlah'); ?>
            </div>
        </div>
        <div class="col-md-9">
            <div class="form-group">
                <label for="gambar">Gambar <span class="text-danger">* (Max Size 500kb)</span></label>
                <input type="file" class="form-control-file" name="gambar" id="gambar">
            </div>
        </div>
    </div>

    <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('buku'); ?>" role="button"> Kembali</a>
    <button class="mt-3 btn btn-primary" type="submit">Tambah </button>

    </form>

</div>