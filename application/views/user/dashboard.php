<link href=<?=base_url()."assets/css/dashboard-user.css"?> rel="stylesheet">
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
            <!-- <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
            <div class="card-body"></div>
                    </div> -->
                    <form class="form-inline">
                        <label class="sr-only" for="inlineFormInputName2">Name</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" style="width:400px;" placeholder="Ketik nama atau lokasi kost yang ingin anda cari">
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </form>
                <div class="container mx-auto mt-4">
                    <?php foreach($kost as $x):?>
                    <a href="<?=base_url().'user_controller/detail_kost/'.$x['id']?>">
                    <div class="item">
                        <div class="image">
                            <center><i class="fas fa-map-marked-alt mxt-4" style="font-size:120px;color:#f0f0f0;margin-top:30px"></i></center>
                        </div>
                        <div class="nama">
                           <h3><?=$x['nmkost']?></h3>
                        </div>
                            <button><?=$x['jenis']?></button><button><?=$x['pembayaran']?></button>
                        <div class="contents">
                            <h4><i class="fas fa-map-marker-alt"></i> : Malang</h4>
                            <p>Fee Listrik, Dapur umum, Kamar mandi luar</p>
                            <h3>Rp. <?=$x['harga']?> / bulan</h3>
                        </div>
                    </div></a>
                    <?php endforeach;?>
                </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <style>
      
    </style>

    

