<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = $_POST['comment'] . " [IP: {$_SERVER['REMOTE_ADDR']}]";
    file_put_contents("store/comments.txt", $comment . PHP_EOL, FILE_APPEND);
    echo "<div class='alert alert-success'>Comment saved!</div>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Stored XSS</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body class="container mt-5">
  <h2>📝 Stored XSS Demo</h2>
  <form method="POST">
    <div class="mb-3">
      <textarea name="comment" rows="4" class="form-control" 
                placeholder="Try: <script>alert('XSS')</script>"></textarea>
    </div>
    <button class="btn btn-success" type="submit">Submit Comment</button>
  </form>
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