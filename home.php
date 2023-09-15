<?php
include "connect.php";
//   session_start();
// //   echo $_SESSION['email'];
// if(isset($_SESSION['email'])){
//     if(isset($_SESSION['username'])){
//          echo $_SESSION['email'];
//          echo $_SESSION['username'];
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <div class="background">
        <div class="maxwidth">
            <div class="navbar_1 justify BgColour">
                <div>
                    <a href="home.html"><img src="img/Vaibhav.PNG" class="logo"></a>
                </div>
                <div class="menu">
                    <a href="home.php">Home</a>
                    <a href="#about_tab">About Us</a>
                    <a href="#facilities">Facilities</a>
                    <div class="dropdown ">
                        <button class="dropbtn">Rooms
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="room.php" #deluxe>Deluxe Room</a>
                            <a href="room.php" #single>Single Room</a>
                            <a href="room.php" #double>Double Room</a>
                        </div>
                    </div>
                    <a href="#gallery">Gallery</a>
                    <a href="contact.php">Contact</a>
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
						<div class="dropdown-content" style="margin-left: 675px;">
							<a href="user.php">Profile</a>
							<a href="user.php">Bookings</a>
							<a href="logout.php">Logout</a>
						</div>
					</div>';
                    }
                    ?>

                </div>
            </div>
        </div>
        <div id="quote">
            <h3>Hotel rooms are a second home, only you get to escape.</h3>
        </div>
    </div>
    <div class="services" id="facilities">
        <div class="Service_heading">
            <h2>Facilities</h2>
        </div>
        <div class="services_box">
            <div class="maxwidth justify">
                <div class="tour">
                    <img src="img/tour.png">
                    <h4>Tour & Excursion</h4><br>
                    <div class="border_bottom"></div><br>
                    <p>Vehicle are available for tour and travel</p>
                </div>
                <div class="wifi">
                    <img src="img/wifi.png">
                    <h4>Free Wifi Service</h4><br>
                    <div class="border_bottom"></div><br>
                    <p>24x7 wifi Services</p>
                </div>
                <div class="babysit">
                    <img src="img/babysitter.png"><br>
                    <h4>Babysitting on request</h4><br>
                    <div class="border_bottom"></div><br>
                    <p>Babysitting on Request</p>
                </div>
                <div class="laundry">
                    <img src="img/laundry.png">
                    <h4>Laundry Services</h4><br>
                    <div class="border_bottom"></div><br>
                    <p>Laundry Services</p>
                </div>
            </div>
        </div>
    </div>
    <div class="slide" id="gallery">
        <h2>Gallery</h2><br>
        <div class="slider">
        </div>
    </div>
    <div class="about_us" id="about_tab">
        <h2>About us</h2><br>
        <div style="display: flex; justify-content: center;">
            <div class="maxwidth justify">
                <div class="about_width">
                    <img src="img/resort.jpg"><br>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Vero beatae nam aliquam voluptatibus illum eos repellendus sunt enim nesciunt itaque
                        ducimus ut, aliquid vitae fugiat cupiditate atque ratione quis eius, dolorum, molestias magni
                        incidunt natus error! Unde quis non ipsum molestias, minima itaque tempore delectus laudantium
                        sed sunt, nostrum odit reiciendis incidunt magnam veniam, natus sit est ullam sequi! Optio
                        aliquam velit aut quisquam tempore qui eius, debitis sint iure, beatae animi rem officia.
                        Assumenda qui maxime nesciunt, eveniet, asperiores consequatur incidunt dolorem at animi commodi
                        ut deserunt! Ullam aut placeat hic culpa, perferendis nam temporibus cupiditate? Odit, pariatur
                        dicta?
                    </p>
                </div>
                <div class="about">
                    <img src="img/Vaibhav.PNG">
                    <div style="margin-top: -80px;">
                        <h3>Hotel Paradise Inn</h3><br>
                        <p>Adress: Lorem ipsum dolor sit amet.</p>
                        <p>Email: hotel.paradiseinn.com</p>
                        <p>Ph no.: 9653xxxxxx</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">&copy 2023 ParadiseInn India, All right Reserved</footer>
    <script>
        function scrollValue() {
            var navbar = document.getElementById('navbar');
            var scroll = window.scrollY;
            if (scroll < 20) {
                navbar.classList.remove('BgColour');
            } else {
                navbar.classList.add('BgColour');
            }
        }

        window.addEventListener('scroll', scrollValue);
    </script>
</body>

</html>