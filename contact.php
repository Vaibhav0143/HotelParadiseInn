<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <div class="background" style="height: 230px;">
        <div class="maxwidth">
            <div class="navbar_1 justify">
                <div>
                    <a href="home.html"><img src="img/Vaibhav.PNG" width="120px" class="logo"></a>
                </div>
                <div class="menu">
                    <a href="home.php">Home</a>
                    <a href="home.php">About</a>
                    <a href="home.php">Facilities</a>
                    <div class="dropdown">
                        <button class="dropbtn">Rooms
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="room.php">SIngle Room</a>
                            <a href="room.php">Double Room</a>
                            <a href="room.php">Deluxe Room</a>
                        </div>
                    </div>
                    <a href="home.php">Gallery</a>
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
                                        <div class="dropdown-content" style="margin-left: 565px;">
                                            <a href="#">Profile</a>
                                            <a href="#">Bookings</a>
                                            <a href="logout.php">Logout</a>
                                        </div>
                                    </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="padding">
        <div class="contact-container">
            <div class="photo-section">
                <img src="img/contactus.jpg" alt="Contact Photo" width="150px">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident tenetur voluptatum aspernatur? Voluptatem, labore quos rem necessitatibus consectetur ipsum omnis est voluptate mollitia quas vel. Consequuntur fugit autem repellat. Velit expedita minima ipsa ad, magnam earum blanditiis, quia accusamus voluptas beatae nobis quasi non sed suscipit autem magni deleniti? Culpa minima, aspernatur consectetur cumque impedit error. Accusamus esse ipsum consequuntur magnam! Rerum inventore velit eos incidunt autem sunt, dicta non temporibus maxime voluptatem dolores perspiciatis necessitatibus, consectetur numquam illum corporis voluptate praesentium voluptas blanditiis, tempora molestiae distinctio sequi saepe. Dolor vero veniam perspiciatis suscipit quam reiciendis nihil dolorem. Commodi, distinctio?</p>
            </div>
            <div class="form-section">
                <h2>Contact Customer Support</h2>
                <form action="submit_contact.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">&copy 2023 ParadiseInn India, All right Reserved</footer>
</body>

</html>