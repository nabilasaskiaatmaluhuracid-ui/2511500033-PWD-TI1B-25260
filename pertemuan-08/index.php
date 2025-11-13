<?php
session_start();

$sesnama = "";
if (isset($_SESSION["sesnama"])):
  $sesnama = $_SESSION["sesnama"];
endif;

$sesemail = "";
if (isset($_SESSION["sesemail"])):
  $sesemail = $_SESSION["sesemail"];
endif;

$sespesan = "";
if (isset($_SESSION["sespesan"])):
  $sespesan = $_SESSION["sespesan"];
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
      &#9776;
    </button>
    <nav>
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h2>Selamat Datang</h2>
      <?php
      echo "halo dunia!<br>";
      echo "nama saya hadi";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>

    <section id="entry-data-mahasiswa">
  <h2>Entry Data Mahasiswa</h2>
  <form id="form-mahasiswa">
    <div>
      <label for="nim">NIM:</label>
      <input type="text" id="nim" name="nim" required>
    </div>
    <div>
      <label for="nama_lengkap">Nama Lengkap:</label>
      <input type="text" id="nama_lengkap" name="nama_lengkap" required>
    </div>
    <div>
      <label for="tempat_lahir">Tempat Lahir:</label>
      <input type="text" id="tempat_lahir" name="tempat_lahir">
    </div>
    <div>
      <label for="tanggal_lahir">Tanggal Lahir:</label>
      <input type="date" id="tanggal_lahir" name="tanggal_lahir">
    </div>
    <div>
      <label for="hobi">Hobi:</label>
      <input type="text" id="hobi" name="hobi">
    </div>
    <div>
      <label for="pasangan">Pasangan:</label>
      <input type="text" id="pasangan" name="pasangan">
    </div>
    <div>
      <label for="pekerjaan">Pekerjaan:</label>
      <input type="text" id="pekerjaan" name="pekerjaan">
    </div>
    <div>
      <label for="nama_orang_tua">Nama Orang Tua:</label>
      <input type="text" id="nama_orang_tua" name="nama_orang_tua">
    </div>
    <div>
      <label for="nama_kakak">Nama Kakak:</label>
      <input type="text" id="nama_kakak" name="nama_kakak">
    </div>
    <div>
      <label for="nama_adik">Nama Adik:</label>
      <input type="text" id="nama_adik" name="nama_adik">
    </div>
    <div>
      <button type="submit">Kirim</button>
      <button type="reset">Batal</button>
    </div>
  </form>
</section>

    <section id="about">
      <?php
      $nim = 2511500010;
      $NIM = '0344300002';
      $nama = "Say'yid Abdullah";
      $Nama = 'Al\'kautar Benyamin';
      $tempat = "Jebus";
      ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
        echo $NIM;
        ?>
      </p>
      <p><strong>Nama Lengkap:</strong>
        <?php
        echo $Nama;
        ?> &#128526;
      </p>
      <p><strong>Tempat Lahir:</strong> <?php echo $tempat; ?></p>
      <p><strong>Tanggal Lahir:</strong> 1 Januari 2000</p>
      <p><strong>Hobi:</strong> Memasak, coding, dan bermain musik &#127926;</p>
      <p><strong>Pasangan:</strong> Belum ada &hearts;</p>
      <p><strong>Pekerjaan:</strong> Dosen di ISB Atma Luhur &copy; 2025</p>
      <p><strong>Nama Orang Tua:</strong> Bapak Setiawan dan Ibu Maria</p>
      <p><strong>Nama Kakak:</strong> Antonius Setiawan</p>
      <p><strong>Nama Adik:</strong> <?php echo $sespesan ?></p>
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>

      <?php if (!empty($sesnama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?php echo $sesnama ?></p>
        <p><strong>Email :</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan :</strong> <?php echo $sespesan ?></p>
      <?php endif; ?>



    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yohanes Setiawan Japriadi [0344300002]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>