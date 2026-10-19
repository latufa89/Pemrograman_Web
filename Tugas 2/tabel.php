<?php
// 1. Membuat array di dalam array berisi 3 baris data mahasiswa
$mahasiswa = [
    ["Laila", "Sistem & Teknologi Informasi", 2592010100],
    ["Tusifa", "Hukum", 2559201200],
    ["Fatmasyari", "Manajemen", 25592010300]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Mahasiswa</title>
</head>
<body>

    <h2>Daftar Data Mahasiswa</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Jurusan</th>
                <th>NIM</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $baris): ?>
            <tr>
                <td><?php echo $baris[0]; ?></td> <!-- Indeks 0 untuk Nama -->
                <td><?php echo $baris[1]; ?></td> <!-- Indeks 1 untuk Jurusan -->
                <td><?php echo $baris[2]; ?></td> <!-- Indeks 2 untuk NIM -->
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
