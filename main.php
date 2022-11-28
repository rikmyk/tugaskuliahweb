<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../index.php");
    exit;
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Bear Brand</title>
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="hero">

        <video autoplay loop muted plays-inline class="back-video">
            <source src="../images/bear.mp4" type="video/mp4">
        </video>
        <nav>
            <img src="../images/logo.png" class="logo">
            <ul>
                <li><a href="main.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="https://goo.gl/maps/WiVTmUNGRMvmMTw9A" target="_blank">MAPS</a></li>
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span> AVAILABLE AT</span></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="https://www.tokopedia.com/nestle-indonesia/etalase/bear-brand" target="_blank">TOKOPEDIA</a></li>
                    <li><a class="dropdown-item" href="https://shopee.co.id/nestle.official.store?shopCollection=32249840#product_list" target="_blank">SHOOPE</a></li>
                    <li><a class="dropdown-item" href="https://www.lazada.co.id/nestle-flagship-store/?spm=a2o4j.8553159.0.0.69b01b84XMl5I1&q=All-Products&shop_category_ids=1001111&from=wangpu&sc=KVUG" target="_blank">LAZADA</a></li>
                </ul>
                <a href="logout.php"><span>Logout</span></a>
            </ul>


        </nav>
        <div class="content">
            <h1>Bear Brand</h1>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>