<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Kost</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->
<!-- DataTales Example -->
<a href="<?=base_url().'admin_controller/tambah_kost'?>"><button type="button" class="btn btn-success mb-3"><i class="fas fa-plus mr-2"></i>Tambah Data</button></a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kost</th>
                        <th>Pemilik</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($kost as $x):?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$x["nmkost"]?></td>
                        <td><?=$x["pemilik"]?></td>
                        <td><?=$x["alamat"]?></td>
                        <td><a href=<?=base_url()."admin_controller/detail_kost/".$x['id']?>><button class="btn btn-primary">Detail</button></a>
                        <a href=<?=base_url()."admin_controller/edit_kost/".$x['id']?>><button class="btn btn-info mt-1">Edit</button></a>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>