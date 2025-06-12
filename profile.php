<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body class="container mt-5">
  <h2>👤 User Profile</h2>
  
  <div class="alert alert-success">
    Welcome, <?= $_SESSION['username'] ?>!<br>
    Session ID: <?= session_id() ?>
  </div>
  
  <!-- Vulnerable to XSS via username -->
  <script>
  document.write(`<div class="alert alert-info">Last login: ${new Date()}</div>`);
  </script>
  
  <a href="logout.php" class="btn btn-danger">Logout</a>
  
  <footer class="mt-5 text-center text-muted">
    &copy; 2025 Netrinix Solutions - Educational Use Only
  </footer>
  
  <script>
  function toggleTheme() {
    document.body.classList.toggle("bg-dark");
    document.body.classList.toggle("text-light");
  }
  </script>
  <button onclick="toggleTheme()" class="btn btn-sm btn-outline-secondary position-fixed top-0 end-0 m-3">🌓 Toggle Theme</button>
</body>
</html>