<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login & Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            min-height: 100vh;
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .auth-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .auth-header {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .auth-header h2 {
            font-size: 1.75rem;
        }

        .auth-tabs {
            display: flex;
            background: #f8f9fa;
        }

        .auth-tab {
            flex: 1;
            padding: 1rem;
            cursor: pointer;
            text-align: center;
            border: none;
        }

        .auth-tab.active {
            background: white;
            color: #6a11cb;
        }

        .auth-content {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 1rem;
        }

        .form-check {
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            width: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
        }

        .forgot-password {
            text-align: center;
            margin-top: 1rem;
        }

        .forgot-password a {
            color: #6a11cb;
        }

        .tab-pane {
            display: none;
        }

        .tab-pane.active {
            display: block;
        }
    </style>
</head>

<body>
    <div class="auth-container">
        <!-- Header -->
        <div class="auth-header">
            <h2 id="headerTitle">Welcome Back</h2>
            <p id="headerSubtitle">Sign in to your account</p>
        </div>

        <!-- Tabs -->
        <div class="auth-tabs">
            <button class="auth-tab active" onclick="switchTab('login')">Login</button>
            <button class="auth-tab" onclick="switchTab('register')">Register</button>
        </div>

        <!-- Content -->
        <div class="auth-content">
            <!-- Login Form -->
            <div class="tab-pane active" id="login-tab">
                <form id="loginForm">
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Enter your username" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password" required>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Sign In</button>

                    <div class="forgot-password">
                        <a href="#">Forgot your password?</a>
                    </div>
                </form>
            </div>

            <!-- Register Form -->
            <div class="tab-pane" id="register-tab">
                <form id="registerForm">
                    <div class="form-group">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter your full name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Choose a username" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="registerPassword" placeholder="Create a password" required>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="terms" required>
                        <label class="form-check-label" for="terms">I agree to the Terms & Conditions</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Account</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Switch between login and register tabs
        function switchTab(tab) {
            document.querySelectorAll('.auth-tab').forEach(t => t.classList.remove('active'));
            event.target.classList.add('active');

            document.querySelectorAll('.tab-pane').forEach(p => p.classList.remove('active'));
            document.getElementById(tab + '-tab').classList.add('active');

            const headerTitle = document.getElementById('headerTitle');
            const headerSubtitle = document.getElementById('headerSubtitle');
            
            if (tab === 'login') {
                headerTitle.textContent = 'Welcome Back';
                headerSubtitle.textContent = 'Sign in to your account';
            } else {
                headerTitle.textContent = 'Create Account';
                headerSubtitle.textContent = 'Join us today';
            }
        }

        // Form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Login successful!');
        });

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Account created successfully!');
        });
    </script>

</body>

</html>