<?php
session_start();

// Simulated user database
$users = [
    'admin' => 'password123',
    'user' => 'letmein'
];

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (isset($users[$username]) && $users[$username] === $password) {
        // Vulnerable: Doesn't regenerate session ID
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: profile.php');
        exit;
    } else {
        $error = "Invalid credentials!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body class="container mt-5">
  <h2>🔐 Session Fixation Demo</h2>
  
  <?php if (isset($error)): ?>
    <div class="alert alert-danger"><?= $error ?></div>
  <?php endif; ?>
  
  <form method="POST">
    <div class="mb-3">
      <label class="form-label">Username:</label>
      <input type="text" name="username" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Password:</label>
      <input type="password" name="password" class="form-control">
    </div>
    <button class="btn btn-primary" type="submit">Login</button>
  </form>
  
  <div class="mt-3">
    <h4>Attack Scenario:</h4>
    <p>Attacker sets session ID: 
      <a href="?PHPSESSID=HACKED">?PHPSESSID=HACKED</a>
    </p>
    <p>Victim logs in with fixed session</p>
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