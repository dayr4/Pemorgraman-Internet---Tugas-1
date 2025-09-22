<!DOCTYPE html>
<html>
<head>
    <title>Portal Tugas 2 - Praktik PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        nav {
            margin: 20px 0;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            text-decoration: none;
            padding: 8px 14px;
            background: #007BFF;
            color: white;
            border-radius: 5px;
            transition: 0.3s;
        }
        nav ul li a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>📘 Portal Tugas 2 - Pemrograman Internet (PHP)</h2>
    <p>Pilih salah satu menu di bawah untuk melihat hasil tugas:</p>

    <nav>
        <ul>
            <li><a href="DaftarBarang.php">Daftar Barang</a></li>
            <li><a href="DaftarMahasiswa.php">Daftar Mahasiswa</a></li>
            <li><a href="DaftarHargaBarang.php">Daftar Harga Barang</a></li>
            <li><a href="bilGenap.php">Bilangan Genap</a></li>
            <li><a href="multidimensi.php">Array Multidimensi</a></li>
            <li><a href="ArrayKondisi.php">Array + Kondisi</a></li>
        </ul>
    </nav>

</div>
</body>
</html>
