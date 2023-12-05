<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
    $id = $_POST['ID']; // Updated the field name
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $hobby = $_POST['Hobby']; // Updated the field name

    $sql = "INSERT INTO `Pengguna`(`id`, `nama`, `email`, `jurusan`, `hobby`) VALUES ('$id','$nama','$email','$jurusan','$hobby')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=New record created successfully");
        exit();
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Data User</title>
</head>

<body style="background-image: url(sayu.png); background-size:cover;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container text-center">
        <a class="navbar-brand" href="#">
            Database
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="text-center mb-4">
        <h3>Add New User</h3>
        <p class="text-muted">Complete the form below to add a new user</p>
    </div>

    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">ID:</label>
                    <input type="number" class="form-control" name="ID" placeholder="001">
                </div>

                <div class="col">
                    <label class="form-label">Nama:</label>
                    <input type="text" class="form-control" name="nama" placeholder="Randy">
                </div>

                <div class="col">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="user@gmail.com">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Jurusan:</label>
                <input type="text" class="form-control" name="jurusan" placeholder="Sipil">
            </div>

            <div class="mb-3">
                <label class="form-label">Hobby:</label>
                <input type="text" class="form-control" name="Hobby" placeholder="Tidur">
            </div>

            <div>
                <button type="submit" class="btn btn-success" name="submit">Save</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
