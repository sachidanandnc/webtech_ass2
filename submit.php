<?php error_reporting(E_ALL); ini_set('display_errors', 1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Submitted</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Application Submitted Successfully 🎉</h1>
  </header>

  <main class="container">
    <h2>Submitted Details</h2>
    <table style="width:100%; margin-top:20px; border-collapse:collapse;">
      <tr><td><b>Full Name:</b></td><td><?php echo htmlspecialchars($_POST['fullname']); ?></td></tr>
      <tr><td><b>Email:</b></td><td><?php echo htmlspecialchars($_POST['email']); ?></td></tr>
      <tr><td><b>Phone:</b></td><td><?php echo htmlspecialchars($_POST['phone']); ?></td></tr>
      <tr><td><b>Gender:</b></td><td><?php echo htmlspecialchars($_POST['gender']); ?></td></tr>
      <tr><td><b>Course:</b></td><td><?php echo htmlspecialchars($_POST['course']); ?></td></tr>
      <tr><td><b>Address:</b></td><td><?php echo nl2br(htmlspecialchars($_POST['address'])); ?></td></tr>
    </table>
  </main>

  <footer>
    <p>© 2025 Doctor Strange | RVITM | Hosted on Render</p>
  </footer>
</body>
</html>
