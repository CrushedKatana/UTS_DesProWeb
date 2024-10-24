function calculatePrice() {
    let weight = parseInt(document.getElementById('weight').value);
  
    // Ensure weight is a valid integer
    if (isNaN(weight) || weight <= 0) {
      document.getElementById('totalPrice').innerHTML = 'Please enter a valid weight';
      return;
    }
  
    let service = document.getElementById('service').value;
    let type = document.getElementById('type').value;
    let membership = document.getElementById('membership').value;
    let coupon = document.getElementById('coupon').checked;
  
    // Service prices per kilo
    let pricePerKilo = 0;
    if (service === 'wash_dry') {
      pricePerKilo = 1000;
    } else if (service === 'wash_ironing') {
      pricePerKilo = 1200;
    } else if (service === 'ironing_only') {
      pricePerKilo = 900;
    }
  
    // Calculate base price
    let totalPrice = pricePerKilo * weight;
  
    // Add express fee if selected
    if (type === 'express') {
      totalPrice += 200 * weight;
    }
  
    // Apply coupon (2kg free) if applicable
    if (coupon && weight >= 2) {
      totalPrice -= pricePerKilo * 2;
    }
  
    // Apply membership discount (10% off)
    if (membership === 'member') {
      totalPrice *= 0.9;
    }
  
    // Display the total price
    document.getElementById('totalPrice').innerHTML = `Total Price: Rp ${totalPrice.toFixed(2)}`;
  }
