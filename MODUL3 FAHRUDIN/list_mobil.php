<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container mt-5" style="width: 50%;">
            <h1>List Mobil</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Warna</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th> 
                    </tr>
                </thead>
                <tbody>
                    
            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $query = mysqli_query($connect, "SELECT * FROM showroom_mobil");
            
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->

            if (mysqli_num_rows($query) > 0) {
                while ($select = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <th scope="row"><?= $select['id'] ?></th>
                        <th><?= $select['nama_mobil'] ?></th>
                        <th><?= $select['brand_mobil'] ?></th>
                        <th><?= $select['warna_mobil'] ?></th>
                        <th><?= $select['tipe_mobil'] ?></th>
                        <th><?= $select['harga_mobil'] ?></th>
                        <th><a href="form_detail_mobil.php?id=<?= $select['id'] ?>" class="btn btn-sm btn-primary">Detail</th>
                    </tr>
                        </tbody>
                    </table>
                    <?php
            }
        } else {
            echo "tidak ada data dalam tabel";
        }

            ?>
                </tbody>
            </table>

        </div>
    </center>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
