<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #efefef 0%, #ffffff 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .signup-container {
            background: rgba(64, 109, 245, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 60px 70px;
            max-width: 1100px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .signup-title {
            color: #f8f8f8;
            text-align: center;
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 50px;
            letter-spacing: 1px;
        }

        .signup-form {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px 40px;
            align-items: start;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-label {
            color: white;
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 12px;
            letter-spacing: 0.3px;
        }

        .form-input,
        .form-select {
            width: 100%;
            height: 56px;
            padding: 0 24px;
            border-radius: 28px;
            border: none;
            outline: none;
            background: white;
            color: #333;
            font-size: 15px;
            font-family: "Poppins", sans-serif;
            transition: all 0.3s ease;
        }

        .form-input:focus,
        .form-select:focus {
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
        }

        .form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg width='14' height='9' viewBox='0 0 14 9' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1l6 6 6-6' stroke='%23666' stroke-width='2' fill='none' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 20px center;
            background-size: 14px;
            cursor: pointer;
        }

        .button-wrapper {
            grid-column: 2 / 3;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        .submit-button {
            width: 180px;
            height: 70px;
            background: white;
            color: #333;
            border-radius: 35px;
            font-size: 24px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            font-family: "Poppins", sans-serif;
        }

        .submit-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
            background: #f9f9f9;
        }

        .submit-button:active {
            transform: translateY(-1px);
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .signup-form {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .button-wrapper {
                grid-column: 1 / -1;
            }
        }

        @media (max-width: 640px) {
            .signup-container {
                padding: 40px 25px;
            }

            .signup-title {
                font-size: 36px;
                margin-bottom: 35px;
            }

            .signup-form {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .button-wrapper {
                grid-column: 1;
                margin-top: 5px;
            }

            .submit-button {
                width: 100%;
                max-width: 200px;
            }
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h1 class="signup-title">Sign up</h1>
        
        <form class="signup-form" id="signupForm" action="{{ route('registrasi.store') }}" method="POST">
    @csrf

            <!-- Username -->
            <div class="form-group">
                <label class="form-label">Username</label>
                <input type="text" class="form-input" name="username" required>
            </div>

            <!-- Provinsi -->
            <div class="form-group">
                <label class="form-label">Provinsi</label>
                <select class="form-select" id="provinsi" name="provinsi" required>
                    <option value="">-- Pilih --</option>
                    <option value="aceh">Aceh</option>
                    <option value="sumut">Sumatera Utara</option>
                    <option value="sumbar">Sumatera Barat</option>
                    <option value="riau">Riau</option>
                    <option value="jambi">Jambi</option>
                </select>
            </div>

            <!-- Kecamatan -->
            <div class="form-group">
                <label class="form-label">Kecamatan</label>
                <select class="form-select" id="kecamatan" name="kecamatan" required>
                    <option value="">-- Pilih --</option>
                </select>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" class="form-input" name="email" required>
            </div>

            <!-- Kabupaten -->
            <div class="form-group">
                <label class="form-label">Kabupaten</label>
                <select class="form-select" id="kabupaten" name="kabupaten" required>
                    <option value="">-- Pilih --</option>
                </select>
            </div>

            <!-- Pilih Jenjang -->
            <div class="form-group">
                <label class="form-label">Pilih Jenjang</label>
                <select class="form-select" id="jenjang" name="jenjang" required>
                    <option value="">-- Pilih --</option>
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                    <option value="sma">SMA</option>
                    <option value="smk">SMK</option>
                </select>
            </div>

            <!-- NISN -->
            <div class="form-group">
                <label class="form-label">NISN</label>
                <input type="text" class="form-input" name="nisn" pattern="[0-9]*" required>
            </div>

            <!-- Button Daftar -->
            <div class="button-wrapper">
                <button type="submit" class="submit-button">Daftar</button>
            </div>

            <!-- Pilih Sekolah -->
            <div class="form-group">
                <label class="form-label">Pilih Sekolah</label>
                <select class="form-select" id="sekolah" name="sekolah" required>
                    <option value="">-- Pilih --</option>
                </select>
            </div>
        </form>
    </div>

    <script>
        // Data cascade untuk provinsi -> kabupaten -> kecamatan
        const locationData = {
            'aceh': {
                name: 'Aceh',
                kabupaten: {
                    'banda-aceh': { name: 'Banda Aceh', kecamatan: ['Baiturrahman', 'Kuta Alam', 'Meuraxa'] },
                    'aceh-besar': { name: 'Aceh Besar', kecamatan: ['Lembah Seulawah', 'Lhoong', 'Peukan Bada'] }
                }
            },
            'sumut': {
                name: 'Sumatera Utara',
                kabupaten: {
                    'medan': { name: 'Medan', kecamatan: ['Medan Baru', 'Medan Kota', 'Medan Timur'] },
                    'deli-serdang': { name: 'Deli Serdang', kecamatan: ['Lubuk Pakam', 'Pancur Batu', 'Sibolangit'] }
                }
            }
        };

        const schoolsByJenjang = {
            'sd': ['SDN 1 Contoh', 'SDN 2 Contoh', 'SD Swasta Contoh'],
            'smp': ['SMPN 1 Contoh', 'SMPN 2 Contoh', 'SMP Swasta Contoh'],
            'sma': ['SMAN 1 Contoh', 'SMAN 2 Contoh', 'SMA Swasta Contoh'],
            'smk': ['SMKN 1 Contoh', 'SMKN 2 Contoh', 'SMK Swasta Contoh']
        };

        const provinsiSelect = document.getElementById('provinsi');
        const kabupatenSelect = document.getElementById('kabupaten');
        const kecamatanSelect = document.getElementById('kecamatan');
        const jenjangSelect = document.getElementById('jenjang');
        const sekolahSelect = document.getElementById('sekolah');

        // Update kabupaten berdasarkan provinsi
        provinsiSelect.addEventListener('change', function() {
            kabupatenSelect.innerHTML = '<option value="">-- Pilih --</option>';
            kecamatanSelect.innerHTML = '<option value="">-- Pilih --</option>';
            
            const provinsi = this.value;
            if (provinsi && locationData[provinsi]) {
                Object.keys(locationData[provinsi].kabupaten).forEach(key => {
                    const option = document.createElement('option');
                    option.value = key;
                    option.textContent = locationData[provinsi].kabupaten[key].name;
                    kabupatenSelect.appendChild(option);
                });
            }
        });

        // Update kecamatan berdasarkan kabupaten
        kabupatenSelect.addEventListener('change', function() {
            kecamatanSelect.innerHTML = '<option value="">-- Pilih --</option>';
            
            const provinsi = provinsiSelect.value;
            const kabupaten = this.value;
            
            if (provinsi && kabupaten && locationData[provinsi]?.kabupaten[kabupaten]) {
                locationData[provinsi].kabupaten[kabupaten].kecamatan.forEach(kec => {
                    const option = document.createElement('option');
                    option.value = kec.toLowerCase().replace(/\s+/g, '-');
                    option.textContent = kec;
                    kecamatanSelect.appendChild(option);
                });
            }
        });

        // Update sekolah berdasarkan jenjang
        jenjangSelect.addEventListener('change', function() {
            sekolahSelect.innerHTML = '<option value="">-- Pilih --</option>';
            
            const jenjang = this.value;
            if (jenjang && schoolsByJenjang[jenjang]) {
                schoolsByJenjang[jenjang].forEach(sekolah => {
                    const option = document.createElement('option');
                    option.value = sekolah.toLowerCase().replace(/\s+/g, '-');
                    option.textContent = sekolah;
                    sekolahSelect.appendChild(option);
                });
            }
        });

        // Handle form submission
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Form berhasil disubmit! (Demo mode)');
        });
    </script>
</body>
</html>