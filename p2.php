<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Listing - Property Name</title>
    <link rel="stylesheet" href="./assets/css/p2.css">
    <script src="https://kit.fontawesome.com/d09b6df77f.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header with navigation -->
    <header>
        <!-- Navigation menu -->
        <nav>
            <a href="shortstay.php"><i class="fa-solid fa-arrow-left"></i></a>
        </nav>
    </header>

    <!-- Slideshow of property images -->
    <div class="slideshow-container">
        <!-- Slides -->
        <div class="mySlides fade">
            <img src="./images/home2.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="./images/parlor1.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="./images/kitchen.avif" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- Description of the property -->
    <div class="property-description">
        <h2>Beautiful home</h2>
        <p>Number of Rooms: 3</p>
        <p>Number of Parlors: 1</p>
        <p>Number of Bathrooms: 2</p>
        <p>Land Size: 500 sq. ft.</p>
        <p>Type of House: Duplex</p>

        <div class="contact-us">
            <h2>Interested?</h2>
        
            <a class="button" href="inspection.php"><button>Book inspection</button></a>
            <a class="button" href="reservenow2.php"><button>Reserve now</button></a>
        </div>
        
    </div>
    

    <!-- JavaScript for slideshow functionality -->
    <script src="js/slideshow.js"></script>
</body>
</html>