<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CookBooker</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="./res/style.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="res/cookbook_logo.jpg.png" width="30" height="30" class="d-inline-block align-top mr-2" alt="">
        <strong>CookBooker</strong>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCookbook" aria-controls="navbarCookbook" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCookbook">
        <form class="form-inline my-2 my-lg-0 ml-auto mr-3">
            <input class="form-control mr-sm-2" type="search" placeholder="Search recipes..." aria-label="Search">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
        </form>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./recipes.php">All Recipes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./submit.php">Submit Recipe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./meal-planner.php">Meal Planner</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./about.php">About</a>
            </li>
        </ul>

        <div class="ml-auto d-flex align-items-center">
            <?php if(isset($_SESSION['uid'])) { ?>
                <span class="navbar-text mr-3">
                    👩‍🍳 Hello, <?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?>
                </span>
                <a class="btn btn-outline-danger btn-sm" href="./models/logout_user.php">Logout</a>
            <?php } else { ?>
                <a class="btn btn-outline-primary btn-sm mr-2" href="./login.php">Login</a>
                <a class="btn btn-warning btn-sm" href="./registration.php">Register</a>
            <?php } ?>
        </div>
    </div>
</nav>
