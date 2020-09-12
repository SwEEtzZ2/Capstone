<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
		<head> 
			<link href="stylesheet.css" type="text/css" rel="stylesheet"/>
			<title>Keitha-Ann Capstone Project</title>
			<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		</head>
			<body>
			<link rel="icon" href="Images/favicon.ico" type="image/x-icon"/>
			<?php
			session_start();
			$LogInButton = '<a href="index.php?page=Login"/><img class="Log" src="Images/Login.jpg" alt="[Login]" type="Submit"/>';
			$LogOutButton = '<a href="index.php?page=Logout"/><img class="Logout" src="Images/LogOut.jpg" alt="[Logout]" type="Submit"/>';
			$NewUserButton = '<a href="index.php?page=NewUser"/><img class="NewUser" src="Images/NewUser.jpg" alt="[New User]" type="Submit"/>';
			$ProfileButton = '<a href="index.php?page=UserProfile"/><img class="Profile" src="Images/Profile.jpg" alt="[Profile]" type="Submit"/>';
			 $LogInOutButton = (isset($_SESSION['Username'])) ? $LogOutButton : $LogInButton;
			 echo "$LogInOutButton";
			 $ProfileNewButton = (isset($_SESSION['Username'])) ? $ProfileButton : $NewUserButton;
			 echo "$ProfileNewButton";
			 ?>
			
			<div class="Banner"><?php include("Include/inc_Banner.php");?></div>
			<div class="nav_button"><?php include("Include/inc_button_nav.php");?></div>
			<?php 
				if(isset($_GET['page'])){
					switch($_GET['page']){
						case 'Store':
							include('Include/inc_Store.php');
							break;
						case 'Shows':
							include('Include/inc_Shows.php');
							break;
						case 'EditUserAccount':
							include('Include/inc_EditUserAccount.php');
							break;
						case 'ContactUs':
							include('Include/inc_ContactUs.php');
							break;
						case 'Login':
							include('Include/inc_Login.php');
							break;
						case 'Logout':
							include('Include/inc_Logout.php');
							break;
						case 'UserProfile':
							include('Include/inc_UserProfile.php');
							break;
						case 'NewUser':
							include('Include/inc_NewUser.php');
							break;
						case 'ResetP':
							include('Include/inc_Reset.php');
							break;
						
						case 'homepage':
						default:
							include('Include/inc_home.php');
							break;
					}
				}
			else
				include('Include/inc_home.php');
			?>
			</body>
</html>