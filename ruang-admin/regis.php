</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- bootstrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />

	<!-- AOS -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<!-- css saya -->
	<link rel="stylesheet" href="Regist.css" />

	<link rel="Website icon" type="png" href="imgweb/LOGOFIX.png">

	<title>GANCANGRENT</title>
</head>

<body>
	<div class="template">
		<img src="imgweb/LOGOFIX.png" alt="">
		<p class="text-center"><b>GANCANGRENT</b></p>
	</div>
	<!-- <div> -->
	<section>
		<form form method="POST" action="input.php" id="myform">
			<div class="inputBox">
				<h3>Regist Here</h3>
	
				<label for="username">Username</label>
				<input type="text" placeholder="Email or Phone" id="username" name="username" required />
	
				<label for="password">Password</label>
				<input type="password" placeholder="Password" id="password" name="password" required />
				<div id="toggle" onclick="showHide0();"></div>
	
				<label for="pass">Confirm your Password</label>
				<input type="password" placeholder="Confirm" id="pass" name="confirmpassword" required />
				<div id="togg" onclick="showHide1();"></div>
	
				<!-- btn-login -->
				<div>
					<a class="tombol btn" type="submit" onclick="document.getElementById('myform').submit()">Regist</a>
	
				</div>

				<!-- btn-login -->
				<!-- img -->
				<img class="image-car" src="imgweb/carLogin.png" alt="" data-tilt/>
				<!-- img -->
		</form>
	</section>

	<script type="text/javascript" src="vanilla-tilt.min.js"></script>

	<script src="LandG.js"></script>
</body>

</html> -->