<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>MITB Demo</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body class="container mt-5">
  <h2>👁️ Man-in-the-Browser (MITB) Demo</h2>
  
  <div class="alert alert-warning">
    <h4>Fake Login Form</h4>
    <form id="stealForm">
      <div class="mb-3">
        <label class="form-label">Username:</label>
        <input type="text" class="form-control" id="username">
      </div>
      <div class="mb-3">
        <label class="form-label">Password:</label>
        <input type="password" class="form-control" id="password">
      </div>
      <button type="submit" class="btn btn-danger">Login</button>
    </form>
  </div>
  
  <div id="result" class="mt-3"></div>
  
  <script>
  document.getElementById('stealForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    // Simulate credential theft
    document.getElementById('result').innerHTML = `
      <div class="alert alert-success">
        <h4>Credentials Stolen!</h4>
        <p>Username: ${username}</p>
        <p>Password: ${password}</p>
        <p>Session ID: <?= session_id() ?></p>
        <p>Now imagine this being sent to attacker's server</p>
      </div>
    `;
  });
  </script>
  
  <a href="index.php" class="btn btn-secondary mt-3">Back to Home</a>
  
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