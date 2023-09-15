<?php
include 'connect.php';
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "Select * from registration where Email=('$email')";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if ($count_email == 0)
     {
        if ($password) {
            // $hash = password_hash($password, PASSWORD_DEFAULT);
            $hash = $password;
            $sql = "INSERT INTO registration (username,Email,password) VALUES('$username','$email','$hash')";
            $result = mysqli_query($conn, $sql);
            $_SESSION['email']=$email;
            $_SESSION['name']=$username;
            if ($result) {
                header("location:home.php");
            } 
            include('PHPMailerAutoload.php');           
            // $msg="vaibhav";
            $html="<table><tr><td></td><td>$fname thankyou for login on Paradise Inn by $email </td></table>";
            $mail=new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host="smtp.gmail.com";
            $mail->Port=587;
            $mail->SMTPSecure="tls";
            $mail->SMTPAuth=true;
            $mail->Username="vaibhavsheoran00@gmail.com";
            $mail->Password="hbwcpcrdjaeyxumd";
            $mail->SetFrom("vaibhavsheoran00@gmail.com");
            $mail->addAddress($email);
            $mail->addAddress($email);
            $mail->AddCC($email);
            $mail->AddBCC($email);
            $mail->IsHTML(true);
            $mail->Subject="vaibhav";
            $mail->Body=$html;
            $mail->SMTPOptions=array('ssl'=>array(
                'verify_peer'=>false,
                'verify_peer_name'=>false,
                'allow_self_signed'=>false
            ));
            if($mail->send()){
                echo "Mail send to $fname";
            }else{
                echo "Error occur";
            }   
    //         echo $msg;
     }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <script src="https://kit.fontawesome.com/4929b2e803.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="article1">
        <div class="registeration">
            <h2 class="section1">Registeration</h2>
            <form  method="post">
                <div class="input">
                    <span class="icon1"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="username" oninput="return validUserName()" id="userName" required>
                    <span id="vaild-userName" style="color: red;"></span>
                    <label for="username" class="para">Username</label>
                </div>
                <div class="input">
                    <span class="icon1"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="email" oninput="return validEmail()" id="email" required>
                    <span id="vaild-email" style="color: red;"></span>
                    <label for="email" class="para">Email</label>
                </div>
                <div class="input">
                    <span class="icon1"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" required oninput="return validPass()" id="pass">
                    <span id="vaild-pass" style="color: red;"></span>
                    <label for="password" class="para">Password</label>
                </div>
                <div class="input">
                    <span class="icon1"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="cnfrmpass" required oninput="return validPass()" id="cnfrmpass">
                    <span id="confrm-pass" style="color: red;"></span>
                    <label class="para">Confirm Password</label>
                </div><br><br>
                <div class="forgot">
                    <label><input type="checkbox">I accept all terms & conditions.</label>
                </div>
                <!-- <button type="submit" class="btn"><a href="landing.html" onsubmit="wrong_pass_alert()">Register</a></button> -->
                <input type="submit" name="submit" class="btn" value="Register" onclick="return wrong_pass_alert()">
                <div class="register">
                    <p>Already have an account?<a href="#" class="register1">
                            <button class="login"><a href="login.php">Login</a></button></a></p>
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
            }
            else if (!regularExpression.test(vaildepass)) {
                document.getElementById("vaild-pass").innerHTML = "password should contain atleast on number and one special character";
                return false;
            }
            else {
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
            }
            else {
                document.getElementById("vaild-email").innerHTML = "";
            }
        }
        function validUserName() {
            var validUserName = document.getElementById("userName").value;
            var userNameRegex = /^[a-zA-Z\-]+$/;
            let result = userNameRegex.test(validUserName);
            if (!result) {
                document.getElementById("vaild-userName").innerHTML = "Please enter valid User Name";
                return false;
            }
            
            else {
                document.getElementById("vaild-userName").innerHTML = "";
            }
        }

          function wrong_pass_alert() {debugger;
            var vaildepass = document.getElementById("pass").value;
            var confirmPassword = document.getElementById("cnfrmpass").value;
            if (document.getElementById('pass').value != "" &&
                document.getElementById('cnfrmpass').value != "" && document.getElementById('userName').value != ""
                && document.getElementById('email').value != "") {
            } 
            if(!!confirmPassword && document.getElementById("pass").value!= confirmPassword){debugger;
                document.getElementById("confrm-pass").innerHTML = "Password doesn't match";
                return false;
            }
        }
    </script>
</body>

</html>