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

// Check if the ID is set in the URL
if (isset($_GET['id_pinjam'])) {
    $id = $_GET['id_pinjam'];

    // Fetch data based on the ID
    $select_query = "SELECT * FROM peminjaman WHERE id_pinjam = $id";
    $result = $conn->query($select_query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nama = $row["nama"];
        $PencarianDokumen = $row["PencarianDokumen"];
        $KonfirmasiPIC = $row["KonfirmasiPIC"];
        $PersetujuanAdmin = $row["PersetujuanAdmin"];
        $PenyerahanDokumen = $row["PenyerahanDokumen"];
        $PengembalianDokumen = $row["PengembalianDokumen"];
        $Status = $row["Status"];
    } else {
        echo "Record not found.";
        exit();
    }
} else {
    echo "ID not provided.";
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect updated data
    $updated_nama = $_POST["nama"];
    $updated_PencarianDokumen = $_POST["PencarianDokumen"];
    $updated_KonfirmasiPIC = $_POST["KonfirmasiPIC"];
    $updated_PersetujuanAdmin = $_POST["PersetujuanAdmin"];
    $updated_PenyerahanDokumen = $_POST["PenyerahanDokumen"];
    $updated_PengembalianDokumen = $_POST["PengembalianDokumen"];
    $updated_Status = $_POST["Status"];

    // Update data in the database
    $update_query = "UPDATE peminjaman SET 
        nama = '$updated_nama',
        PencarianDokumen = '$updated_PencarianDokumen',
        KonfirmasiPIC = '$updated_KonfirmasiPIC',
        PersetujuanAdmin = '$updated_PersetujuanAdmin',
        PenyerahanDokumen = '$updated_PenyerahanDokumen',
        PengembalianDokumen = '$updated_PengembalianDokumen',
        Status = '$updated_Status'
        WHERE id_pinjam = $id";

    if ($conn->query($update_query) === TRUE) {
        header("Location: layanan-admin.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h2>Update Form</h2>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"] . "?id_pinjam=$id"; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" required>
            </div>
            <div class="mb-3">
                <label for="PencarianDokumen" class="form-label">Pencarian Dokumen:</label>
                <select class="form-select" name="PencarianDokumen" required>
                    <option value="Ditemukan" <?php echo ($PencarianDokumen == 'Ditemukan') ? 'selected' : ''; ?>>Ditemukan</option>
                    <option value="Tidak Ditemukan" <?php echo ($PencarianDokumen == 'Tidak Ditemukan') ? 'selected' : ''; ?>>Tidak Ditemukan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="KonfirmasiPIC" class="form-label">Konfirmasi PIC:</label>
                <select class="form-select" name="KonfirmasiPIC" required>
                    <option value="Terkonfirmasi" <?php echo ($KonfirmasiPIC == 'Terkonfirmasi') ? 'selected' : ''; ?>>Terkonfirmasi</option>
                    <option value="Tidak Terkonfirmasi" <?php echo ($KonfirmasiPIC == 'Tidak Terkonfirmasi') ? 'selected' : ''; ?>>Tidak Terkonfirmasi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="PersetujuanAdmin" class="form-label">Persetujuan Admin:</label>
                <select class="form-select" name="PersetujuanAdmin" required>
                    <option value="Disetujui" <?php echo ($PersetujuanAdmin == 'Disetujui') ? 'selected' : ''; ?>>Disetujui</option>
                    <option value="Tidak Disetujui" <?php echo ($PersetujuanAdmin == 'Tidak Disetujui') ? 'selected' : ''; ?>>Tidak Disetujui</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="PenyerahanDokumen" class="form-label">Penyerahan Dokumen:</label>
                <input type="date" class="form-control" name="PenyerahanDokumen" value="<?php echo $PenyerahanDokumen; ?>" required>
            </div>
            <div class="mb-3">
                <label for="PengembalianDokumen" class="form-label">Pengembalian Dokumen:</label>
                <input type="date" class="form-control" name="PengembalianDokumen" value="<?php echo $PengembalianDokumen; ?>" required>
            </div>
            <div class="mb-3">
                <label for="Status" class="form-label">Status:</label>
                <select class="form-select" name="Status" required>
                    <option value="Dipinjam" <?php echo ($Status == 'Dipinjam') ? 'selected' : ''; ?>>Dipinjam</option>
                    <option value="Dikembalikan" <?php echo ($Status == 'Dikembalikan') ? 'selected' : ''; ?>>Dikembalikan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>
