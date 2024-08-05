<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $bday = $_POST['bday'];
    $notelp = $_POST['notelp'];
    $agama = $_POST['agama'];
    $kota = $_POST['kota'];
    $sekolah = $_POST['sekolah'];
    $hobi = $_POST['hobi'];
    $email = $_POST['email'];

    // Format data untuk disimpan
    $data = "$name, $bday, $notelp, $agama, $kota, $sekolah, $hobi, $email\n";

    // Simpan data ke file
    if (file_put_contents("student.txt", $data, FILE_APPEND | LOCK_EX)) {
        echo "Data berhasil disimpan.";
        echo "<br>";
        echo "<a href='form.html'>Isi form kembali</a>";
        echo "<br>";
        echo "<a href='view.php'>Lihat Daftar Siswa</a>";
    } else {
        echo "Gagal menyimpan data.";
    }
} else {
    echo "Akses tidak sah.";
}
?>