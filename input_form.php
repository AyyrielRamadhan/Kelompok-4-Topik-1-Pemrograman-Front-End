<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Peserta Premium</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Palette Warna Baru: Deep Ocean & Electric Indigo */
            --bg-body: #0f172a;
            --bg-gradient: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);
            --glass-bg: rgba(255, 255, 255, 0.03);
            --glass-border: rgba(255, 255, 255, 0.1);
            --primary-neon: #818cf8;
            --secondary-neon: #c084fc;
            --text-bright: #f8fafc;
            --text-dim: #94a3b8;
            --input-bg: rgba(15, 23, 42, 0.6);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg-gradient);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            color: var(--text-bright);
        }

        /* CONTAINER DENGAN EFEK GLASSMORPHISM */
        .container {
            width: 100%;
            max-width: 550px;
            background: var(--glass-bg);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            padding: 45px;
            border-radius: 28px;
            border: 1px solid var(--glass-border);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            position: relative;
            overflow: hidden;
        }

        /* Aksen Cahaya di Sudut */
        .container::before {
            content: "";
            position: absolute;
            top: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            background: var(--primary-neon);
            filter: blur(80px);
            opacity: 0.2;
            z-index: -1;
        }

        h2 {
            text-align: center;
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 10px;
            background: linear-gradient(to right, var(--primary-neon), var(--secondary-neon));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .subtitle {
            text-align: center;
            color: var(--text-dim);
            font-size: 14px;
            margin-bottom: 35px;
        }

        /* FORM ELEMENTS */
        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--primary-neon);
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .required {
            color: #fb7185;
        }

        input, select, textarea {
            width: 100%;
            padding: 14px 18px;
            border-radius: 14px;
            border: 1px solid var(--glass-border);
            background: var(--input-bg);
            font-size: 14px;
            color: var(--text-bright);
            font-family: inherit;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: var(--primary-neon);
            background: rgba(255, 255, 255, 0.05);
            box-shadow: 0 0 15px rgba(129, 140, 248, 0.2);
        }

        /* Khusus Dropdown Select */
        select option {
            background: var(--bg-body);
            color: var(--text-bright);
        }

        /* FILE AREA */
        .file-area {
            border: 2px dashed var(--glass-border);
            border-radius: 14px;
            padding: 20px;
            text-align: center;
            background: rgba(255, 255, 255, 0.02);
        }

        .file-area:hover {
            border-color: var(--secondary-neon);
            background: rgba(192, 132, 252, 0.05);
        }

        /* BUTTONS */
        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 35px;
        }

        .btn {
            width: 100%;
            padding: 16px;
            border-radius: 14px;
            border: none;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-submit {
            background: linear-gradient(135deg, var(--primary-neon) 0%, var(--secondary-neon) 100%);
            color: #fff;
            box-shadow: 0 10px 20px -5px rgba(129, 140, 248, 0.4);
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px -5px rgba(129, 140, 248, 0.5);
            filter: brightness(1.1);
        }

        .btn-reset {
            background: transparent;
            color: var(--text-dim);
            border: 1px solid var(--glass-border);
        }

        .btn-reset:hover {
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-bright);
            border-color: var(--text-dim);
        }

        /* Placeholder color */
        ::placeholder {
            color: #475569;
        }

        /* Custom scrollbar for textarea */
        textarea::-webkit-scrollbar {
            width: 6px;
        }
        textarea::-webkit-scrollbar-thumb {
            background: var(--glass-border);
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Formulir Pendaftaran</h2>
    <p class="subtitle">Bergabunglah dengan komunitas IT masa depan</p>

    <form action="proses.php" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="nama">Nama Lengkap <span class="required">*</span></label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama sesuai identitas" required>
        </div>

        <div class="form-group">
            <label for="email">Email Aktif <span class="required">*</span></label>
            <input type="email" id="email" name="email" placeholder="nama@email.com" required>
        </div>

        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir <span class="required">*</span></label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" required>
        </div>

        <div class="form-group">
            <label for="prodi">Program Studi <span class="required">*</span></label>
            <select id="prodi" name="prodi" required>
                <option value="">Pilih Program Studi</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Manajemen Informatika">Manajemen Informatika</option>
                <option value="Teknik Komputer">Teknik Komputer</option>
                <option value="Bisnis Digital">Bisnis Digital</option>
            </select>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat Domisili <span class="required">*</span></label>
            <textarea id="alamat" name="alamat" rows="3" placeholder="Tuliskan alamat lengkap..." required></textarea>
        </div>

        <div class="form-group">
            <label for="scan_ktm">Scan Kartu Mahasiswa <span class="required">*</span></label>
            <div class="file-area">
                <input type="file" id="scan_ktm" name="scan_ktm" accept="image/*,.pdf" required>
                <div style="margin-top: 10px;">
                    <small style="color:var(--text-dim);">Format PDF/JPG/PNG (Maks 2MB)</small>
                </div>
            </div>
        </div>

        <div class="btn-group">
            <button type="submit" class="btn btn-submit">Kirim Data Sekarang</button>
            <button type="reset" class="btn btn-reset">Kosongkan Form</button>
        </div>

    </form>
</div>

</body>
</html>
