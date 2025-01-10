<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Profil</title>
</head>
<body>
<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "webdailyjournal");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data user (ganti dengan ID pengguna sebenarnya)
$user_id = 2; // Contoh hardcoded user ID
$result = $conn->query("SELECT * FROM user WHERE id = $user_id");
$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Proses password (jika diisi)
    if (!empty($_POST['password'])) {
        $password = md5($_POST['password']); // Pastikan kolom password mendukung panjang MD5
        $update_password_query = "UPDATE user SET password='$password' WHERE id=$user_id";
        
        if (!$conn->query($update_password_query)) {
            die("Error: " . $conn->error); // Debugging query jika terjadi kesalahan
        }
    }

    // Proses foto (jika ada file yang diunggah)
    if (!empty($_FILES['foto']['name'])) {
        $foto_name = time() . "_" . $_FILES['foto']['name'];
        $target_file = "img/" . $foto_name;

        // Simpan file ke folder img/
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
            // Hapus foto lama jika ada
            if (!empty($user['foto'])) {
                unlink("img/" . $user['foto']);
            }

            // Update path foto di database
            $update_foto_query = "UPDATE user SET foto='$foto_name' WHERE id=$user_id";
            if (!$conn->query($update_foto_query)) {
                die("Error: " . $conn->error); // Debugging query jika terjadi kesalahan
            }
        }
    }

    // Reload data user setelah update
    $result = $conn->query("SELECT * FROM user WHERE id = $user_id");
    $user = $result->fetch_assoc();
}
?>


        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="password" class="form-label">Ganti Password</label>
                <input type="password" name="password" class="form-control" placeholder="Tuliskan Password Baru Jika Ingin Mengganti Password Saja">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Ganti Foto Profil</label>
                <input type="file" name="foto" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Foto Profil Saat Ini</label><br>
                <?php if (!empty($user['foto'])) { ?>
                    <img src="img/<?= $user['foto'] ?>" alt="Foto Profil" class="img-thumbnail" width="150">
                <?php } else { ?>
                    <p>Tidak ada foto.</p>
                <?php } ?>
            </div>
            <button type="submit" class="btn btn-primary w-20">Simpan</button>
        </form>
    </div>
</body>
</html>
