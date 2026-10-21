<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Ujian Mahasiswa</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .card {
            background: #ffffff;
            width: 100%;
            max-width: 480px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        }
        h2 {
            color: #1a202c;
            margin-bottom: 8px;
            text-align: center;
        }
        p.subtitle {
            color: #718096;
            text-align: center;
            margin-bottom: 24px;
            font-size: 14px;
        }
        .form-group {
            margin-bottom: 18px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: 600;
            color: #2d3748;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 10px 14px;
            border: 1.5px solid #e2e8f0;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.2s;
        }
        input:focus {
            border-color: #3182ce;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #3182ce;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-top: 6px;
        }
        button:hover {
            background-color: #2b6cb0;
        }
        .result-box {
            margin-top: 24px;
            padding: 18px;
            border-radius: 8px;
            border-left: 5px solid;
            background-color: #f7fafc;
        }
        .result-box.lulus {
            border-color: #38a169;
            background-color: #f0fff4;
        }
        .result-box.remedial {
            border-color: #e53e3e;
            background-color: #fff5f5;
        }
        .result-box h3 {
            margin-bottom: 10px;
            font-size: 16px;
        }
        .badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 13px;
            margin-top: 4px;
        }
        .badge.lulus {
            background-color: #c6f6d5;
            color: #22543d;
        }
        .badge.remedial {
            background-color: #fed7d7;
            color: #742a2a;
        }
        .data-row {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
            font-size: 14px;
            color: #4a5568;
            border-bottom: 1px dashed #e2e8f0;
        }
        .data-row:last-child {
            border-bottom: none;
        }
        .data-row span:first-child {
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Form Nilai Ujian</h2>
    <p class="subtitle">Praktikum Form Processing & Struktur Kendali PHP</p>

    <!-- FORM DENGAN METHOD POST -->
    <form action="" method="POST">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" placeholder="Contoh: Muhamad Iqbal" required>
        </div>

        <div class="form-group">
            <label for="email">Alamat Email</label>
            <input type="email" id="email" name="email" placeholder="Contoh: iqbal@example.com" required>
        </div>

        <div class="form-group">
            <label for="nilai">Nilai Ujian (0 - 100)</label>
            <input type="number" id="nilai" name="nilai" min="0" max="100" step="any" placeholder="Contoh: 85" required>
        </div>

        <button type="submit" name="proses">Proses Nilai</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['proses'])) {
        $nama  = htmlspecialchars(trim($_POST['nama']));
        $email = htmlspecialchars(trim($_POST['email']));
        $nilai = floatval($_POST['nilai']);

        if ($nilai >= 70) {
            $status     = "Lulus";
            $class_css  = "lulus";
            $keterangan = "Selamat! Anda dinyatakan Lulus ujian.";
        } else {
            $status     = "Remedial";
            $class_css  = "remedial";
            $keterangan = "Mohon maaf, Anda harus mengikuti ujian Remedial.";
        }
    ?>

        <div class="result-box <?php echo $class_css; ?>">
            <h3 style="color: <?php echo ($status === 'Lulus') ? '#22543d' : '#742a2a'; ?>;">
                Hasil Evaluasi Ujian
            </h3>
            
            <div class="data-row">
                <span>Nama</span>
                <span><?php echo $nama; ?></span>
            </div>
            <div class="data-row">
                <span>Email</span>
                <span><?php echo $email; ?></span>
            </div>
            <div class="data-row">
                <span>Nilai Ujian</span>
                <span><?php echo $nilai; ?></span>
            </div>
            <div class="data-row">
                <span>Status Kelulusan</span>
                <span><span class="badge <?php echo $class_css; ?>"><?php echo $status; ?></span></span>
            </div>
            
            <p style="margin-top: 10px; font-size: 13px; color: #4a5568; font-style: italic;">
                <?php echo $keterangan; ?>
            </p>
        </div>
    <?php
    }
    ?>
</div>

</body>
</html>
