<?php 
session_start(); // Start the session

// Database connection
$host = 'localhost';
$dbname = 'docspy'; // Change to your database name
$username = 'root'; // Change if needed
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if email is stored in the session
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email']; // Get email from session

        // Fetch patient appointment data
        $sql = "SELECT * FROM appointments WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);
        $appointments = $stmt->fetchAll();
    } else {
        echo "No email found in session!";
        exit; // Prevent further execution
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit; // Prevent further execution
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Appointments</title>
    <style>
        /* Internal CSS for table */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 1em;
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
            background-color: #4CAF50;
            color: white;
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
            <li><a href="general.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">Back</a></li>
            <li><a href="about_us.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">About Us</a></li>
            <li><a href="contact_us.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">Contact</a></li>
            <li><a href="our_services.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">Our plans</a></li>
            
        </ul>
    </nav>
</header>
<h1 style="text-align: center;color:teal;">Your Appointments</h1>

    <div style="padding: 20px;">
        <table>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Service</th>
                <th>Preferred Date</th>
                <th>Preferred Time</th>
                <th>Additional Info</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php if (!empty($appointments)): ?>
                <?php foreach ($appointments as $appointment): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($appointment['full_name']); ?></td>
                        <td><?php echo htmlspecialchars($appointment['email']); ?></td>
                        <td><?php echo htmlspecialchars($appointment['phone']); ?></td>
                        <td><?php echo htmlspecialchars($appointment['service']); ?></td>
                        <td><?php echo htmlspecialchars($appointment['preferred_date']); ?></td>
                        <td><?php echo htmlspecialchars($appointment['preferred_time']); ?></td>
                        <td><?php echo htmlspecialchars($appointment['additional_info']); ?></td>
                        
                        <!-- Status column -->
                        <td>
                            <?php if (!empty($appointment['meeting_link'])): ?>
                                Video consulting is scheduled
                            <?php else: ?>
                                Pending
                            <?php endif; ?>
                        </td>

                        <!-- Action column with Join Video Consulting button -->
                        <td>
                            <?php if (!empty($appointment['meeting_link'])): ?>
                                <a href="<?php echo htmlspecialchars($appointment['meeting_link']); ?>" target="_blank">
                                    <button>Join Video Consulting</button>
                                </a>
                            <?php else: ?>
                                No meeting link provided
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="9">No appointments found for this email.</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>
