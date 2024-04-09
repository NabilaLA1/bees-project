<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='./assets/css/reservenow.css'>
    <title>Home Inspection Booking</title>
    <script src="https://kit.fontawesome.com/d09b6df77f.js" crossorigin="anonymous"></script>
</head>
<body>
    <a href="p1.php"><i class="fa-solid fa-arrow-left"></i></a>
    <div class="forminsp">
    <h1>Make a Short-term Reservation</h1>
    <form action=" " method="POST" class="form">
        <input type="text" class="Cinputs" name="full_name" placeholder="Full Name" required><br><br>
        <input type="email" class="Cinputs" name="email" placeholder="Email" required><br><br>
        <input type="tel" class="Cinputs" name="phone" placeholder="Phone Number" required><br><br>
        <input type="date" class="Cinputs" name="check_in_date" placeholder="Check-in Date" required><br><br>
        <input type="date" class="Cinputs" name="check_out_date" placeholder="Check-out Date" required><br><br>
        <textarea class="Cinputs" name="additional_notes" placeholder="Additional Notes" rows="4" cols="50"></textarea><br><br>
        <button type="submit">Make Reservation</button>
    </form>
</body>
</html>