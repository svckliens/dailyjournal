<div class="container">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
    <i class="bi bi-plus-lg"></i> Tambah User
</button>
    <div class="row">
        <div class="table-responsive" id="user_data">
            
        </div>
        <!-- Awal Modal Tambah-->
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Tuliskan Username User" required>
                    </div>
            <form method="post" action="" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Tuliskan Password User" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" value="simpan" name="simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Akhir Modal Tambah-->
    </div>
</div>

<script>
$(document).ready(function(){
    load_data();
    function load_data(hlm){
        $.ajax({
            url : "user_data.php",
            method : "POST",
            data : {hlm: hlm },
            success : function(data){
                    $('#user_data').html(data);
            }
        })
    } 
    $(document).on('click', '.halaman', function(){
    var hlm = $(this).attr("id");
    load_data(hlm);
});
});
</script>

<?php
include "upload_foto.php";

//jika tombol simpan diklik
if (isset($_POST['simpan'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : null;
    $password = isset($_POST['password']) ? md5($_POST['password']) : null;
    $foto = '';
    
    //jika ada file yang dikirim  
    if (!empty($_FILES['foto']['name'])) {
        $target_dir = "produk/";
        $foto = uniqid() . '_' . basename($_FILES['foto']['name']);
        $target_file = $target_dir . $foto;

        // Validasi file
        $allowed_extensions = ['jpg', 'jpeg', 'png'];
        $file_extension = strtolower(pathinfo($foto, PATHINFO_EXTENSION));

        if (!in_array($file_extension, $allowed_extensions)) {
            echo "<script>alert('Hanya file JPG, JPEG, atau PNG yang diperbolehkan.');</script>";
            die;
        }

        if (!move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            echo "<script>alert('Gagal mengunggah foto.');</script>";
            die;
        }
    }

		//cek apakah ada id yang dikirimkan dari form
    if (isset($_POST['id'])) {
        //jika ada id,    lakukan update data dengan id tersebut
        $id = $_POST['id'];

        if ($nama_foto == '') {
            //jika tidak ganti gambar
            $foto = $_POST['foto_lama'];
        } else {
            //jika ganti gambar, hapus gambar lama
            unlink("produk/" . $_POST['foto_lama']);
        }

        $stmt = $conn->prepare("UPDATE user 
                                SET 
                                username = ?,
                                password = ?,
                                foto = ?,
                                WHERE id = ?");

        $stmt->bind_param("sssi", $username, $password, $foto, $id);
        $simpan = $stmt->execute();
    } else {
		    //jika tidak ada id, lakukan insert data baru
        $stmt = $conn->prepare("INSERT INTO user (username,password,foto)
                                VALUES (?,?,?)");

        $stmt->bind_param("sss", $username, $password, $foto,);
        $simpan = $stmt->execute();
    }

    if ($simpan) {
        echo "<script>
            alert('Simpan data sukses');
            document.location='admin.php?page=user';
        </script>";
    } else {
        echo "<script>
            alert('Simpan data gagal');
            document.location='admin.php?page=user';
        </script>";
    }

    $stmt->close();
    $conn->close();
}

//jika tombol hapus diklik
if (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $foto = $_POST['foto'];

    if ($foto != '') {
        //hapus file foto
        unlink("produk/" . $foto);
    }

    $stmt = $conn->prepare("DELETE FROM user WHERE id =?");

    $stmt->bind_param("i", $id);
    $hapus = $stmt->execute();

    if ($hapus) {
        echo "<script>
            alert('Hapus data sukses');
            document.location='admin.php?page=user';
        </script>";
    } else {
        echo "<script>
            alert('Hapus data gagal');
            document.location='admin.php?page=user';
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
