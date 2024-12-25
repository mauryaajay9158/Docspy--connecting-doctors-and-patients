<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocSpy</title>
    <link rel="icon" href="health.jpeg" type="image/jpg"> <!-- Favicon for the website -->
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
            color: #fff;
            padding: 20px 0;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }
        .logo-container {
            display: flex;
            align-items: center;
        }
        .logo-container img {
            height: 60px;
            margin-right: 15px;
        }
        header h1 {
            font-size: 2.5em;
        }
        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: #fff;
            font-size: 1.2em;
            padding: 10px 20px;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }
        nav ul li a:hover {
            border: 2px solid #fff;
        }
        /* Hero Section */
        .hero {
            background: url('home1.webp') no-repeat center center/cover;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
            animation: zoomInBackground 10s infinite alternate;
        }

        @keyframes zoomInBackground {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        .hero h2 {
            font-size: 3em;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.5em;
            margin-bottom: 30px;
        }
        .hero button {
            padding: 15px 30px;
            background-color: #ff9900;
            border: none;
            color: #fff;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .hero button:hover {
            background-color: #cc7a00;
        }
        /* Services Section */
        .services {
            padding: 50px 0;
            text-align: center;
        }
        .services h3 {
            font-size: 2.2em;
            margin-bottom: 40px;
        }
        .service-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .service {
            background: #f4f4f4;
            padding: 30px;
            margin: 15px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .service:hover {
            transform: scale(1.05);
        }
        .service img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .service h4 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .service p {
            font-size: 1em;
        }
        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        footer p {
            font-size: 0.9em;
        }

        /* Header with background and logo */
        header {
            /* background-image: url('nightview.jpg');
            background-size: cover; */
            background-position: center;
            background-repeat: no-repeat;
            height: 95px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            color: white;
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

    <!-- Header -->
    <header>
        <div class="logo-container">
            <img src="img1.jpg" alt="DocSpy Logo">
            <h1>DocSpy</h1>
        </div>
        <nav>
            <ul>
                <li><a href="our_services.php">Our Plans</a></li>
                <li><a href="about_us.php">About Us</a></li>
                
                <li><a href="contact_us.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div>
        <h2 style="font-family: 'Georgia', serif; color: teal; font-size: 3em; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); padding: 10px; background: linear-gradient(to right, #f0f0f0, #e0f7fa); border-radius: 10px;">
    Your Health Partner
</h2>
<p style="font-family: 'Arial', sans-serif; color: #FF5722; font-size: 1.5em; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); padding: 10px; background: linear-gradient(to right, #f0f0f0, #ffe0b2); border-radius: 10px;">
    Connecting Patients and Doctors with Ease
</p>

            <button onclick="window.location.href='login_page.php'">Get Started</button>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <h3>Our Services</h3>
        <div class="service-container">
            <div class="service">
                <img src="doc4.jpeg" alt="Service 1">
                <h4>Easy Appointments</h4>
                <p>Book appointments with doctors effortlessly through our platform.</p>
            </div>
            <div class="service">
                <img src="health.jpeg" alt="Service 2">
                <h4>Consultation Options</h4>
                <p>Choose in-person or virtual consultations with our certified doctors.</p>
            </div>
            <div class="service">
                <img src="mental.jpeg" alt="Service 3">
                <h4>Healthcare Assistance</h4>
                <p>Get personalized healthcare support and treatment plans.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 DocSpy. All rights reserved.</p>
    </footer>

</body>
</html>
