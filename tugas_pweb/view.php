<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Nomor Telepon</th>
                    <th>Agama</th>
                    <th>Asal Kota</th>
                    <th>Sekolah</th>
                    <th>Hobi</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'data.php'; ?>
            </tbody>
        </table>
    </div>
</body>
</html>