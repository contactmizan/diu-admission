<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DIU Admission - Registration</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="container mt-5 d-flex justify-content-center">
  <div class="col-md-6 bg-white p-4 rounded shadow">
    <h2 class="text-center mb-4">Registration Form</h2>
    
    <!-- Send form data to register.php -->
    <form action="register.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="fullname" class="form-label">Full Name</label>
        <input type="text" name="fullname" class="form-control" id="fullname" required>
      </div>
      <div class="mb-3">
        <label for="department" class="form-label">Department</label>
        <input type="text" name="department" class="form-control" id="department" required>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" name="phone" class="form-control" id="phone" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" required>
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" class="form-control" id="address" required>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Upload Image</label>
        <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
    
    <div class="mt-3 text-center">
      <p>Already registered? <a href="login.php">Login here</a></p>
      <p><a href="index.php">Back to Home</a></p>
    </div>
  </div>
</div>
</body>
</html>
