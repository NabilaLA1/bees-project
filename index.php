
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='./assets/css/madream.css'>
    <title>madream</title>
</head><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
<body>
     <!--Header-->
    <?php include('./pages/header.php')?>

    <!--home section-->
    <main class="home">
        <div class="home-info">
            <h1>Unlocking your dream home!</h1>
            <h4>Short/long term stay made easy</h4>
        </div>
        <div class="home-image">
            <img src="./images/home.png" alt="">
        </div>
    </main>
    <!--aboutus-->
    <div class="row" id="about">
     <div class="col-1">
            <hr>
            <h3> We ease your house and apartment hunting journey</h3>
            <img src="./icons/collage.svg" alt="">
     </div>
       <div class="col-2">
          <!--about headings-->
            <div class="first">
                <div class="heading">
                    <img src="./icons/moneybagicon.svg" alt="">
                    <h3>Budget friendly</h3>
                </div>
                <h5>Our mission is to help people find their dream homes without breaking the bank.
                    We aim to make the dream of homeownership accessible to everyone.</h5>
            </div>
            <div class="second">
                <div class="heading2">
                    <img src="./icons/secureicon.svg" alt="">
                    <h3>Secure transactions</h3>
                </div>
                <h5>Ensuring your peace of mind is our top priority.With secure protocols,
                    your property dealings are protected,
                    allowing you to focus on finding your perfect space</h5>
            </div>
            <div class="third">
                <div class="heading3">
                    <img src="./icons/easeicon.svg" alt="">
                    <h3>Ease of use</h3>
                </div>
                <h5>Navigating through property listings, making transactions, and
                 managing your preferences—all designed to be intuitive and hassle-free.</h5>
            </div>
        </div>
    </div>
    <!--options-->
    <div class="category" id="category">
            <hr>
            <h3>Explore our options</h3>
        <div class="options">
        <div class="option1" >
            <img src="./icons/roof.svg" alt="">
            <h5>Short-term stay</h5>
            <p> Have plans in a different state?explore our variety
             of apartments available with stay options of as low as a day. </p>
             <a class="butn" href="pages/shortstay.html"><button>Explore</button></a>
        </div>
        <div class="option2" >
            <img src="./icons/roof.svg" alt="">
            <h5>Long-term stay</h5>
            <p> Need somewhere to make your home? Explore our rent options 
                for a year or more. </p>
             <a class="butn" href="pages/longstay.html"><button>Explore</button></a>
        </div>
        <div class="option3" >
            <img src="./icons/roof.svg" alt="">
            <h5>Buy a house</h5>
            <p> Ready to commit? want to have your dream home? explore houses 
                at a very affordable rate. </p>
             <a class="butn" href="pages/buyhouse.html"><button>Explore</button></a>
        </div>
        </div>
    </div>
    <!--adverts-->
    <!--<div class="ads">
        <hr>
        <h3>Partnership and adverts</h3>
        <div class="ads-box">

        </div>
    </div>-->
    <!--contact form-->
    <div class="contact" id="Contact-us">
        <div class="column-1">
            <hr>
            <h3>Contact us</h3>
            <h5>We will get back to you as soon as we can</h5>
        <div class="form">
            <form action="bemicasa.php" class="contact-left" method="post"> </form>
            <!--inputs-->
            <input type="text" name="name" placeholder=" Name" class="Cinputs" required>
            <input type="number" name="number" placeholder= "Phone number" class="Cinputs" required>
            <input type="email" name="email" placeholder=" Email address" class="Cinputs" required>
            <textarea name="message" placeholder=" Message" class="Cinputs required"></textarea>
            <button type="submit"> Send message</button>
        </div>
        </div>
        <div class="column-2">
            <img src="./images/phone.png" alt="">
        </div>
    </div>
  

    <!-- Footer -->
    <?php include('./pages/footer.php')?>


    <script>
        var menuList = document.getElementById("menuList");
        menuList.style.maxHeight = "0px";
        
        function togglemenu() {
            if (menuList.style.maxHeight == "0px"||menuList.style.maxHeight === "")  {
                menuList.style.maxHeight = "130px";
            } else {
                menuList.style.maxHeight = "0px";
            }
        }
    </script>
    

    
</body>
</html>