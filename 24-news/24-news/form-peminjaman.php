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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $nama = $_POST["nama"];
    $nip = $_POST["nip"];
    $keperluan = $_POST["keperluan"];
    $instansi = $_POST["instansi"];
    $judul_arsip = $_POST["judul_arsip"];
    $email = $_POST["email"];
    $no_wa = $_POST["no_wa"];
    $alamat = $_POST["alamat"];

    // Handle file upload (assuming file input name is "surat")
    $surat = file_get_contents($_FILES["surat"]["tmp_name"]);

    // Set default values for hidden fields
    $PencarianDokumen = $_POST["PencarianDokumen"];
    $KonfirmasiPIC = $_POST["KonfirmasiPIC"];
    $PersetujuanAdmin = $_POST["PersetujuanAdmin"];
    $PenyerahanDokumen = $_POST["PenyerahanDokumen"];
    $PengembalianDokumen = $_POST["PengembalianDokumen"];
    $Status = $_POST["Status"];

    $sql = "INSERT INTO peminjaman (nama, nip, keperluan, instansi, judul_arsip, email, no_wa, alamat, surat, PencarianDokumen, KonfirmasiPIC, PersetujuanAdmin, PenyerahanDokumen, PengembalianDokumen, Status) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssssssss", $nama, $nip, $keperluan, $instansi, $judul_arsip, $email, $no_wa, $alamat, $surat, $PencarianDokumen, $KonfirmasiPIC, $PersetujuanAdmin, $PenyerahanDokumen, $PengembalianDokumen, $Status);

if ($stmt->execute()) {
    echo '<script>'; // Start a JavaScript block
    echo 'alert("Form submitted successfully.");'; // Output the JavaScript alert code
    echo '</script>'; // End the JavaScript block
} else {
echo "Error: " . $stmt->error;
}

$stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <h2>Form Peminjaman</h2>
        <div class="row">
            <div class="col-md-8">
                <div class="card p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nama">Nama:</label><br>
                            <input type="text" class="form-control" name="nama" required><br>
                        </div>
                        <div class="col-md-6">
                            <label for="nip">NIP:</label><br>
                            <input type="text" class="form-control" name="nip" required><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="keperluan">Keperluan:</label><br>
                            <input type="text" class="form-control" name="keperluan" required><br>
                        </div>
                        <div class="col-md-6">
                            <label for="instansi">Instansi:</label><br>
                            <input type="text" class="form-control" name="instansi" required><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="judul_arsip">Judul Arsip:</label><br>
                            <input type="text" class="form-control" name="judul_arsip" required><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="email">Email:</label><br>
                            <input type="email" class="form-control" name="email" required><br>
                        </div>
                        <div class="col-md-6">
                            <label for="no_wa">Nomor WhatsApp:</label><br>
                            <input type="text" class="form-control" name="no_wa" required><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="alamat">Alamat:</label><br>
                            <input type="text" class="form-control" name="alamat" required><br>
                        </div>
                        <div class="col-md-6">
                            <label for="surat">File Surat:</label>
                            <input type="file" class="form-control" name="surat" required><br><a
                    href="https://docs.google.com/document/d/1gEU7-wBphsPWdEeYHuYSOzmkCyRp6y1T/edit?usp=sharing&ouid=113832426724188178732&rtpof=true&sd=true">Unduh
                    Format</a>
                        <input type="hidden" name="PencarianDokumen" value="Tidak Ditemukan">
                        <input type="hidden" name="KonfirmasiPIC" value="Belum Terkonfirmasi">
                        <input type="hidden" name="PersetujuanAdmin" value="Belum Disetujui">
                        <input type="hidden" name="PenyerahanDokumen" value="Belum Diserahkan">
                        <input type="hidden" name="PengembalianDokumen" value="Belum Dikembalikan">
                        <input type="hidden" name="Status" value="Belum Selesai">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <div class="row">
                        <div class="card p-2 mb-4">
                        <h4>Form Peminjaman</h4>
                            <table class="table-striped">
                                <tr>
                                    <td>judul 1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card p-2 mb-4">
                        <h4>Pinjam Ke Admin</h4><br>
                        <input type="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>