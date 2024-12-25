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
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $service = $_POST['service'];
        $preferred_date = $_POST['preferred_date'];
        $preferred_time = $_POST['preferred_time'];
        $additional_info = $_POST['additional_info'];

        // Check if file is uploaded
        if (isset($_FILES['payment_screenshot']) && $_FILES['payment_screenshot']['error'] == 0) {
            // Upload file to the server
            $file_tmp = $_FILES['payment_screenshot']['tmp_name'];
            $file_name = $_FILES['payment_screenshot']['name'];
            $file_path = "uploads/" . $file_name; // Ensure that the "uploads" folder exists with appropriate permissions
            
            if (move_uploaded_file($file_tmp, $file_path)) {
                // Insert appointment and payment screenshot data into the database
                $sql = "INSERT INTO appointments (full_name, email, phone, service, preferred_date, preferred_time, additional_info, payment_screenshot) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$full_name, $email, $phone, $service, $preferred_date, $preferred_time, $additional_info, $file_name]);

                // Success message with popup
                echo "<script>
                        alert('Thank you for choosing our platform. We will connect with you shortly and send the appointment meeting link based on your preferences. For any assistance, feel free to contact us.');
                        window.location.href='appointment.php'; // Redirect to the same page after showing the message
                      </script>";
            } else {
                echo "Failed to upload payment screenshot.";
            }
        } else {
            echo "Please upload the payment screenshot!";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book an Appointment</title>
    <link rel="stylesheet" href="appointment.css">

    <style>
        /* Style for the Pay Now pop-up */
        #payNowPopup {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        #popupContent {
            position: relative;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }
        #popupContent img {
            width: 100%;
            height: auto;
        }
        #closePopup {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
            font-size: 20px;
            color: red;
        }
    </style>
</head>
<body>
    <h1>Appointment Booking Form</h1>
    
    <form method="POST" action="appointment.php" enctype="multipart/form-data">
        <label>Full Name:</label>
        <input type="text" name="full_name" required><br><br>
        
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        
        <label>Phone:</label>
        <input type="text" name="phone" required><br><br>
        
        <label>Service:</label>
        <select name="service" required>
            <option value="Mental Health">Mental Health</option>
            <option value="Health Plan">Health Plan</option>
            <option value="General OPD">General OPD</option>
        </select><br><br>
        
        <label>Preferred Date:</label>
        <input type="date" name="preferred_date" required><br><br>
        
        <label>Preferred Time:</label>
        <input type="time" name="preferred_time" required><br><br>
        
        <label>Additional Information:</label>
        <textarea name="additional_info"></textarea><br><br>

        <!-- Pay Now button -->
        <button type="button" onclick="openPayNowPopup()">Pay Now</button><br><br>

        <!-- Upload Payment Screenshot -->
        <label>Upload Screenshot of Payment:</label>
        <input type="file" name="payment_screenshot" accept="image/*" required><br><br>

        <button type="submit">Submit</button>
    </form>

    <!-- Pay Now Popup -->
    <div id="payNowPopup">
        <div id="popupContent">
            <span id="closePopup" onclick="closePayNowPopup()">X</span>
            <img src="qrcode.jpeg" alt="QR Code for Payment">
        </div>
    </div>

    <script>
        function openPayNowPopup() {
            document.getElementById('payNowPopup').style.display = 'flex';
        }

        function closePayNowPopup() {
            document.getElementById('payNowPopup').style.display = 'none';
        }
    </script>
</body>
</html>
