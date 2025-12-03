@extends('layouts.auth')

@section('content')
<style>
    * {margin:0; padding:0; box-sizing:border-box;}
    body {font-family:'Roboto',sans-serif; background:#f5f5f5;}
    .login-container {width:100%; max-width:400px; margin:0 auto;}
    .login-card {
        background:white; border-radius:8px; padding:40px;
        box-shadow:0 2px 4px rgba(0,0,0,0.1),0 8px 16px rgba(0,0,0,0.1);
    }
    .login-header {text-align:center; margin-bottom:30px;}
    .material-logo {width:80px; height:80px; margin:0 auto 20px; position:relative;}
    .logo-layers {width:100%; height:100%; position:relative;}
    .layer {position:absolute; border-radius:50%; width:100%; height:100%;}
    .layer-1 {background:linear-gradient(135deg,#667eea,#764ba2); opacity:0.3;}
    .layer-2 {background:linear-gradient(135deg,#667eea,#764ba2); transform:scale(.75); opacity:0.5;}
    .layer-3 {background:linear-gradient(135deg,#667eea,#764ba2); transform:scale(.5);}
    .form-group {margin-bottom:24px; position:relative;}
    .input-wrapper {position:relative;}
    .input-wrapper input {
        width:100%; padding:12px 0 8px; border:none;
        border-bottom:1px solid #dadce0; font-size:16px;
        background:transparent; outline:none;
    }
    .input-wrapper input:focus {border-bottom:2px solid #1a73e8;}
    .input-wrapper label {
        position:absolute; left:0; top:12px; font-size:16px;
        color:#5f6368; transition:.2s;
    }
    .input-wrapper input:focus+label,
    .input-wrapper input:not(:placeholder-shown)+label {
        top:-8px; font-size:12px; color:#1a73e8;
    }
    .material-btn {
        width:100%; padding:12px; border:none;
        background:#1a73e8; color:white;
        font-weight:500; border-radius:4px;
        margin-top:10px; cursor:pointer;
    }
    .material-btn:hover {background:#1557b0;}
    .form-options {display:flex; justify-content:space-between; margin-top:10px;}
    .form-options a {color:#1a73e8; text-decoration:none; font-size:14px;}
    .form-options a:hover {text-decoration:underline;}
    .error-message {
        color:#d93025; font-size:12px; margin-top:3px;
    }
    .alert-box {
        background:#e8f5e9; color:#388e3c;
        padding:10px; text-align:center;
        border-radius:4px; margin-bottom:15px;
    }
</style>

<div class="login-container">
    <div class="login-card">

        {{-- SUCCESS MESSAGE --}}
        @if (session('success'))
            <div class="alert-box">{{ session('success') }}</div>
        @endif

        {{-- ERROR MESSAGE --}}
        @if (session('error'))
            <div class="alert-box" style="background:#ffebee; color:#c62828;">
                {{ session('error') }}
            </div>
        @endif

        <!-- LOGO -->
        <div class="login-header">
            <div class="material-logo">
                <div class="logo-layers">
                    <div class="layer layer-1"></div>
                    <div class="layer layer-2"></div>
                    <div class="layer layer-3"></div>
                </div>
            </div>
            <h2>Sign in</h2>
            <p>to continue to your account</p>
        </div>

        <!-- LOGIN FORM -->
        <form method="POST" action="{{ route('login.process') }}">
            @csrf

            <!-- EMAIL -->
            <div class="form-group">
                <div class="input-wrapper">
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           required
                           placeholder=" "
                    >
                    <label>Email</label>
                </div>
                @error('email')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <!-- PASSWORD -->
            <div class="form-group">
                <div class="input-wrapper">
                    <input type="password"
                           name="password"
                           required
                           placeholder=" "
                    >
                    <label>Password</label>
                </div>
                @error('password')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <button class="material-btn">
                SIGN IN
            </button>
        </form>

        <!-- OPTIONS -->
        <div class="form-options">
            <a href="{{ route('register') }}">REGISTER</a>
            <a href="{{ route('forgot.nisn') }}">LUPA NISN?</a>
        </div>

    </div>
</div>

@endsection
