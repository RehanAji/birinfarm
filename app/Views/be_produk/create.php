<?= $this->extend('layout_admin') ?>
<!-- Konten anda -->
<?= $this->section('main') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Tambah Data Produk</title>
    <style>
        /* Gaya CSS untuk form */
        .container {
            background-color: #eaf7e2;
            padding: 20px;
            margin-top: 50px;
            border-radius: 5px;
        }

        h2 {
            color: #6ab04c;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        button[type="submit"] {
            background-color: #6ab04c;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Tambah Data Produk</h2>
                <form method="POST" action="<?= base_url('be_produk/insertData') ?>">
                    <div>
                        <label for="id_babon">ID Babon:</label>
                        <input type="text" name="id_babon" id="id_babon" required>
                    </div>
                    <div>
                        <label for="id_jantan">ID Jantan:</label>
                        <input type="text" name="id_jantan" id="id_jantan" required>
                    </div>
                    <div>
                        <label for="id_jenis">ID Jenis:</label>
                        <input type="text" name="id_jenis" id="id_jenis" required>
                    </div>
                    <div>
                        <label for="is_penjantan">Is Penjantan:</label>
                        <input type="number" name="is_penjantan" id="is_penjantan" required>
                    </div>
                    <div>
                        <label for="tipe">Tipe:</label>
                        <input type="text" name="tipe" id="tipe" required>
                    </div>
                    <div>
                        <label for="kelamin">Kelamin:</label>
                        <select name="kelamin" id="kelamin" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" id="nama" required>
                    </div>
                    <div>
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea name="deskripsi" id="deskripsi" required></textarea>
                    </div>
                    <div>
                        <label for="foto">Foto:</label>
                        <input type="text" name="foto" id="foto" required>
                    </div>
                    <div>
                        <label for="foto_identitas">Foto Identitas:</label>
                        <input type="text" name="foto_identitas" id="foto_identitas" required>
                    </div>
                    <div>
                        <label for="tempat_lahir">Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" required>
                    </div>
                    <div>
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
                    </div>
                    <div>
                        <label for="status">Status:</label>
                        <input type="text" name="status" id="status" required>
                    </div>
                    <div>
                        <label for="created_by">Created By:</label>
                        <input type="text" name="created_by" id="created_by" required>
                    </div>
                    <div>
                        <label for="updated_by">Updated By:</label>
                        <input type="text" name="updated_by" id="updated_by" required>
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>


<?= $this->endSection() ?>
<!-- /.konten anda -->