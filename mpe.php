

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garda Educasia Official</title>
    <link rel="stylesheet" href="mp.css">
    <link rel="icon" href="g.png">
    <link rel="icon" href="g.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<body>
    < -- Navbar -->
    <header>
        <a href="#" class="logo">
        <img width="67" height="67" src="https://img.icons8.com/external-others-inmotus-design/67/external-G-alphabet-others-inmotus-design-14.png" alt="external-G-alphabet-others-inmotus-design-14"/>Garda Educasia
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <!-- Manu -->
        <ul class="navbar" id="navbar">
            <li><a href="#home" class="home-active">Berita Terkini</a></li>
            <li><a href="#film">Garda Warta</a></li>
            <li><a href="#ge">Garda Educasia</a></li>
           
        </ul>
        <a href="log.php" class="btn">Log Out</a>
        
    </header>
    <!-- Home -->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <div class="swiper-slide conatiner">
                <!-- Box 1-->
                <img src="tk/pncsl.jpg" alt="">
                <div class="home-text">
                    <span>Garda TV</span>
                    <h1>Madiun - <br> Hari Pancasila </h1>
                    <a href="haripancasila.php" class="btn">TONTON SEKARANG</a>
                    <a href="haripancasila.php" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>
            <!-- Box 2-->
            <div class="swiper-slide conatiner">
                <img src="tk/magang.jpg" alt="">
                <div class="home-text">
                    <span>Garda TV</span>
                    <h1>Madiun - <br>Seleksi Magang </h1>
                    <a href="magang.php" class="btn">TONTON SEKARANG</a>
                    <a href="magang.php" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>
            <!-- Box 3 -->
            <div class="swiper-slide conatiner">
                <img src="tk/um.jpg" alt="">
                <div class="home-text">
                    <span>Garda TV</span>
                    <h1>Madiun - <br>Workshop Usaha Mikro</h1>
                    <a href="um.php" class="btn">TONTON SEKARANG</a>
                    <a href="um.php" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <!-- Film-->
    <section class="movies" id="film">
        <h2 class="heading">Garda Warta</h2>
        <!--kontent film-->
        <div class="movies-container">
            <!--box 1-->
            <div class="box" onclick="location.href='haripancasila.php'">
                <div class="box-img">
                    <img src="tk/pncsl.jpg" alt="">
                </div>
                <h3>Madiun</h3>
                <span>Hari Pancasila</span>
            </div>
            <!--box 2-->
            <div class="box" onclick="location.href='magang.php'">
                <div class="box-img">
                    <img src="tk/magang.jpg" alt="">
                </div>
                <h3>Madiun</h3>
                <span>Seleksi Magang</span>
            </div>
            <!--box 3-->
            <div class="box" onclick="location.href='psk.php'">
                <div class="box-img">
                    <img src="tk/psk.jpg" alt="">
                </div>
                <h3>Nganjuk</h3>
                <span>Razia Pol PP</span>
            </div>
            <!--box 4-->
            <div class="box" onclick="location.href='korup.php'">
                <div class="box-img">
                    <img src="tk/korup.jpg" alt="">
                </div>
                <h3>Nganjuk</h3>
                <span>Komunitas Anti Korupsi</span>
            </div>
            <!--box 5-->
            <div class="box" onclick="location.href='ptni.php'">
                <div class="box-img">
                    <img src="tk/ptni.jpg" alt="">
                </div>
                <h3>Ngawi</h3>
                <span>Petani Tewas</span>
            </div>
            <!--box 6-->
            <!--box 7-->           
            <!--box 8-->
            <!--box 9--> 
            <!--box 10-->
    </section>
    <!--akan hadir-->
    <section class="movies" id="ge">
        <h2 class="heading">Garda Educasia</h2>
        <!--kontent film-->
        <div class="movies-container">
            <!--box 1-->
            <div class="box" onclick="location.href='um.php'">
                <div class="box-img">
                    <img src="tk/um.jpg" alt="">
                </div>
                <h3>Madiun</h3>
                <span>Workshop Usaha Mikro</span>
            </div>
            <!--box 2-->
            <div class="box" onclick="location.href='gw.php'">
                <div class="box-img">
                    <img src="news/gw.png" alt="">
                </div>
                <h3>Madiun</h3>
                <span>Giversa Pembuat Wayang</span>
            </div>
            <!--box 3-->
            <div class="box" onclick="location.href='lk.php'">
                <div class="box-img">
                    <img src="news/lk.png" alt="">
                </div>
                <h3>Madiun</h3>
                <span>Kerajinan Limbah Kayu</span>
            </div>
            <!--box 4-->
            <div class="box" onclick="location.href='es.php'">
                <div class="box-img">
                    <img src="news/es.png" alt="">
                </div>
                <h3>Madiun</h3>
                <span>El Snackku</span>
            </div>
            <!--box 5-->
            <div class="box" onclick="location.href='ser.php'">
                <div class="box-img">
                    <img src="news/sk.png" alt="">
                </div>
                <h3>Madiun</h3>
                <span>Pembuatan Sermier</span>
            </div>
            <!--box 6-->
            <!--box 7-->           
            <!--box 8-->
            <!--box 9--> 
            <!--box 10-->
    </section>
    <!--member-->
    
    <!--footer-->
    <section class="footer">
        <a href="#" class="logo">
        <img width="67" height="67" src="https://img.icons8.com/external-others-inmotus-design/67/external-G-alphabet-others-inmotus-design-14.png" alt="external-G-alphabet-others-inmotus-design-14"/>
        Garda Educasia
        </a>
        <div class="social">
            <h3>Contact</h3>
            <a onclick="location.href='https://www.facebook.com/reza.oioi.393'"><i class='bx bxl-facebook'></i></a>
            <a onclick="location.href='https://wa.me/+6285733433813'"><i class='bx bxl-whatsapp'></i></a>
        </div>
    </section>

    <div class="copyright">
        <p>COPYRIGHT &#169; GARDA. ALL RIGHT RESERVED.</p>
        <p>DESIGN BY FTRY</p>
    </div>




    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Link to Custom JS -->
    <script src="main.js"></script>
</body>

</html>

