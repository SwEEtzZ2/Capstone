<div class ="dynamic_content">
<?php
@session_start();
include("inc_Connection.php");
	date_default_timezone_set("America/New_York");
	$time = date('h:m:sa');
	$date = date('Y-m-d');
	$Username = (isset($_POST['Username']) ? $_POST['Username'] : "");
	$pass = (isset($_POST['Password']) ? $_POST['Password'] : "");
	$SQL = "SELECT Date,Time,Visits FROM users WHERE Username='$Username'";
	$Result = mysqli_query($DBConnect,$SQL);
	while ($row = mysqli_fetch_assoc($Result)){
		$lastDate = ($row['Date']);
		$lastTime = ($row['Time']);
		$visits = ($row['Visits']);
	}
	
	$pass = md5($pass);
	$SQL = "SELECT Username,Password FROM users WHERE Username='$Username'";
	$Result = mysqli_query($DBConnect,$SQL);
	while ($row = mysqli_fetch_assoc($Result)){
		$userCheck = ($row['Username']);
		$passCheck = ($row['Password']);
	}
	
	if (isset($_POST['Submit'])){
		if ((!empty($Username)) || (!empty($pass))){
			if ($userCheck  == $Username AND $passCheck == $pass){
				$_SESSION['Username'] = $Username;
				
				if ($visits == 0){
					echo "Welcome $Username".".";
					$visits = ++$visits;
					$SQL = "UPDATE users SET Visits='$visits' WHERE Username='$Username'";
					$Result = mysqli_query($DBConnect,$SQL);
					?>
					<script>
						location.href = "index.php"
					</script>
					<?php
				}else{
					echo "Welcome back, $Username".". Your last login was $lastDate at $lastTime"." You have visited us $visits times.";
					$visits = ++$visits;
					$SQL = "UPDATE users SET Visits='$visits' WHERE Username='$Username'";
					$Result = mysqli_query($DBConnect,$SQL);
					$SQL = "UPDATE users SET Date='$date',Time='$time' WHERE Username='$Username'";
					$Result = mysqli_query($DBConnect,$SQL);
					?>
					<script>
					 location.href = "index.php"
					</script>
					<?php
				}
			}else{
				$Username = "Guest";
				echo "Invalid Username/Password. You are now logged in as $Username".".";
			}
		}else{
			$Username = "Guest";
			echo "Invalid Username/Password. You are now logged in as $Username".".";
		}
	}
?>
<form  method ="POST" action ="index.php?page=Login">
	Usernamename :<input type="text" name="Username"  value="" /><br/><br/>
	Password: <input type ="Password" name="Password" value="" /><br/>
	<input type="submit" name="Submit" value="Submit"/></form>
	<form align="center" name="Reset" action="index.php?page=ResetP" method="POST">
	<button type="Submit" class="Reset"> Reset Password</button></form>
</div>