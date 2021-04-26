
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
                                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang<br>Silahkan Login Untuk Melanjutkan</h1>
                                </div>
                                <?=$this->session->flashdata('message')?>
                                <form method="POST" action=<?=base_url()."main_controller/login_page"?> class="user">
                                  <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="email" name="email" aria-describedby="emailHelp"
                                            placeholder="Email Address">
                                    </div>
                                    <?=form_error('email')?>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" name="password" placeholder="Password">
                                    </div>
                                    <?=form_error('password')?>
                                    <button type="submit" class="btn btn-danger btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href=<?=base_url()."main_controller/user_registration_page"?>>Create an Account!</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>