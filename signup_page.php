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

// Signup logic
if (isset($_POST['signup'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $user_type = mysqli_real_escape_string($con, $_POST['user_type']);
    $security_question = mysqli_real_escape_string($con, $_POST['security_question']);
    $security_answer = mysqli_real_escape_string($con, $_POST['security_answer']);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password, user_type, security_question, security_answer) 
            VALUES ('$username', '$email', '$hashed_password', '$user_type', '$security_question', '$security_answer')";

    if (mysqli_query($con, $sql)) {
        echo "Signup successful! You can now log in.";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocSpy - Signup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('image 4.jpg') no-repeat center center fixed;
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
            animation: moveBackground 45s linear infinite;
        }

        @keyframes moveBackground {
            0% { background-position: 0 0; }
            100% { background-position: 100% 100%; }
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Signup - Doctor or Patient</h2>
        <form method="POST" action="signup_page.php">
            <select name="user_type" required>
                <option value="doctor">Doctor</option>
                <option value="patient">Patient</option>
            </select>
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <select name="security_question" required>
                <option value="Who was your first teacher?">Who was your first teacher?</option>
                <option value="What is your pet's name?">What is your pet's name?</option>
                <option value="Which is your favorite actor?">Which is your favorite actor?</option>
            </select>
            <input type="text" name="security_answer" placeholder="Security Answer" required>
            <button type="submit" name="signup">Signup</button>
        </form>
        <p><a href="login_page.php">Already have an account? Login here</a></p>
    </div>
</body>
</html>
