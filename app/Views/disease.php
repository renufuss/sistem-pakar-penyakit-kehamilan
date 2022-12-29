<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="generator" content="Hugo 0.84.0" />
    <title>Hasil Test</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/custom/pic/favicon.ico" />

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/" />

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>/assets/custom/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>/assets/custom/css/heroes.css" rel="stylesheet" />
</head>

<body>
    <main>
        <h1 class="visually-hidden">Hasil Tes</h1>

        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="<?= base_url(); ?>/assets/custom/pic/penyakit.jpg" alt="" width="250px" height="250px" />
            <h1 class="display-5 fw-bold"><?= ucwords(strtolower($disease->name)); ?></h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    <?= $disease->description; ?>
                </p>
                <p>Nama : <?= ucwords(strtolower($name)); ?></p>
                <p>Umur : <?= $age; ?></p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a type="button" class="btn btn-primary btn-lg px-4 gap-3" href="<?= base_url(); ?>">Tes Ulang</a>
                    <a type="button" class="btn btn-outline-secondary btn-lg px-4" href="<?= $disease->url; ?>"
                        target="_blank">Informasi Penyakit (Alodokter)</a>
                </div>
            </div>

            <footer class="pt-3 mt-4 text-muted border-top">
                &copy; Sistem Pendukung Keputusan - <?= date('Y'); ?>
            </footer>
        </div>
    </main>

    <script src="<?= base_url(); ?>/assets/custom/js/bootstrap.bundle.min.js"></script>
</body>

</html>