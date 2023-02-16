
<?php 
include './Product.php';
session_start();

if (isset($_SESSION['isAdmin'])) {
    // Check if the user is logged in
    if ($_SESSION['isAdmin'] == "true") {
        // Check if the user is an admin
        header("location: bookJourneyAdmin.php");
        exit();
    } 
} else {
    // Redirect the user to the login page
    header("location: login.php");
    exit();
}
$products = Product::getAllProducts();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bookJourney.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Book Your Journey</title>
</head>
<body>
    <div class="start">
    <ul id="navbar">
        <li id="logoli"> <a href="index.php"><img src="images/Logo.png" id="logo"></a></li>
        <li><a href="bookJourney.php">Book your journey</a></li>
        <li><a href="contactUs.php">Contact us</a></li>
        <li id="rightnavel"><a href="logout.php?logout">Logout</a></li>
    </ul>
        <h1 class="titleMain">Lorem Ipsum</h1>
        <p class="descMain">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio temporibus pariatur praesentium cum facere consequatur quod distinctio hic adipisci eaque nam velit ducimus, vitae natus cumque possimus voluptatibus tenetur dignissimos! lore</p>
    </div>   

        <div class="container2">
            <div class="informator">
                <h1>REACH FOR THE STARS</h1>
                <p>Earth is a place filled with mistery, but space is even more so. The journey you will be taking will not only leave you amazed at the sights, but it will also leave you astonished at what humanity is capable of doing.</p>
            </div>
            <div class="imageSide">
                <img src="images/solar-system.png">
            </div>
        </div> 

        <div class="container3">
        <?php foreach($products as $product): ?>
            <div class="con3check">
                    <div class="ttl">
                        <h1><?php echo $product->title; ?></h1>
                    </div>
                    <div class="dsc">
                        <p><?php echo $product->description; ?></p>
                    </div>
                    <div class="lst">
                        <ul class="offersOf">
                            <li>Tasty & Noutritious food</li>
                            <li>Comfortable residence</li>
                            <li>Infinite access to anything desired</li>
                            <li>Unlimited internet connection</li>
                            <li>Medical assistance for any injuries</li>
                            <li>Cool views</li>
                        </ul>
                    </div>
                    <div class="buy">
                        <div class="prc">
                            <h2>$<?php echo $product->price; ?></h2> 
                        </div>
                        <div class="prcBtn">
                            <button id="purchase">
                                Purchase ticket
                            </button>
                        </div>
                    </div>
                    <div class="final"> 
                        <p>the ticket will appear on your shopping cart</p>
                    </div>
                    
            </div>
            <?php endforeach; ?>
    </div>

    <div class="ratings">
        <h1>Having issues?</h1> 
        <p>Contact us here for any issues, information or feedback and we will be sure to reply as soon as possible.</p>
        <a href="contactUs.php"><button class="contactBtn" href="contactUs.php">Contact us now</button></a>
    </div>

    <div class="container1"> 
        <img class="mainImg" src="images/CupolaFinal.jpg"> 
    </div>

    <footer>
        <div class="footer">
        <div class="row">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        
        <div class="row">
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="contactUs.php">Contact us</a></li>
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="login.php">Log in</a></li>
        </ul>
        </div>
        
        <div class="row">
        AstraCom Copyright © 2023 UBT - All rights reserved 
        </div>
        </div>
        </footer>
    
    
</body>
</html>