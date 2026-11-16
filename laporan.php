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

        <div class="dashboard"> haloo laporan

            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>AKSI</th>
                </tr>

                <?php
                include "koneksi.php";
                $selectedbarang = "";
                $data = mysqli_query($koneksi, "select * from barang");
                while ($row = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id']); ?></td>
                        <td><?= htmlspecialchars($row['nama']); ?></td>
                        <td><?= htmlspecialchars($row['jumlah']); ?></td>
                        <td>
                            <button type="button" onclick="editform('<?= $row['id']; ?>','<?= $row['nama']; ?>','<?= $row['jumlah']; ?>')">Edit</button>
                            <button onclick="hapusdata(<?= $row['id'];?>)">Hapus</button>
                        </td>

                    </tr>
                <?php
                }
                ?>
            </table>
            <form action="editdata.php" method="POST">
                <p>Form</p>
                <p>id</p>
                <input name="id" id="id" type="text" readonly>
                <p>nama barang</p>
                <input id="namabarang" type="text" readonly>
                <p>jumlah</p>
                <input name="jumlahbarang" id="jumlahbarang" type="number">
                <button type="submit">Simpan</button>
            </form>
        </div>

    </div>
    <script src="main.js"></script>
</body>

</html>