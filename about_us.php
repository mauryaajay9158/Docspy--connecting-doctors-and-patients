<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - DocSpy</title>
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

        /* About Us Section */
        .about-section {
            padding: 60px 20px;
            text-align: center;
            background-color: #f4f4f4;
        }

        .about-section h2 {
            font-size: 2.5em;
            color: teal;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .about-section p {
            font-size: 1.2em;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
        }

        .about-image {
            margin: 40px 0;
        }

        .about-image img {
            width: 100%;
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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
            <li><a href="Home_page.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">Home</a></li>   
            <li><a href="our_services.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">Our Plans</a></li>


                <li><a href="contact_us.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- About Us Section -->
    <section class="about-section">
        <h2>About DocSpy</h2>
        <p>DocSpy is your trusted health partner, dedicated to connecting patients and doctors seamlessly. Our mission is to simplify healthcare access, enabling patients to schedule appointments, consult with healthcare providers, and receive personalized care from the comfort of their homes or at our partner clinics. Our platform brings you a range of medical services, from general consultations to specialized treatments, designed to meet your unique healthcare needs.</p>

        <div class="about-image">
            <img src="home_pageimg.jpg" alt="DocSpy Team">
        </div>

        <p>Founded with the vision to bridge the gap between healthcare professionals and patients, DocSpy provides easy-to-use digital tools that make healthcare more accessible, affordable, and effective. Whether you're looking for preventive care, mental health support, or chronic disease management, we are here to support you on your health journey.</p>
    </section>
<br>
    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 DocSpy. All rights reserved.</p>
    </footer>

</body>
</html>
