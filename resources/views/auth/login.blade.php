<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: url('/user/assets/img/lorong.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* CARD LOGIN */
        .login-card {
            width: 100%;
            max-width: 380px;
            background: rgba(255, 255, 255, 0.93);
            backdrop-filter: blur(3px);
            border-radius: 12px;
            padding: 35px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
        }

        .login-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .material-logo {
            width: 70px;
            height: 70px;
            margin: 0 auto 15px;
            position: relative;
        }

        .layer {
            position: absolute;
            border-radius: 50%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .layer-1 { opacity: 0.3; transform: scale(1); }
        .layer-2 { opacity: 0.5; transform: scale(0.75); }
        .layer-3 { opacity: 1; transform: scale(0.5); }

        .login-header h2 {
            font-size: 23px;
            font-weight: 500;
            color: #202124;
        }

        .login-header p {
            color: #5f6368;
            font-size: 13px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper input {
            width: 100%;
            padding: 12px 0 6px;
            font-size: 15px;
            border: none;
            border-bottom: 1px solid #dadce0;
            outline: none;
            background: transparent;
            transition: 0.2s;
        }

        .input-wrapper input:focus {
            border-bottom: 2px solid #1a73e8;
        }

        .input-wrapper label {
            position: absolute;
            left: 0;
            top: 12px;
            font-size: 15px;
            color: #5f6368;
            pointer-events: none;
            transition: 0.25s;
        }

        .input-wrapper input:focus+label,
        .input-wrapper input:valid+label {
            top: -7px;
            font-size: 12px;
            color: #1a73e8;
        }

        .password-toggle {
            position: absolute;
            right: 0;
            top: 5px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 6px;
            font-size: 20px;
            color: #5f6368;
        }

        .material-btn {
            width: 100%;
            padding: 11px;
            border: none;
            border-radius: 6px;
            background: #1a73e8;
            color: white;
            cursor: pointer;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 15px;
        }

        .material-btn:hover {
            background: #1557b0;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .form-options a {
            font-size: 13px;
            color: #1a73e8;
            text-decoration: none;
        }

        .form-options a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-card">

        <!-- LOGO & HEADER -->
        <div class="login-header">
            <div class="material-logo">
                <div class="layer layer-1"></div>
                <div class="layer layer-2"></div>
                <div class="layer layer-3"></div>
            </div>

            <h2>Sign In</h2>
            <p>to continue to your account</p>
        </div>

        <!-- SUCCESS MESSAGE -->
        @if (session('success'))
            <div style="background:#4caf50;color:white;padding:12px;border-radius:6px;margin-bottom:15px;text-align:center;">
                {{ session('success') }}
            </div>
        @endif

        <!-- LOGIN FORM -->
        <form method="POST" action="{{ route('login.process') }}">
            @csrf

            <!-- EMAIL -->
            <div class="form-group">
                <div class="input-wrapper">
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
            </div>

            <!-- PASSWORD -->
            <div class="form-group">
                <div class="input-wrapper">
                    <input type="password" id="password" name="password" required>
                    <label>NISN</label>

                    <button type="button" class="password-toggle" id="togglePass">👁️</button>
                </div>
            </div>

            <button type="submit" class="material-btn">Sign In</button>

            <div class="form-options">
                <a href="{{ route('register.form') }}">Register</a>
                <a href="{{ route('forgot.nisn.form') }}">Lupa NISN?</a>
            </div>

        </form>
    </div>

    <script>
        document.getElementById('togglePass').addEventListener('click', function () {
            const pwd = document.getElementById('password');
            pwd.type = pwd.type === 'password' ? 'text' : 'password';
        });
    </script>

</body>
</html>
