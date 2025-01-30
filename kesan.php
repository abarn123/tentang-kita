<?php
include "service/database.php";

if (isset($_POST["kirim"])) {
    $kepada = $_POST["kepada"];
    $pesan = $_POST["pesan"];

    // Memasukkan data ke dalam tabel
    $sql = "INSERT INTO `pesan` (kepada, `pesan`) VALUES ('$kepada', '$pesan')";

    if (mysqli_query($db, $sql)) {
        echo " ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Harapan dan Kesan</title>
    <link rel="icon" href="img/5c265d4a-7075-4890-ba30-867fbacedf47.jpg" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: auto;
        background: pink;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-top: 80px;
        /* Memberi jarak dari navbar */
    }

    h1 {
        text-align: center;
        color: #333;
    }

    label {
        display: block;
        margin: 15px 0 5px;
        color: #555;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1em;
    }

    button {
        background-color: #28a745;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1em;
        width: 100%;
    }

    button:hover {
        background-color: #218838;
    }

    .navbar {
        background: linear-gradient(to right, #f55aa7, #eb198c);
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
    }

    .navbar-nav .nav-link {
        color: white;
        transition: color 0.3s, background-color 0.3s;
        padding: 10px 15px;
    }

    .navbar-nav .nav-link:hover {
        color: #fff8e1;
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 5px;
    }

    .navbar-brand {
        font-weight: bold;
        font-size: 1.75rem;
        /* Ukuran font yang lebih besar */
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-user-friends"></i> Tentang Kita Berdua</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><i class="fas fa-home"></i> Our Journey</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cerita.html"><i class="fas fa-book"></i> Cerita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kesan.php"><i class="fas fa-comment"></i> Pesan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!--     <div class="container">
        <h1>Tuliskan Pesan Rahasia</h1>
        <form action="kesan.php" method="POST">
            <label for="kepada">Kepada:</label>
            <input type="text" id="kepada" name="kepada" required />
            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" rows="4" required></textarea>
            <button type="submit" name="kirim">Kirim</button>
        </form>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
