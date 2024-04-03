<!-- Begin Page Content -->
<div class="container-fluid" style="background-color: #f8f9fc;">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 mt-3"><?= $title; ?></h1>


    <!-- Informasi Pengguna Aktif -->
    <div class="row justify-content-left">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-center">
                        <i class="fas fa-users fa-2x text-primary mb-2"></i>
                        <h5 class="text-primary mb-0">Pengguna Aktif</h5>
                        <h2 class="font-weight-bold" id="active-users">0</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Pendaftar -->
    <div class="row justify-content-left">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-center">
                        <i class="fas fa-user-plus fa-2x text-success mb-2"></i>
                        <h5 class="text-success mb-0">Data Pendaftar</h5>
                        <h2 class="font-weight-bold" id="registered-users">0</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<script>
    // Inisialisasi variabel untuk menyimpan data sebelumnya
    var prevActiveUsers = 0;
    var prevRegisteredUsers = 0;

    // Fungsi untuk memuat data pengguna aktif dan data pendaftar
    function loadData() {
        // Menggunakan Ajax untuk memanggil API atau sumber data lainnya
        $.ajax({
            url: 'load_data.php', // Ganti dengan URL endpoint yang sesuai
            type: 'GET',
            success: function(response) {
                // Memeriksa apakah terdapat perubahan data pada pengguna aktif
                if (response.activeUsers !== prevActiveUsers) {
                    $('#active-users').text(response.activeUsers);
                    prevActiveUsers = response.activeUsers;
                    // Menyinkronkan data pendaftar dengan data pengguna aktif
                    syncRegisteredUsers(response.activeUsers);
                }
                // Memeriksa apakah terdapat perubahan data pada data pendaftar
                if (response.registeredUsers !== prevRegisteredUsers) {
                    $('#registered-users').text(response.registeredUsers);
                    prevRegisteredUsers = response.registeredUsers;
                }
            },
            error: function(xhr, status, error) {
                console.error(status, error);
            }
        });
    }

    // Fungsi untuk menyinkronkan data pendaftar dengan data pengguna aktif
    function syncRegisteredUsers(activeUsers) {
        // Lakukan logika sinkronisasi di sini
        // Contoh: Jika jumlah pengguna aktif bertambah, data pendaftar juga bertambah
        var newRegisteredUsers = activeUsers * 2; // Misalnya, setiap pengguna aktif memiliki 2 pendaftar
        $('#registered-users').text(newRegisteredUsers);
        prevRegisteredUsers = newRegisteredUsers;
    }

    // Memanggil fungsi loadData secara otomatis setiap 5 detik
    loadData(); // Pertama kali memuat data
    setInterval(loadData, 5000); // Kemudian setiap 5 detik
</script>