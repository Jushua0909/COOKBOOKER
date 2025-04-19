<?php
include 'views/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CookBooker Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fffaf0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-container {
            max-width: 400px;
            margin: 4rem auto;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #d35400;
            margin-bottom: 1.5rem;
        }
        label {
            font-weight: bold;
            color: #6e2c00;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 0.7rem;
            margin: 0.5rem 0 1rem 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        .keep-signed-in {
            margin-bottom: 1rem;
        }
        .btn-login {
            width: 100%;
            background-color: #e67e22;
            color: #fff;
            border: none;
            padding: 0.8rem;
            border-radius: 8px;
            font-weight: bold;
        }
        .btn-login:hover {
            background-color: #d35400;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Welcome Back, Chef!</h2>
    <form id="loginform" action="models/login_user.php" method="POST">
        <label for="uname">Email or Username</label>
        <input type="text" name="uname" id="uname" placeholder="e.g. chef.julia@example.com" required>
        
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" placeholder="Enter your secret recipe..." required>
        
        <div class="keep-signed-in">
            <input type="checkbox" name="keep_signed_in" id="keep_signed_in">
            <label for="keep_signed_in">Keep me signed in</label>
        </div>
        
        <input type="submit" value="Start Cooking" class="btn-login">
    </form>
</div>

<?php
include 'views/footer.php';
?>
</body>
</html>
