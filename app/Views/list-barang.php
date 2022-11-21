<?= $this->extend('templates/admin-template.php') ?>

<?= $this->section('title') ?> List Barang <?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">No Izin Edar</th>
                <th scope="col">Kategori</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach($barang as $br): ?>
            <tr class="align-middle">
                <th scope="row"><?= $i; ?></th>
                <td><?= $br['nama']; ?></td>
                <td><?= $br['no_izin_edar']; ?></td>
                <td><?= $br['kategori']; ?></td>
                <td><?= $br['harga']; ?></td>
                <td><a href="/admin/update/<?= $br['id']; ?>" class="btn btn-warning">Update</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                        id="cancel-<?= $br['id'] ?>" onclick="cancelBarang(<?= $br['id'] ?>)">
                        Hapus
                    </button>
                </td>
            </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
</div>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Yakin ingin menghapus?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Jika Anda sudah yakin, silakan pilih "Hapus Barang" untuk menghapus barang
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a class="btn btn-danger" id="cancelButton">Hapus Barang</a>
            </div>
        </div>
    </div>
</div>
<script>
function cancelBarang(id) {
    document.getElementById('cancelButton').setAttribute('href', '/admin/delete/' + id)
}
</script>
<?= $this->endsection('main') ?>