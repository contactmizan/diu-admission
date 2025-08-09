<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DIU Admission - Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-5 d-flex justify-content-center">
  <div class="col-md-6 bg-white p-4 rounded shadow">
    <h2 class="text-center mb-4">Login</h2>
    <form action="authenticate.php" method="POST">
      <div class="mb-3">
        <label for="loginEmail" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="loginEmail" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
    <div class="mt-3 text-center">
      <p>Not registered yet? <a href="registration.php">Register here</a></p>
      <p><a href="index.php">Back to Home</a></p>
    </div>
  </div>
</div>
</body>
</html>
