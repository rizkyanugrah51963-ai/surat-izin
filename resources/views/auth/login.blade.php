<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        /* --- STYLE YANG SAMA DENGAN LOGIN ASLI --- */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Roboto', sans-serif; background: #f5f5f5; display: flex; justify-content: center; align-items: center; min-height: 100vh; padding: 20px; }
        .login-container { width: 100%; max-width: 400px; }
        .login-card { background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1), 0 8px 16px rgba(0,0,0,0.1); padding: 40px; }
        .login-header { text-align: center; margin-bottom: 30px; }
        .material-logo { width: 80px; height: 80px; margin: 0 auto 20px; position: relative; }
        .logo-layers { width: 100%; height: 100%; position: relative; }
        .layer { position: absolute; border-radius: 50%; width: 100%; height: 100%; }
        .layer-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); transform: scale(1); opacity: 0.3; }
        .layer-2 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); transform: scale(0.75); opacity: 0.5; }
        .layer-3 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); transform: scale(0.5); opacity: 1; }
        .login-header h2 { font-size: 24px; font-weight: 400; color: #202124; margin-bottom: 8px; }
        .login-header p { font-size: 14px; color: #5f6368; font-weight: 400; }
        .form-group { margin-bottom: 24px; position: relative; }
        .input-wrapper { position: relative; }
        .input-wrapper input { width: 100%; padding: 12px 0 8px 0; font-size: 16px; border: none; border-bottom: 1px solid #dadce0; outline: none; background: transparent; transition: border-color 0.2s; font-family: 'Roboto', sans-serif; }
        .input-wrapper input:focus { border-bottom: 2px solid #1a73e8; }
        .input-wrapper label { position: absolute; left: 0; top: 12px; font-size: 16px; color: #5f6368; pointer-events: none; transition: all 0.2s; }
        .input-wrapper input:focus+label, .input-wrapper input:valid+label { top: -8px; font-size: 12px; color: #1a73e8; }
        .password-wrapper { position: relative; }
        .password-toggle { position: absolute; right: 0; top: 8px; background: none; border: none; cursor: pointer; padding: 8px; color: #5f6368; font-size: 20px; }
        .password-toggle:hover { background: rgba(0,0,0,0.04); border-radius: 50%; }
        .form-options { display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; }
        .material-btn { width: 100%; padding: 12px; background: #1a73e8; color: white; border: none; border-radius: 4px; font-size: 14px; font-weight: 500; letter-spacing: 0.5px; cursor: pointer; transition: background 0.3s, box-shadow 0.3s; text-transform: uppercase; margin-bottom: 24px; }
        .material-btn:hover { background: #1557b0; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24); }
        .divider { text-align: center; margin: 24px 0; position: relative; }
        .divider::before { content: ''; position: absolute; left: 0; top: 50%; width: 100%; height: 1px; background: #dadce0; }
        .divider span { background: white; padding: 0 16px; position: relative; color: #5f6368; font-size: 14px; }
        .success-message { display: none; background: #4caf50; color: white; padding: 16px; border-radius: 4px; margin-bottom: 20px; text-align: center; }
        .success-message.show { display: block; animation: slideDown 0.3s ease; }
        @keyframes slideDown { from { opacity: 0; transform: translateY(-20px); } to { opacity: 1; transform: translateY(0); } }
        .error-message { color: #d93025; font-size: 12px; margin-top: 4px; display: none; }
        .error-message.show { display: block; }
        @media (max-width: 480px) { .login-card { padding: 24px; } }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">

```
        <!-- LOGO & HEADER -->
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

        <!-- SUCCESS MESSAGE AFTER REGISTER -->
        @if (session('success'))
        <div class="success-message show">
            <h3>Success!</h3>
            <p>{{ session('success') }}</p>
        </div>
        @endif

        <!-- LOGIN FORM -->
        <form id="loginForm" method="POST" action="{{ route('login.process') }}">
            @csrf

            <!-- EMAIL FIELD -->
            <div class="form-group">
                <div class="input-wrapper">
                    <input type="email" id="email" name="email" required autocomplete="email">
                    <label for="email">Email</label>
                </div>
                <span class="error-message" id="emailError">Please enter a valid email</span>
            </div>

            <!-- NISN / PASSWORD FIELD -->
            <div class="form-group">
                <div class="input-wrapper password-wrapper">
                    <input type="password" id="password" name="password" required autocomplete="current-password">
                    <label for="password">NISN</label>
                    <button type="button" class="password-toggle" id="passwordToggle"><span class="toggle-icon">👁️</span></button>
                </div>
                <span class="error-message" id="passwordError">Password is required</span>
            </div>

            <!-- OPTIONS -->
            <div class="form-options two-sides">
                <a href="{{ route('register.form') }}" class="left-link">REGISTER</a>
                <a href="{{ route('forgot.nisn.form') }}" class="right-link">LUPA NISN?</a>
            </div>

            <!-- BUTTON LOGIN -->
            <button type="submit" class="material-btn"><span class="btn-text">SIGN IN</span></button>
        </form>

    </div>
</div>

<script>
    const passwordToggle = document.getElementById('passwordToggle');
    const passwordInput = document.getElementById('password');

    passwordToggle.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.querySelector('.toggle-icon').textContent = type === 'password' ? '👁️' : '👁️‍🗨️';
    });
</script>
```

</body>

</html>
