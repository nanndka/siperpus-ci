<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php $edit = $book !== null; ?>

<h3><?= $edit ? 'Edit' : 'Tambah' ?> Buku</h3>

<?php foreach ((array) session('errors') as $e): ?>
    <div class="alert alert-danger"><?= esc($e) ?></div>
<?php endforeach ?>

<form method="post" action="<?= $edit ? site_url('buku/update/' . $book['id']) : site_url('buku/simpan') ?>">
    <?= csrf_field() ?>

    <label>Kode Buku</label>
    <input name="book_code" class="form-control mb-2" value="<?= esc(old('book_code', $book['book_code'] ?? '')) ?>">

    <label>Judul</label>
    <input name="title" class="form-control mb-2" value="<?= esc(old('title', $book['title'] ?? '')) ?>">

    <label>Penulis</label>
    <input name="author" class="form-control mb-2" value="<?= esc(old('author', $book['author'] ?? '')) ?>">

    <label>Tahun Terbit</label>
    <input name="publication_year" type="number" class="form-control mb-2" value="<?= esc(old('publication_year', $book['publication_year'] ?? '')) ?>">

    <label>Stok</label>
    <input name="stock" type="number" class="form-control mb-3" value="<?= esc(old('stock', $book['stock'] ?? 0)) ?>">

    <button class="btn btn-success">Simpan</button>
    <a href="<?= site_url('buku') ?>" class="btn btn-secondary">Kembali</a>
</form>

<?= $this->endSection() ?>
