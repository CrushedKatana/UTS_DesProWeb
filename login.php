<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Berkah Jaya - login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS -->
    <style>
        .banner {
            height: 300px;
            background-size: cover;
        }
        .company-profile {
            background-color: #2b7a78; 
            color: #feffff; 
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }
        /* Footer styles */
        footer {
            background-color: #17252a; 
            color: #feffff; 
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

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

    <div class="login-container">
        <h2 class="text-center">Login</h2>
        <form action="login_process.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>

    <footer>
        <p>Location: Jl. Laundry No. 123, Jakarta</p>
        <p>Phone: (021) 123-4567</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
