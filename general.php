<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Medicine | Healthcare Website</title>
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        
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
        <li><a href="home_page.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">Home</a></li>
            <li><a href="our_services.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">Our Plans</a></li>
            <li><a href="about_us.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">About Us</a></li>

            <li><a href="contact_us.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">Contact</a></li>
        </ul>
    </nav>
</header>


    <main>
        <section class="hero">
            <h1>Your Health is Our Priority</h1>
            <p>Expert medical guidance and support for your health needs.</p>
            <a href="appointment.php"><button>Book an Appointment</button></a>
            <a href="patient.php"><button>Show my appointments</button></a>
            <br>
            <img src="home_pageimg.jpg" alt="General Medicine Image">
        </section>
        
        <section class="features">
            <h2>Our Services</h2>
            <ul>
                <li>
                    <i class="fas fa-stethoscope"></i>
                    <h3>Comprehensive Consultations</h3>
                    <p>Receive thorough medical evaluations and personalized care plans.</p>
                </li>
                <li>
                    <i class="fas fa-clipboard-list"></i>
                    <h3>Routine Checkups</h3>
                    <p>Stay healthy with regular checkups and preventive care.</p>
                </li>
                <li>
                    <i class="fas fa-medkit"></i>
                    <h3>Emergency Services</h3>
                    <p>Access immediate care for urgent health issues, 24/7.</p>
                </li>
            </ul>
        </section>



        <section class="testimonials">
            <h2>What Our Patients Say</h2>
            <ul>
                <li>
                    <p>"The care I received was exceptional, and the doctors were very attentive."</p>
                    <span>Sumit Shinde</span>
                </li>
                <li>
                    <p>"I appreciate the convenience of online consultations!"</p>
                    <span>Vaishnavi Patil</span>
                </li>
            </ul>
        </section>
        
    </main>
    <footer>
        <p>&copy; 2024 DocSpy. All rights reserved.</p>
    </footer>

    <!-- Link to the external JavaScript file -->
    <script src="project_js/index.js"></script>
</body>
</html>
