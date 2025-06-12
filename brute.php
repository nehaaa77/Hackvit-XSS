<?php
session_start();
if (!isset($_SESSION['session_id'])) {
    $_SESSION['session_id'] = bin2hex(random_bytes(4));
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Session Bruteforce</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body class="container mt-5">
  <h2>💻 Session ID Bruteforce</h2>
  <div class="alert alert-info">Your Session ID: <?= $_SESSION['session_id'] ?></div>
  
  <?php
  if (isset($_GET['sid'])) {
      echo "<p>Trying: <strong>" . htmlspecialchars($_GET['sid']) . "</strong></p>";
      if ($_GET['sid'] === $_SESSION['session_id']) {
          echo "<div class='alert alert-success'>✅ Valid session ID!</div>";
      } else {
          echo "<div class='alert alert-danger'>❌ Invalid session ID!</div>";
      }
  }
  ?>
  
  <form method="GET" class="mt-3">
    <input type="text" name="sid" class="form-control mb-2" 
           placeholder="Enter session ID">
    <button class="btn btn-danger" type="submit">Validate</button>
  </form>
  
  <div class="mt-4">
    <a href="index.php" class="btn btn-secondary">Back to Home</a>
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