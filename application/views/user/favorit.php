<link href=<?=base_url()."assets/css/dashboard-user.css"?> rel="stylesheet">
<div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Favorit</h1>
                <div class="container mx-auto mt-4">
                <?php foreach ($favorit as $x){?>
                    <a href=<?="detail_kost/".$x["id_kost"]?>>
                    <div   div class="item">
                        <div class="image">
                            <center><i class="fas fa-map-marked-alt mxt-4" style="font-size:120px;color:#f0f0f0;margin-top:30px"></i></center>
                        </div>
                        <div class="nama">
                        <h3><?=$x['nmkost']?></h3>
                        </div>
                            <button><?=$x['jenis']?></button><button><?=$x['pembayaran']?></button>
                        <div class="contents">
                            <h4><i class="fas fa-map-marker-alt"></i> : <?=$x['nm_kota_kab']?></h4>
                            <p>Free Listrik, Dapur umum, Kamar mandi luar</p>
                            <h3>Rp <?=number_format($x['harga'],0,',','.')?></h3>
                        </div>
                    </div></a>
                    <?php }?>
                </div>
                </div>
            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src=<?=base_url()."assets/js/user-dashboard.js"?>>
    </script>

    

