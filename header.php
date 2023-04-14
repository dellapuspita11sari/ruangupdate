<?php
include "db.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ruang Update</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/ruangupdate/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section><!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center"><img src="assets/img/logo.png" class="img-fluid" alt="">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Ruang Update<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="berita.php">Berita</a></li>
                    <li><a href="blog.php">Opini</a></li>
                    <li class="dropdown"><a href="sastra.php"><span>Sastra</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="cerpen.php">Cerpen</a></li>
                            <li class="dropdown"><a href="puisi.php"><span>Puisi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--<li class="dropdown"><a href="#"><span>Program Pelatihan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Kelas Konten Kreator</a></li>
                            <li class="dropdown"><a href="#"><span>Kepenulisan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="#">Redaksi</a></li>
                                    <li><a href="#">Reportase</a></li>
                                    <li><a href="#">Pers</a></li>
                                    <li><a href="#">Wartawan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>-->
                    <li class="dropdown"><a href="team.php"><span>Team Pengurus</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="team.php">Saat Ini</a></li>
                            <li class="dropdown"><a href="#"><span>Silam</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="silam1.php">Pengurus Tahun 2022</a></li>
                                    <li><a href="silam2.php">Pengurus Tahun 2023</a></li>
                                </ul>
                            </li>
                            <li><a href="team.php">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="admin/adminlte_login/index.php">login</a></li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

<body>