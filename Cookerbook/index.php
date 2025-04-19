<?php
include 'views/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CookBooker</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="./res/style.css" rel="stylesheet" type="text/css"/>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fffaf0;
        }
        .carousel {
            height: 50vh;
        }
        .carousel-item img {
            width: 100%;
            height: 60vh;
            object-fit: cover;
        }
        .mt-4 {
            margin-top: 2rem;
        }
        h1 {
            color: #d35400;
        }
        .lead {
            color: #f4f9ca;
        }
        .btn-register {
            background-color: #e67e22;
            border: none;
        }
        .btn-register:hover {
            background-color: #d35400;
        }
    </style>
</head>
<body>

<h1 class="text-center mt-5">Welcome to CookBooker 🍳</h1>
<p class="lead text-center">
    Your digital recipe book and culinary companion. Discover, cook, and share mouthwatering dishes from around the world!
</p>
<p class="text-center">
    Whether you're a beginner in the kitchen or a seasoned chef, CookBooker brings you carefully curated recipes, step-by-step guides, and a community that loves cooking as much as you do.
</p>

<div class="text-center mt-4">
    <a href="./registration.php" class="btn btn-primary btn-register">Join the Kitchen</a>
</div>

<div id="carouselExampleIndicators" class="carousel slide mt-4" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="res/recipe1.jpg" class="d-block" alt="Delicious Dish 1">
        </div>
        <div class="carousel-item">
            <img src="res/recipe2.jpg" class="d-block" alt="Tasty Treat 2">
        </div>
        <div class="carousel-item">
            <img src="res/recipe3.jpg" class="d-block" alt="Yummy Meal 3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php
include 'views/footer.php';
?>
</body>
</html>
