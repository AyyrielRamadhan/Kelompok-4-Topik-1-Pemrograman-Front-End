<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Rangkuman Data Peserta | Konfirmasi Elegan</title>
    <style>
        /* --- Reset & Global --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #0b0f1c;
            font-family: 'Inter', 'Segoe UI', system-ui, -apple-system, sans-serif;
            margin: 0;
            padding: 30px 20px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
        }

        /* --- Animasi Latar Belakang Futuristik (di luar wadah) --- */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: radial-gradient(ellipse at 30% 20%, rgba(99, 102, 241, 0.25) 0%, transparent 55%),
                        radial-gradient(ellipse at 80% 70%, rgba(14, 165, 233, 0.2) 0%, transparent 55%),
                        radial-gradient(ellipse at 10% 80%, rgba(168, 85, 247, 0.15) 0%, transparent 50%);
            z-index: 0;
            animation: backgroundShift 14s ease-in-out infinite alternate;
            pointer-events: none;
        }

        @keyframes backgroundShift {
            0% {
                opacity: 0.7;
                background-position: 0% 0%, 100% 100%, 0% 100%;
                transform: scale(1);
            }
            50% {
                opacity: 0.9;
                background-position: 2% 3%, 98% 97%, 2% 97%;
                transform: scale(1.03);
            }
            100% {
                opacity: 0.75;
                background-position: 0% 0%, 100% 100%, 0% 100%;
                transform: scale(1);
            }
        }

        body::after {
            content: "";
            position: fixed;
            inset: 0;
            background-image: 
                linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            background-position: center;
            z-index: 0;
            animation: gridPulse 12s infinite ease-in-out;
            pointer-events: none;
            mask-image: radial-gradient(ellipse at center, black 30%, transparent 75%);
        }

        @keyframes gridPulse {
            0%, 100% { opacity: 0.25; background-size: 50px 50px; }
            50% { opacity: 0.45; background-size: 55px 55px; }
        }

        .particle {
            position: fixed;
            width: 3px;
            height: 3px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
            filter: blur(1px);
            z-index: 0;
            pointer-events: none;
            animation: floatParticle 18s infinite linear;
        }

        .particle:nth-child(1) { top: 15%; left: 10%; animation-duration: 16s; background: #6366f1; width: 4px; height: 4px; }
        .particle:nth-child(2) { top: 75%; left: 85%; animation-duration: 19s; background: #38bdf8; width: 2px; height: 2px; }
        .particle:nth-child(3) { top: 30%; left: 92%; animation-duration: 14s; background: #a78bfa; width: 3px; height: 3px; }
        .particle:nth-child(4) { top: 85%; left: 8%; animation-duration: 21s; background: #f472b6; width: 2px; height: 2px; }

        @keyframes floatParticle {
            0% { transform: translateY(0) translateX(0) scale(1); opacity: 0; }
            20% { opacity: 0.8; }
            40% { opacity: 0.9; transform: translateY(-30px) translateX(15px) scale(1.1); }
            70% { opacity: 0.4; transform: translateY(25px) translateX(-20px) scale(0.9); }
            100% { transform: translateY(0) translateX(0) scale(1); opacity: 0; }
        }

        /* --- Container Card Utama --- */
        .container {
            position: relative;
            z-index: 10;
            max-width: 900px;
            width: 100%;
            margin: 0 auto;
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            padding: 35px 35px 30px;
            border-radius: 36px;
            box-shadow: 0 30px 50px rgba(0, 0, 0, 0.7), 0 0 0 1px rgba(255, 255, 255, 0.08), 0 0 25px rgba(79, 114, 255, 0.35);
            border: 1px solid rgba(255, 255, 255, 0.12);
            transition: all 0.3s ease;
            color: #e2e8f0;
        }

        h2 {
            text-align: center;
            color: #ffffff;
            margin-bottom: 30px;
            font-size: 2.3rem;
            font-weight: 600;
            letter-spacing: -0.3px;
            text-shadow: 0 4px 15px rgba(0, 160, 255, 0.45);
            background: linear-gradient(135deg, #cbd5e1 0%, #ffffff 50%, #bae6fd 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            display: inline-block;
            width: 100%;
        }

        h2::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, #38bdf8, #a78bfa);
            border-radius: 20px;
            filter: drop-shadow(0 0 8px #3b82f6);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
            background: rgba(18, 25, 45, 0.6);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        table, th, td {
            border: none;
        }

        th {
            background: rgba(30, 41, 70, 0.7);
            color: #f1f5f9;
            padding: 18px 20px;
            text-align: left;
            font-size: 0.95rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            width: 35%;
            border-bottom: 1px solid rgba(99, 102, 241, 0.4);
            backdrop-filter: blur(5px);
            color: #a5b4fc;
        }

        td {
            padding: 16px 20px;
            background: rgba(12, 18, 34, 0.45);
            color: #e2e8f0;
            font-size: 1rem;
            font-weight: 450;
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(4px);
            vertical-align: middle;
        }

        tr:last-child td {
            border-bottom: none;
        }

        /* Style untuk gambar KTM yang ditampilkan */
        .ktm-preview {
            display: block;
            max-width: 100%;
            height: auto;
            max-height: 260px;
            border-radius: 14px;
            margin-top: 8px;
            border: 1px solid rgba(255, 255, 255, 0.25);
            box-shadow: 0 8px 20px rgba(0,0,0,0.5);
            backdrop-filter: blur(5px);
            object-fit: contain;
            background: rgba(0,0,0,0.2);
        }

        .file-badge {
            background: rgba(79, 114, 255, 0.18);
            padding: 6px 16px;
            border-radius: 40px;
            font-size: 0.85rem;
            font-weight: 500;
            color: #c7d2fe;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(129, 140, 248, 0.35);
            margin-left: 8px;
            display: inline-block;
            letter-spacing: 0.2px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            transition: 0.2s;
        }

        .file-badge:hover {
            background: rgba(99, 102, 241, 0.3);
            border-color: #818cf8;
            color: white;
        }

        .btn-back {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: 35px;
            padding: 14px 36px;
            background: rgba(20, 30, 55, 0.65);
            backdrop-filter: blur(15px);
            color: #f0f4ff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 550;
            font-size: 1.05rem;
            letter-spacing: 0.4px;
            transition: all 0.3s ease;
            border: 1px solid rgba(99, 102, 241, 0.5);
            box-shadow: 0 10px 25px -8px rgba(0, 0, 0, 0.6), 0 0 12px rgba(56, 189, 248, 0.4);
            gap: 8px;
            line-height: 1.2;
            position: relative;
            overflow: hidden;
        }

        .btn-back::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.15), transparent);
            transition: left 0.5s ease;
        }

        .btn-back:hover::before {
            left: 100%;
        }

        .btn-back:hover {
            background: rgba(40, 50, 80, 0.8);
            border-color: #a78bfa;
            box-shadow: 0 15px 30px -6px #3b82f6, 0 0 20px #6366f1;
            color: #ffffff;
            transform: translateY(-2px);
        }

        p[style*="color:red"] {
            background: rgba(255, 80, 80, 0.12);
            backdrop-filter: blur(12px);
            padding: 14px 20px;
            border-radius: 20px;
            color: #fecaca !important;
            border: 1px solid rgba(255, 100, 100, 0.25);
            font-weight: 450;
        }

        @media (max-width: 550px) {
            .container {
                padding: 25px 20px;
            }
            th, td {
                padding: 14px 12px;
                font-size: 0.9rem;
            }
            h2 {
                font-size: 1.9rem;
            }
        }
    </style>
</head>
<body>

<div class="particle"></div>
<div class="particle"></div>
<div class="particle"></div>
<div class="particle"></div>

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
        
        // Penanganan file upload dan tampilan gambar
        $file_info = "Tidak ada file diupload";
        $gambar_html = ""; // untuk menampung tag img jika file gambar berhasil
        
        if (isset($_FILES['scan_ktm']) && $_FILES['scan_ktm']['error'] === 0) {
            $file_name = $_FILES['scan_ktm']['name'];
            $file_size = $_FILES['scan_ktm']['size'];
            $file_tmp  = $_FILES['scan_ktm']['tmp_name'];
            
            // Format ukuran file
            if ($file_size < 1024) {
                $size_display = $file_size . " bytes";
            } elseif ($file_size < 1048576) {
                $size_display = round($file_size / 1024, 2) . " KB";
            } else {
                $size_display = round($file_size / 1048576, 2) . " MB";
            }
            
            $file_info = htmlspecialchars($file_name) . " <span class='file-badge'>" . $size_display . "</span>";
            
            // Tentukan folder upload (pastikan folder 'uploads' sudah ada dan writable)
            $upload_dir = "uploads/";
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }
            
            // Buat nama unik agar tidak bentrok, tapi tetap ekstensi asli
            $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $allowed_images = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp'];
            
            if (in_array($ext, $allowed_images)) {
                $new_file_name = uniqid('ktm_', true) . '.' . $ext;
                $destination = $upload_dir . $new_file_name;
                
                if (move_uploaded_file($file_tmp, $destination)) {
                    // Tampilkan gambar dengan class ktm-preview (menyesuaikan ukuran)
                    $gambar_html = '<img src="' . htmlspecialchars($destination) . '" alt="Scan KTM" class="ktm-preview">';
                } else {
                    // Jika gagal pindahkan, tetap tampilkan info file tanpa gambar
                    $gambar_html = '<p style="color:#fbbf24; margin-top:5px;">⚠️ Gagal menyimpan gambar, tetapi file terdeteksi.</p>';
                }
            } else {
                // Bukan file gambar, tampilkan info file saja
                $gambar_html = '<p style="color:#94a3b8; margin-top:5px;">📎 File non-gambar diunggah (tidak ditampilkan).</p>';
            }
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
            <td>
                <?php echo $file_info; ?>
                <?php 
                // Tampilkan gambar jika ada
                if (!empty($gambar_html)) {
                    echo $gambar_html;
                }
                ?>
            </td>
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
