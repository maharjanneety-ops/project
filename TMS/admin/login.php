<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Training Management System</title>
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


        <!-- Content -->
        <div class="auth-content">
            <!-- Login Form -->
            <a href="index.php" class="btn-home"> Home</a>

<?php
session_start();
include('common/dbsetting.php');
$error= '';

if(isset($_POST['login'])){

    $email=$_POST['email'];
    $password= md5($_POST['pass']);

    $query="SELECT * FROM admin WHERE email='$email' AND password = '$password'";
    $res=mysqli_query($connection,$query);
    $row = mysqli_fetch_array($res);

    if(!empty($row)){
        $_SESSION['userid'] = $row['Admin_id'];
        $_SESSION['loggedin'] = TRUE;

        header('Location:dashboard.php');
    }else{
        $error= 'Login Failed';
    }

}

?>



            <p class="text-danger"><?php echo $error;?> </p>
            <div class="tab-pane active" id="login-tab">

                <form id="loginForm" method="post" action="">
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter your username" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control" id="loginPassword" placeholder="Enter your password" required>
                    </div>

                    

                    <button type="submit" name="login" class="btn btn-primary">Sign In</button>

                    
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>