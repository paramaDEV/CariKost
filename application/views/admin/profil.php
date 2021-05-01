<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Profil Admin</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->
<!-- DataTales Example -->
    <!-- Main content -->
    <br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary ">
              <div class="card-body box-profile">
                <div class="text-center">
                <center><div class="foto" style="border-radius:50%;width:250px;height:250px;overflow:hidden">
                <img style="width:250px"
                      <?php if($admin["foto"]==null){?>
                       src="<?=base_url().'assets/img/admin/profile.png'?>"
                       <?php }else{ ?>
                        src="<?=base_url().'assets/img/admin/'.$admin['foto']?>"
                       <?php } ?>>
                       </div></center>
                </div>

                <h3 class="profile-username text-center"><?=$admin["nama"]?></h3>

                <p class="text-muted text-center">Administrator</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Nama</b> <a class="float-right"><?=$admin["nama"]?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Jenis Kelamin</b> <a class="float-right"><?=$admin["jenis_kelamin"]?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Tanggal Lahir</b> <a class="float-right"><?=$admin["ttl"]?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?=$admin["email"]?></a>
                  </li>
                </ul>

                <a href="<?=base_url().'admin_controller/update_profile/'?>" class="btn btn-primary btn-block" style="width : 100px">Edit</a>
              </div>
              <!-- /.card-body -->
            </div>