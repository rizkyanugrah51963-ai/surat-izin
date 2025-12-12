<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Siswa</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: 'Inter', sans-serif;
            padding: 20px;
        }

        .profile-container {
            max-width: 900px;
            margin: 40px auto;
        }

        .profile-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .profile-header {
            background: linear-gradient(135deg, #667eea, #764ba2);
            padding: 50px 20px;
            text-align: center;
            color: white;
        }

        .profile-avatar img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 5px solid #fff;
        }

        .profile-name {
            font-family: "Playfair Display";
            font-size: 2rem;
            margin-top: 15px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px,1fr));
            gap: 20px;
            padding: 30px;
        }

        .info-item {
            background: #f6f8fc;
            border-radius: 12px;
            padding: 18px;
            border: 1px solid #ddd;
            transition: .2s;
        }

        .info-item.edit-mode {
            background: #fff8dc;
            border-color: #f1c40f;
        }

        .info-label {
            font-size: 0.8rem;
            color: #667eea;
            font-weight: 600;
            text-transform: uppercase;
        }

        .info-input {
            margin-top: 6px;
            display: none;
        }

        .action-buttons {
            padding: 20px 30px;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
        }

        .btn-custom {
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: 600;
        }

        .btn-edit { background: #667eea; color: white; }
        .btn-save { background: #22c55e; color: white; }
        .btn-cancel { background: #f97316; color: white; }
        .btn-logout { background: #e84393; color: white; }
        .btn-back { background: #95a5a6; color: white; }
    </style>
</head>

<body>

<div class="profile-container">
    <div class="profile-card">

        <!-- HEADER -->
        <div class="profile-header">
            <div class="profile-avatar">
                <img src="{{ asset('user/assets/img/default-profile.png') }}">
            </div>
            <h1 class="profile-name">{{ Auth::user()->name }}</h1>
            <p>Siswa Terdaftar</p>
        </div>

        <!-- BODY -->
        <form action="{{ route('profile.update') }}" method="POST" id="profileForm">
            @csrf
            @method('PUT')

            <div class="info-grid">

                {{-- NAME --}}
                <div class="info-item" id="name-item">
                    <div class="info-label">Nama Lengkap</div>
                    <div class="info-value" id="name-display">{{ Auth::user()->name }}</div>
                    <input type="text" name="name" class="form-control info-input" 
                           id="name-input" value="{{ Auth::user()->name }}" required>
                </div>

                {{-- EMAIL --}}
                <div class="info-item" id="email-item">
                    <div class="info-label">Email</div>
                    <div class="info-value" id="email-display">{{ Auth::user()->email }}</div>
                    <input type="email" name="email" class="form-control info-input"
                           id="email-input" value="{{ Auth::user()->email }}" required>
                </div>

                {{-- NISN --}}
                <div class="info-item" id="nisn-item">
                    <div class="info-label">NISN</div>
                    <div class="info-value" id="nisn-display">{{ Auth::user()->nisn }}</div>
                    <input type="text" name="nisn" class="form-control info-input"
                           id="nisn-input" value="{{ Auth::user()->nisn }}" required>
                </div>

                {{-- TELEPON --}}
                <div class="info-item" id="telepon-item">
                    <div class="info-label">Telepon</div>
                    <div class="info-value" id="telepon-display">{{ Auth::user()->telepon ?? 'Belum diisi' }}</div>
                    <input type="text" name="telepon" class="form-control info-input"
                           id="telepon-input" value="{{ Auth::user()->telepon }}">
                </div>

                {{-- KELAS --}}
                <div class="info-item" id="kelas-item">
                    <div class="info-label">Kelas</div>
                    <div class="info-value" id="kelas-display">{{ Auth::user()->kelas ?? 'Belum diisi' }}</div>
                    <input type="text" name="kelas" class="form-control info-input"
                           id="kelas-input" value="{{ Auth::user()->kelas }}">
                </div>

                {{-- ASAL SEKOLAH --}}
                <div class="info-item" id="asal_sekolah-item">
                    <div class="info-label">Asal Sekolah</div>
                    <div class="info-value" id="asal_sekolah-display">{{ Auth::user()->asal_sekolah ?? 'Belum diisi' }}</div>
                    <input type="text" name="asal_sekolah" class="form-control info-input"
                           id="asal_sekolah-input" value="{{ Auth::user()->asal_sekolah }}">
                </div>

                {{-- TANGGAL LAHIR --}}
                <div class="info-item" id="tanggal_lahir-item">
                    <div class="info-label">Tanggal Lahir</div>
                    <div class="info-value" id="tanggal_lahir-display">
                        {{ Auth::user()->tanggal_lahir ?? 'Belum diisi' }}
                    </div>
                    <input type="date" name="tanggal_lahir" class="form-control info-input"
                           id="tanggal_lahir-input" value="{{ Auth::user()->tanggal_lahir }}">
                </div>

            </div>

            <!-- BUTTONS -->
            <div class="action-buttons">

                <a href="{{ url('/siswa/dashboard-user') }}" class="btn-custom btn-back">← Kembali</a>

                <div>
                    <button type="button" class="btn-custom btn-edit" id="btn-edit">✎ Edit</button>
                    <button type="submit" class="btn-custom btn-save" id="btn-save" style="display:none;">✓ Simpan</button>
                    <button type="button" class="btn-custom btn-cancel" id="btn-cancel" style="display:none;">✕ Batal</button>

                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="btn-custom btn-logout">⎋ Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
                </div>
            </div>

        </form>
    </div>
</div>

<script>
    const fields = [
        "name", "email", "nisn",
        "telepon", "kelas", "asal_sekolah", "tanggal_lahir"
    ];

    const btnEdit = document.getElementById("btn-edit");
    const btnSave = document.getElementById("btn-save");
    const btnCancel = document.getElementById("btn-cancel");

    const original = {};

    fields.forEach(f => {
        original[f] = document.getElementById(`${f}-input`).value;
    });

    btnEdit.addEventListener("click", () => {

        fields.forEach(f => {
            document.getElementById(`${f}-display`).style.display = "none";
            document.getElementById(`${f}-input`).style.display = "block";
            document.getElementById(`${f}-item`).classList.add("edit-mode");
        });

        btnEdit.style.display = "none";
        btnSave.style.display = "inline-block";
        btnCancel.style.display = "inline-block";
    });

    btnCancel.addEventListener("click", () => {

        fields.forEach(f => {
            document.getElementById(`${f}-input`).value = original[f];
            document.getElementById(`${f}-display`).style.display = "block";
            document.getElementById(`${f}-input`).style.display = "none";
            document.getElementById(`${f}-item`).classList.remove("edit-mode");
        });

        btnEdit.style.display = "inline-block";
        btnSave.style.display = "none";
        btnCancel.style.display = "none";
    });
</script>

</body>
</html>
