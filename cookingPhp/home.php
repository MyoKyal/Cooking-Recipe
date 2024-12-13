<?php
/*include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location: login.php');
}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!--CSS-->
<link rel="stylesheet" href="css/headerHome.css">
</head>
    <?php include "header.php"; ?>


 <section class="videoHome" id="videoHome"> <!--Video Home-->
   <div class="content">
        <h3>Cook & Learn</h3>
        <p>Discover new recipes, experience new dishes, enjoy new foods</p>
        <a href="" class="btn">Explore Now!</a>
   </div>
    
   <div class="controls">
    <span class="vid-btn active" data-src="images/video3.mp4"></span>
    <span class="vid-btn" data-src="images/video4.mp4"></span>
    <span class="vid-btn" data-src="images/video2.mp4"></span>
    <span class="vid-btn" data-src="images/video5.mp4"></span>
    <span class="vid-btn" data-src="images/video1.mp4"></span>
   </div>

   <div class="video-container">
        <video src="images/video3.mp4" id="video-slider" loop autoplay muted></video>
   </div>
 </section>
<section class="intro">
    <div class="introBox">
        <img alt="logo" id="intrologo" src="images/yummify-high-resolution-logo.png">
        <p id="introp">Welcome to <span style="color: #f64900; font-size: larger;
    font-style: italic;
    font-family: 'Times New Roman', Times, serif;">Yummnify</span>, your one-stop destination for discovering delicious recipes and learning to cook like a pro! Whether you're a beginner in the kitchen or a seasoned chef looking for fresh ideas, we have something for everyone. Explore easy-to-follow recipes, take fun cooking courses, and unlock your culinary skills. 
            Join our community today and start your journey to making amazing meals at home!</p>   
    </div>
</section>
 <!--packages start-->
 <section class="packages">
    <h1 class="heading">
        <span>R</span>
        <span>E</span>
        <span>C</span>
        <span>I</span>
        <span>P</span>
        <span>E</span>
        <span>S</span>
    </h1>
    <div class="box-container">

        <div class="box">
            <img src="images\homeimage\chickenfortilladumpdinner.webp" alt="">
            <div class="content">
                <h3> <i class="fa-solid fa-utensils"></i> Chicken Fortilla Dump</h3>
                <p class="mexican">Mexican</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">Time: <span>55 minutes</span> </div>
                <a href="" class="btn">See More</a>
            </div>
        </div>

        <div class="box">
            <img src="images\homeimage\chickenfortilladumpdinner.webp" alt="">
            <div class="content">
                <h3> <i class="fa-solid fa-utensils"></i> Chicken Fortilla Dump</h3>
                <p class="mexican">Mexican</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">Time: <span>55 minutes</span> </div>
                <a href="" class="btn">See More</a>
            </div>
        </div>

        <div class="box">
            <img src="images\homeimage\chickenfortilladumpdinner.webp" alt="">
            <div class="content">
                <h3> <i class="fa-solid fa-utensils"></i> Chicken Fortilla Dump</h3>
                <p class="mexican">Mexican</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">Time: <span>55 minutes</span> </div>
                <a href="" class="btn">See More</a>
            </div>
        </div>
    </div>
</section>
<section class="courses">
<h1 class="heading">
        <span>C</span>
        <span>O</span>
        <span>U</span>
        <span>R</span>
        <span>S</span>
        <span>E</span>
        <span>S</span>
    </h1>
    <div class="course-container">
        <div class="course-box">
            <h1>Course1</h1>
        </div>
        <div class="course-box">
            <h1>Course2</h1>
        </div>
    </div>
</section>

<section class="services" id="services">
    <h1 class="heading">
        <span>S</span>
        <span>E</span>
        <span>R</span>
        <span>V</span>
        <span>I</span>
        <span>C</span>
        <span>E</span>
        <span>S</span>
    </h1>
    <div class="box-container">
    <div class="box">
    <i class="fa-solid fa-graduation-cap"></i>
        <h3>Learn to Cook</h3>
        <p>Join hands with top chefs from around the world and master the art of cooking through easy, step-by-step courses.</p>
    </div>
    <div class="box">
        <i class="fas fa-utensils"></i>
        <h3>Food and Recipes</h3>
        <p>Explore a vast collection of recipes from different cultures, from quick snacks to gourmet dishes, all in one place.</p>
    </div>
    <div class="box">
    <i class="fa-solid fa-magnifying-glass"></i>
        <h3>Discover New Flavors</h3>
        <p>Unleash your inner chef with our exciting recipes. Learn new techniques, experiment with flavors, and surprise your taste buds!</p>
    </div>
    <div class="box">
    <i class="fa-solid fa-earth-americas"></i>
        <h3>Global Culinary Journeys</h3>
        <p>Embark on a virtual journey through world cuisines, bringing the flavors of different cultures straight to your kitchen.</p>
    </div>
    <div class="box">
    <i class="fa-solid fa-pizza-slice"></i>
        <h3>Fast & Easy Cooking</h3>
        <p>Short on time? Learn quick and delicious recipes that fit perfectly into your busy schedule without compromising on taste.</p>
    </div>
    <div class="box">
    <i class="fa-solid fa-champagne-glasses"></i>
        <h3>Culinary Adventures</h3>
        <p>Challenge yourself with adventurous recipes and techniques that take your cooking skills to new heights.</p>
    </div>
</div>

</section>


    <?php include "footer.php"; ?>
    <script differ src="js/script.js"></script>
</body>
</html>