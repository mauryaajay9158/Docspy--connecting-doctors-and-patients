<?php 
// Database connection
$host = 'localhost';
$dbname = 'docspy';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Update meeting link in the database if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['meeting_link'])) {
        $appointment_id = $_POST['appointment_id'];
        $meeting_link = $_POST['meeting_link'];
        
        $sql = "UPDATE appointments SET meeting_link = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$meeting_link, $appointment_id]);

        echo "Meeting link sent successfully!";
    }

    // Fetch patient appointment data
    $sql = "SELECT * FROM appointments";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $appointments = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctor Dashboard</title>
    <style>
        /* Internal CSS for header, footer, and table */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* background: plum; */
        }
        /* header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 1em;
        } */
        footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 1em;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: teal;
            color: tea;
        }
        /* Pop-up style */
        #paymentPopup {
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
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 300px;
        }
        #closePopup {
            cursor: pointer;
            font-size: 20px;
            color: red;
        }
        #popupImage {
            width: 100%;
            height: auto;
        }


        

/* General Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

a {
    text-decoration: none;
    color: #333;
}

/* Header */
header {
    background-color: teal;
    color: white;
    height: 95px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
    font-family: 'Arial', sans-serif;
}

.logo-container {
    display: flex;
    align-items: center;
}

.logo-container img {
    height: 60px;
    margin-right: 15px;
}

h1 {
    font-size: 3em;
}

/* Navigation menu */
nav ul {
    list-style: none;
    display: flex;
    gap: 30px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 1.2em;
    transition: transform 0.3s ease, color 0.3s ease;
    position: relative;
    padding-bottom: 5px;
}

nav ul li a::after {
    content: '';
    width: 0;
    height: 2px;
    background-color: white;
    position: absolute;
    left: 0;
    bottom: 0;
    transition: width 0.3s ease;
}

nav ul li a:hover {
    color: #FFD700;
    transform: scale(1.1);
}

nav ul li a:hover::after {
    width: 100%;
}


    </style>
</head>
<body>
<!-- Header Section -->
<header style="background-color: teal; color: white; height: 95px; display: flex; justify-content: space-between; align-items: center; padding: 0 20px; font-family: 'Arial', sans-serif;">
    <div class="logo-container" style="display: flex; align-items: center;">
        <img src="img1.jpg" alt="DocSpy Logo" style="height: 60px; margin-right: 15px;">
        <h1 style="font-size: 3em;">DocSpy</h1>
    </div>
    <nav>
        <ul style="list-style: none; display: flex; gap: 30px;">
        <li><a href="doctor_home.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">Back</a></li>
            <li><a href="home_page.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">Home Page</a></li>
           
            
        </ul>
    </nav>
</header>

    <h1 style="text-align: center;">Doctors Dashboard</h1>


    <div style="padding: 20px;">
        <h2>Patient Appointments</h2>
        <table>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Service</th>
                <th>Preferred Date</th>
                <th>Preferred Time</th>
                <th>Additional Info</th>
                <th>Check Payment</th>
                <th>Create Meeting</th>
                <th>Meeting Link</th>
                <th>Send Link</th>
                <th>Link Send Status</th>
                <th>Join Meeting</th>
            </tr>

            <?php foreach ($appointments as $appointment): ?>
                <tr>
                    <td><?php echo htmlspecialchars($appointment['full_name']); ?></td>
                    <td><?php echo htmlspecialchars($appointment['email']); ?></td>
                    <td><?php echo htmlspecialchars($appointment['phone']); ?></td>
                    <td><?php echo htmlspecialchars($appointment['service']); ?></td>
                    <td><?php echo htmlspecialchars($appointment['preferred_date']); ?></td>
                    <td><?php echo htmlspecialchars($appointment['preferred_time']); ?></td>
                    <td><?php echo htmlspecialchars($appointment['additional_info']); ?></td>
                    <td>
                        <?php if (!empty($appointment['payment_screenshot'])): ?>
                            <button onclick="openPaymentPopup('<?php echo $appointment['payment_screenshot']; ?>')">Check Payment</button>
                        <?php else: ?>
                            No payment uploaded
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="https://calendar.google.com/calendar/u/0/r/month" target="_blank">
                            <button>Create Meeting</button>
                        </a>
                    </td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="appointment_id" value="<?php echo $appointment['id']; ?>">
                            <input type="text" name="meeting_link" placeholder="Enter meeting link" required>
                    </td>
                    <td>
                            <button type="submit">Send Link</button>
                        </form>
                    </td>
                    <td>
                        <!-- Status: Yes if meeting link is sent, No if not -->
                        <?php if (!empty($appointment['meeting_link'])): ?>
                            Yes
                        <?php else: ?>
                            No
                        <?php endif; ?>
                    </td>
                    <td>
                        <!-- Join Meeting Button: Only show if the link is available -->
                        <?php if (!empty($appointment['meeting_link'])): ?>
                            <a href="<?php echo htmlspecialchars($appointment['meeting_link']); ?>" target="_blank">
                                <button>Join Meeting</button>
                            </a>
                        <?php else: ?>
                            No meeting link
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <!-- Payment Screenshot Popup -->
    <div id="paymentPopup">
        <div id="popupContent">
            <span id="closePopup" onclick="closePaymentPopup()">X</span>
            <img id="popupImage" src="" alt="Payment Screenshot">
        </div>
    </div>

    <script>
        function openPaymentPopup(imageName) {
            document.getElementById('popupImage').src = 'uploads/' + imageName;
            document.getElementById('paymentPopup').style.display = 'flex';
        }

        function closePaymentPopup() {
            document.getElementById('paymentPopup').style.display = 'none';
        }
    </script>
</body>
</html>
