<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome - Training Management System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #74ebd5, #acb6e5);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', sans-serif;
      animation: fadeIn 2s ease-in;
    }

    @keyframes fadeIn {
      0% {opacity: 0; transform: translateY(-20px);}
      100% {opacity: 1; transform: translateY(0);}
    }

    .glass-box {
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(15px);
      border-radius: 20px;
      padding: 50px;
      text-align: center;
      color: #fff;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
      max-width: 550px;
      width: 90%;
    }

    .glass-box h1 {
      font-size: 2.6rem;
      font-weight: bold;
      margin-bottom: 30px;
      color: #1a237e; /* Dark navy blue */
    }

    .login-btn {
      display: inline-block;
      width: 80%;
      margin: 10px auto;
      padding: 12px 20px;
      border-radius: 50px;
      font-size: 1.1rem;
      font-weight: 500;
      text-decoration: none;
      color: #ffffff;
      background: rgba(0, 123, 255, 0.7);
      transition: all 0.3s ease;
    }

    .login-btn:hover {
      background: rgba(0, 123, 255, 1);
      transform: scale(1.05);
    }

    .login-btn i {
      margin-right: 8px;
    }
  </style>
</head>
<body>

  <div class="glass-box">
    <h1><i class="fas fa-graduation-cap"></i> Welcome to Training Management System</h1>
    
    <a href="admin/login.php" class="login-btn"><i class="fas fa-user-shield"></i> Admin Login</a>
    <a href="traineeportal/loginregister.php" class="login-btn"><i class="fas fa-user-graduate"></i> Trainee Login</a>
  </div>

</body>
</html>
