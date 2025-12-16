<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <style>
        /* === STYLE KAMU (TIDAK DIUBAH) === */
        body {
            margin: 0;
            padding: 0;
            background: url('/user/assets/img/lorong.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        .form-container {
            width: 60%;
            max-width: 700px;
            padding: 40px;
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.35);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
        }

        .row {
            display: flex;
            gap: 15px;
            margin-bottom: 18px;
        }

        .row div {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 6px;
            font-size: 14px;
        }

        input, select {
            padding: 12px 14px;
            border-radius: 10px;
            font-size: 15px;
        }

        .btn-daftar {
            width: 100%;
            padding: 14px;
            margin-top: 20px;
            border-radius: 12px;
            border: none;
            background: linear-gradient(135deg, #2f67ff, #6396ff);
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
        }
    </style>
</head>
<body>

<form class="form-container" method="POST" action="{{ route('register.store') }}">
    @csrf

    <h2>Sign Up</h2>

    {{-- USERNAME & NAMA --}}
    <div class="row">
        <div>
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label>Nama Lengkap</label>
            <input type="text" name="name" required>
        </div>
    </div>

    {{-- EMAIL & NISN --}}
    <div class="row">
        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>NISN</label>
            <input type="text" name="nisn" required>
        </div>
    </div>

    {{-- 🔧 JENJANG & KELAS (NAMA FIELD DIPERBAIKI) --}}
    <div class="row">
        <div>
            <label>Jenjang Sekolah</label>
            <select name="jenjang_sekolah" id="jenjang" required onchange="updateKelas()">
                <option value="" disabled selected>Pilih Jenjang</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
            </select>
        </div>
        <div>
            <label>Kelas</label>
            <select name="kelas" id="kelas" required disabled>
                <option value="" disabled selected>Pilih Kelas</option>
            </select>
        </div>
    </div>

    {{-- 🔧 ASAL SEKOLAH --}}
    <div class="row">
        <div>
            <label>Asal Sekolah</label>
            <input type="text" name="asal_sekolah"
                   placeholder="Contoh: SMPN 1 Jakarta"
                   required>
        </div>
    </div>

    {{-- KONFIRMASI NISN --}}
    <div class="row">
        <div></div>
        <div>
            <label>Konfirmasi NISN</label>
            <input type="text" name="nisn_confirmation" required>
        </div>
        <div></div>
    </div>

    <button type="submit" class="btn-daftar">Daftar</button>
</form>

<script>
function updateKelas() {
    const jenjang = document.getElementById("jenjang").value;
    const kelasSelect = document.getElementById("kelas");

    kelasSelect.innerHTML = '<option value="" disabled selected>Pilih Kelas</option>';
    kelasSelect.disabled = false;

    if (jenjang === "SMP") {
        kelasSelect.innerHTML += `
            <option value="VII">VII (7)</option>
            <option value="VIII">VIII (8)</option>
            <option value="IX">IX (9)</option>
        `;
    } else if (jenjang === "SMA") {
        kelasSelect.innerHTML += `
            <option value="X">X (10)</option>
            <option value="XI">XI (11)</option>
            <option value="XII">XII (12)</option>
        `;
    }
}
</script>

</body>
</html>
