<link rel="stylesheet" href="<?=base_url().'assets/css/detail-kost.css'?>">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Detail Kost</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                         <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample1">
                                    <h6 class="m-0 font-weight-bold text-primary">Map Location</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample1">
                                    <div class="card-body" >
                                        <div id="map" style="height:550px;"></div>
                                        <br>
                                        <a class="fullView"><h6> View Fullscreen &rarr;</h6></a>
                                    </div>
                                </div>
                            </div>
                         </div>
                   
                    <div class="col-lg-4">
                         <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample2">
                                    <h6 class="m-0 font-weight-bold text-primary">Data</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample2">
                                    <ul class="list-group list-group-unbordered ">
                                        <div class="text-center" style="padding:10px">
                                        <!-- <img class="profile-user-img img-fluid img-circle mx-4"
                                            src=<?=base_url()."assets/img/sby.png"?> style="height:200px"> -->
                                            <i class="fas fa-map-marked-alt mx-2" style="font-size:160px;color:#f0f0f0"></i>
                                        </div>
                                        <li class="list-group-item">
                                            Nama Kost <a class="float-right"><?=$kost['nmkost']?></a>
                                        </li>
                                        <li class="list-group-item">
                                            Pemilik <a class="float-right"><?=$kost['pemilik']?></a>
                                        </li>
                                        <li class="list-group-item">
                                            Jenis <a class="float-right"><?=$kost['jenis']?></a>
                                        </li>
                                        <li class="list-group-item">
                                            Pembayaran <a class="float-right"><?=$kost['pembayaran']?></a>
                                        </li>
                                        <li class="list-group-item">
                                            Harga<a class="float-right">Rp <?=number_format($kost['harga'],0,',','.')?></a>
                                        </li>
                                        <li class="list-group-item">
                                            Telepon <a class="float-right"><?=$kost['telepon']?></a>
                                        </li>
                                        <li class="list-group-item">
                                           Alamat <a class="float-right"><?=$kost['alamat']?></a>
                                        </li>
                                        <li class="list-group-item">
                                        <?php if($favorit==null){?>
                                        <form method="POST" action="<?=base_url().'user_controller/tambah_favorit'?>">
                                            <input type="hidden" name="id_user" value="<?=$user["id"]?>">
                                            <input type="hidden" name="id_kost" value="<?=$kost["id"]?>">
                                            <button class="btn" type="submit"><h6 class="text-primary"><i class="fas fa-fw fa-star" style="font-size: 16px;color:#dea937" ></i><strong> Tambahkan ke Favorit </strong></h6></button>
                                            <?php }else{ ?>
                                        <form method="POST" action="<?=base_url().'user_controller/hapus_favorit'?>">
                                            <input type="hidden" name="id_user" value="<?=$user["id"]?>">
                                            <input type="hidden" name="id_kost" value="<?=$kost["id"]?>">
                                                <button class="btn" type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus dari favorit ?')"><h6 class="text-danger"><i class="fas fa-fw fa-trash" style="font-size: 16px;" ></i><strong> Hapus dari Favorit </strong></h6></button>
                                            <?php } ?>
                                        </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                         </div>
                    </div>
                    <div class="fullScreen hide">
                        <center><div id="map2" class="mx-auto mt-4"></div></center>
                        <i class="fas fa-fw fa-times"></i>
                        <center><button class="btn btn-info mt-2"  id="tampilRute">Tampilkan Rute Dari Lokasi Saya</button></center>
                    </div>

<script>
$(document).ready(()=>{
    var map = L.map('map').setView([<?=$kost['latitude']?>, <?=$kost['longitude']?>], 16);
    let currLat,currLong;
    
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    L.marker([<?=$kost['latitude']?>, <?=$kost['longitude']?>]).addTo(map)
        .bindPopup("<center><b><?=$kost['nmkost']?></b><br><?=$kost['alamat']?></center>");

    let getLocation = ()=>{
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition);
        }else{
            alert("Geolocation is not supported by this browser");
        }
    }

    let showPosition = (position)=>{
        currLat = position.coords.latitude;
        currLong = position.coords.longitude;

    }
   
    getLocation();
    
    

    $(".fullView").click(()=>{
        
        $(".fullScreen").removeClass("hide");
        var map2 = L.map('map2').setView([<?=$kost['latitude']?>, <?=$kost['longitude']?>], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map2);
        L.marker([<?=$kost['latitude']?>, <?=$kost['longitude']?>]).addTo(map2)
        .bindPopup("<center><b><?=$kost['nmkost']?></b><br><?=$kost['alamat']?></center>");

        $("#tampilRute").click(()=>{
            L.Routing.control({
                waypoints: [
                    L.latLng(currLat, currLong),
                    L.latLng(<?=$kost['latitude']?>, <?=$kost['longitude']?>)
                ]
                }).addTo(map2);
        })

        console.log(currLat,currLong);

    });

    $(".fullScreen i").click(()=>{
        $(".fullScreen").addClass("hide");
    });
});
</script>