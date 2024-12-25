<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocSpy Website</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 20px 50px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .logo-icon {
            font-size: 30px;
            color: #00b0ff;
            margin-right: 10px;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-weight: 500;
        }

        .navbar ul li a.active,
        .navbar ul li a:hover {
            color: #00b0ff;
        }

        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 100px 50px;
        }

        .hero-text {
            max-width: 600px;
        }

        .hero-text h1 {
            font-size: 48px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #666;
        }

        .hero-text .plus-icon {
            color: #00b0ff;
            font-size: 40px;
        }

        .learn-more-btn {
            background-color: #00b0ff;
            color: #fff;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .learn-more-btn:hover {
            background-color: #007bff;
        }

        /* Hero Image */
        .hero-image {
            width: 50%;
        }

        .hero-image img {
            max-width: 100%;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #fff;
            box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        footer p {
            color: #666;
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
            <li><a href="home_page.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">Home</a></li>

        </ul>
    </nav>
</header>


    <!-- DocSpy Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>DOCSPY <span class="plus-icon">+</span></h1>
            <p>Providing the best medical services with advanced technology.</p>
            <a href="doctor.php" class="learn-more-btn">Open Dashboard</a>
        </div>
        <div class="hero-image">
            <img src="https://img.freepik.com/free-photo/young-handsome-physician-medical-robe-with-stethoscope_1303-17818.jpg" alt="Healthcare illustration">
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2024 DocSpy. All rights reserved.</p>
    </footer>
</body>
</html>