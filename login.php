<?php
session_start();
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin = $_POST['username'];
    $pass = $_POST['password'];

    // Simple authentication (replace with DB check later)
    if ($admin === 'admin' && $pass === '12345') {
        $_SESSION['admin'] = $admin;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid login details.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <style>
    body { font-family: Arial; text-align: center; margin-top: 50px; }
    input { margin: 10px; padding: 10px; }
    .login-box { width: 300px; margin: auto; padding: 20px; border: 1px solid #aaa; border-radius: 8px; }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Admin Login</h2>
    <?php if ($error) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
