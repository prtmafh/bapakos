<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">anjai daftar dia</h1>
                                </div>
                                <form class="user" method="post" action="<?= base_url('pencari/registrasi'); ?>">
                                    <div class="mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Nama lengkap anda</label>
                                        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" value="<?= set_value('nama'); ?>">
                                    </div>
                                    <div class="mb-2">
                                        <label for="exampleInputEmail1" class="form-label">alamat email/nomor
                                            telepon</label>
                                        <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= set_value('email'); ?>">
                                    </div>
                                    <div class="row">
                                        <div class="mb-2 col-lg-6">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password1" name="password1">
                                        </div>
                                        <div class="mb-2 col-lg-6">
                                            <label for="exampleInputPassword1" class="form-label">ulangi password
                                                anda</label>
                                            <input type="password" class="form-control" id="password2" name="password2">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-danger col-lg-5">Daftar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>