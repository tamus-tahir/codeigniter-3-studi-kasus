<div class="container mt-3 mb-5">

    <?= form_open(); ?>

    <div class="form-group">
        <label for="nama">Nama Lengkap <span class="text-danger">*</span></label>
        <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : null; ?>" id="nama" name="nama" autocomplete="off" value="<?= $user->nama; ?>">
        <?= form_error('nama'); ?>
    </div>

    <div class="form-group">
        <label for="level">Level <span class="text-danger">*</span></label>
        <select id="level" class="form-control <?= form_error('level') ? 'is-invalid' : null; ?>" name="level">
            <option value="">-- Pilih Level --</option>
            <option value="Admin" <?= $user->level == 'Admin' ? 'selected' : ''; ?>>Admin</option>
            <option value="Operator" <?= $user->level == 'Operator' ? 'selected' : ''; ?>>Operator</option>
        </select>
        <?= form_error('level'); ?>
    </div>

    <input type="hidden" name="id_user" value="<?= $user->id_user; ?>">

    <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('user'); ?>" role="button"> Kembali</a>
    <button class="mt-3 btn btn-primary" type="submit">Ubah </button>

    </form>

</div>