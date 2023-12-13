<!DOCTYPE php>
<!--
    24 News by Freephp5.co
    Twitter: https://twitter.com/fh5co
    Facebook: https://fb.com/fh5co
    URL: https://freephp5.co
-->
<php lang="en" class="no-js">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Layanan Sistem Informasi Kearsipan
                                Yogyakarta</title>
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
                            <a href="https://www.linkedin.com/company/brin-ri/" target="_blank" class="fh5co_display_table">
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
                            <a href="https://www.facebook.com/brin.indonesia?mibextid=MKOS29"  target="_blank" class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                            </a>
                        </div>
                        <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                        <div class="d-inline-block text-center dd_position_relative">
                            <select class="form-control fh5co_text_select_option" onchange="navigateToPage(this.value)">
                                <option value="">Pilih Halaman</option>
                                <option value="index.php">Guest</option>
                                <option value="index.php">LogOut</option>
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
                                <a class="nav-link" href="index-user.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="layanan-user.php">Layanan <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="single-user.php">Profil <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                            <a class="nav-link" href="publikasi-user.php">Publikasi <span
                                    class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Berita&Opini <span
                                        class="sr-only">(current)</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                    <a class="dropdown-item" href="blog-user.php">Berita</a>
                                    <a class="dropdown-item" href="opini-user.php">Opini</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeri <span
                                        class="sr-only">(current)</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                    <a class="dropdown-item" href="foto-user.php">Foto</a>
                                    <a class="dropdown-item" href="vidio-user.php">Video</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainya <span
                                        class="sr-only">(current)</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                    <a class="dropdown-item" href="penelitian-user.php">E-Arsip Penelitian</a>
                                    <a class="dropdown-item" href="akunsaya-user.php">Akun Saya</a>
                                    <a class="dropdown-item" href="Contact_us-user.php">Hubungi Kami</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div id="fh5co-title-box" style="background-image: url(images/Opini.jpg); background-position: 50% 90.5px;"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="page-title">
                <span>January 1, 2018</span>
                <h2> Sistem Informasi Layanan Kearsipan Yogyakarta (SI ARYO) </h2>
            </div>
        </div>
        <div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
            <div class="container paddding">
                <div class="row mx-0">
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                        <p style="text-align:justify; width: 1150px;heigh: 600px;">
                            Arsip sering dipandang sebelah mata oleh kebanyakan orang. Di sisi lain, ada kalanya
                            seseorang membutuhkan sumber informasi dan dokumentasi dari arsip yang ada, baik itu
                            digunakan sebagai sumber referensi kegiatan ilmiah, alat ukur aktivitas suatu organisasi
                            ataupun sebagai alat bukti yang sah. Dalam kondisi tertentu, arsip dibutuhkan keberadaannya
                            dan harus ditemukan dalam waktu singkat. Contohnya pada saat akan dilakukan pembangunan
                            gedung baru di Kawasan Sains dan Edukasi Babarsari. Dalam proses pembangunan gedung baru,
                            akan membutuhkan dokumen penting terkait dengan kondisi dan jalur jaringan air maupun
                            listrik untuk menyesuaikan struktur pembangunan gedung baru. Hal ini dimaksudkan agar pada
                            saat pembangunan gedung baru tidak mematikan saluran air dan listrik yang ada sebelumnya.
                            Contoh lainnya untuk audit keuangan, auditor membutuhkan klarifikasi beberapa bukti keuangan
                            dari kegiatan yang telah berjalan dalam tahun anggaran tersebut.
                            Melihat beberapa fenomena kebutuhan arsip yang diperlukan dalam waktu yang singkat, maka
                            dalam rangka mempermudah dan mempercepat proses layanan arsip maka Tim Arsip Kawasan
                            Yogyakarta bekerja sama dalam pembuatan platform layanan berbasis website. Website ini
                            selanjutnya diberi nama Sistem Informasi Layanan Kearsipan Yogyakarta yang disingkat dengan
                            nama SI ARYO. Ke depan, SI ARYO akan mengintepretasikan sebuah konsep layanan terpadu sesuai
                            lingkup tugas dan fungsi Layanan Arsip Yogyakarta. Dengan demikian, SI ARYO menampilkan
                            daftar arsip-arsip BRIN Kawasan Yogyakarta. Daftar arsip yang disajikan terdiri dari data
                            arsip peleburan beberapa instansi yaitu arsip dari eks LIPI, eks BPPT, eks PSTA-BATAN serta
                            arsip eks STTN yang telah dikelola. Jenis daftar arsip yang ditampilkan adalah daftar arsip
                            inaktif saja sesuai dengan kewenangan Unit Kearsipan Kawasan. Kewenangan pengelolaan arsip
                            jenis yang lain seperti arsip statis, arsip aktif telah diatur sesuai Keputusan Kepala Badan
                            Riset dan Inovasi Nasional Nomor 127/HK/2021 tentang Organisasi Kearsipan Badan Riset dan
                            Inovasi Nasional. Pengelolaan arsip statis yang telah melewati masa retensinya akan dikelola
                            oleh ANRI karena arsip tersebut memiliki nilai kesejarahan yang tinggi. Untuk arsip yang
                            masih aktif, dapat dicari informasinya pada unit pengolah (satuan kerja instansi)
                            masing-masing. Adanya pembagian kewenangan dalam pengelolaan arsip menuntut pengguna juga
                            memiliki pengetahuan mengenai jenis arsip yang dicari di sini. Apakah arsip tersebut
                            termasuk arsip yang masih aktif, atau arsip yang inaktif, arsip statis atau arsip yang sudah
                            musnah. Dengan pengetahuan yang tepat mengenai jenis arsip yang dicari, pengguna dapat
                            mencari keberadaan arsip dengan tepat pula. Apakah arsip tersebut berada di ANRI, atau di
                            Kawasan atau di Unit Pengolah atau bahkan mungkin telah musnah. Untuk mengetahui
                            pengelompokkan jenis arsip yang dicari tersebut, dapat dilihat pada Keputusan Kepala Badan
                            Riset dan Inovasi Nasional Nomor 322/I/HK/2022 tentang Jadwal Retensi Arsip Badan Riset dan
                            Inovasi Nasional.
                            Melalui sistem informasi kearsipan, pengguna tidak hanya dapat melihat daftar arsip yang
                            telah dikelola saja, tetapi juga dapat memiliki akses untuk melakukan peminjaman arsip yang
                            telah terdata. Peminjaman arsip yang telah terdata dapat dilakukan melalui pengisian form
                            peminjaman yang telah disediakan terlebih dahulu. Selanjutnya pengguna akan mendapatkan
                            konfirmasi arsip yang dipinjamkan dari tim user website. Bagi para periset, website juga
                            dapat memfasilitasi dalam pengumpulan data-data penelitian yang memberkas dari awal
                            pengajuan penelitian hingga laporan penelitian tahap akhir. Ketika para periset suatu saat
                            membutuhkan data terkait dengan penelitian, dapat dilakukan pencarian cepat melalui SI ARYO.
                            SI ARYO membuat layanan akan menjadi sangat mudah karena semua cukup dilakukan dengan jari
                            saja, tinggal “klik” dan isi, maka pengguna akan mendapatkan arsip yang diinginkan. Tidak
                            perlu repot untuk mencari petugas layanan arsip. Kelebihan lainnya, arsip juga dapat
                            tersedia dalam waktu yang lebih singkat.
                            Kemajuan teknologi digital tentunya akan memberikan kemudahan akses data bagi pengguna kapan
                            pun dan di manapun. Dengan adanya aplikasi SI ARYO ini diharapkan pengguna bisa mendapatkan
                            pelayanan arsip dengan lebih baik dan lebih cepat. Selain itu, pengguna dapat mengikuti
                            setiap aktivitas yang dilakukan oleh Tim Pengelola Arsip Kawasan Yogyakarta. Semoga melalui
                            SI ARYO, pengguna dapat merasakan manfaat yang lebih luas dari kegiatan pengelolaan arsip di
                            Unit Kearsipan Kawasan Yogyakarta. (AW)

                        </p>
                        <p>

                        </p>

                    </div>
                </div>
            </div>
           
        <div class="container-fluid fh5co_footer_bg pb-3">
        <div class="container animate-box">
            <div class="row">
                <div class="col-12 spdp_right py-5"><img src=images/Main_Logo_of_National_Research_and_Innovation_Agency_of_Indonesia.svg.png alt=" img"
                        class="footer_logo" /></div>
                <div class="clearfix"></div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="footer_main_title py-3"> Sekilas Layanan Arsip </div>
                    <div class="footer_sub_about pb-3" style="text-align: justify;"> Arsip sering dibutuhkan dan dipakai
                        dalam bidang manajemen serta useristrasi".
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
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Study Banding</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Kunjungan</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Penelitian</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Layanan Arsip</a></li>
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
                    <a href="profil.php" class="footer_img_post_6"><img src="images/STRUKTUR ORGANISASI_page-0001.jpg"
                            alt="img" /></a>
                    <a href="berita3.php" class="footer_img_post_6"><img src="images/kunjunganarsipkarangsambung.jpg"
                            alt="img" /></a>
                    <a href="berita2.php" class="footer_img_post_6"><img src="images/kunjunganugm.png" alt="img" /></a>
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
                        <input type="text" class="form-control fh5co_footer_text_box" placeholder="Enter your email..."
                            aria-describedby="basic-addon1">
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