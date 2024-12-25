<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - DocSpy</title>
    <link rel="icon" href="health.jpeg" type="image/jpg">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        h2 {
            text-align: center;
            color: teal;
            margin: 20px 0;
            font-size: 2.5em;
        }
        .service-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }
        .service-card {
            background-color: #fff;
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }
        .service-card:hover {
            transform: scale(1.05);
        }
        .service-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .service-card h3 {
            font-size: 1.8em;
            margin: 10px 0;
            color: #FF5722;
        }
        .service-card p {
            font-size: 1em;
            color: #555;
        }
        .service-card .price {
            font-size: 1.2em;
            color: teal;
            margin: 15px 0;
            display: none;
        }
        .service-card button {
            background-color: #ff9900;
            border: none;
            padding: 10px 20px;
            color: #fff;
            font-size: 1.1em;
            cursor: pointer;
            border-radius: 5px;
        }
        .service-card button:hover {
            background-color: #cc7a00;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        footer p {
            margin: 0;
            font-size: 0.9em;
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
    <script>
        // JavaScript function to toggle price range visibility
        function togglePrice(serviceId) {
            var priceElement = document.getElementById(serviceId);
            if (priceElement.style.display === "none" || priceElement.style.display === "") {
                priceElement.style.display = "block";
            } else {
                priceElement.style.display = "none";
            }
        }
    </script>
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
                <li><a href="about_us.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">About Us</a></li>
                
                <li><a href="contact_us.php" style="color: white; text-decoration: none; font-size: 1.2em; position: relative; padding-bottom: 5px; transition: transform 0.3s ease, color 0.3s ease;">Contact</a></li>
            </ul>
        </nav>
    </header>

    <h2>Our Services</h2>
    <div class="service-container">
        <!-- Mental Health Service -->
        <div class="service-card">
            <img src="mental.jpeg" alt="Mental Health">
            <h3>Mental Health</h3>
            <p>Get expert counseling and mental health services from certified professionals.</p>
            <div class="price" id="mental_health_price">Price: ₹500</div>
            <button onclick="togglePrice('mental_health_price')">Show Price</button>
        </div>
        
        <!-- Health Plan Service -->
        <div class="service-card">
            <img src="health.jpeg" alt="Health Plan">
            <h3>Health Plan</h3>
            <p>Choose from a variety of health plans that suit your needs and budget.</p>
            <div class="price" id="health_plan_price">Price: ₹1000</div>
            <button onclick="togglePrice('health_plan_price')">Show Price</button>
        </div>

        <!-- General OPD Service -->
        <div class="service-card">
            <img src="general1.jpeg" alt="General OPD">
            <h3>General OPD</h3>
            <p>Get consultations for common ailments and health check-ups at affordable rates.</p>
            <div class="price" id="general_opd_price">Price: ₹ 700</div>
            <button onclick="togglePrice('general_opd_price')">Show Price</button>
        </div>
    </div>
<br>
<br>
    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 DocSpy. All rights reserved.</p>
    </footer>

</body>
</html>
