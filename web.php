<?php
$conn = mysqli_connect("localhost", "sihab", "password", "db_praktik");

$nama = $_POST["nama"];
$pesan = $_POST["pesan"];

$query = "INSERT INTO visit VALUES (NULL,'$nama','$pesan')";
mysqli_query($conn, $query);

$data = mysqli_query($conn, "SELECT * FROM visit");



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- my css -->
  <link rel="stylesheet" href="style.css">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- font -->
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
</head>

<body>
  <!-- lagu -->
  <audio autoplay hidden src="ADAM - IZINKAN AKU MENGHALALKANMU.mp3"></audio>
  <!-- akhir lagu -->
  <!-- navigasi -->
  <nav class="navbar">
    <div class="nav-brand">Gina & Firman</div>
    <div class="nav-link">
      <a href="#beranda">Beranda</a>
      <a href="#">Mempelai</a>
      <a href="#">Undangan</a>
      <a href="#">Lokasi</a>
      <a href="#">Ucapan</a>
    </div>
  </nav>
  <!-- akhir navigasi -->
  <!-- jumbotron -->
  <section id="beranda" class="jumbotron">
    <div class="header">
      <h2>Pernikahan</h2>
      <h1>Gina & Firman</h1>
      <h2>Ahad, 25 Juli 2021</h2>
        <button style="border-radius:15px;background-color: #d6a9a2; border:none ;width: 150px; height: 40px; box-shadow: 2px 2px 3px rgba(0,0,0,0.7);color: white;">Buka Undangan</button>
    </div>
  </section>
  <!-- akhir jumbotron -->
  <!-- quotes -->
  <section class="quotes">
    <div class="quot">
      <span>The<br>
        <h1>Highest</h1>Happiness<br>On Earth
      </span>
    </div>
    <div class="image">
    </div>
  </section>
  <!-- akhir quotes -->

  <!-- Undangan -->
  <article class="undangan">
    <div class="kata">
      <img src="img/icon/bucket.png" alt="">
      <span>Bismillah</span>
      <p>"Dan diantara tanda-tanda kekuasaan-Nya Dia menciptakan untukmu isteri-isteri dari jenismu sendiri,<br>supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan<br>sayang.Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir."</p>
      <span>(Ar-Rum:21)</span>
    </div>
    <div class="mempelai">
      <h1>Gina</h1>
      <div class="wanita" data-aos="fade-right">
        <img src="img/thgina.jpg" alt="">
        <p><b>Gina Chairussuhur, S.Pd.<br>
            <span>Putri</span></b><br>Bapak H. Encang Haerudin,M.Pd.<br>
          & Ibu Hj. Dede Muslimat, S.Pd.I.
        </p>
      </div>
      <h1>Firman</h1>
      <div class="pria" data-aos="fade-left">
        <p><b>Firman Taupik, M.Pd.<br>
            <span>Putra</span></b><br>Bapak Yaya<br>
          & Ibu Popon Marliah,S.Pd.I
        </p>
        <img src="img/afirman.jpg" alt="">
      </div>
    </div>
    <h2>Save The Date</h2>

    <div class="hitung-mundur">
      <div id="hari">NAP</div>
      <div id="jam">NAP</div>
      <div id="menit">NAP</div>
      <div id="detik">NAP</div>
    </div>
    <section class="date">
      <table class="nikah">
        <tr>
          <th colspan="2">Akad Nikah</th>
        </tr>
        <tr>
          <td width="400px">Ahad, 25 Juli 2021</td>
          <td><img src="img/icon/calendar.png" alt=""></td>
        </tr>
        <tr>
          <td>09.00 WIB</td>
          <td><img src="img/icon/time.png" alt=""></td>
        </tr>
        <tr>
          <td>MI SINDANGSONO <br>
            Kp. Sindangsono RT/RW 05/02 <br>
            Ds. Sukamanah Kec. Cigalontang <br>
            Kab. Tasikmalaya</td>
          <td><img src="img/icon/location.png" alt=""></td>
        </tr>
      </table>
      </div>
      <div class="garis"></div>
      <table class="pernikah">
        <tr>
          <th colspan="2">Resepsi Pernikahan</th>
        </tr>
        <tr>
          <td><img src="img/icon/calendar.png" alt=""></td>
          <td width="400px">Ahad, 25 Juli 2021</td>
        </tr>
        <tr>
          <td><img src="img/icon/time.png"" alt=""></td>
          <td>11.00-14.00 WIB</td>
        </tr>
        <tr>
          <td><img src=" img/icon/location.png" alt=""></td>
          <td>MI SINDANGSONO <br>
            Kp. Sindangsono RT/RW 05/02 <br>
            Ds. Sukamanah Kec. Cigalontang <br>
            Kab. Tasikmalaya</td>
        </tr>
      </table>
      </div>
    </section>

  </article>
  <!-- akhir undangan  -->

  <!-- alamat  -->
  <div class="alamat">
    <p>EVENT<b>LOCATION</b></p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.9554017647415!2d108.08354321391204!3d-7.358896294689689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f54fc9aec1863%3A0x22cf32eb500728bb!2sMTS%20Psa%20Miftahul%20Falah!5e0!3m2!1sid!2sid!4v1639641615571!5m2!1sid!2sid" width="100%" height="450" style="border:5px solid gray; margin:auto;" allowfullscreen="" loading="lazy"></iframe>
    <a href="https://goo.gl/maps/8GgppzdMyGjDGZAk8" target="_blank"><button>Google Map</button></a>
  </div>
  <!-- akhir alamat -->

  <!-- prokes -->
  <img src="img/covid2.jpg" alt="">
  <!-- akhir prokes -->

  <!-- pesan -->
  <div class="form">
    <legend>BERIKAN <b>DO'A & PESANMU BUAT KAMI</b></legend>
    <form action="" method="post">
      <ul class="isi">
        <li><input type="text" name="nama" placeholder="Nama"></li>
        <li><textarea name="pesan" id="" rows="10" placeholder="Do'a dan Pesan"></textarea></li>
        <li><button type="submit" name="submit">Kirim</button></li>
      </ul>
    </form>
  </div>

  <div class="container">
    <p>Do'a dan Pesan dari Pengunjung</p>
    <?php foreach ($data as $row) { ?>
      <div class="pesan">
        <ul>
          <li>
            <p><?= $row["nama"]; ?></p>
          </li>
          <li><?= $row["pesan"]; ?></li>
        </ul>
      </div>
    <?php } ?>
  </div>
  <div class="footer">
    <p>Copyright &copy 2021 Sihab</p>
  </div>
  <!-- akhir pesan -->
  <script type="text/javascript">
    var countDate = new Date('Jan 01 2022 02:00:00').getTime();

    function newYear() {
      var now = new Date().getTime();
      gap = countDate - now;

      var detik = 1000;
      var menit = detik * 60;
      var jam = menit * 60;
      var hari = jam * 24;

      var h = Math.floor(gap / (hari));
      var j = Math.floor((gap % (hari)) / (jam));
      var m = Math.floor((gap % (jam)) / (menit));
      var d = Math.floor((gap % (menit)) / (detik));

      document.getElementById('hari').innerText = h;
      document.getElementById('jam').innerText = j;
      document.getElementById('menit').innerText = m;
      document.getElementById('detik').innerText = d;
    }
    setInterval(function() {
      newYear();
    }, 1000);
  </script>
  <!-- aos js -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 900,
    });
  </script>
</body>

</html>