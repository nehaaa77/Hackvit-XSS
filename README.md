<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HackVIT XSS Lab - Netrinix</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #141e30, #243b55);
      font-family: 'Orbitron', sans-serif;
      color: #ffffff;
      overflow-x: hidden;
    }
    .header {
      text-align: center;
      padding-top: 5rem;
    }
    .glitch {
      font-size: 3rem;
      color: #0ff;
      text-shadow: 0 0 5px #0ff, 0 0 10px #0ff, 0 0 15px #0ff;
      animation: glitch 2s infinite;
    }
    @keyframes glitch {
      0% { text-shadow: 0 0 5px #0ff; }
      50% { text-shadow: 2px 2px #0ff, -2px -2px #f0f; }
      100% { text-shadow: 0 0 5px #0ff; }
    }
    .btn-glow {
      background-color: #00bcd4;
      border: none;
      color: black;
      font-weight: bold;
      box-shadow: 0 0 10px #00bcd4;
      transition: 0.3s ease;
    }
    .btn-glow:hover {
      background-color: #0097a7;
      box-shadow: 0 0 20px #00bcd4;
      color: white;
    }
    .card {
      background-color: #1c1c1c;
      border: 1px solid #333;
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: scale(1.05);
    }
    footer {
      text-align: center;
      margin-top: 4rem;
      padding: 1rem;
      background-color: #101010;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1 class="glitch">HackVIT XSS Lab</h1>
      <p class="lead text-light">An educational platform to learn and test XSS vulnerabilities</p>
      <a href="https://github.com/nehaaa77/Hackvit-XSS/archive/refs/heads/main.zip" class="btn btn-glow mt-4">📦 Download Project</a>
    </div>

    <div class="row mt-5">
      <div class="col-md-4">
        <div class="card p-3 text-white">
          <h4>🔍 Reflected XSS</h4>
          <p>Learn how to execute scripts via reflected input in URLs and forms.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 text-white">
          <h4>💾 Stored XSS</h4>
          <p>Explore how malicious input can persist on the server and affect multiple users.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 text-white">
          <h4>📜 DOM-Based XSS</h4>
          <p>Understand JavaScript-level vulnerabilities directly in the DOM environment.</p>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <h5>👩‍💻 Maintained by: <span class="text-info">Netrinix Solutions</span></h5>
      <p>📧 Contact us at <a href="mailto:contact@netrinix.com" class="text-warning">contact@netrinix.com</a></p>
    </div>
  </div>

  <footer>
    &copy; 2025 Netrinix Solutions. All rights reserved.
  </footer>
</body>
</html>
