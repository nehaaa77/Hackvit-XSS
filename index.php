<?php
session_start();
// Set session cookie without HttpOnly flag
setcookie('PHPSESSID', session_id(), time() + 3600, '/', '', false, false);
?>
<!DOCTYPE html>
<html>
<head>
  <title>XSS Lab</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body class="container mt-5">
  <h1>🔓 XSS Demonstration Lab</h1>
  
  <!-- Reflected XSS -->
  <div class="card my-4">
    <div class="card-header bg-danger text-white">Reflected XSS</div>
    <div class="card-body">
      <form method="GET">
        <div class="mb-3">
          <label class="form-label">Search:</label>
          <input type="text" name="search" class="form-control">
        </div>
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
      <?php
      if (isset($_GET['search'])) {
          echo "<div class='mt-3 alert alert-info'>Search results for: " . $_GET['search'] . "</div>";
      }
      ?>
    </div>
  </div>
  
  <!-- DOM-based XSS -->
  <div class="card my-4">
    <div class="card-header bg-warning">DOM-based XSS</div>
    <div class="card-body">
      <a href="?dom=<script>alert('DOM XSS')</script>" class="btn btn-warning">Test DOM XSS</a>
      <script>
        const params = new URLSearchParams(window.location.search);
        if(params.has('dom')) {
          document.write(`<div class="mt-3">DOM Output: ${params.get('dom')}</div>`);
        }
      </script>
    </div>
  </div>
  
  <div class="mt-4">
    <a href="comment.php" class="btn btn-success me-2">Stored XSS</a>
    <a href="view.php" class="btn btn-secondary me-2">View Comments</a>
    <a href="brute.php" class="btn btn-danger me-2">Session Bruteforce</a>
    <a href="mitb.php" class="btn btn-info me-2">MITB Demo</a>
    <a href="login.php" class="btn btn-primary">Session Fixation</a>
  </div>
  
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