<div class="container py-3">

    <a class="btn btn-primary" href="<?= base_url('user/tambah'); ?>" role="button">Tambah</a>

    <?php if ($this->session->flashdata('berhasil')) : ?>
        <div class="alert alert-primary my-3" role="alert">
            <?= $this->session->flashdata('berhasil'); ?>
        </div>
    <?php endif ?>

    <div class="table-responsive my-3">
        <table class="table table-striped table-bordered text-center" id="my-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Level</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($user as $u) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $u->username; ?></td>
                        <td><?= $u->level; ?></td>
                        <td><?= $u->nama; ?></td>
                        <td>
                            <a class="btn btn-outline-warning" href="<?= base_url('user/ubah/' . $u->id_user); ?>" role="button">
                                <i class="fa fa-edit"></i>
                            </a>

                            <a class="btn btn-outline-danger" href="<?= base_url('user/hapus/' . $u->id_user); ?>" onclick="return confirm('Anda Yakin?')" role="button">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>