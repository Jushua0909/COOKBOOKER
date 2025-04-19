<?php
include 'views/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CookBooker Registration</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fffaf0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .register-container {
            max-width: 600px;
            margin: 4rem auto;
            padding: 2rem 2.5rem;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #d35400;
            margin-bottom: 2rem;
        }
        label {
            font-weight: 600;
            color: #6e2c00;
        }
        input, select {
            width: 100%;
            padding: 0.7rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        .error_msg {
            color: #c0392b;
            font-size: 0.9rem;
            display: block;
            margin-bottom: 0.5rem;
        }
        #eula {
            margin-bottom: 1.5rem;
        }
        #eula label a {
            color: #d35400;
            text-decoration: underline;
        }
        .btn-register {
            width: 100%;
            background-color: #e67e22;
            color: #fff;
            border: none;
            padding: 0.9rem;
            border-radius: 8px;
            font-weight: bold;
        }
        .btn-register:hover {
            background-color: #d35400;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Join CookBooker 🍴</h2>
    <form id="registerform" action="models/register_user.php" method="POST">

        <label for="uname">Username</label>
        <?php
            if(isset($_GET['uname_error']) && $_GET['uname_error']){
                echo "<span class='error_msg'>Invalid Username</span>";
            }
        ?>
        <input type="text" name="uname" id="uname" placeholder="Create your unique chef name" required>

        <label for="email">Email</label>
        <?php
            if(isset($_GET['email_error']) && $_GET['email_error']){
                echo "<span class='error_msg'>Invalid Email</span>";
            }
        ?>
        <input type="email" name="email" id="email" placeholder="you@example.com" required>

        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" placeholder="Julia" required>

        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" placeholder="Child" required>

        <label for="gender">Gender</label>
        <select id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="bdate">Birthdate</label>
        <input type="date" name="bdate" id="bdate" required>

        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" placeholder="Create a secure password" required>

        <label for="conpass">Confirm Password</label>
        <input type="password" name="conpass" id="conpass" placeholder="Confirm your password" required>

        <div id="eula">
            <input type="checkbox" name="eula" id="eula" value="eula" required>
            <label for="eula">I agree to the <a href="#">End User License Agreement</a></label>
        </div>

        <input type="submit" value="Start Cooking!" class="btn-register">
    </form>
</div>

<?php
include 'views/footer.php';
?>
</body>
</html>
