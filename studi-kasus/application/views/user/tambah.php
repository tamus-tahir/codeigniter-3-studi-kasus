<div class="container mt-3 mb-5">

    <?= form_open(); ?>

    <div class="form-group">
        <label for="username">Username <span class="text-danger">*</span></label>
        <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : null; ?>" id="username" name="username" autocomplete="off">
        <?= form_error('username'); ?>
    </div>

    <div class="form-group">
        <label for="password">Password <span class="text-danger">*</span></label>
        <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : null; ?>" id="password" name="password" autocomplete="off">
        <?= form_error('password'); ?>
    </div>

    <div class="form-group">
        <label for="passconfirm">Konfimasi Password <span class="text-danger">*</span></label>
        <input type="password" class="form-control <?= form_error('passconfirm') ? 'is-invalid' : null; ?>" id="passconfirm" name="passconfirm" autocomplete="off">
        <?= form_error('passconfirm'); ?>
    </div>

    <div class="form-group">
        <label for="nama">Nama Lengkap <span class="text-danger">*</span></label>
        <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : null; ?>" id="nama" name="nama" autocomplete="off">
        <?= form_error('nama'); ?>
    </div>

    <div class="form-group">
        <label for="level">Level <span class="text-danger">*</span></label>
        <select id="level" class="form-control <?= form_error('level') ? 'is-invalid' : null; ?>" name="level">
            <option value="">-- Pilih Level --</option>
            <option value="Admin">Admin</option>
            <option value="Operator">Operator</option>
        </select>
        <?= form_error('level'); ?>
    </div>

    <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('user'); ?>" role="button"> Kembali</a>
    <button class="mt-3 btn btn-primary" type="submit">Tambah </button>

    </form>

</div>