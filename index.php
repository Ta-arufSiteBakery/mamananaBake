<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="color-scheme" content="light">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mamanana's | Bake</title>


    <!-- iconBootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- iconBootstrap -->


    <!-- iconCSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- iconCSS -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Akhir Google Fonts -->

    <!-- materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- akhir materialize CSS -->

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- mycss -->
    <link rel="stylesheet" href="css/style.css">

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- aos -->

    <!-- icon -->
    <link rel="shortcut icon" href="img/icon/icon.jpg">


    <!-- awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />




</head>

<body>
    <!-- Navbar -->
    <div class="navbar-fixed">
        <nav class="amber lighten-1">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#home" class="brand-logo grey-text text-darken-3">Mamanana's Bake</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down customFont">
                        <li><a href="#about" class="grey-text text-darken-3">Tentang Kami</a></li>
                        <li><a href="#clients" class="grey-text text-darken-3">Dukungan</a></li>
                        <li><a href="#servises" class="grey-text text-darken-3">Layanan</a></li>
                        <li><a href="#menu" class="grey-text text-darken-3">Menu</a></li>
                        <li><a href="#portfolio" class="grey-text text-darken-3">Galeri</a></li>
                        <li><a href="#contact" class="grey-text text-darken-3">Pesan</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Akhir Navbar -->




    <!-- sidebar -->
    <ul class="sidenav amber lighten-3" id="mobile-nav">
        <li><a href="#about">Tentang Kami</a></li>
        <li><a href="#clients">Dukungan</a></li>
        <li><a href="#servises">Layanan</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#portfolio">Galeri</a></li>
        <li><a href="#contact">Pesan</a></li>
    </ul>
    <!-- akhir sidebar -->



    <!-- slider -->
    <div class="slider scrollspy" id="home">
        <ul class="slides s12">
            <li>
                <img src="img/slider/1.jpg" class="brightness">
                <div class="caption center-align">
                    <h3>Selamat Datang di Mamanana's Bake</h3>
                    <h5 class="light grey-text text-lighten-3">Spesialis Bakery</h5>
                    <h5 class="light grey-text text-lighten-3">Berpengalaman dan Terpercaya</h5>
                    <h5 class="light grey-text text-lighten-3">Mari lihat menunya!</h5>
                </div>
            </li>
            <li>
                <img src="img/slider/2.jpg" class="brightness">
                <div class="caption right-align">
                    <h3>Brownies Legit</h3>
                    <h5 class="light grey-text text-lighten-3">Nikmatnya Belgian Dark Chocolate</h5>
                    <h5 class="light grey-text text-lighten-3">berpadu dengan gurihnya topping Almond, Keju, dan Oreo,</h5>
                    <h5 class="light grey-text text-lighten-3">gak cukup satu potong!</h5>
                </div>
            </li>
            <li>
                <img src="img/slider/3.jpg" class="brightness">
                <div class="caption left-align">
                    <h3>Lekker Holland</h3>
                    <h5 class="light grey-text text-lighten-3">Buttery and Milky! Klasik dan gak pernah salah,</h5>
                    <h5 class="light grey-text text-lighten-3">semua umur pasti suka! </h5>
                </div>
            </li>
            <li>
                <img src="img/slider/4.jpg" class="brightness">
                <div class="caption left-align">
                    <h3>Basque Burnt Cheesecake</h3>
                    <h5 class="light grey-text text-lighten-3">Cheese lovers mari berkumpul!</h5>
                    <h5 class="light grey-text text-lighten-3">Teksturnya yang padat dan lembut bikin nagih deh pokoknya!</h5>
                    <h5 class="light grey-text text-lighten-3">Sudah siap menjadi langganan?.</h5>
                </div>
            </li>
        </ul>
    </div>
    <!-- akhir slider -->





    <!-- about -->
    <section class="about scrollspy amber lighten-3" id="about">
        <div class="container">
            <div class="row">
                <h3 class="center light grey-text text-darken-3">Tentang Kami</h3>
                <div class="col m6 s12 light" data-aos="fade-down" data-aos-duration="1000">
                    <h5>Mamanana's Bake</h5>
                    <p>
                        <?php
                            $profile=fopen("data/about/profile/profile.txt", "r");
                            echo fgets($profile);
                            fclose($profile);
                        ?>
                    </p>

                    <p>
                        <?php
                            $lokasi=fopen("data/about/lokasi/lokasi.txt", "r");
                            echo fgets($lokasi);
                            fclose($lokasi);
                        ?>
                    </p>
                </div>
                <div class=" col m6 s12 light" data-aos="fade-up" data-aos-duration="1200">
                    <p>Brownies Legit</p>
                    <div class="progress">
                        <div class="determinate grey darken-2" style="width: 90%;"></div>
                    </div>
                    <p>Lekker Hollad</p>
                    <div class="progress">
                        <div class="determinate grey darken-2" style="width: 70%;"></div>
                    </div>
                    <p>Basque Burnt Cheesecake</p>
                    <div class="progress">
                        <div class="determinate grey darken-2" style="width: 97%;"></div>
                    </div>
                </div>
            </div>
        </div>


        <!-- maps -->
        <div class="row center">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.0121220008514!2d112.69914931452773!3d-7.4639095446156505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e125bb3f59e7%3A0xe46b89ad087fadad!2sPerum%20King%20Safira%2C%20Sepande%2C%20Candi%2C%20Sidoarjo%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1665550926514!5m2!1sen!2sid"
                width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="mobileMaps"></iframe>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.0121220008514!2d112.69914931452773!3d-7.4639095446156505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e125bb3f59e7%3A0xe46b89ad087fadad!2sPerum%20King%20Safira%2C%20Sepande%2C%20Candi%2C%20Sidoarjo%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1665550926514!5m2!1sen!2sid"
                width="68%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="desktopMaps"></iframe>
        </div>
        <!-- akhir maps -->


    </section>
    <!-- akhir about -->



    <!-- clients -->
    <section class="clients amber lighten-1">
        <div class="parallax-container scrollspy" id="clients">
            <div class="container clients">
                <h5 class="light center grey-text text-darken-3" style="margin-bottom:-30px">Dukungan</h5>
                <h3 class="light center grey-text text-darken-3" style="padding-bottom:20px margin-top:-20px">Pengiriman</h3>
                <div class="row">
                    <div class="col m4 s12 center clientsMobile" data-aos="fade-right" data-aos-duration="500">
                        <a href="#"><img src="img/clients/gojek.png" alt="gojek"></a>
                    </div>
                    <div class="col m4 s12 center clientsMobile" data-aos="fade-left" data-aos-duration="1200">
                        <a href="#"><img src="img/clients/grab.png" alt="grab"></a>
                    </div>
                    <div class="col m4 s12 center clientsMobile" data-aos="fade-up" data-aos-duration="1500">
                        <a href="#"><img src="img/clients/jnt.png" alt="jnt"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir clients -->





    <!-- servis -->
    <section class="servises amber lighten-3 scrollspy" id="servises">
        <div class="container">
            <div class="row">
                <h3 class="light center grey-text text-darken-3">Layanan</h3>
                <div class="col m4 s12" data-aos="fade-up" data-aos-duration="500">
                    <div class="card-panel center amber lighten-1">
                    <i class="material-icons medium">phone_android</i>
                        <h5>Pesan di Website Kami</h5>
                        <p>
                            <?php
                                $lokasi=fopen("data/layanan/antar/text.txt", "r");
                                echo fgets($lokasi);
                                fclose($lokasi);
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col m4 s12" data-aos="fade-right" data-aos-duration="1200">
                    <div class="card-panel center amber lighten-1">
                        <i class="material-icons medium">two_wheeler</i>
                        <h5>Pesan Jasa Online</h5>
                        <p>
                            <?php
                                $lokasi=fopen("data/layanan/online/text.txt", "r");
                                echo fgets($lokasi);
                                fclose($lokasi);
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col m4 s12" data-aos="fade-down" data-aos-duration="1500">
                    <div class="card-panel center amber lighten-1">                
                        <i class="material-icons medium">hail</i>
                        <h5>Kami Antar Sendiri</h5>
                        <p>
                            <?php
                                $lokasi=fopen("data/layanan/toko/text.txt", "r");
                                echo fgets($lokasi);
                                fclose($lokasi);
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir servis -->






    <!-- menu -->
    <section class="menu scrollspy amber lighten-1" id="menu">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Menu</h3>
            <div class="row">
                <div class="col m4 s12" data-aos="zoom-in" data-aos-duration="500">
                    <div class="card amber lighten-3">
                        <div class="card-image">
                            <img src="img/menu/1.jpg" alt="menu1" height="300">
                            <span class="card-title nMenu"></span>
                        </div>
                        <div class="card-content">
                            <h6>
                                <span class="bold">Brownies Legit</span>
                                <?php
                                    $lokasi=fopen("data/menu/brownies/text.txt", "r");
                                    echo fgets($lokasi);
                                    fclose($lokasi);
                                ?>
                            </h6>
                            <h6 class="grey-text text-darken-3 bold">
                                <?php
                                    $lokasi=fopen("data/menu/brownies/harga.txt", "r");
                                    echo fgets($lokasi);
                                    fclose($lokasi);
                                ?>
                                <!-- <span class="harga"><s>Rp10.000</s></span>
                                <span class="diskon">-30%</span> -->
                            </h6>
                        </div>
                        <div class="card-action center">
                            <a
                                href="https://wa.me/6285730192393?text=Halo%20kak%2C%0ASaya%20pesan%20Brownies%20Legit%20nya%20bisa%3F"><img
                                    src="img/wa.svg" alt="whatsapp"></a>
                        </div>
                    </div>
                </div>

                <div class="col m4 s12" data-aos="zoom-in-up" data-aos-duration="700">
                    <div class="card amber lighten-3">
                        <div class="card-image">
                            <img src="img/menu/2.jpg" alt="menu2" height="300">
                            <span class="card-title nMenu"></span>
                        </div>
                        <div class="card-content">
                            <h6>
                                <span class="bold">Lekker Hollad</span>
                                <?php
                                    $lokasi=fopen("data/menu/lekker/text.txt", "r");
                                    echo fgets($lokasi);
                                    fclose($lokasi);
                                ?>
                            </h6>
                            <h6 class="grey-text text-darken-3 bold">
                                <?php
                                    $lokasi=fopen("data/menu/lekker/harga.txt", "r");
                                    echo fgets($lokasi);
                                    fclose($lokasi);
                                ?>
                                <!-- <span class="harga"><s>Rp10.000</s></span>
                                <span class="diskon">-30%</span> -->
                            </h6>
                        </div>
                        <div class="card-action center">
                            <a
                                href="https://wa.me/6285730192393?text=Halo%20kak%2C%0ASaya%20pesan%20Lekker%20Hollad%20nya%20bisa%3F"><img
                                    src="img/wa.svg" alt="whatsapp"></a>
                        </div>
                    </div>
                </div>
                <div class="col m4 s12" data-aos="zoom-in-down" data-aos-duration="1000">
                    <div class="card amber lighten-3">
                        <div class="card-image">
                            <img src="img/menu/3.jpg" alt="menu2" height="300">
                            <span class="card-title nMenu"></span>
                        </div>
                        <div class="card-content">
                            <h6>
                                <span class="bold">Basque Burnt Cheesecake</span>
                                <?php
                                    $lokasi=fopen("data/menu/basque/text.txt", "r");
                                    echo fgets($lokasi);
                                    fclose($lokasi);
                                ?>
                            </h6>
                            <h6 class="grey-text text-darken-3 bold">
                                <?php
                                    $lokasi=fopen("data/menu/basque/harga.txt", "r");
                                    echo fgets($lokasi);
                                    fclose($lokasi);
                                ?>
                                <!-- <span class="harga"><s>Rp15.000</s></span>
                                <span class="diskon">-20%</span> -->
                            </h6>
                        </div>
                        <div class="card-action center">
                            <a
                                href="https://wa.me/6285730192393?text=Halo%20kak%2C%0ASaya%20pesan%20Basque%20Burnt%20Cheesecake%20nya%20bisa%3F"><img
                                    src="img/wa.svg" alt="whatsapp"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir menu -->




    <!-- portfolio -->
    <section class="portfolio scrollspy amber lighten-3" id="portfolio">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Galeri</h3>
            <div class="row">
                <div class="col m3 s12">
                    <img src="img/galeri/1.jpg" class="responsive-img materialboxed customImg">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/2.jpg" class="responsive-img materialboxed customImg">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/3.png" class="responsive-img materialboxed customImg">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/4.jpg" class="responsive-img materialboxed customImg">
                </div>
            </div>
            <div class="row">
                <div class="col m3 s12">
                    <img src="img/galeri/5.jpg" class="responsive-img materialboxed customImg">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/6.png" class="responsive-img materialboxed customImg">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/7.jpg" class="responsive-img materialboxed customImg">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/8.jpg" class="responsive-img materialboxed customImg">
                </div>
            </div>
        </div>
    </section>
    <!-- akhir portfolio -->








    <!-- pesan -->
    <section class="scrollspy" id="contact">
        <div class="header">
            <div class="container">
                <h3 class="light grey-text text-darken-3 center customPesan">Pesan</h3>
                <div class="row">
                    <div class="col s12 m5">
                        <div class="card-panel amber lighten-3 center text-darken-3">
                            <!-- <i class="material-icons medium">whatsapp</i> -->
                            <h5>Contact</h5>


                            <div class="icons-wrapper">
                                <a href="https://www.instagram.com/mamanana.bake/"><i class="ri-instagram-line icons fa-brands fa-instagram"></i></a>

                                <a href="https://www.instagram.com/mamanana.bake/"><i class="ri-facebook-circle icons fa-brands fa-facebook"></i></a>

                                <a href="https://wa.me/6285730192393">
                                    <i class="ri-whatsapp-line icons fa-brands fa-whatsapp"></i>
                                <!-- <img src="https://img.icons8.com/office/16/000000/whatsapp--v1.png" class="ri-whatsapp-line"/> -->
                                </a>
                            </div>

                            <p>
                                Ikuti kami di media Sosial, untuk mendapatkan info diskon dan giveaway
                            </p>
                        </div>
                        <ul class="collection with-header" style="border: 1px solid #ffca28; box-shadow: 1px 1px 5px gray;">
                            <li class="collection-header amber lighten-3" style="border: 1px solid #ffca28;">
                                <h4>Toko Kami</h4>
                            </li>
                            <li class="collection-item amber lighten-3" style="border: 1px solid #ffca28;">Mamanana's Bake</li>
                            <li class="collection-item amber lighten-3" style="border: 1px solid #ffca28;">Perum King Safira Sepande</li>
                            <li class="collection-item amber lighten-3" style="border: 1px solid #ffca28;">Sidoarjo Jawa Timur</li>
                        </ul>
                    </div>

                    <div class="col s12 m7">
                        <form name="warungSoneta">
                            <div class="card-panel amber lighten-3">
                                <h5>Harap isi dengan benar</h5>
                                <div class="input-field">
                                    <input type="text" name="nama" id="name" required class="validate" autocomplete="off" minlength="4">
                                    <label for="name">Nama Lengkap</label>
                                </div>
                                <div class="input-field">
                                    <input type="tel" name="phone" id="phone" required minlength="10" class="validate" autocomplete="off">
                                    <label for="phone">No. Hp</label>
                                </div>
                                <div class="input-field">
                                    <!-- <textarea name="alamat" id="message" class="materialize-textarea" required
                                        class="validate" minlength="10" autocomplete="off"></textarea> -->
                                    <input type="text" name="alamat" id="message" required class="validate" autocomplete="off" minlength="10">
                                    <label for="message">Alamat Lengkap</label>
                                </div>
                                <div class="input-field">
                                    <select required class="validate" name="pesanan" >
                                        <option value="" disabled selected>----- Menu -----</option>
                                        <option value="Brownies Legit">Brownies Legit</option>
                                        <option value="Lekker Holland">Lekker Holland</option>
                                        <option value="Basque Burnt Cheesecake">Basque Burnt Cheesecake</option>
                                    </select>
                                    <label>Masukkan Pesanan Anda</label>
                                </div>
                                <div class="input-field">
                                    <input type="number" name="jumlah" id="jumlah" required class="validate" autocomplete="off">
                                    <label for="jumlah">Jumlah Pesanan</label>
                                </div>
                                <button type="submit" class="btn amber lighten-1 pesan">Pesan<i
                                        class="material-icons right">send</i></button>
                                <button type="submit" class="btn amber lighten-1 loding hilang">
                                    <i class="fa fa-refresh fa-spin"></i> Loading
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!--Waves Container-->
            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallaxx">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
            <!--Waves end-->

        </div>
        <!--Header ends-->

        <!--Content starts-->
        <div class="content flex">
            <!-- <p>By.Goodkatz |??Free to use </p> -->
            <footer class=" white-text center">


            


                <p class="grey-text text-darken-2">&copy;Copyright 2022 | dibuat dengan <i
                        class="bi bi-heart-fill red-text"></i> by. <a href="https://github.com/Ta-arufSiteBakery/mamananaBake" target="__blank" style="font-weight:bold;" class="amber-text text-lighten-1">Tim WP7</a></p>
                <a href="https://youtube.com/channel/UCRWiDu5LKDpnEJLtGyVC-fA" target="__blank" class="btn red darken-1"><i class="bi bi-play-fill"></i> Subscribe Chanel
                    Kami</a>
                    <p class="grey-text text-darken-2">Support by. <a href="https://jagoan.cloud/" target="__blank" class="amber-text text-lighten-1">Jagoan Cloud</a></p>
            </footer>
        </div>
        <!--Content ends-->
    </section>









    <!-- footer -->
    <!-- <footer class="amber lighten-3 white-text center">
        <p class="grey-text text-darken-2">&copy;Copyright 2022 | dibuat dengan <i
                class="bi bi-heart-fill red-text"></i> by. <a href="#" target="__blank">Web Programing 7 <i
                    class="bi bi-instagram red-text"></i></a></p>
        <a href="#" target="__blank" class="btn red darken-1"><i class="bi bi-play-fill"></i> Subscribe Chanel Kami</a>
    </footer> -->
    <!-- akhir footer -->





    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            // once: true,
        });
    </script>



<script>
    var app = document.getElementsByTagName("BODY")[0];
    if (localStorage.lightMode == "dark") {
        app.setAttribute("light-mode", "dark");
    }
</script>



    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Akhir Materialize JS -->


    <!-- my js -->
    <script src="js/script.js"></script>

</body>

</html>