<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $department = $_POST['department'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Handle image upload
    $imageName = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];
    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    $targetPath = $uploadDir . basename($imageName);
    move_uploaded_file($imageTmp, $targetPath);

    // Insert into database
    $sql = "INSERT INTO students (fullname, department, phone, email, address, image, password) 
            VALUES ('$fullname', '$department', '$phone', '$email', '$address', '$imageName', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful!'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.location='registration.php';</script>";
    }
}
?>
