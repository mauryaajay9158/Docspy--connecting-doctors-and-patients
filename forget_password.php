<?php 
// Database connection
$server = "localhost";
$username = "root";
$password = "";
$dbname = "docspy";
$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle password reset
if (isset($_POST['reset_password'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $security_answer = mysqli_real_escape_string($con, $_POST['security_answer']);
    $new_password = mysqli_real_escape_string($con, $_POST['new_password']);

    // Verify the security answer
    $sql = "SELECT * FROM users WHERE username='$username' AND security_answer='$security_answer'";
    $result = mysqli_query($con, $sql);

    if ($result->num_rows > 0) {
        // If the security answer is correct, update the password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $update_sql = "UPDATE users SET password='$hashed_password' WHERE username='$username'";

        if (mysqli_query($con, $update_sql)) {
            echo "Password reset successful!";
        } else {
            echo "Error updating password: " . mysqli_error($con);
        }
    } else {
        echo "Incorrect username or security answer!";
    }
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('image8.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            background: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
            width: 300px;
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            animation: bounceText 2s infinite;
        }

        input, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Animation for fade-in effect */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Animation for bouncing text */
        @keyframes bounceText {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Animation for background movement */
        body {
            background-position: 0 0;
            animation: moveBackground 40s linear infinite;
        }

        @keyframes moveBackground {
            0% { background-position: 0 0; }
            100% { background-position: 100% 100%; }
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <form action="forget_password.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="security_answer" placeholder="Security Answer" required>
            <input type="password" name="new_password" placeholder="New Password" required>
            <button type="submit" name="reset_password">Reset Password</button>
        </form>
        <p><a href="login_page.php">Back to Login</a></p>
        <br>
        <a href="home_page.php">Home Page</a></p>
    </div>
</body>
</html>
