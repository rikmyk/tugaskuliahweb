<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Bear Brand</title>
    <link rel="stylesheet" href="../style/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <nav>
            <img src="../images/logo.png" class="logo">
            <ul>
                <li><a href="main.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="https://goo.gl/maps/WiVTmUNGRMvmMTw9A" target="_blank">MAPS</a></li>
                <a href="logout.php"><span>Logout</span></a>
            </ul>
        </nav>
    </header>
    <!-- End Header -->
    <section class="sec-01">
        <div class="container">
            <h2 class="main-title">Bear Brand Susu Steril 189 ml</h2>
            <div class="content">
                <div class="image">
                    <img src="../images/bearbrand1.jpg" alt="">
                </div>
                <div class="text-box">
                    <p><b>Deskripsi : </b> BEAR BRAND merupakan 100% susu sapi murni siap konsumsi yang telah mengalami proses sterilisasi tanpa penambahan bahan pengawet didalamnya. Susu murni yang terkandung di dalamnya dapat membantu menjaga kesehatan tubuh.
                    </p><br>
                    <p><b>Indikasi Umum : </b> Minuman yang mengandung 100% susu murni untuk membantu menjaga kesehatan tubuh.</p><br>
                    <p><b>Komposisi : </b>Susu sapi
                    </p><br>
                    <p><b>Dosis : </b>Dikonsumsi sesuai kebutuhan
                    </p><br>
                    <p><b>Aturan Pakai : </b>Dapat langsung di minum, dalam keadaan hangat ataupun dingin</p><br>
                    <p><b>Segmentasi : </b>Consumer Goods</p><br>
                    <p><b>Kemasan : </b>Kaleng @ 189 ml</p><br>
                    <p><b>Manufaktur : </b>Nestle</p><br>
                    <p><b>No. Registrasi : </b>BPOM: MD500313001007</p>
                </div>
            </div>

        </div>
    </section>
    <section class="sec-02">
        <div class="container">
            <h3 class="section-title">Bear Brand Gold White Malt 140 ml</h3>
            <div class="content">
                <div class="image">
                    <img src="../images/bearbrand2.jpg" alt="">
                </div>
                <div class="info">
                    <h4 class="info-title">Description</h4>
                    <p><b>Deskripsi : </b>BEAR BRAND GOLD White Malt dengan kandungan malt serta dilengkapi dengan vitamin B1, B2, B6 dan B12 yang membantu mempercepat proses pengolahan energi untuk menjalani aktivitas sehari-hari dengan penuh semangat.
                    </p><br>
                    <p><b>Indikasi Umum : </b>Indikasi Umum Minuman untuk membantu mempercepat proses pengolahan energi untuk menunjang aktivitas sepanjang hari.</p><br>
                    <p><b>Aturan Pakai : </b>Dapat langsung di minum</p><br>
                    <p><b>Segmentasi : </b>Consumer Goods</p><br>
                    <p><b>Kemasan : </b>Kaleng @ 140 ml</p><br>
                    <p><b>Manufaktur : </b>Nestle</p><br>
                    <p><b>No. Registrasi : </b>BPOM: ML500309060006</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-03">
        <div class="container">
            <h3 class="section-title">Bear Brand</h3>
            <div class="content">
                <div class="media-info">
                    <li><a href="https://web.facebook.com/BEAR-BRAND-1068105306912193/" target="_blank"><i class="fab fa-facebook"></i> Facebook</a></li>
                    <li><a href="https://www.instagram.com/bearbrand_id/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                    <li><a href="https://twitter.com/bearbrand_id" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="https://www.youtube.com/c/bearbrand" target="_blank"><i class="fab fa-youtube"></i> Youtube</a></li>
                    <li><a href="https://www.linkedin.com/company/nestle-s-a-/" target="_blank"><i class="fab fa-linkedin"></i> Linkedin</a></li>
                </div>
                <div class="image">
                    <img src="../images/bearbrand3.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>

<!-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bear Brand</title>
    <link rel="stylesheet" href="../style/about.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="hero">
        <nav>
            <img src="../images/logo.png" class="logo">
            <ul>
                <li><a href="main.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="https://goo.gl/maps/WiVTmUNGRMvmMTw9A">MAPS</a></li>
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span> AVAILABLE AT</span></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="https://www.tokopedia.com/nestle-indonesia/etalase/bear-brand">TOKOPEDIA</a></li>
                    <li><a class="dropdown-item" href="https://shopee.co.id/nestle.official.store?shopCollection=32249840#product_list">SHOOPE</a></li>
                    <li><a class="dropdown-item" href="https://www.lazada.co.id/nestle-flagship-store/?spm=a2o4j.8553159.0.0.69b01b84XMl5I1&q=All-Products&shop_category_ids=1001111&from=wangpu&sc=KVUG">LAZADA</a></li>
                </ul>
                <a href="logout.php"><span>Logout</span></a>
            </ul>

        </nav>
        <div class="content">
            <h4>Nestlé Bear Brand.</h4>
            <p>Bear Brand adalah merek minuman susu steril yang diperkenalkan pada tahun 1906 dan dimiliki oleh Nestlé. Susu ini tersedia di sebagian besar wilayah Asia Tenggara, Swiss, dan Afrika Timur. Bear Brand dipasarkan dengan merek Marca Oso, yang merupakan bahasa Spanyol untuk "Cap Beruang". Nama merek Indonesianya adalah Susu Cap Beruang. Pada tahun 2014, sebuah perusahaan riset konsumen menempatkan susu Bear Brand sebagai No. 6 di antara 50 "barang konsumen yang paling cepat naik daun" di Filipina.</p>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html> -->