<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<style>
* { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Roboto', sans-serif; }
body { background: #f1f5f9; display: flex; justify-content: center; padding: 50px 15px; }
.container { width: 100%; max-width: 700px; background: white; padding: 40px 50px; border-radius: 20px; box-shadow: 0 4px 20px rgba(0,0,0,.1); }
.title { text-align: center; font-size: 36px; font-weight: 700; color: #1e40af; margin-bottom: 40px; }
.grid { display: grid; grid-template-columns: 1fr 1fr; gap: 25px; }
.form-group { display: flex; flex-direction: column; }
label { font-size: 16px; font-weight: 600; margin-bottom: 8px; }
input, select { width: 100%; padding: 15px; border: none; background: #f8fafc; border-radius: 18px; font-size: 15px; outline: none; box-shadow: 0 0 0 1px #e2e8f0 inset; transition: .2s; }
input:focus, select:focus { box-shadow: 0 0 0 2px #2563eb inset; }
.btn-submit { grid-column: span 2; margin-top: 20px; background: #2563eb; color: white; border: none; border-radius: 30px; font-size: 26px; font-weight: 700; cursor: pointer; width: 190px; height: 85px; margin-left: auto; margin-right: auto; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 20px rgba(0,0,0,.2); transition: .3s; }
.btn-submit:hover { background: #1d4ed8; transform: translateY(-3px); }
.success-box { text-align: center; padding: 25px; background: #e0ffe1; border-radius: 15px; border: 2px solid #16a34a; margin-top: 30px; }
.success-box h3 { color: #166534; font-size: 24px; font-weight: 700; }
</style>
</head>
<body>
<div class="container">
<div class="title">Sign Up</div>

<form class="grid" method="POST" action="{{ route('register.store') }}">
@csrf

<div class="form-group">
    <label>Username</label>
    <input type="text" name="username" value="{{ old('username') }}" required>
</div>

<div class="form-group">
    <label>Nama Lengkap</label>
    <input type="text" name="name" value="{{ old('name') }}" required>
</div>

<div class="form-group">
    <label>Email</label>
    <input type="email" name="email" value="{{ old('email') }}" required>
</div>

<div class="form-group">
    <label>NISN</label>
    <input type="text" name="nisn" required>
</div>

<div class="form-group">
    <label>Konfirmasi NISN</label>
    <input type="text" name="nisn_confirmation" required>
</div>

<button type="submit" class="btn-submit">Daftar</button>
</form>

@if(session('success'))
<div class="success-box">
<h3>{{ session('success') }}</h3>
</div>
@endif

</div>
</body>
</html>
