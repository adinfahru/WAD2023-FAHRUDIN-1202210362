<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Mobil</title>
    </head>
    <?php 
            include("navbar.php");
            include("connect.php");
            $id = $_GET['id'];
            // Buatlah query untuk mengambil masing-masing data berdasarkan id dari database (gunakan fungsi GET dan mysqli_fetch_assoc() 
            // serta query SELECT dan WHERE)
            
            $query = mysqli_query($connect, "SELECT * FROM showroom_mobil WHERE id = $id");
            //
        ?>
    <body>
        <?php
        if (($query)) {
            while($select = mysqli_fetch_assoc($query));
        }
        ?>
        <div class="row">
            <center>
                <h1>Detail Mobil</h1>
                <div class="col-md-4 p-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <!-- Tampilkan masing-masing data yang telah diambil dari database tadi -->
                                <div class="form-floating mb-3">
                                    <input type="string" class="form-control" name="nama_mobil" id="nama_mobil" value="<?=$select['nama_mobil']?>" disabled>
                                    <label for="nama_mobil">Nama Mobil</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="string" class="form-control" name="brand_mobil" id="brand_mobil" value="<?=$select['brand_mobil']?>" placeholder="Tampilkan data brand_mobil disini"disabled>
                                    <label for="brand_mobil">Brand Mobil</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="string" class="form-control" name="warna_mobil" id="warna_mobil" value="Tampilkan data warna_mobil disini" disabled>
                                    <label for="warna_mobil">Warna Mobil</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="string" class="form-control" name="tipe_mobil" id="tipe_mobil" value="Tampilkan data tipe_mobil disini" disabled>
                                    <label for="tipe_mobil">Tipe Mobil</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="harga_mobil" id="harga_mobil" value="Tampilkan data harga_mobil disini"disabled>
                                    <label for="harga_mobil">Harga Mobil </label>
                                </div>
                                <a name="update" id="update" href="form_update_mobil.php?id=<?php echo $id ?>" class="btn btn-warning mb-3 mt-3 w-100">Edit</a>
                                <a name="delete" id="delete" href="delete.php?id=<?php echo $id ?>" class="btn btn-danger mb-3 mt-3 w-100">Delete</a>
                            </form>
                            <?php
                                if(isset($_POST['update'])) {
                                    $id = ['id'];
                                    $nama_mobil = $_POST['nama_mobil'];
                                    $brand_mobil = $_POST['brand_mobil'];
                                    $warna_mobil = $_POST['warna_mobil'];
                                    $tipe_mobil = $_POST['tipe_mobil'];
                                    $harga_mobil = $_POST['harga_mobil'];
                                    mysqli_query($connect,'UPDATE showroom_mobil SET id = $id, nama_mobil = $nama_mobil, brand_mobil = $brand_mobil, warna_mobil = $warna_mobil, tipe_mobil = $tipe_mobil, harga_mobil = $harga_mobil WHERE id = $id');
                                    header("location: form_update_mobil.php");
                                }

                            ?>
                        </div>
                    </div>
                </div>
            <center>
        </div>
    </body>
</html>