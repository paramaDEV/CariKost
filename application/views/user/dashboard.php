<link href=<?=base_url()."assets/css/dashboard-user.css"?> rel="stylesheet">
<div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
                    <div class="form-inline">
                        <input type="text" class="form-control mb-2 mr-sm-2" id="searchField" style="width:450px;" autocomplete="off" placeholder="Ketik nama atau lokasi kost yang ingin anda cari">
                        <button type="submit" class="btn btn-primary mb-2" id="searchBtn">Cari</button>
                    </div>
                    <div class="form-inline">
                        <h6>Filter by :</h6>
                        <button type="button" class="btn btn-outline-success ml-3 btn-sm pilihKota" data-toggle="modal" data-target="#pilihKota">Kota / Kabupaten : Semua</button>
                        <button type="button" class="btn btn-outline-success ml-1 btn-sm pilihPembayaran" data-toggle="modal" data-target="#pilihPembayaran">Pembayaran : Semua</button>
                        <button type="button" class="btn btn-outline-success ml-1 btn-sm pilihJenis" data-toggle="modal" data-target="#pilihJenis">Jenis : Semua</button>
                    </div>
                    
                <div class="container mx-auto mt-4">

                  <div class="image mx-auto" style="margin-top: 100px;">
                        <center><img src="<?=base_url().'assets/img/undraw_House_searching_re_stk8.svg'?>" height="150" alt=""></center>
                        <h3 class="text-center mt-3"><b>Gunakan fitur pencarian untuk<br> menemukan kost yang anda inginkan</b></h3>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="pilihKota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Kota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="filterKota" id="exampleRadios1" value="Semua" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Semua
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="filterKota" id="exampleRadios1" value="Kota Malang">
                <label class="form-check-label " for="exampleRadios1">Kota Malang
                </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="pilihJenis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Jenis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="filterJenis" id="exampleRadios2" value="Semua" checked>
                <label class="form-check-label" for="exampleRadios2">
                    Semua
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="filterJenis" id="exampleRadios2" value="Putra">
                <label class="form-check-label" for="exampleRadios2">
                    Kost Putra
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="filterJenis" id="exampleRadios3" value="Putri">
                <label class="form-check-label" for="exampleRadios3">
                    Kost Putri
                </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="pilihPembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="filterPembayaran" id="exampleRadios2" value="Semua" checked>
                <label class="form-check-label" for="exampleRadios2">
                    Semua
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="filterPembayaran" id="exampleRadios2" value="Bulanan">
                <label class="form-check-label" for="exampleRadios2">
                    Bulanan
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="filterPembayaran" id="exampleRadios3" value="Setengah Tahun">
                <label class="form-check-label" for="exampleRadios3">
                    Setengah Tahun
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="filterPembayaran" id="exampleRadios3" value="Tahunan">
                <label class="form-check-label" for="exampleRadios3">
                   Tahunan
                </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src=<?=base_url()."assets/js/user-dashboard.js"?>>
    </script>

    

