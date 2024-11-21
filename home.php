<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); 
    exit();
}

$username = $_SESSION['username']; // Get the username from the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Berkah Jaya - Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS -->
    <style>
        .banner {
            height: 300px;
            background-size: cover;
        }
        .company-profile {
            background-color: #2b7a78; /* Example background color */
            color: #feffff; /* Example text color */
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }
        /* Footer styles */
        footer {
            background-color: #17252a; /* Dark color for footer */
            color: #feffff; /* Light text color */
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        /* Flexbox for body */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1;
        }
        .navbar {
            background-color: #17252a; 
        }
        .navbar-brand, .nav-link {
            color: #feffff; 
        }
        .container {
            padding-left: 0;
            padding-right: 0;
        }
    </style>
</head>
<body class="d-flex">
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">Laundry Berkah Jaya</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="price_check.php">Check Price</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>

        <div class="content container-fluid"> <!-- Use container-fluid for full width -->
            <h1 class="text-center my-4">Welcome to Laundry Berkah Jaya</h1>
            <div id="bannerSlider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="banner1.jpeg" class="d-block w-100 banner" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="banner2.jpg" class="d-block w-100 banner" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="banner3.png" class="d-block w-100 banner" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#bannerSlider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#bannerSlider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>

            <!-- Company Profile Section -->
            <div class="company-profile">
                <h2 class="text-center">About Us</h2>
                <p>
                    At Laundry Berkah Jaya, we are committed to providing the highest quality laundry services to our customers. 
                    Our mission is to ensure that your laundry is handled with care and returned to you in pristine condition. 
                    We offer a range of services, including wash and dry, ironing, and express laundry services to meet your needs.
                </p>
                <h3>Our Vision</h3>
                <p>
                    To be the leading laundry service provider in the area, known for our exceptional customer service and attention to detail.
                </p>
                <p>
                </p>
            </div>
        </div>

        <footer>
        <h3>Contact Us</h3>
            <p>Location: Jl. Laundry No. 123, Jakarta</p>
            <p>Phone: (021) 123-4567</p>
            <p>Email: info@laundryberkahjaya.com</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
