<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rangkuman Data Peserta</title>
    <style>
        body {
            background-color: #e8eaf6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #1a237e;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            background-color: #ffffff;
        }

        table,
        th,
        td {
            border: 2px solid #c5cae9;
        }

        th {
            background-color: #3f51b5;
            color: #ffffff;
            padding: 14px 16px;
            text-align: left;
            font-size: 15px;
            width: 35%;
        }

        td {
            padding: 12px 16px;
            background-color: #f5f5ff;
            color: #333;
            font-size: 14px;
        }

        .file-badge {
            background: #e8eaf6;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 13px;
            color: #283593;
        }

        .btn-back {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 30px;
            background: #3f51b5;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: background 0.2s;
        }

        .btn-back:hover {
            background: #303f9f;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>✅ Data Pendaftaran Berhasil Dikirim</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nama       = htmlspecialchars($_POST['nama']);
            $email      = htmlspecialchars($_POST['email']);
            $tgl_lahir  = htmlspecialchars($_POST['tgl_lahir']);
            $prodi      = htmlspecialchars($_POST['prodi']);
            $alamat     = htmlspecialchars($_POST['alamat']);

            $tgl_format = date("d F Y", strtotime($tgl_lahir));

            $file_info = "Tidak ada file diupload";
            if (isset($_FILES['scan_ktm']) && $_FILES['scan_ktm']['error'] === 0) {
                $file_name = $_FILES['scan_ktm']['name'];
                $file_size = $_FILES['scan_ktm']['size'];

                if ($file_size < 1024) {
                    $size_display = $file_size . " bytes";
                } elseif ($file_size < 1048576) {
                    $size_display = round($file_size / 1024, 2) . " KB";
                } else {
                    $size_display = round($file_size / 1048576, 2) . " MB";
                }

                $file_info = $file_name . " <span class='file-badge'>" . $size_display . "</span>";
            }
        ?>

            <table>
                <tr>
                    <th>Nama Lengkap</th>
                    <td><?php echo $nama; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><?php echo $tgl_format; ?></td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <td><?php echo $prodi; ?></td>
                </tr>
                <tr>
                    <th>Alamat Lengkap</th>
                    <td><?php echo nl2br($alamat); ?></td>
                </tr>
                <tr>
                    <th>Scan KTM</th>
                    <td><?php echo $file_info; ?></td>
                </tr>
            </table>

        <?php
        } else {
            echo "<p style='color:red; text-align:center;'>❌ Tidak ada data yang dikirim. Silakan isi form terlebih dahulu.</p>";
        }
        ?>

        <br>
        <a href="input_form.php" class="btn-back">⬅ Kembali ke Formulir</a>
    </div>

</body>

</html>