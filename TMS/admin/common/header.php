<?php 
session_start();
if($_SESSION['loggedin'] != TRUE){
  header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard - Training Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #e0eafc, #cfdef3);
    }

    .sidebar {
      height: 100vh;
      background: #3e3ea1;
      color: #fff;
      position: fixed;
    }

    .sidebar h4 {
      padding: 20px 0;
      border-bottom: 1px solid #444;
    }

    .sidebar a {
      color: #bbb;
      display: flex;
      align-items: center;
      padding: 12px 20px;
      text-decoration: none;
      transition: 0.3s;
    }

    .sidebar a i {
      margin-right: 10px;
      font-size: 1.1rem;
    }

    .sidebar a:hover {
      background-color: #343a40;
      color: #fff;
    }

    main {
      margin-left: 16.66%; /* 2/12 */
      padding: 2rem;
    }

    .card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h5 {
      font-weight: 600;
    }

    .card p {
      font-size: 2rem;
      margin: 0;
    }

    @media (max-width: 768px) {
      .sidebar {
        display: none;
      }
      main {
        margin: 0;
      }
    }
  </style>
</head>