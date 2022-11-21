<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Apolen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Apolen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Herbal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Generik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambah-barang">Tambah Barang</a>
                    </li>
                </ul>
                <a href="" class="ms-auto btn btn-primary">Hubungi Kami</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row">

            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>

<?= $this->extend('templates/admin-template.php') ?>

<?= $this->section('title') ?> List Barang <?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <?php foreach($barang as $br): ?>
    <div class="col-lg-3">
        <div class="card border-0 h-100">
            <img src="\asset\herocyn.jpeg" class="card-img-top" height="200">
            <div class="text-center card-body">
                <h5 class="card-title"><?= $br['nama'] ?></h5>
                <p class="card-text"> <?= substr($br['deskripsi'], 0, 90) . "..." ?></p>
                <a href="#" class="mt-auto btn btn-primary">Beli Harga: Rp. <?= $br['harga'] ?></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?= $this->endsection('main') ?>