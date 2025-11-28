<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Material Register</title>

<style>
/* ====================== GLOBAL ====================== */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Roboto', sans-serif;
}

body{
    background:#f1f5f9;
    display:flex;
    justify-content:center;
    padding:50px 15px;
}

.container{
    width:100%;
    max-width:700px;
    background:white;
    padding:40px 50px;
    border-radius:20px;
    box-shadow:0 4px 20px rgba(0,0,0,.1);
}

/* ====================== TITLE ====================== */
.title{
    text-align:center;
    font-size:36px;
    font-weight:700;
    color:#1e40af;
    margin-bottom:40px;
}

/* ====================== GRID FORM ====================== */
.grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:25px;
}

.form-group{
    display:flex;
    flex-direction:column;
}

label{
    font-size:16px;
    font-weight:600;
    margin-bottom:8px;
}

input, select{
    width:100%;
    padding:15px;
    border:none;
    background:#f8fafc;
    border-radius:18px;
    font-size:15px;
    outline:none;
    box-shadow:0 0 0 1px #e2e8f0 inset;
    transition:.2s;
}

input:focus, select:focus{
    box-shadow:0 0 0 2px #2563eb inset;
}

/* ====================== REGISTER BUTTON ====================== */
.btn-submit{
    grid-column:span 2;
    margin-top:20px;
    background:#2563eb;
    color:white;
    border:none;
    border-radius:30px;
    font-size:26px;
    font-weight:700;
    cursor:pointer;
    width:190px;
    height:85px;
    margin-left:auto;
    margin-right:auto;
    display:flex;
    align-items:center;
    justify-content:center;
    box-shadow:0 6px 20px rgba(0,0,0,.2);
    transition:.3s;
}

.btn-submit:hover{
    background:#1d4ed8;
    transform:translateY(-3px);
}

.success-box{
    display:none;
    text-align:center;
    padding:25px;
    background:#e0ffe1;
    border-radius:15px;
    border:2px solid #16a34a;
    margin-top:30px;
}

.success-box h3{
    color:#166534;
    font-size:24px;
    font-weight:700;
}

</style>
</head>

<body>

<div class="container">

    <div class="title">Sign Up</div>

    <form id="registerForm" class="grid">

        <div class="form-group">
            <label>Username</label>
            <input type="text" id="username" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" id="email" required>
        </div>

        <div class="form-group">
            <label>Masukan NISN Anda</label>
            <input type="password" id="password" required>
        </div>

        <div class="form-group">
            <label>Konfirmasi NISN Anda</label>
            <input type="password" id="confirmPassword" required>
        </div>

        <div class="form-group">
            <label>Provinsi</label>
            <select id="provinsi">
                <option value="">-- Pilih Provinsi --</option>
            </select>
        </div>

        <div class="form-group">
            <label>Kabupaten</label>
            <select id="kabupaten">
                <option value="">-- Pilih Kabupaten --</option>
            </select>
        </div>

        <div class="form-group">
            <label>Kecamatan</label>
            <select id="kecamatan">
                <option value="">-- Pilih Kecamatan --</option>
            </select>
        </div>

        <div class="form-group">
            <label>Pilih Jenjang</label>
            <select id="jenjang">
                <option value="">-- Pilih Jenjang --</option>
                <option>SD</option>
                <option>SMP</option>
                <option>SMA</option>
                <option>SMK</option>
            </select>
        </div>

        <div class="form-group">
            <label>Pilih Sekolah</label>
            <select id="sekolah">
                <option value="">-- Pilih Sekolah --</option>
            </select>
        </div>


        <!-- BUTTON -->
        <button type="submit" class="btn-submit">Daftar</button>

    </form>

    <!-- SUCCESS BOX -->
    <div class="success-box" id="successBox">
        <h3>Registrasi Berhasil!</h3>
        <p>Akun kamu sudah dibuat.</p>
    </div>

</div>

<!-- ====================== JAVASCRIPT ====================== -->
<script>

// ================= DATA SIMULASI =================
const dataAlamat = {
    "Jawa Barat":{
        "Bandung":{
            "Coblong":["SDN 1","SMPN 2","SMAN 3","SMKN 4"],
            "Antapani":["SD Antapani","SMP Mandiri","SMAN 22"]
        },
        "Bogor":{
            "Cibinong":["SD Cibinong","SMP Cibinong","SMK Cibinong"]
        }
    },

    "Jawa Tengah":{
        "Semarang":{
            "Tembalang":["SD Tembalang","SMP Tembalang","SMA Tembalang"]
        }
    }
};

// ==================== DOM ELEMENT ====================
const provinsi = document.getElementById("provinsi");
const kabupaten = document.getElementById("kabupaten");
const kecamatan = document.getElementById("kecamatan");
const sekolah = document.getElementById("sekolah");

// ==================== LOAD PROVINSI ====================
for(let p in dataAlamat){
    provinsi.innerHTML += `<option>${p}</option>`;
}

// ==================== CHANGE PROVINSI ====================
provinsi.addEventListener("change", ()=>{
    kabupaten.innerHTML = `<option>-- Pilih Kabupaten --</option>`;
    kecamatan.innerHTML = `<option>-- Pilih Kecamatan --</option>`;
    sekolah.innerHTML = `<option>-- Pilih Sekolah --</option>`;

    if(provinsi.value){
        const listKab = Object.keys(dataAlamat[provinsi.value]);
        listKab.forEach(k=>{
            kabupaten.innerHTML += `<option>${k}</option>`;
        });
    }
});

// ==================== CHANGE KABUPATEN ====================
kabupaten.addEventListener("change", ()=>{
    kecamatan.innerHTML = `<option>-- Pilih Kecamatan --</option>`;
    sekolah.innerHTML = `<option>-- Pilih Sekolah --</option>`;

    if(kabupaten.value){
        const listKec = Object.keys(dataAlamat[provinsi.value][kabupaten.value]);
        listKec.forEach(k=>{
            kecamatan.innerHTML += `<option>${k}</option>`;
        });
    }
});

// ==================== CHANGE KECAMATAN ====================
kecamatan.addEventListener("change", ()=>{
    sekolah.innerHTML = `<option>-- Pilih Sekolah --</option>`;

    if(kecamatan.value){
        const listSek = dataAlamat[provinsi.value][kabupaten.value][kecamatan.value];
        listSek.forEach(s=>{
            sekolah.innerHTML += `<option>${s}</option>`;
        });
    }
});

// ====================== HANDLE SUBMIT ======================
document.getElementById("registerForm").addEventListener("submit", function(e){
    e.preventDefault();

    if(document.getElementById("password").value !== document.getElementById("confirmPassword").value){
        alert("Password tidak sama!");
        return;
    }

    document.getElementById("successBox").style.display = "block";
});

</script>

</body>
</html>
