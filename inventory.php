<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php include "header.php"; ?>
    <div class="container">
        <?php include "sidebar.php"; ?>

        <div class="dashboard">
            <button class="btn-tambahdata" id="btntambahdata">Tambah data</button>
            <div id="formBarang" class="form-container">
                <h2>Tambah Barang</h2>
                <form action="tambahbarang.php" method="POST">
                    <label>Nama Barang</label>
                    <input name="barang" type="text" placeholder="Masukkan nama barang">

                    <label>Stok</label>
                    <input name="jumlah" type="number" placeholder="Masukkan jumlah stok">

                    <button type="submit">Simpan</button>
                    <button type="button" id="btnTutup">Batal</button>
                </form>
            </div>
        </div>
    </div>

    <script src="main.js"></script>
</body>

</html>