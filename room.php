<?php
// session_start();
//  if (!isset($_SESSION['email'])) {
//     echo '<script>
//     alert("Please Login First:");
//    window.location.href = "login.php";
// </script>';
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/room.css">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <div class="background" style="height: 200px;">
        <div class="maxwidth">
            <div class="navbar_1 justify" style="padding: 5px;">
                <div>
                    <a href="home.html"><img src="img/Vaibhav.PNG" width="120px" class="logo"></a>
                </div>
                <div class="menu">
                    <a href="home.php">Home</a>
                    <a href="home.html">About</a>
                    <a href="home.html">Facilities</a>
                    <div class="dropdown">
                        <button class="dropbtn">Rooms
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content" style="margin-left: 270px;">
                            <a href="#">Deluxe Room</a>
                            <a href="#">Single Room</a>
                            <a href="#">Double Room</a>
                        </div>
                    </div>
                    <a href="home.html">Gallery</a>
                    <a href="home.html">Contact</a>
                    <?php
                    session_start();
                    // echo $_SESSION['email'];
                    if (!isset($_SESSION['email'])) {
                        echo '<a href="login.php">Login</a>';
                        echo '<a href="registrations.php">Register</a>';
                    } else {
                        echo '<div class="dropdown" >
						<button class="dropbtn">My Account
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content" style="margin-left: 635px;">
							<a href="#">Profile</a>
							<a href="#">Bookings</a>
							<a href="#">Logout</a>
						</div>
					</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="width col-s-1 col-1">
        <div>
            <h2>Rooms</h2>
        </div>
        <div id="deluxe">
            <h3>Deluxe Rooms</h3>
        </div>
        <div style="display: flex; justify-content: space-between; padding: 100px; margin-top: -100px;">
            <div style="width: 27%;" class="zoom">
                <a href="form.php"> <img src="img/deluxe1.jpg" width="400px" class="border_radius"></a>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, fuga
                    atque odio sapiente voluptatibus
                    eligendi dolorum consectetur tempora quidem iusto.</p>
            </div>
            <div style="width: 27%;" class="zoom">
                <a href="form.php"><img src="img/deluxe2.jpg" width="400px" height="235px" class="border_radius"></a>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, fuga
                    atque odio sapiente voluptatibus
                    eligendi dolorum consectetur tempora quidem iusto.</p>
            </div>
            <div style="width: 27%;" class="zoom">
                <a href="form.php"><img src="img/deluxe3.jpg" width="360px" class="border_radius"></a>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, fuga
                    atque odio sapiente voluptatibus
                    eligendi dolorum consectetur tempora quidem iusto.</p>
            </div>
        </div>
    </div><br><br><br><br>
    <div class="width">
        <div id="single">
            <h3>Single Rooms</h3>
        </div>
        <div style="margin-top: -80px;">
            <div style="display: flex; justify-content: space-between; padding: 100px;">
                <div style="width: 27%;" class="zoom">
                    <a href="form.php"><img src="img/single1.jpg" width="400px" height="235px" class="border_radius"></a>
                    <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, fuga
                        atque odio sapiente voluptatibus
                        eligendi dolorum consectetur tempora quidem iusto.</p>
                </div>
                <div style="width: 27%;" class="zoom">
                    <a href="form.php"><img src="img/single2.jpg" width="400px" height="235px" class="border_radius"></a>
                    <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, fuga
                        atque odio sapiente voluptatibus
                        eligendi dolorum consectetur tempora quidem iusto.</p>
                </div>
                <div style="width: 27%;" class="zoom">
                    <a href="form.php"><img src="img/single3.jpg" width="400px" height="235px" class="border_radius"></a>
                    <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, fuga
                        atque odio sapiente voluptatibus
                        eligendi dolorum consectetur tempora quidem iusto.</p>
                </div>
            </div>
        </div>
    </div><br><br><br><br>
    <div class="width">
        <div id="double">
            <h3>Double Rooms</h3>
        </div>
        <div style="margin-top: -80px;">
            <div style="display: flex; justify-content: space-between; padding: 100px;">
                <div style="width: 27%;" class="zoom">
                    <a href="form.php"><img src="img/double1.jpg" width="400px" height="235px" class="border_radius"></a>
                    <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, fuga
                        atque odio sapiente voluptatibus
                        eligendi dolorum consectetur tempora quidem iusto.</p>
                </div>
                <div style="width: 27%;" class="zoom">
                    <a href="form.php"><img src="img/double2.jpg" width="400px" height="235px" class="border_radius"></a>
                    <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, fuga
                        atque odio sapiente voluptatibus
                        eligendi dolorum consectetur tempora quidem iusto.</p>
                </div>
                <div style="width: 27%;" class="zoom">
                    <a href="form.php"><img src="img/double3.jpg" width="400px" height="235px" class="border_radius"></a>
                    <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, fuga
                        atque odio sapiente voluptatibus
                        eligendi dolorum consectetur tempora quidem iusto.</p>
                </div>
            </div>
        </div>
    </div><br><br><br><br>
    <footer class="footer">&copy 2023 ParadiseInn India, All right Reserved</footer>
</body>

</html>