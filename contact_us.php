<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - DocSpy</title>
    <link rel="icon" href="health.jpeg" type="image/jpg">
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

        /* Contact Section */
        .contact-section {
            padding: 60px 20px;
            text-align: center;
            background-color: #f0f8ff;
        }

        .contact-section h2 {
            font-size: 2.5em;
            color: teal;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .contact-section p {
            font-size: 1.2em;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
        }

        .contact-info {
            margin: 40px 0;
        }

        .contact-info div {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 20px;
        }

        .contact-info div i {
            color: teal;
            margin-right: 10px;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 30px;
        }

        footer p {
            font-size: 0.9em;
        }

        /* Animations */
        .contact-info div {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
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
    

            </ul>
        </nav>
    </header>

    <!-- Contact Section -->
    <section class="contact-section">
        <h2>Contact Us</h2>
        <p>If you have any questions, concerns, or feedback, feel free to reach out to us. Our team at DocSpy is always here to help you with your healthcare needs.</p>

        <div class="contact-info">
            <div><i class="fas fa-user"></i>Team DocSpy</div>
            <div><i class="fas fa-envelope"></i>Email: teamdocspy@gmail.com</div>
            <div><i class="fas fa-phone"></i>Phone: +91-9876543210</div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 DocSpy. All rights reserved.</p>
    </footer>

</body>
</html>
