
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Halaman Edit Data kost</h1>
                    </div>
                    <?=form_open_multipart()?>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nmkost">Nama Kost</label>
                        <input type="text" class="form-control" id="nmkost" name="nmkost" value="<?=$kost['nmkost']?>">
                        <?=form_error('nmkost','<h6>','</h6>')?>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="pemilik">Pemilik</label>
                        <input type="text" class="form-control" id="pemilik" name="pemilik" value="<?=$kost['pemilik']?>">
                        <?=form_error('pemilik','<h6>','</h6>')?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" value="<?=$kost['telepon']?>">
                        <?=form_error('telepon','<h6>','</h6>')?>
                        </div>
                        <div class="form-group col-md-4">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="<?=$kost['harga']?>">
                        <?=form_error('harga','<h6>','</h6>')?>
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputState">Jenis</label>
                        <select id="jenis" name="jenis" class="form-control">
                        <?php if($kost['jenis']=='Kost Putri'){?>
                            <option value="Kost Putri" selected>Kost Putri</option>
                            <option value="Kost Putra">Kost Putra</option>
                        <?php } else {?>
                            <option value="Kost Putri" >Kost Putri</option>
                            <option value="Kost Putra" selected >Kost Putra</option>
                        <?php } ?>
                        </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$kost['alamat']?>">
                        <?=form_error('alamat','<h6>','</h6>')?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="long">Longitude</label>
                        <input type="text" class="form-control" id="long" name="long" value="<?=$kost['longitude']?>">
                        <?=form_error('long','<h6>','</h6>')?>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="lat">Latitude</label>
                        <input type="text" class="form-control" id="lat" name="lat" value="<?=$kost['latitude']?>">
                        <?=form_error('lat','<h6>','</h6>')?>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="foto">Foto Kost</label>
                        <div class="custom-file mb-3">
                            <input type="hidden" name="nmfoto" value="<?=$kost['foto']?>">
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