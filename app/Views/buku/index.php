<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h3>Data Buku</h3>

<?php if (session('pesan')): ?>
    <div class="alert alert-success"><?= esc(session('pesan')) ?></div>
<?php endif ?>

<form method="get" class="mb-3">
    <input name="q" value="<?= esc($q ?? '') ?>" placeholder="Cari judul..." class="form-control">
</form>

<a href="<?= site_url('buku/tambah') ?>" class="btn btn-primary mb-3">+ Tambah Buku</a>

<table class="table table-bordered">
    <tr>
        <th>No</th><th>Kode</th><th>Judul</th><th>Penulis</th><th>Tahun</th><th>Stok</th><th>Aksi</th>
    </tr>
    <?php foreach ($books as $i => $b): ?>
    <tr>
        <td><?= $i + 1 ?></td>
        <td><?= esc($b['book_code']) ?></td>
        <td><?= esc($b['title']) ?></td>
        <td><?= esc($b['author']) ?></td>
        <td><?= esc($b['publication_year']) ?></td>
        <td><?= esc($b['stock']) ?></td>
        <td>
            <a href="<?= site_url('buku/edit/' . $b['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
            <form action="<?= site_url('buku/hapus/' . $b['id']) ?>" method="post" class="d-inline" onsubmit="return confirm('Hapus buku ini?')">
                <?= csrf_field() ?>
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    <?php endforeach ?>
</table>

<?= $pager->links() ?>

<?= $this->endSection() ?>
