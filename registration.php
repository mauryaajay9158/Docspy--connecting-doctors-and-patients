<?php
// Database connection
$host = 'localhost';
$dbname = 'docspy'; // Change to your database name
$username = 'root'; // Change if needed
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve form data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $blood_group = $_POST['blood_group'];

        // Insert data into the database
        $sql = "INSERT INTO patients (first_name, last_name, email, phone, address, city, gender, age, blood_group) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$first_name, $last_name, $email, $phone, $address, $city, $gender, $age, $blood_group]);

        echo "Patient registered successfully!";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Registration</title>
    

</head>
<body>
    <h1>Patient Registration Form</h1>
    <form method="POST" action="registration.php">
        <label>First Name:</label>
        <input type="text" name="first_name" required><br><br>
        
        <label>Last Name:</label>
        <input type="text" name="last_name" required><br><br>
        
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        
        <label>Phone:</label>
        <input type="text" name="phone" required><br><br>
        
        <label>Address:</label>
        <input type="text" name="address" required><br><br>
        
        <label>City:</label>
        <input type="text" name="city" required><br><br>
        
        <label>Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br><br>
        
        <label>Age:</label>
        <input type="number" name="age" required><br><br>
        
        <label>Blood Group:</label>
        <input type="text" name="blood_group" required><br><br>
        
        <button type="submit">Register Patient</button>
    </form>

    <br><br>
    <form action="appointment.php">
        <button type="submit">Book an Appointment</button>
    </form>
</body>
</html>
