<?php
	session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Basic Login System</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

			<div class="container">
				
				<div class="nav-wrapper">
					<?php
						if(isset($_SESSION["useruid"])) {
							echo "<a href='profile.php' style='text-decoration:none;' style='display: inline'>Profile</a>&nbsp&nbsp";
							echo " ";
							echo "<a href='includes/logout.inc.php' style='text-decoration:none;'>Log out</a>&nbsp&nbsp";
						}
						else {
							echo "<a href='signup.php' style='text-decoration:none;'>Sign up</a>&nbsp&nbsp";
							echo "<a href='login.php' style='text-decoration:none;'>Log in</a>&nbsp&nbsp";

						}
					?>

				
				</div>
			</div>
		</nav>
		
	<div class="wrapper">