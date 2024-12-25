<?php  
session_start();

// Database connection
$server = "localhost";
$username = "root";
$password = "";
$dbname = "docspy";
$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Login logic
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $user_type = mysqli_real_escape_string($con, $_POST['user_type']);

    $sql = "SELECT * FROM users WHERE username='$username' AND user_type='$user_type'";
    $result = mysqli_query($con, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['user_type'] = $user_type;

            // Set the email session variable for patients
            if ($user_type == 'patient') {
                $_SESSION['email'] = $row['email']; // Assuming 'email' is a field in the 'users' table
                header("Location: general.php");
            } elseif ($user_type == 'doctor') {
                header("Location: doctor_home.php");
            }
            exit();
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "No user found with that username and type!";
    }
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocSpy - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('image7.jpg') no-repeat center center fixed;
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

        input, select, button {
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
            animation: moveBackground 35s linear infinite;
        }

        @keyframes moveBackground {
            0% { background-position: 0 0; }
            100% { background-position: 100% 100%; }
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Login - Doctor or Patient</h2>
        <form method="POST" action="login_page.php">
            <select name="user_type" required>
                <option value="doctor">Doctor</option>
                <option value="patient">Patient</option>
            </select>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <p><a href="signup_page.php">Signup</a> | <a href="forget_password.php">Forgot Password?</a></p>
        <br>
        <a href="home_page.php">Home Page</a></p>
    </div>
</body>
</html>
