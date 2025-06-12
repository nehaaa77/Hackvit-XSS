<!DOCTYPE html>
<html>
<head>
  <title>View Comments</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body class="container mt-5">
  <h2>🗂️ Stored Comments</h2>
  <?php
  if(file_exists("store/comments.txt")) {
    $comments = file("store/comments.txt");
    foreach ($comments as $line) {
        echo "<div class='alert alert-light border'>" . htmlspecialchars($line) . "</div>";
    }
  }
  ?>
  <a href="comment.php" class="btn btn-secondary mt-3">Add Comment</a>
  
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