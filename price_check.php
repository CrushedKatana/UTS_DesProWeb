<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Price - Laundry Berkah Jaya</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Laundry Service</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="price_check.php">Check Price</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </header>

    <div class="container my-4">
        <h2 class="text-center">Price Check</h2>
        <form id="priceForm">
            <div class="form-group">
                <label for="weight">Weight (kg):</label>
                <input type="number" class="form-control" id="weight" min="1" required>
            </div>
            <div class="form-group">
                <label for="service">Service Type:</label>
                <select class="form-control" id="service">
                    <option value="wash_dry">Wash Dry</option>
                    <option value="wash_ironing">Wash and Ironing</option>
                    <option value="ironing_only">Ironing Only</option>
                </select>
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <select class="form-control" id="type">
                    <option value="regular">Regular</option>
                    <option value="express">Express</option>
                </select>
            </div>
            <div class="form-group">
                <label for="membership">Membership:</label>
                <select class="form-control" id="membership">
                    <option value="non_member">Non Member</option>
                    <option value="member">Member</option>
                </select>
            </div>
            <div class="form-group">
                <label for="coupon">Coupon:</label>
                <input type="checkbox" id="coupon"> Use 2kg Free Coupon
            </div>
            <button type="button" class="btn btn-primary btn-block" onclick="calculatePrice()">Check</button>
        </form>

        <h3 class="text-center my-4" id="totalPrice"></h3>
    </div>

    <footer>
        <p>Location: Jl. Laundry No. 123, Jakarta</p>
        <p>Phone: (021) 123-4567</p>
    </footer>

    <script>
        function calculatePrice() {
            let weight = parseInt(document.getElementById('weight').value);
            if (isNaN(weight) || weight < 1) {
                alert('Please enter a valid weight.');
                return;
            }

            let service = document.getElementById('service').value;
            let type = document.getElementById('type').value;
            let membership = document.getElementById('membership').value;

            let pricePerKg = service === 'wash_dry' ? 10000 : service === 'wash_ironing' ? 15000 : 12000;
            if (type === 'express') {
                pricePerKg *= 1.5; // 50% more for express service
            }
            let totalPrice = weight * pricePerKg;

            if (membership === 'member') {
                totalPrice *= 0.9; // 10% discount for members
            }

            if (document.getElementById('coupon').checked) {
                totalPrice -= 20000; // 20,000 discount if coupon is used
            }

            document.getElementById('totalPrice').textContent = `Total Price: Rp ${totalPrice.toLocaleString()}`;
        }
    </script>
</body>
</html>


