<?= $this->extend('templates/admin-template.php') ?>

<?= $this->section('title') ?> Update Barang <?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row justify-content-center">
    <div class="col-lg-4">
        <h2 class="mb-3">Update Barang</h2>
        <form action="/admin/update/<?= $barang['id']?>" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Barang" name="nama" required
                    value="<?= $barang['nama']?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"
                    required><?= $barang['deskripsi']?></textarea>
            </div>
            <div class="mb-3">
                <label for="kemasan" class="form-label">Kemasan</label>
                <input type="text" class="form-control" id="kemasan" placeholder="Kemasan" name="kemasan" required
                    value="<?= $barang['kemasan']?>">
            </div>
            <div class="mb-3">
                <label for="indikasi" class="form-label">Indikasi</label>
                <input type="text" class="form-control" id="indikasi" placeholder="Indikasi" name="indikasi" required
                    value="<?= $barang['indikasi']?>">
            </div>
            <div class="mb-3">
                <label for="dosis" class="form-label">Dosis</label>
                <input type="text" class="form-control" id="dosis" placeholder="Dosis" name="dosis" required
                    value="<?= $barang['dosis']?>">
            </div>
            <div class="mb-3">
                <label for="penyimpanan" class="form-label">Cara Penyimpanan</label>
                <input type="text" class="form-control" id="penyimpanan" placeholder="Penyimpanan" name="penyimpanan"
                    required value="<?= $barang['cara_penyimpanan']?>">
            </div>
            <div class="mb-3">
                <label for="noizin" class="form-label">No Izin Edar</label>
                <input type="text" class="form-control" id="noizin" placeholder="No Izin Edar" name="noizin" required
                    value="<?= $barang['no_izin_edar']?>">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" placeholder="Harga Barang" name="harga" required
                    value="<?= $barang['harga']?>">
            </div>
            <div class="mb-4">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" aria-label="Default select example" id="kategori" name="kategori" required>
                    <?php foreach($kategori as $kt): ?>
                    <option value="<?= $kt['id']; ?>"
                        <?php $text =  $barang['id_kategori'] == $kt['id'] ? 'selected' : ' '; echo $text ?>>
                        <?= $kt['kategori']; ?> </option>
                    <?php endforeach ?>
                </select>
            </div>
            <input type="submit" value="Update Data" class="w-100 mb-5 btn btn-primary">
        </form>

    </div>
</div>
<?= $this->endsection('main') ?>