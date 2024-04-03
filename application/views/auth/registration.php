<style>
    .card.o-hidden.border-0.shadow-lg.my-5 {
        border-color: rgba(255, 255, 255, 0.5);
        /* Ubah nilai alpha menjadi 0.5 */
    }

    body {
        background-image: url('<?= base_url('assets/img/Profile/aa.jpg'); ?>');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .wrapper {
        position: fixed;
        top: 45%;
        right: 20%;
        /* Mengubah posisi ke kanan */
        transform: translate(0, -50%);
        /* Menggunakan nilai transform yaitu 0 untuk sumbu x */
        width: 500px;
        height: auto;
        /* Mengubah tinggi menjadi otomatis */
        max-width: 90%;
        /* Mengatur lebar maksimum */
        background: rgba(0, 0, 0, 0.8);
        /* Ubah warna latar belakang menjadi hitam dengan alpha 0.8 */
        border: 1px solid rgba(255, 255, 255, 0.5);
        /* Ubah nilai alpha menjadi 0.5 */
        border-radius: 20px;
        /* backdrop-filter: blur(20px); */
        /* Hapus filter blur */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        /* Ubah nilai alpha menjadi 0.5 */
        display: flex;
        flex-direction: column;
        /* Mengatur layout ke vertikal */
        justify-content: center;
        align-items: center;
        min-height: 50vh;
        font-family: Arial, sans-serif;
        /* Ganti font family sesuai kebutuhan */
    }

    .title {
        font-weight: bold;
        color: #ffffff;
        /* Warna teks putih */
        text-shadow: 0 0 0 #ffffff, 0 0 0 #ffffff, 0 0 5px #ffffff, 5 0 10px #ffffff;
        /* Efek glow */
    }

    .small {
        color: darkcyan;
    }

    .form-control {
        /* Menghapus properti font-weight: bold; */
    }

    .form-control-user {
        /* Tambahkan properti berikut untuk mengatur tampilan input */
        background-color: rgba(255, 255, 255, 0.1);
        /* Ubah sesuai kebutuhan */
        border: 1px solid rgba(255, 255, 255, 0.5);
        /* Ubah sesuai kebutuhan */
        border-radius: 10px;
        /* Ubah sesuai kebutuhan */
        color: #ffffff;
        /* Ubah sesuai kebutuhan */
    }

    .form-control-user:focus {
        /* Tambahkan properti berikut untuk mengatur tampilan input saat fokus */
        background-color: rgba(255, 255, 255, 0.2);
        /* Ubah sesuai kebutuhan */
        border: 1px solid rgba(255, 255, 255, 0.7);
        /* Ubah sesuai kebutuhan */
        color: #ffffff;
        /* Ubah sesuai kebutuhan */
    }

    @media only screen and (max-width: 768px) {
        .wrapper {
            top: 50%;
            right: auto;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            /* Lebar untuk layar kecil */
            border-radius: 10px;
            /* Mengurangi radius border untuk layar kecil */
            padding: 20px;
            /* Menambahkan padding untuk konten pada layar kecil */
        }
    }
</style>


<div class="wrapper">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-14">
                            <div class="p-10">
                                <div class="text-center">
                                    <h1 class="h4 title mb-4">Create an Account!</h1>
                                </div>
                                <form class="user" method="post" action="<?= base_url('auth/registration') ?>">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                <!-- Menggunakan ikon dari FontAwesome -->
                                            </div>
                                        </div>
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                <!-- Menggunakan ikon dari FontAwesome -->
                                            </div>
                                        </div>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="input-group">
                                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                    <!-- Menggunakan ikon dari FontAwesome -->
                                                </div>
                                            </div>
                                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                    <!-- Menggunakan ikon dari FontAwesome -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-user btn-block">
                                        Register Account
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>