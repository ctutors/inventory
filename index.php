<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS Homepage</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Hero Section */
        .hero {
            background: url('index.jpg') no-repeat center center/cover;
            color: white;
            height: 100vh;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin: 0;
            font-weight: bold;
            text-transform: uppercase;
            color: #ff3366;
        }

        .hero p {
            font-size: 1.2rem;
            margin: 10px 0;
            max-width: 600px;
        }

        /* Login Button */
        .login-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #ff3366;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            z-index: 10;
            text-transform: uppercase;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
        }

        .login-button:hover {
            background-color: darkred;
        }

        /* Features Section */
        .features {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            flex-wrap: wrap;
            padding: 40px 20px;
            background-color: #f4f4f4;
        }

        .feature {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 30%; /* Adjust the width as needed */
            margin: 10px;
        }

        .feature img {
            max-width: 50;
            margin-bottom: 15px;
        }

        .feature h3 {
            font-size: 1.5rem;
            margin: 10px 0;
            color: #333;
        }

        .feature p {
            font-size: 1rem;
            color: #666;
        }

        .notify-section {
            background: #f7f7f7;
            padding: 40px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            text-align: center;
        }

        .notify-section .text {
            max-width: 600px;
            margin: 10px auto;
        }

        .notify-section .email-form {
            display: flex;
            margin: 20px auto;
        }

        .email-form input {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px 0 0 4px;
            flex: 1;
        }

        .email-form button {
            padding: 10px 20px;
            background: #ff3366;
            color: white;
            border: none;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            font-size: 1rem;
        }

        .email-form button:hover {
            background: #ff5588;
        }

        .footer {
            background: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .footer-icons {
            margin: 10px 0;
        }

        .footer-icons i {
            margin: 0 10px;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .footer-icons i:hover {
            color: #ff3366;
        }

        .footer-links {
            margin-top: 10px;
        }

        .footer-links a {
            color: #ddd;
            margin: 0 10px;
            text-decoration: none;
        }

        .footer-links a:hover {
            color: white;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <a href="login.php" class="login-button">Login</a>
        <h1>ON THE GO MOBILE REPORTING</h1> 
        <h2>Ctutors Inventory Management System</h2>
        <p>Track your goods throughout your entire supply chain, from purchasing to production to end sales.</p>
        <div>
            <img src="app-icon.png" alt="App Store" style="margin-right: 10px;">
            <img src="play-icon.png" alt="Google Play">
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="feature">
            <img src="icon1.png" alt="Feature 1">
            <h3>Editable Theme</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla fringilla.</p>
        </div>
        <div class="feature">
            <img src="icon2.png" alt="Feature 2">
            <h3>Flat Design</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla fringilla.</p>
        </div>
        <div class="feature">
            <img src="icon3.png" alt="Feature 3">
            <h3>Reach Your Audience</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla fringilla.</p>
        </div>
    </section>

    <!-- Notify Section -->
    <section class="notify-section">
        <div class="text">
            <h2>Get Notified of Any Updates!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla fringilla. Please sign up to receive updates.</p>
        </div>
        <div class="email-form">
            <input type="email" placeholder="Email Address">
            <button>Notify</button>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <p>Say Hi & Get in Touch</p>
        <div class="footer-icons">
            <i class="icon-facebook"></i>
            <i class="icon-twitter"></i>
            <i class="icon-linkedin"></i>
            <i class="icon-instagram"></i>
        </div>
        <div class="footer-links">
            <a href="#">Contact</a>
            <a href="#">Download</a>
            <a href="#">Press</a>
            <a href="#">Email</a>
            <a href="#">Support</a>
            <a href="#">Privacy Policy</a>
        </div>
    </footer>
</body>
</html>
