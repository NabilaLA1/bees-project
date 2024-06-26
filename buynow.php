<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='./assets/css/buynow.css'>
    <title>Home Inspection Booking</title>
    <script src="https://kit.fontawesome.com/d09b6df77f.js" crossorigin="anonymous"></script>
</head>
<body>
            <a href="p3.php"><i class="fa-solid fa-arrow-left"></i></a>
    
    <h1>House Purchase Page</h1>
    <div class="account-info">
        <input type="text" id="account_number" class="purchase-input" value="1234567890" placeholder="Account Number" readonly><br>
        <input type="text" id="amount" class="purchase-input" value="N100,000" placeholder="Amount to be Paid" readonly><br><br>
    </div>

    <div class="purchase-form">
        <form action="/submit_payment_details" method="POST" enctype="multipart/form-data">
            <input type="file" id="payment_receipt" name="payment_receipt" class="purchase-input" accept="image/*, .pdf" placeholder="Payment Receipt" required><br>
            <input type="text" id="transaction_id" name="transaction_id" class="purchase-input" placeholder="Transaction ID" required><br>
            <input type="email" id="email" name="email" class="purchase-input" placeholder="Email Address" required><br>
            <button type="submit" class="purchase-button">Complete Purchase</button>
        </form>
    </div>
</body>
</html>