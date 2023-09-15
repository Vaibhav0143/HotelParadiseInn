<?php
include 'connect.php';
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $_SESSION['email']=$email;
    //    $hash = password_hash($password, PASSWORD_DEFAULT);
    //echo $hash;
    $sql = "SELECT * FROM registration WHERE Email='$email'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        while ($row = mysqli_fetch_row($result)) {
            if ($row[1] === $email && $row[2] ===   $password) {
                
                


                header('Location: home.php');
                // if (isset($_SESSION['username'])) {
                //     // User is logged in
                //     echo '<a href="logout.php">Logout</a>';
                // } else {
                //     // User is not logged in
                //     echo '<a href="login.php">Login</a>';
                // }
                // exit(); // Important: Add this to stop script execution after the header
            } else {
                echo '<script>
                 alert("login failed:");
                window.location.href = "login.php";
            </script>';
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <script src="https://kit.fontawesome.com/4929b2e803.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="article">
        <div class="section">
            <h2 class="section1">Login</h2>
            <form action="login.php" method="post">
                <div class="input">
                    <span class="icon1"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="email" required oninput="return validEmail()" id="email">
                    <span id="vaild-email" style="color: red;"></span>
                    <label class="para">Email</label>
                </div>
                <div class="input">
                    <span class="icon1"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="pass" required oninput="return validPass()" id="pass">
                    <span id="vaild-pass" style="color: red;"></span>
                    <label class="para">Password</label>
                </div><br>
                <div class="forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <input type="submit" name="submit" class="btn" value="Login" onclick="return wrong_pass_alert()">
                <div class="register">
                    <p>Don't have any account?<a href="#" class="register1"><button class="registration"><a href="registrations.php">Register</a></button></a></p>
                </div>
            </form>
        </div>
    </div>
    <script>
        function validPass() {
            var vaildepass = document.getElementById("pass").value;

            var minNumberofChars = 6;
            var maxNumberofChars = 16;
            var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;

            if (vaildepass.length <= minNumberofChars || vaildepass.length >= maxNumberofChars) {
                document.getElementById("vaild-pass").innerHTML = "length must be between 6 to 16";
                return false;
            } else if (!regularExpression.test(vaildepass)) {
                document.getElementById("vaild-pass").innerHTML = "password should contain atleast one number and one special character";
                return false;
            } else {
                document.getElementById("vaild-pass").innerHTML = "";
            }
        }

        function validEmail() {
            var vaildemail = document.getElementById("email").value;
            let regex = /^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/;
            let result = regex.test(vaildemail);
            if (!result) {
                document.getElementById("vaild-email").innerHTML = "Please enter valid email id";
                return false;
            } else {
                document.getElementById("vaild-email").innerHTML = "";
            }
        }

        function wrong_pass_alert() {
            if (document.getElementById('pass').value != "" &&
                document.getElementById('email').value != "") {} else {
                alert("Please Enter all the fields");
            }
        }
    </script>
</body>

</html>