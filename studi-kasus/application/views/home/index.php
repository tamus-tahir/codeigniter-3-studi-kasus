<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-4.4.1-dist/css/bootstrap.css'); ?>">

    <style>
        .content {
            min-height: calc(100vh - 50px);
        }

        footer {
            height: 50px;
        }
    </style>
</head>

<body>
    <!-- content -->
    <div class="content">
        <div class="container">

            <h1 class="my-5 display-3 text-center">SI PERPUSTAKAAN</h1>

            <div class="row justify-content-center">

                <?php foreach ($buku as $b) : ?>
                    <div class="col-md-4 col-sm-6 mb-3">

                        <div class="card">
                            <img src="<?= base_url('uploads/' . $b->gambar); ?>" class="card-img-top" height="300">
                            <div class="card-body">
                                <p class="card-title"><?= $b->judul; ?></p>
                                <div class="card-text">Stock :
                                    <?php if ($b->jumlah == 0) : ?>
                                        <p class="badge badge-danger">Out Of Stock</p>
                                    <?php else : ?>
                                        <p class="badge badge-primary"><?= $b->jumlah; ?></p>
                                    <?php endif ?>
                                    <a href="#" class="btn btn-outline-success float-right get-detail-buku" data-toggle="modal" data-target="#exampleModal" data-id="<?= $b->id_buku; ?>">Detail</a>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>

            </div>

            <?= $halaman; ?>
        </div>
    </div>
    <!-- end content -->

    <!-- footer -->
    <footer class="bg-dark p-3">
        <div class="text-center text-light">
            <h6>Copyright &copy; Tamus Tahir 2020</h6>
        </div>
    </footer>
    <!-- end footer -->

    <!-- modal detail buku -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body detail-buku">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal detail buku -->

    <script src="<?= base_url('assets/jquery-3.4.1/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bootstrap-4.4.1-dist/js/bootstrap.js'); ?>"></script>

    <script>
        $(document).ready(function() {
            $('.get-detail-buku').on('click', function() {
                const id = $(this).data('id');
                $(".detail-buku").load("<?= base_url('home/detail/'); ?>" + id);
            });
        });
    </script>
</body>

</html>