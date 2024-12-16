<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau belum
if (isset($_POST['simpan'])) {

    // Validasi data dari formulir
    if (empty($_POST['id']) || empty($_POST['nama']) || empty($_POST['email']) || empty($_POST['no_telepon']) || empty($_POST['bootcamp'])) {
        die("Harap lengkapi semua data!");
        
    }

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    $bootcamp = $_POST['bootcamp'];

    $fotobaru = "";
    if (isset($_FILES['foto']['name']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];

        $fotobaru = date('dmYHis') . "_" . $foto;
        $path = "uploads/" . $fotobaru;

        if (!is_dir("uploads")) {
            mkdir("uploads", 0777, true);
        }

        $query_foto = mysqli_query($koneksi, "SELECT foto FROM calon_peserta_bc WHERE id='$id'");
        if ($query_foto && mysqli_num_rows($query_foto) > 0) {
            $data = mysqli_fetch_assoc($query_foto);
            $foto_lama = $data['foto'];

            if (move_uploaded_file($tmp, $path)) {
                if (!empty($foto_lama) && file_exists("uploads/" . $foto_lama)) {
                    unlink("uploads/" . $foto_lama);
                }
            } else {
                die("Gagal mengunggah foto baru...");
            }
        }
    }

    // Buat query update
    if (!empty($fotobaru)) {
        $sql = "UPDATE calon_peserta_bc 
                SET nama=?, email=?, no_telepon=?, bootcamp=?, foto=? 
                WHERE id=?";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("sssssi", $nama, $email, $no_telepon, $bootcamp, $fotobaru, $id);
    } else {
        $sql = "UPDATE calon_peserta_bc 
                SET nama=?, email=?, no_telepon=?, bootcamp=? 
                WHERE id=?";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("ssssi", $nama, $email, $no_telepon, $bootcamp, $id);
    }

    $result = $stmt->execute();

    if ($result) {
        header('Location: list_peserta.php?status=update_sukses');
    } else {
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}

?>
