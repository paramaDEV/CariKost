
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Halaman Tambah Data kost</h1>
                    </div>
                    <?=form_open_multipart()?>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nmkost">Nama Kost</label>
                        <input type="text" class="form-control" id="nmkost" name="nmkost">
                        <?=form_error('nmkost','<h6>','</h6>')?>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="pemilik">Pemilik</label>
                        <input type="text" class="form-control" id="pemilik" name="pemilik">
                        <?=form_error('pemilik','<h6>','</h6>')?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control" id="telepon" name="telepon">
                        <?=form_error('telepon','<h6>','</h6>')?>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                        <?=form_error('harga','<h6>','</h6>')?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputState">Jenis</label>
                        <select id="jenis" name="jenis" class="form-control">
                            <option value="Putri">Putri</option>
                            <option value="Putra">Putra</option>
                        </select>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputState">Pembayaran</label>
                        <select id="pembayaran" name="pembayaran" class="form-control">
                            <option value="Bulanan">Bulanan</option>
                            <option value="Setengah Tahun">Setengah Tahun</option>
                            <option value="Tahunan">Tahunan</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputState">Kota</label>
                        <select id="kota" name="kota" class="form-control">
                        <?php foreach($kota_kab as $x){?>
                            <option value=<?=$x["id"]?>><?=$x["nm_kota_kab"]?></option>
                        <?php } ?>
                        </select>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                        <?=form_error('alamat','<h6>','</h6>')?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="long">Longitude</label>
                        <input type="text" class="form-control" id="long" name="long">
                        <?=form_error('long','<h6>','</h6>')?>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="lat">Latitude</label>
                        <input type="text" class="form-control" id="lat" name="lat">
                        <?=form_error('lat','<h6>','</h6>')?>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="foto">Foto Kost</label>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" name="foto" id="validatedCustomFile" >
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <?=form_close()?>
<style>
    h6{
        color:red;
    }
</style>
<script src=<?=base_url()."assets/leaflet/leaflet.js"?>></script>
<script>
    var map = L.map('map').setView([<?=$kost['latitude']?>, <?=$kost['longitude']?>], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([<?=$kost['latitude']?>, <?=$kost['longitude']?>]).addTo(map)
        .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
        .openPopup();
</script>