<?php session_start(); ?>

<header>
        <!--logo-->
        <img class="logo" src="./icons/logo.svg" alt="logo">
        <nav>
        <!--menu-->
            <ul class="nav-links" id="menuList">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#category">Category</a></li>
                <li><a href="#Contact-us">Contact Us</a></li>
            </ul>
        </nav>
        <div class="open">
            <img src="./icons/bars-solid.svg" class="menu-icon" onclick="togglemenu()">
        </div>
        <!--log in button--> 
        <?php if (isset($_SESSION["user"])): ?>
        <!-- Display user name if logged in -->
        <span style="color: #FAD02C">Welcome, <?php echo $_SESSION["user"]; ?></span>
    <?php else: ?>
        <!-- Display login button if not logged in -->
        <a class="btn" href="login.php"><button>Log in</button></a>
    <?php endif; ?>
    </header>