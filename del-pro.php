<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Peserta</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 650px;
            margin: 30px auto;
            background: #ffffff;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        h2 {
            text-align: center;
            color: #1a237e;
            margin-bottom: 5px;
        }
        .subtitle {
            text-align: center;
            color: #666;
            font-size: 14px;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: 600;
            color: #333;
            margin-bottom: 6px;
            font-size: 14px;
        }
        .required {
            color: #e53935;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 11px 14px;
            border: 1.5px solid #dde;
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            transition: border 0.2s;
            box-sizing: border-box;
        }
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #3f51b5;
            box-shadow: 0 0 0 3px rgba(63,81,181,0.1);
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        .file-area {
            border: 2px dashed #bbb;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            background: #fafafa;
        }
        input[type="file"] {
            font-size: 14px;
        }
        .btn {
            width: 100%;
            padding: 13px;
            background: #3f51b5;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.2s;
        }
        .btn:hover {
            background: #303f9f;
        }
        .btn-reset {
            background: #eee;
            color: #555;
            margin-top: 8px;
        }
        .btn-reset:hover {
            background: #ddd;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>📋 Formulir Pendaftaran Peserta</h2>
    <p class="subtitle">Lengkapi data diri Anda dengan benar</p>

    <form action="proses.php" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="nama">Nama Lengkap <span class="required">*</span></label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap Anda" required>
        </div>

        <div class="form-group">
            <label for="email">Email <span class="required">*</span></label>
            <input type="email" id="email" name="email" placeholder="contoh@mail.com" required>
        </div>

        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir <span class="required">*</span></label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" required>
        </div>

        <div class="form-group">
            <label for="prodi">Program Studi <span class="required">*</span></label>
            <select id="prodi" name="prodi" required>
                <option value="">-- Pilih Program Studi --</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Manajemen Informatika">Manajemen Informatika</option>
                <option value="Teknik Komputer">Teknik Komputer</option>
                <option value="Bisnis Digital">Bisnis Digital</option>
            </select>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat Lengkap <span class="required">*</span></label>
            <textarea id="alamat" name="alamat" placeholder="Tulis alamat lengkap Anda..." required></textarea>
        </div>

        <div class="form-group">
            <label for="scan_ktm">Scan Kartu Mahasiswa <span class="required">*</span></label>
            <div class="file-area">
                <input type="file" id="scan_ktm" name="scan_ktm" accept="image/*,.pdf" required>
                <small style="color:#888;">Format: JPG, PNG, atau PDF (maks. 2MB)</small>
            </div>
        </div>

        <button type="submit" class="btn">📤 Kirim Pendaftaran</button>
        <button type="reset" class="btn btn-reset">🔄 Reset Formulir</button>

    </form>
</div>

</body>
</html>