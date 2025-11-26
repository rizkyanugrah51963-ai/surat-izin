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
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
        }

        .login-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1), 0 8px 16px rgba(0,0,0,0.1);
            padding: 40px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .material-logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            position: relative;
        }

        .logo-layers {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .layer {
            position: absolute;
            border-radius: 50%;
            width: 100%;
            height: 100%;
        }

        .layer-1 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transform: scale(1);
            opacity: 0.3;
        }

        .layer-2 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transform: scale(0.75);
            opacity: 0.5;
        }

        .layer-3 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transform: scale(0.5);
            opacity: 1;
        }

        .login-header h2 {
            font-size: 24px;
            font-weight: 400;
            color: #202124;
            margin-bottom: 8px;
        }

        .login-header p {
            font-size: 14px;
            color: #5f6368;
            font-weight: 400;
        }

        .form-group {
            margin-bottom: 24px;
            position: relative;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper input {
            width: 100%;
            padding: 12px 0 8px 0;
            font-size: 16px;
            border: none;
            border-bottom: 1px solid #dadce0;
            outline: none;
            background: transparent;
            transition: border-color 0.2s;
            font-family: 'Roboto', sans-serif;
        }

        .input-wrapper input:focus {
            border-bottom: 2px solid #1a73e8;
        }

        .input-wrapper label {
            position: absolute;
            left: 0;
            top: 12px;
            font-size: 16px;
            color: #5f6368;
            pointer-events: none;
            transition: all 0.2s;
        }

        .input-wrapper input:focus + label,
        .input-wrapper input:valid + label {
            top: -8px;
            font-size: 12px;
            color: #1a73e8;
        }

        .password-wrapper {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 0;
            top: 8px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            color: #5f6368;
            font-size: 20px;
        }

        .password-toggle:hover {
            background: rgba(0,0,0,0.04);
            border-radius: 50%;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
        }

        .checkbox-wrapper input[type="checkbox"] {
            width: 18px;
            height: 18px;
            margin-right: 8px;
            cursor: pointer;
            accent-color: #1a73e8;
        }

        .checkbox-label {
            font-size: 14px;
            color: #202124;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .forgot-password {
            font-size: 14px;
            color: #1a73e8;
            text-decoration: none;
            font-weight: 500;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .material-btn {
            width: 100%;
            padding: 12px;
            background: #1a73e8;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: background 0.3s, box-shadow 0.3s;
            text-transform: uppercase;
            margin-bottom: 24px;
        }

        .material-btn:hover {
            background: #1557b0;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }

        .material-btn:active {
            background: #0d47a1;
        }

        .divider {
            text-align: center;
            margin: 24px 0;
            position: relative;
        }

        .divider::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 1px;
            background: #dadce0;
        }

        .divider span {
            background: white;
            padding: 0 16px;
            position: relative;
            color: #5f6368;
            font-size: 14px;
        }

        .social-login {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 24px;
        }

        .social-btn {
            width: 100%;
            padding: 12px;
            border: 1px solid #dadce0;
            background: white;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            cursor: pointer;
            transition: background 0.3s, box-shadow 0.3s;
            font-size: 14px;
            font-weight: 500;
            color: #3c4043;
        }

        .social-btn:hover {
            background: #f8f9fa;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12);
        }

        .social-icon {
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-icon svg {
            width: 100%;
            height: 100%;
        }

        .signup-link {
            text-align: center;
            font-size: 14px;
            color: #5f6368;
        }

        .signup-link a {
            color: #1a73e8;
            text-decoration: none;
            font-weight: 500;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        .success-message {
            display: none;
            background: #4caf50;
            color: white;
            padding: 16px;
            border-radius: 4px;
            margin-bottom: 20px;
            text-align: center;
        }

        .success-message.show {
            display: block;
            animation: slideDown 0.3s ease;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .error-message {
            color: #d93025;
            font-size: 12px;
            margin-top: 4px;
            display: none;
        }

        .error-message.show {
            display: block;
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 24px;
            }
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-card">

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

        <!-- SUCCESS MESSAGE -->
        <div id="successMessage" class="success-message">
            <h3>Welcome back!</h3>
            <p>Signing you in...</p>
        </div>

        <!-- LOGIN FORM -->
        <form id="loginForm">

            <!-- EMAIL FIELD -->
            <div class="form-group">
                <div class="input-wrapper">
                    <input type="email" id="email" name="email" required autocomplete="email">
                    <label for="email">Email</label>
                </div>
                <span class="error-message" id="emailError">Please enter a valid email</span>
            </div>

            <!-- PASSWORD FIELD -->
            <div class="form-group">
                <div class="input-wrapper password-wrapper">
                    <input type="password" id="password" name="password" required autocomplete="current-password">
                    <label for="password">Password</label>
                    <button type="button" class="password-toggle" id="passwordToggle">
                        <span class="toggle-icon">👁️</span>
                    </button>
                </div>
                <span class="error-message" id="passwordError">Password is required</span>
            </div>

            <!-- OPTIONS -->
            <div class="form-options">
                <div class="checkbox-wrapper">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember" class="checkbox-label">
                        Keep me signed in
                    </label>
                </div>

                <a href="#" class="forgot-password">FORGOT PASSWORD?</a>
            </div>

            <!-- BUTTON LOGIN -->
            <button type="submit" class="material-btn">
                <span class="btn-text">SIGN IN</span>
            </button>
        </form>

        <!-- DIVIDER -->
        <div class="divider"><span>or</span></div>

        <!-- SOCIAL LOGIN -->
        <div class="social-login">
            <button type="button" class="social-btn google-material">
                <div class="social-icon google-icon">
                    <svg viewBox="0 0 24 24">
                        <path fill="#4285F4"
                              d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                        <path fill="#34A853"
                              d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                        <path fill="#FBBC05"
                              d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                        <path fill="#EA4335"
                              d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                    </svg>
                </div>
                <span>Continue with Google</span>
            </button>

            <button type="button" class="social-btn facebook-material">
                <div class="social-icon facebook-icon">
                    <svg viewBox="0 0 24 24">
                        <path fill="#1877F2"
                              d="M24 12.073c0-6.627-5.373-12-12-12S0 5.446 0 12.073c0 5.99 4.387 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </div>
                <span>Continue with Facebook</span>
            </button>
        </div>

        <div class="signup-link">
            <p>Don't have an account?
                <a href="#" class="create-account">Create account</a>
            </p>
        </div>

    </div>
</div>

<script>
    // Password Toggle
    const passwordToggle = document.getElementById('passwordToggle');
    const passwordInput = document.getElementById('password');
    
    passwordToggle.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.querySelector('.toggle-icon').textContent = type === 'password' ? '👁️' : '👁️‍🗨️';
    });

    // Form Validation
    const loginForm = document.getElementById('loginForm');
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');
    const successMessage = document.getElementById('successMessage');

    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        
        // Validate email
        if (!emailInput.value || !emailInput.value.includes('@')) {
            emailError.classList.add('show');
            isValid = false;
        } else {
            emailError.classList.remove('show');
        }
        
        // Validate password
        if (!passwordInput.value) {
            passwordError.classList.add('show');
            isValid = false;
        } else {
            passwordError.classList.remove('show');
        }
        
        if (isValid) {
            // Show success message
            successMessage.classList.add('show');
            
            // Simulate login
            setTimeout(() => {
                alert('Login successful! (This is a demo)');
                loginForm.reset();
                successMessage.classList.remove('show');
            }, 1500);
        }
    });

    // Remove error on input
    emailInput.addEventListener('input', function() {
        emailError.classList.remove('show');
    });

    passwordInput.addEventListener('input', function() {
        passwordError.classList.remove('show');
    });
</script>

</body>
</html>