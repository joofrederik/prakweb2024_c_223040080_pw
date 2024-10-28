<?php
include 'koneksi.php';

$sql = "SELECT judul, penulis, penerbit, tahun_terbit FROM buku";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f4f9;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 60px;
        }
        h2 {
            color: #333;
            font-weight: bold;
            border-bottom: 2px solid #0d6efd;
            padding-bottom: 15px;
        }
        table {
            margin-top: 20px;
        }
        thead {
            background-color: #31511E;
            color: white;
        }
        th, td {
            padding: 15px;
            border: none;
            text-align: center;
            vertical-align: middle;
        }
        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        tbody tr:hover {
            background-color: #e9ecef;
            cursor: pointer;
        }
        footer {
            background-color: #31511E;
            color: white;
            padding: 15px 0;
            margin-top: 60px;
            width: 100%;
        }
        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Daftar Buku</h2>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = 1;
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $row["judul"] . "</td>";
                    echo "<td>" . $row["penulis"] . "</td>";
                    echo "<td>" . $row["penerbit"] . "</td>";
                    echo "<td>" . $row["tahun_terbit"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='text-center'>Tidak ada data buku</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

<footer class="text-center">
    <p>&copy; 2024 George Frederik Pingak | All Rights Reserved</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
