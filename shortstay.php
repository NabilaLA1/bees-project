<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='./assets/css/shortstay.css'>
    <script src="https://kit.fontawesome.com/d09b6df77f.js" crossorigin="anonymous"></script>
    <title>Shortstay</title>
</head>
<body>
    <header>
        <a href="index.php"> <i class="fa-solid fa-arrow-left"></i></a>
    </header>
    <main class="title">
        <h1>Short stay</h1>
        <hr>
        <h4>Add filters for specific options</h4>
        <div class="search bar">
            <form>
                <label for="location">Location:</label>
                <select id="location" name="location">
                    <option value="ht">Hotoro</option>
                    <option value="trn">Tarauni</option>
                    <option value="Lc">Lamido crescent</option>
                </select>
        
                <label for="type">Type:</label>
                <select id="type" name="type">
                    <option value="house">House</option>
                    <option value="apartment">apartment</option>
                </select>
                
                  <label for="duration">Duration:</label>
                <select id="duration" name="duration">
                     <option value="">1 days</option>
                     <option value="">2 days</option>
                     <option value="">3 days</option>
                     <option value="">a week</option>
                    <option value="long"> 2 weeks</option>
                </select>
        
                <label for="cost-range">Cost Range:</label>
                <select id="cost-range" name="cost-range" aria-placeholder="select">
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                </select>
        
                <button type="submit">Search</button>
            </form>
        </div>
    </main>
    <div class="listings">
        <div class="listing">
            <img src="./images/home2.jpg" alt="">
            <div class="listing-info">
                <h3>Beautiful Home</h3>
                <p>Price: 500,000</p>
            <a href="p1.php">
                <button>View More</button>
            </a>
            </div>
        </div>
        <div class="listing">
            <img src="./images/home2.jpg" alt="">
            <div class="listing-info">
                <h3>Cozy Cottage</h3>
                <p>Price: 300,000</p>
                <a href="p1.php">
                <button>View More</button>
              </a>
            </div>
        </div>
        <div class="listing">
            <img src="./images/home2.jpg" alt="">
            <div class="listing-info">
                <h3>Beautiful Home</h3>
                <p>Price: 500,000</p>
                <a href="p1.php">
                <button>View More</button>
              </a>
            </div>
        </div>
    </div>
    
</body>
</html>