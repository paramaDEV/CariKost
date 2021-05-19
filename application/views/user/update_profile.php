
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Halaman Update Profil</h1>
                    </div>
                    <?=form_open_multipart()?>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?=$user['nama']?>">
                        <?=form_error('nama','<h6>','</h6>')?>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputState">Jenis Kelamin</label>
                        <select id="kelamin" name="kelamin" class="form-control">
                        <?php if($user['jenis_kelamin']=='Laki-laki'){?>
                            <option value="Laki-laki" selected>Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        <?php } else {?>
                            <option value="Laki-laki" >Laki-laki</option>
                            <option value="Perempuan" selected >Perempuan</option>
                        <?php } ?>
                        </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="ttl">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="ttl" name="ttl" value="<?=$user['ttl']?>">
                        <?=form_error('ttl','<h6>','</h6>')?>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?=$user['email']?>">
                        <?=form_error('email','<h6>','</h6>')?>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="foto">Foto Kost</label>
                        <div class="custom-file mb-3">
                            <input type="hidden" name="nmfoto" value="<?=$user['foto']?>">
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