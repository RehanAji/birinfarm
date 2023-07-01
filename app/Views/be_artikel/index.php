<?= $this->extend('layout_admin') ?>
<!-- Konten anda -->
<?= $this->section('main') ?>

<div class="my-3 mx-4" class="col-8">
    <!DOCTYPE html>
    <html>

    <head>
        <title>Daftar Artikel</title>
    </head>

    <body>
        <h1>Daftar Artikel</h1>
        <a href="<?= site_url('artikel/create') ?>">Tambah Artikel</a>
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $item) : ?>
                    <tr>
                        <td><?= $item['judul'] ?></td>
                        <td><?= $item['tanggal'] ?></td>
                        <td>
                            <a href="<?= site_url('artikel/edit/' . $item['id']) ?>">Edit</a>
                            <a href="<?= site_url('artikel/delete/' . $item['id']) ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>

    </html>
    <?= $this->endSection() ?>
    <!-- /.konten anda -->