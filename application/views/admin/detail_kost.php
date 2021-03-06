
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
                                        <?php if ($kost["foto"]!=null ){?>                                         
                                        <img class="profile-user-img img-fluid img-circle mx-4"
                                            src=<?=base_url()."assets/img/kost/".$kost['foto']?> style="height:200px">
                                            <?php } else {?>
                                            <i class="fas fa-door-open mx-2" style="font-size:160px;color:#f0f0f0"></i>
                                        <?php }?>
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
                                            Harga<a class="float-right"><?="Rp ".number_format($kost['harga'],0,',','.')?></a>
                                        </li>
                                        <li class="list-group-item">
                                            Telepon <a class="float-right"><?=$kost['telepon']?></a>
                                        </li>
                                        <li class="list-group-item">
                                            Longitude <a class="float-right"><?=$kost['longitude']?></a>
                                        </li>
                                        <li class="list-group-item">
                                            Latitude<a class="float-right"><?=$kost['latitude']?></a>
                                        </li>
                                        <li class="list-group-item">
                                           Alamat <a class="float-right"><?=$kost['alamat']?></a>
                                        </li>
                                        </ul>
                                </div>
                            </div>
                         </div>
                </div>
            
            <script>
                var map = L.map('map').setView([<?=$kost['latitude']?>, <?=$kost['longitude']?>], 13);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([<?=$kost['latitude']?>, <?=$kost['longitude']?>]).addTo(map)
                    .bindPopup("<center><b><?=$kost['nmkost']?></b><br><?=$kost['alamat']?></center>") ;

                   
            </script>