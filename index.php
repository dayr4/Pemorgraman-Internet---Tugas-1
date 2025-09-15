<!DOCTYPE html>
<html>
<head>
  <title>Praktik PHP Dasar</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      margin: 0;
      padding: 0;
    }
    header {
      background: #007BFF;
      color: white;
      padding: 15px;
      text-align: center;
    }
    nav {
      background: #f1f1f1;
      padding: 10px;
    }
    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 15px;
    }
    nav ul li {
      display: inline;
    }
    nav ul li a {
      text-decoration: none;
      padding: 8px 12px;
      background: #007BFF;
      color: white;
      border-radius: 5px;
      transition: 0.3s;
    }
    nav ul li a:hover {
      background: #0056b3;
    }
    main {
      padding: 20px;
      background: white;
      margin: 20px auto;
      width: 80%;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    form {
      margin-top: 15px;
    }
    input, select {
      margin: 5px 0;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 100%;
      max-width: 300px;
    }
    input[type="submit"] {
      background: #28a745;
      color: white;
      cursor: pointer;
      width: auto;
    }
    input[type="submit"]:hover {
      background: #218838;
    }
    hr {
      margin: 20px 0;
    }
    .result {
      margin-top: 15px;
      padding: 10px;
      background: #f0f8ff;
      border-left: 4px solid #007BFF;
    }
  </style>
</head>
<body>
  <header>
    <h1>Praktikum PHP Dasar</h1>
    <p>Belajar PHP: Variabel, Operator, Kondisi, dan Form</p>
  </header>

  <nav>
    <ul>
      <li><a href="?page=ucapan">Form Ucapan</a></li>
      <li><a href="?page=kalkulator">Kalkulator</a></li>
      <li><a href="?page=ganjilgenap">Ganjil / Genap</a></li>
      <li><a href="?page=nilai">Nilai Huruf</a></li>
      <li><a href="?page=menu">Menu Makanan</a></li>
      <li><a href="?page=biodata">Biodata</a></li>
    </ul>
  </nav>

  <main>
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'ucapan': include "ucapan.php"; break;
            case 'kalkulator': include "kalkulator.php"; break;
            case 'ganjilgenap': include "bilangan.php"; break;
            case 'nilai': include "nilaihuruf.php"; break;
            case 'menu': include "menuMakanan.php"; break;
            case 'biodata': include "biodata.php"; break;
            default: echo "<p>Halaman tidak ditemukan.</p>";
        }
    } else {
        echo "<p>Selamat datang di portal praktikum PHP! Silakan pilih menu di atas.</p>";
    }
    ?>
  </main>
</body>
</html>
