<div class="container-fluid">
<link rel="stylesheet" href="<?=base_url().'assets/css/detail-kost.css'?>">
    <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
            <!-- DataTales Example -->
            <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Kost</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($kost)?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-home fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Kota
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=count($kota_kab)?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-map-marker-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Jumlah User</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($kota_kab)?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-lg-8 mb-2">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Map</h6>
                                </div>
                                <div class="card-body">
                                    <div id="map" style="height:550px;"></div>
                                    <br>
                                        <a class="fullView"><h6> View Fullscreen &rarr;</h6></a>
                                </div>
                            </div></div>
                        <div class="col-lg-4 mb-2">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Kota</h6>
                            </div>
                            <div class="card-body">
                                <h4 class="small font-weight-bold">Jakarta<span
                                        class="float-right">0</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 0%"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">Surabaya<span
                                        class="float-right">0</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">Yogyakarta<span
                                        class="float-right">0</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">Malang<span
                                        class="float-right"><?=$jumlah_kost["KtMalang"]?></span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: <?=$jumlah_kost['KtMalang']/10?>%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">Lainnya<span
                                        class="float-right">0</span></h4>
                                <div class="progress mb-1">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        
                </div>
                <!-- /.container-fluid -->
                
            </div>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    </div>
    <div class="fullScreen hide">
        <center><div id="map2" class="mx-auto mt-4"></div></center>
        <i class="fas fa-fw fa-times"></i>
    </div>
<script>
    $(document).ready(()=>{
    var map = L.map('map').setView([-7.953818752628009, 112.61015045702288], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    <?php foreach($kost as $x): ?>
    L.marker(["<?=$x['latitude']?>", "<?=$x['longitude']?>"]).addTo(map)
        .bindPopup("<center><b><?=$x['nmkost']?></b><br><?=$x['alamat']?></center>") ;
    <?php endforeach; ?>

    $(".fullView").click(()=>{
        
        $(".fullScreen").removeClass("hide");
        var map2 = L.map('map2').setView([<?=$kost[0]['latitude']?>, <?=$kost[0]['longitude']?>], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map2);

        <?php foreach($kost as $x): ?>
        L.marker(["<?=$x['latitude']?>", "<?=$x['longitude']?>"]).addTo(map2)
        .bindPopup("<center><b><?=$x['nmkost']?></b><br><?=$x['alamat']?></center>") ;
        <?php endforeach; ?>

    });

    $(".fullScreen i").click(()=>{
        $(".fullScreen").addClass("hide");
    });
});
</script>

