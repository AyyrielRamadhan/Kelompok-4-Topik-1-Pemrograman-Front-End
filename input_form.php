<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Peserta</title>
    <style>
       :root {
    --primary: #3f51b5;
    --primary-hover: #3242a8;
    --text-main: #1f2937;
    --text-muted: #6b7280;
    --border: #e5e7eb;
    --bg: #f7f8fa;
    --white: #ffffff;
}

/* BASE */
body {
    font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', sans-serif;
    background-color: var(--bg);
    margin: 0;
    padding: 24px;
    color: var(--text-main);
    line-height: 1.5;
}

/* CONTAINER */
.container {
    max-width: 620px;
    margin: 40px auto;
    background: var(--white);
    padding: 32px;
    border-radius: 10px;
    border: 1px solid var(--border);
}

/* HEADER */
h2 {
    text-align: center;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 6px;
}

.subtitle {
    text-align: center;
    color: var(--text-muted);
    font-size: 13px;
    margin-bottom: 28px;
}

/* FORM */
.form-group {
    margin-bottom: 18px;
}

label {
    display: block;
    font-weight: 500;
    font-size: 13px;
    margin-bottom: 6px;
}

.required {
    color: #dc2626;
}

/* INPUT */
input,
select,
textarea {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid var(--border);
    border-radius: 6px;
    font-size: 14px;
    background: #fff;
    transition: border-color 0.15s ease, box-shadow 0.15s ease;
    box-sizing: border-box;
}

input:focus,
select:focus,
textarea:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 2px rgba(63, 81, 181, 0.08);
}

textarea {
    resize: vertical;
    min-height: 90px;
}

/* FILE */
.file-area {
    border: 1.5px dashed var(--border);
    border-radius: 6px;
    padding: 18px;
    text-align: center;
    background: #fcfcfd;
    font-size: 13px;
    color: var(--text-muted);
}

/* BUTTON */
.btn {
    width: 100%;
    padding: 12px;
    background: var(--primary);
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    margin-top: 12px;
    transition: background 0.2s ease, transform 0.05s ease;
}

.btn:hover {
    background: var(--primary-hover);
}

.btn:active {
    transform: scale(0.98);
}

/* RESET BUTTON */
.btn-reset {
    background: transparent;
    color: var(--text-muted);
    border: 1px solid var(--border);
    margin-top: 8px;
}

.btn-reset:hover {
    background: #f3f4f6;
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
