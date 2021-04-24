<body class="">
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Silahkan isi form dengan lengkap dan benar</h1>
                                </div>
                                <form class="user" method="POST" action="<?=base_url().'main_controller/admin_registration_page'?>">
                                <?=$this->session->flashdata('message')?>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="nama" name="nama" aria-describedby="emailHelp"
                                            placeholder="Nama Lengkap"><?=form_error('nama',"<span class='text-danger'>","</span>")?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="email" name="email" aria-describedby="emailHelp"
                                            placeholder="Email"><?=form_error('email',"<span class='text-danger'>","</span>")?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" name="password" placeholder="Password">
                                            <?=form_error('password',"<span class='text-danger'>","</span>")?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" name="repassword" placeholder="Confirm Password">
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-user btn-block ">Register</button>
                                   
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href=<?=base_url()."main_controller/login_page"?>>Back to Login</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>