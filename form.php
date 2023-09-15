<?php
if (isset($_POST['submit'])) {
	$arrival = $_POST['arrival'];
	$departure = $_POST['departure'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$adults = $_POST['adults'];
	$child = $_POST['child'];
	$room = $_POST['room_pref'];

	$conn = new mysqli("localhost", "root", "", "paradise_inn");
	$sql = "INSERT INTO bookings(arrival, departure, fname, lname, email, phone, adults, children, room_pref) VALUES('$arrival', '$departure', '$fname', '$lname', '$email', '$phone', '$adults', '$child', '$room')";
	mysqli_query($conn, $sql);
	if(!$conn){
		echo " not connected";
	  }
}
?>
<?php
session_start();
 if (!isset($_SESSION['email'])) {
    echo '<script>
    alert("Please Login First:");
   window.location.href = "login.php";
</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,minimum-scale=1">
	<title>Hotel Reservation Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="background" style="height: 200px;">
		<div class="maxwidth">
			<div class="navbar_1 justify" style="padding: 5px; z-index: 1;">
				<div>
					<a href="home.php"><img src="img/Vaibhav.PNG" width="120px" class="logo"></a>
				</div>
				<div class="menu">
					<a href="home.php">Home</a>
					<a href="home.php">About</a>
					<a href="home.php">Facilities</a>
					<a href="home.php">Gallery</a>
					<a href="contact.php">Contact</a>
					<?php
					// echo $_SESSION['email'];
					if (!isset($_SESSION['email'])) {
						echo '<a href="login.php">Login</a>';
						echo '<a href="registrations.php">Register</a>';
					} else {
						echo '<div class="dropdown" >
						<button class="dropbtn">My Account
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content" style="margin-left: 555px;">
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
	</div>
	<form class="hotel-reservation-form" method="post" action="#">
		<h1><i class="far fa-calendar-alt"></i>Hotel Reservation Form</h1>
		<div class="fields">
			<div class="wrapper">
				<div>
					<label for="arrival">Arrival</label>
					<div class="field">
						<input id="arrival" type="date" name="arrival" required>
					</div>
				</div>
				<div class="gap"></div>
				<div>
					<label for="departure">Departure</label>
					<div class="field">
						<input id="departure" type="date" name="departure" required>
					</div>
				</div>
			</div>
			<div class="wrapper">
				<div>
					<label for="first_name">First Name</label>
					<div class="field">
						<i class="fas fa-user"></i>
						<input id="first_name" type="text" name="fname" placeholder="First Name" required>
					</div>
				</div>
				<div class="gap"></div>
				<div>
					<label for="last_name">Last Name</label>
					<div class="field">
						<i class="fas fa-user"></i>
						<input id="last_name" type="text" name="lname" placeholder="Last Name" required>
					</div>
				</div>
			</div>
			<label for="email">Email</label>
			<div class="field">
				<i class="fas fa-envelope"></i>
				<input id="email" type="email" name="email" placeholder="Your Email" required>
			</div>
			<label for="phone">Phone</label>
			<div class="field">
				<i class="fas fa-phone"></i>
				<input id="phone" type="tel" name="phone" placeholder="Your Phone Number" required>
			</div>
			<div class="wrapper">
				<div>
					<label for="adults">Adults</label>
					<div class="field">
						<select id="adults" name="adults" required>
							<option disabled selected value="">--</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
				</div>
				<div class="gap"></div>
				<div>
					<label for="child">Children</label>
					<div class="field">
						<select id="child" name="child" required>
							<option disabled selected value="">--</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
				</div>
			</div>
			<label for="room_pref">Room Preference</label>
			<div class="field">
				<select id="room_pref" name="room_pref" required>
					<option disabled selected value="">--</option>
					<option value="Standard">Deluxe</option>
					<option value="Deluxe">single</option>
					<option value="Suite">Double</option>
				</select>
			</div>
			<button type="submit" value="Reserve" name="submit" id="submit" class="btn" href="thanku.html">Reserve</button>
		</div>

	</form>
</body>

</html>