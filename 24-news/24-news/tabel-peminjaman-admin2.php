<?php
// Connect to your database (replace these with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpus";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$select_query = "SELECT * FROM peminjaman";
$result = $conn->query($select_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h2>Table Output</h2>
        <?php
        if ($result->num_rows > 0) {
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th scope="col">ID</th>'; // Add ID column
            echo '<th scope="col">Nama</th>';
            echo '<th scope="col">Pencarian Dokumen</th>';
            echo '<th scope="col">Konfirmasi PIC</th>';
            echo '<th scope="col">Persetujuan Admin</th>';
            echo '<th scope="col">Penyerahan Dokumen PIC</th>';
            echo '<th scope="col">Pengembalian Dokumen</th>';
            echo '<th scope="col">Status</th>';
            echo '<th scope="col">Action</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["id_pinjam"] . '</td>'; // Display the ID column
                echo '<td>' . $row["nama"] . '</td>';
                echo '<td>' . $row["PencarianDokumen"] . '</td>';
                echo '<td>' . $row["KonfirmasiPIC"] . '</td>';
                echo '<td>' . $row["PersetujuanAdmin"] . '</td>';
                echo '<td>' . $row["PenyerahanDokumen"] . '</td>';
                echo '<td>' . $row["PengembalianDokumen"] . '</td>';
                echo '<td>' . $row["Status"] . '</td>';
                echo '<td><a href="update_form.php?id_pinjam=' . $row["id_pinjam"] . '">Edit</a></td>'; // Corrected link
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo 'No records found.';
        }
        ?>
    </div>
</body>

</html>
