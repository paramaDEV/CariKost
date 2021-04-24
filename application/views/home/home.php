
<body id="body">
    <nav><h1><i class="fas fa-door-open"></i> Carikost.com</h1>
    <ul>
        <li><a class="nav-scroll" href="#body">Home</a></li>
        <li><a class="nav-scroll" href="#services">Services</a></li>
        <li><a class="nav-scroll" href="#about">About</a></li>
        <li><a class="nav-scroll" href=<?=base_url()."main_controller/login_page"?>>Login</a></li>
    </ul>
    <div class="hide"><i class="fas fa-bars"></i></div>
    </nav>
    <section class="secA">
        
       <div class="text">
           <h1>Mau cari tempat kos ?</h1>
           <p>Temukan beragam tempat kost terbaik dengan cepat dan mudah
               hanya di Carikost.com 
           </p>
           <button>Daftar Sekarang</button>
           
       </div>
       <div class="image">
           <img class="imgA" src=<?=base_url()."/assets/img/red-circle.png"?>>
           <img class="imgB" src=<?=base_url()."/assets/img/tugu.png"?>>
           <img class="imgC" src=<?=base_url()."/assets/img/tugu-malang.png"?>>
           <img class="imgD" src=<?=base_url()."/assets/img/sby.png"?>>
       </div>
    </section>
    <section class="secB" id="services">
        <center><h1>Services</h1></center>
        <center><div class="wrap">
            <div class="kotak">
                <i class="fas fa-globe-asia"></i>
                <p>Pilihan kost banyak dan lengkap</p>
            </div>
            <div class="kotak">
                <i class="fas fa-map-marked-alt"></i>
                <p>Jangkauan luas di setiap kota</p>
            </div>
            <div class="kotak">
                <i class="fas fa-hand-holding-usd"></i>
                <p>Fasilitas dan harga terbaik</p>
            </div>
            <div class="kotak">
                <i class="fas fa-history"></i>
                <p>Selalu up to date dan akurat</p>
            </div>
            
        </div></center>
    </section>
    <section class="secC">
        <center><h1>Kota Populer</h1></center>
        <center><div class="wrap">
            <div class="kotak" style="background-image: url(<?=base_url('assets/img/jakarta.jpg')?>);"><p>Jakarta</p></div>
            <div class="kotak" style="background-image: url(<?=base_url('assets/img/surabaya.jpg')?>);"><p>Surabaya</p></div>
            <div class="kotak" style="background-image: url(<?=base_url('assets/img/bandung1.png')?>);"><p>Bandung</p></div>
            <div class="kotak" style="background-image: url(<?=base_url('assets/img/yogya.png')?>);" ><p>Yogyakarta</p></div>
            <div class="kotak" style="background-image: url(<?=base_url('assets/img/malang.png')?>);"><p>Malang</p></div>
            <div class="kotak arrow" ><i class="fas fa-angle-double-right"></i>
            </div>
        </div></center>
    </section>
    <section class="secD" id="about">
        <center><h1>About Us</h1></center>
        <center><p>Carikost merupakan website yang menyediakan informasi tempat kost di seluruh Indonesia. 
                    Website ini bertujuan untuk memudahkan masyarakat terutama Mahasiswa yang sedang mencari kost
                    untuk tempat tinggal. Carikost menawarkan Anda beragam pilihan kost dengan kualitas dan fasilitas terbaik
                    dan juga harga yang terjangkau. Kini cari tempat kost jadi lebih mudah dengan Carikost.
        </p></center>
        <center><button>Daftar Sekarang</button></center>
    </section>
    <section class="secE">
        <center><h1>Testimonial</h1></center>
        <center><div class="wrap">
            <div class="kotak">
                    <div class="image" style="background-image:url(<?=base_url('assets/img/mhs1.png')?>)"></div>
                    <div class="text">
                        <h4>Veronica</h4>
                        <br>
                        <p>Dengan Carikost.com cari tempat kos jadi lebih mudah. </p>
                    </div>
            </div>
            <div class="kotak">
                    <div class="image" style="background-image:url(<?=base_url('assets/img/mhs2.png')?>)"></div>
                    <div class="text">
                        <h4>Valentine</h4>
                        <br>
                        <p>Web ini sangat membantu Saya dalam mencari kost. Gak perlu lagi keliling sana-sini.</p>
                    </div>
            </div>
            <div class="kotak">
                    <div class="image" style="background-image:url(<?=base_url('assets/img/mhs3.png')?>)"></div>
                    <div class="text">
                        <h4>Vincent</h4>
                        <br>
                        <p>Merasa terbantu sekali saat akan tinggal di luar Kota. Ga susah-susah cari kosnya.</p>
                    </div>
            </div>
                <div class="kotak">
                    <div class="image" style="background-image:url(<?=base_url('assets/img/mhs4.png')?>)"></div>
                    <div class="text">
                        <h4>George</h4>
                        <br>
                        <p>Sebagai seorang karyawan yang suka berpindah-pindah tempat, terbantu sekali dengan Carikost. </p>
                </div>
            </div>
            <div class="kotak">
                        <div class="image" style="background-image:url(<?=base_url('assets/img/bkos1.png')?>)"></div>
                        <div class="text">
                            <h4>Usman</h4>
                            <br>
                            <p>Sebagai pemilik kos, pendapatan Saya meningkat dan semakin dikenal luas.</p>
                </div>
            </div>
            <div class="kotak">
                    <div class="image" style="background-image:url(<?=base_url('assets/img/bkos2.png')?>)"></div>
                    <div class="text">
                        <h4>Sulaiman</h4>
                        <br>
                        <p>Carikost membantu pengusaha kos pemula seperti Saya, hingga berhasil seperti sekarang.</p>
            </div>
        </div>
        </div></center>
    </section>
    <section class="secF">
        <center><h1>Rekomendasi</h1></center>
        <center>
            <div class="wrap1">
                <!-- <i class="fas fa-chevron-left"></i> -->
                <div class="wrap2" >
                    <ul id="autoWidth" class="cs-hidden">
                        <li>
                            <div class="kotak">
                                <div class="image" style="background-image:url(<?=base_url('assets/img/recom-kost1.png')?>)">
                                    <h3><i class="fas fa-star"></i> 4.9 </h3>
                                </div>
                                <div class="nama">
                                    <h3> Lavender Kost</h3>
                                </div>
                                <div class="contents">
                                    <button>Putri</button> <button>Tahunan</button>
                                    <h4><i class="fas fa-map-marker-alt"></i> : Surabaya</h4>
                                    <p>Kamar mandi dalam, AC, Kamar mandi dalam</p>
                                          <h3>Rp 6.200.000 / Tahun</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kotak">
                                <div class="image" style="background-image:url(<?=base_url('assets/img/recom-kost2.png')?>)">
                                    <h3><i class="fas fa-star"></i> 4.5 </h3>
                                </div>
                                <div class="nama">
                                    <h3> Kost Ngastina</h3>
                                </div>
                                <div class="contents">
                                    <button>Putra</button> <button>Bulanan</button>
                                    <h4><i class="fas fa-map-marker-alt"></i> : Yogyakarta</h4>
                                    <p>Kamar mandi dalam, Kamar mandi dalam, WIFI</p>
                                          <h3>Rp 560.000 / bulan</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kotak">
                                <div class="image" style="background-image:url(<?=base_url('assets/img/recom-kost4.png')?>)">
                                    <h3><i class="fas fa-star"></i> 4.6 </h3>
                                </div>
                                <div class="nama">
                                    <h3>Kost Putri Bu Annie</h3>
                                </div>
                                <div class="contents">
                                    <button>Putri</button> <button>Bulanan</button>
                                    <h4><i class="fas fa-map-marker-alt"></i> : Malang</h4>
                                    <p>Kamar mandi dalam ber shower, Free listrik & air, Free WIFI</p>
                                          <h3>Rp 800.000 / bulan</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kotak">
                                <div class="image" style="background-image:url(<?=base_url('assets/img/recom-kost5.png')?>)">
                                    <h3><i class="fas fa-star"></i> 4.4</h3>
                                </div>
                                <div class="nama">
                                    <h3> Kost Griya Bukhari</h3>
                                </div>
                                <div class="contents">
                                    <button>Putra</button> <button>Bulanan</button>
                                    <h4><i class="fas fa-map-marker-alt"></i> : Malang</h4>
                                    <p>Fee Listrik, Dapur umum, Kamar mandi luar</p>
                                          <h3>Rp 650.000 / bulan</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kotak">
                                <div class="image" style="background-image:url(<?=base_url('assets/img/recom-kost2.png')?>)">
                                    <h3><i class="fas fa-star"></i> 5.0 </h3>
                                </div>
                                <div class="nama">
                                    <h3> Kost Bougenville</h3>
                                </div>
                                <div class="contents">
                                    <button>Putri</button> <button>Tahunan</button>
                                    <h4><i class="fas fa-map-marker-alt"></i> : Jakarta</h4>
                                    <p>Kamar ber AC dan TV, Free WIFI, Kamar mandi dalam</p>
                                          <h3>Rp 5.000.000 / Tahun</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- <i class="fas fa-chevron-right"></i> -->
            </div>
        </center>
    </section>
    <footer>
        <center><p>Copyright 2021 Carikost.com, All Rights Reserved</p></center>
    </footer>
</body>
</html>