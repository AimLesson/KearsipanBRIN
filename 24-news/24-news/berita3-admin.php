<!DOCTYPE php>

<html lang="en" class="no-js">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Layanan Sistem Informasi Kearsipan Yogyakarta</title>
        <link href="css/media_query.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="css/animate.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap CSS -->
        <link href="css/style_1.css" rel="stylesheet" type="text/css" />
        <!-- Modernizr JS -->
        <script src="js/modernizr-3.5.0.min.js"></script>
    </head>

    <body class="single">
        <div class="container-fluid fh5co_header_bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 fh5co_mediya_center"><a href="https://time.is/id/"
                            class="color_fff fh5co_mediya_setting">
                            <script language="JavaScript">
                                var tanggallengkap = new String();
                                var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
                                namahari = namahari.split(" ");
                                var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
                                namabulan = namabulan.split(" ");
                                var tgl = new Date();
                                var hari = tgl.getDay();
                                var tanggal = tgl.getDate();
                                var bulan = tgl.getMonth();
                                var tahun = tgl.getFullYear();
                                tanggallengkap = namahari[hari] + ", " + tanggal + " " + namabulan[bulan] + " " + tahun;
                            </script>

                            <span id='jam'></span>
                            <script language='JavaScript'>document.write(tanggallengkap);</script>
                            <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#"
                                    class="treding_btn">arsipjogja12@brin.go.id</a>
                                <div class="fh5co_treding_position_absolute"></div>
                            </div>
                            <a href="#" class="color_fff fh5co_mediya_setting">Layanan Sistem Informasi Kearsipan
                                Yogyakarta</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3 fh5co_padding_menu">
                        <img src="images/Logo BRIN_Lanscape_Colour.png" alt="img" class="fh5co_logo_width" />
                    </div>
                    <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                        <div class="text-center d-inline-block">
                            <a class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a href="https://www.linkedin.com/company/brin-ri/" target="_blank"
                                class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a href="https://www.brin.go.id/" class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-google"></i></div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a href="https://x.com/brin_indonesia?s=20" target="_blank" class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a href="https://www.facebook.com/brin.indonesia?mibextid=MKOS29" target="_blank"
                                class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                            </a>
                        </div>
                        <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                        <div class="d-inline-block text-center dd_position_relative">
                            <select class="form-control fh5co_text_select_option" onchange="navigateToPage(this.value)">
                                <option value="">Pilih Halaman</option>
                                <option value="index.php">Guest</option>
                                <option value="index-user.php">User</option>
                                <option value="index-admin.php">Admin</option>
                                <option value="index.php">LogOut</option>
                            </select>
                            </select>
                        </div>

                        <script>
                            function navigateToPage(selectedValue) {
                                // Redirect ke halaman yang dipilih
                                if (selectedValue !== "") {
                                    window.location.href = selectedValue;
                                }
                            }
                        </script>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
            <div class="container padding_786">
                <nav class="navbar navbar-toggleable-md navbar-light ">
                    <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                    <a class="navbar-brand" href="#"><img src="images/Logo BRIN_Lanscape_Colour.png" alt="img"
                            class="mobile_logo_width" /></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index-admin.php">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="layanan-admin.php">Layanan <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="single-admin.php">Profil <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="publikasi-admin.php">Publikasi <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Berita&Opini <span
                                        class="sr-only">(current)</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                    <a class="dropdown-item" href="blog-admin.php">Berita</a>
                                    <a class="dropdown-item" href="opini-admin.php">Opini</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeri <span
                                        class="sr-only">(current)</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                    <a class="dropdown-item" href="foto-admin.php">Foto</a>
                                    <a class="dropdown-item" href="vidio-admin.php">Video</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainya <span
                                        class="sr-only">(current)</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                    <a class="dropdown-item" href="penelitian-admin.php">E-Arsip Penelitian</a>
                                    <a class="dropdown-item" href="form-admin.php">Register Akun Pengguna</a>
                                    <a class="dropdown-item" href="akunsaya-admin.php">Akun Saya</a>
                                    <a class="dropdown-item" href="Contact_us-admin.php">Hubungi Kami</a>
                                </div>
                            </li>

                                
                        <div class="text-center d-inline-block">
                            <a href="history-admin.php" target="_blank" class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-envelope-square"></i></div>
                            </a>
                        </div>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div id="fh5co-title-box"
            style="background-image: url(images/kunjunganarsipkarangsambung.jpg); background-position: 50% 90.5px;"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="page-title">
                <span>January 1, 2018</span>
                <h2> Kunjungan Tim Layanan Arsip Karang Sambung Kebumen </h2>
            </div>
        </div>
        <div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
            <div class="container paddding">
                <div class="row mx-0">
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                        <p style=" text-align: justify;">
                            Tim Layanan Arsip Kawasan Yogyakarta Biro Komunikasi Publik, Umum dan Kesekretariatan Badan
                            Riset dan Inovasi Nasional (BKPUK-BRIN) menerima kunjungan dari Tim Layanan Arsip Kawasan
                            Karangsambung, Kebumen di Ruang Rapat Soeroto, KSE Baiquni Babarsari, Yogyakarta, pada hari
                            Selasa, 17 Oktober 2023.

                            Kegiatan tersebut dilakukan dalam rangka koordinasi dan berbagi pengalaman dalam pengelolaan
                            arsip selama masa transisi BRIN.

                            Tim Layanan Arsip Kawasan Karangsambung yang beranggotakan Ety Suryani selaku Subkoordinator
                            Layanan Arsip Kawasan Karangsambung beserta 4 arsiparis lainnya yaitu Eko, Dwi, Erni dan
                            Siti diterima dan disambut oleh Sulistyowati Dwi Untari selaku Koordinator Layanan Arsip
                            Kawasan Yogyakarta dan tim.

                            Dalam sambutannya, Sulis memaparkan tugas dan fungsi dari Layanan Arsip Kawasan Yogyakarta
                            yaitu melakukan penyelamatan arsip dari 5 eks entitas yang tergabung dalam BRIN meliputi
                            arsip eks PSTA-BATAN, eks STTN, eks LIPI, eks BPPT dan eks Balai Arkeologi. Setelah sambutan
                            dilanjutkan dengan diskusi terkait permasalahan yang dihadapi oleh Tim Layanan Kearsipan
                            Kawasan Karangsambung.

                            Permasalahan seperti penataan arsip yang kacau akibat telah dilelangnya rak arsip merupakan
                            permasalahan yang umum terjadi dalam masa transisi BRIN ini dikarenakan permasalahan yang
                            sama juga terjadi pada Layanan Arsip Kawasan Yogyakarta.

                            Perlunya usulan-usulan kegiatan sebagai program kerja selanjutnya sehingga ada kegiatan
                            kearsipan yang dapat terus dilakukan di Kawasan Karangsambung. Salah satu usulan kegiatan
                            yang disampaikan oleh Ibu Etty adalah mengenai pembuatan arsip tematik yang berkaitan dengan
                            hasil penelitian di Kawasan Karangsambung, karena Kawasan Karangsambung merupakan salah satu
                            kawasan penelitian kebumian yang sangat menarik karena memiliki keberagaman peristiwa
                            geologi dan batuan.

                            Usulan kegiatan tersebut dapat ditindaklanjuti dalam bentuk proposal kegiatan multi years.
                            Hal ini dapat bermanfaat sebagai bukti bahwa Layanan Arsip Kawasan Karangsambung masih
                            produktif dan potensial untuk tetap dipertahankan eksistensinya.

                            Terakhir, dilakukan kunjungan ke ruang kerja Tim Layanan Arsip Kawasan Yogyakarta untuk
                            melihat bagaimana kondisi arsip kacau, penataan dan penyimpanan arsipnya. Diharapkan ke
                            depan Tim Layanan Arsip Kawasan Yogyakarta dan Karangsambung dapat berkolaborasi dalam upaya
                            peningkatan kualitas layanan arsip BRIN. (DK)

                        </p>

                    </div>
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                        <div>
                            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="fh5co_tags_all">
                            <a href="#" class="fh5co_tagg">Business</a>
                            <a href="#" class="fh5co_tagg">Technology</a>
                            <a href="#" class="fh5co_tagg">Sport</a>
                            <a href="#" class="fh5co_tagg">Art</a>
                            <a href="#" class="fh5co_tagg">Lifestyle</a>
                            <a href="#" class="fh5co_tagg">Three</a>
                            <a href="#" class="fh5co_tagg">Photography</a>
                            <a href="#" class="fh5co_tagg">Lifestyle</a>
                            <a href="#" class="fh5co_tagg">Art</a>
                            <a href="#" class="fh5co_tagg">Education</a>
                            <a href="#" class="fh5co_tagg">Social</a>
                            <a href="#" class="fh5co_tagg">Three</a>
                        </div>
                        <div>
                            <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center">
                                <img src="images/pemusnahanarsip.jpeg" alt="img" class="fh5co_most_trading" />
                            </div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.
                                </div>
                                <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center">
                                <img src="images/kunjunganugm.png" alt="img" class="fh5co_most_trading" />
                            </div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font"> Enim ad minim veniam nostrud xercitation ullamco.
                                </div>
                                <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center">
                                <img src="images/kunjunganarsipkarangsambung.jpg" alt="img"
                                    class="fh5co_most_trading" />
                            </div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.
                                </div>
                                <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center"><img src="images/kunjunganugm.png" alt="img"
                                    class="fh5co_most_trading" /></div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.
                                </div>
                                <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pb-4 pt-5">
            <div class="container animate-box">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
                </div>
                <div class="owl-carousel owl-theme" id="slider2">
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/pemusnahanarsip.jpeg" alt="" /></div>
                            <div>
                                <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best
                                        computer speakers in the market</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/kunjunganugm.png" alt="" /></div>
                            <div>
                                <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best
                                        computer speakers in the market</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/kunjunganarsipkarangsambung.jpg" alt="" />
                            </div>
                            <div>
                                <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best
                                        computer speakers in the market</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/pemusnahanarsip.jpeg" alt="" /></div>
                            <div>
                                <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best
                                        computer speakers in the market</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid fh5co_footer_bg pb-3">
            <div class="container animate-box">
                <div class="row">
                    <div class="col-12 spdp_right py-5"><img
                            src=images/Main_Logo_of_National_Research_and_Innovation_Agency_of_Indonesia.svg.png
                            alt=" img" class="footer_logo" /></div>
                    <div class="clearfix"></div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="footer_main_title py-3"> Sekilas Layanan Arsip </div>
                        <div class="footer_sub_about pb-3" style="text-align: justify;"> Arsip sering dibutuhkan dan
                            dipakai
                            dalam bidang manajemen serta administrasi".
                            Berdasarkan Undang-Undang Nomor 43 Tahun 2009 tentang Kearsipan, arsip adalah rekaman
                            kegiatan atau peristiwa dalam berbagai bentuk serta media, yang dibuat dan diterima oleh
                            lembaga negara, pemerintah daerah, lembaga pendidikan, perusahaan, organisasi politik,
                            organisasi masyarakat maupun perseorangan, dalam rangka melaksanakan kehidupan
                            bermasyarakat, berbangsa dan bernegara.
                            Arsip dapat didefinisikan sebagai bukti atau rekaman aktivitas dan transaksi, mulai dari
                            pembayaran hingga langkah pengambilan keputusan.
                        </div>
                        <div class="footer_mediya_icon">
                            <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                    <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                                </a></div>
                            <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                    <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                                </a></div>
                            <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                    <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                                </a></div>
                            <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                    <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                                </a></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="footer_main_title py-3"> Kategori</div>
                        <ul class="footer_menu">
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Study Banding</a>
                            </li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Kunjungan</a></li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Penelitian</a></li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Layanan Arsip</a>
                            </li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Buat Akun</a></li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Sumber Daya</a></li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Teknologi</a></li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Lingkungan</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                        <div class="footer_main_title py-3"> Paling banyak dilihat</div>
                        <div class="footer_makes_sub_font"> Oktober 10,2023</div>
                        <a href="#" class="footer_post pb-4"> Study Banding </a>
                        <div class="footer_makes_sub_font"> Oktober 17,2023</div>
                        <a href="#" class="footer_post pb-4"> Pemusnahan Arsip Tahap 1 </a>
                        <div class="footer_makes_sub_font"> Juni 17, 2022</div>
                        <a href="#" class="footer_post pb-4"> Kunjungan Tim Kearsipan Karang Sambung Kebumen </a>
                        <div class="footer_position_absolute"><img src="images/footer_sub_tipik.png" alt="img"
                                class="width_footer_sub_img" /></div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 ">
                        <div class="footer_main_title py-3"> Terakhir di Ubah</div>
                        <a href="berita1.php" class="footer_img_post_6"><img src="images/pemusnahanarsip.jpeg"
                                alt="img" /></a>
                        <a href="berita1.php" class="footer_img_post_6"><img src="images/pemusnahan arsip foto ke 2.jpg"
                                alt="img" /></a>
                        <a href="profil.php" class="footer_img_post_6"><img
                                src="images/STRUKTUR ORGANISASI_page-0001.jpg" alt="img" /></a>
                        <a href="berita3.php" class="footer_img_post_6"><img
                                src="images/kunjunganarsipkarangsambung.jpg" alt="img" /></a>
                        <a href="berita2.php" class="footer_img_post_6"><img src="images/kunjunganugm.png"
                                alt="img" /></a>
                        <a href="profil.php" class="footer_img_post_6"><img src="images/LOGO BATAN.png" alt="img" /></a>
                        <a href="profil.php" class="footer_img_post_6"><img src="images/Tusi.png" alt="img" /></a>
                        <a href="profil.php" class="footer_img_post_6"><img src="images/Proker.png" alt="img" /></a>
                        <a href="profil.php" class="footer_img_post_6"><img src="images/profil.jpeg" alt="img" /></a>
                    </div>
                </div>
                <div class="row justify-content-center pt-2 pb-4">
                    <div class="col-12 col-md-8 col-lg-7 ">
                        <div class="input-group">
                            <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i
                                    class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control fh5co_footer_text_box"
                                placeholder="Enter your email..." aria-describedby="basic-addon1">
                            <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i
                                    class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid fh5co_footer_right_reserved">
            <div class="container">
                <div class="row  ">
                    <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2023, All rights reserved. Design by <a
                            href="https://freehtml5.co" title="Free php5 Bootstrap templates">Layanan Sistem Informasi
                            Kawasan Yogyakarta</a>. </div>
                    <div class="col-12 col-md-6 spdp_right py-4">
                        <a href="#" class="footer_last_part_menu">Halaman</a>
                        <a href="Contact_us.php" class="footer_last_part_menu">Tentang Kami</a>
                        <a href="Contact_us.php" class="footer_last_part_menu">Kontak</a>
                        <a href="blog.php" class="footer_last_part_menu">Berita Terakhir ini</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Main -->
        <script src="js/main.js"></script>

    </body>

    </html>