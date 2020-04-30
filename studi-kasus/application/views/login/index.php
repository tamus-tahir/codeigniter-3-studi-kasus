<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-4.4.1-dist/css/bootstrap.css'); ?>">

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #b3b5a5;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-5 shadow-lg ">

                    <h1 class="text-center mb-4">LOGIN PAGE</h1>

                    <?php if ($this->session->flashdata('gagal')) : ?>
                        <div class="alert alert-danger my-3" role="alert">
                            <?= $this->session->flashdata('gagal'); ?>
                        </div>
                    <?php endif ?>

                    <?= form_open(); ?>
                    <div class="form-group">
                        <input type="text" class="form-control  <?= form_error('username') ? 'is-invalid' : null; ?>" name="username" placeholder="Username ...">
                        <?= form_error('username'); ?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control  <?= form_error('password') ? 'is-invalid' : null; ?>" name="password" placeholder="Password ...">
                        <?= form_error('password'); ?>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">login</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>