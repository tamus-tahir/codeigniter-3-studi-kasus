<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="<?= base_url('uploads/' . $detailpeminjaman->gambar); ?>" height="400" class="w-100">
        </div>
        <div class="col-md-9">
            <table class="h4 text-black table">
                <tr class="align-text-top">
                    <td width="150px">Nama </td>
                    <td width="5px">:</td>
                    <td class="font-weight-bold"><?= $detailpeminjaman->nama; ?></td>
                </tr>
                <tr class="align-text-top">
                    <td>NIM</td>
                    <td>:</td>
                    <td class="font-weight-bold"><?= $detailpeminjaman->nim; ?></td>
                </tr>
                <tr class="align-text-top">
                    <td>Judul</td>
                    <td>:</td>
                    <td class="font-weight-bold"><?= $detailpeminjaman->judul; ?></td>
                </tr>
                <tr class="align-text-top">
                    <td>Tanggal</td>
                    <td>:</td>
                    <td class="font-weight-bold"><?= date('d-m-Y', strtotime($detailpeminjaman->tanggal_peminjaman)); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>