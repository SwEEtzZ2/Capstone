<div class ="dynamic_content">
<meta charset="utf-8" />
<?php
		include('inc_Connection.php');
		//include('database.php');
		$pattern = "/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$/";
		
		/* ^ anchor to the beginning
		\S* any set of characters
		(?=\S{8,}) of at least length 8
		(?=\S*[a-z]) containing at least one lowercase letter
		(?=\S*[A-Z]) and at least one uppercase letter
		(?=\S*[\d]) and at least one number
		(?=\S*[\W]) at least one non word character
		$ anchored at the end */
		
		date_default_timezone_set("America/New_York");
		$time = date('h:m:sa');
		$date = date('Y-m-d');
		$errors = array();
		$errOne = "Please fill in email fields.";
		$errTwo = "Please enter a valid Password. (Min. of eight characters, one uppercase and lowercase letter, a number, and a special character)";
		$errThree = "Please fill in the firstname field.";
		$errFour = "Please fill in the lastname field.";
		$errFive = "Please fill in the username field.";
		$errState = false;
		$Username = (isset($_POST['Username']) ? $_POST['Username'] : "");
		$pass = (isset($_POST['Password']) ? $_POST['Password'] : "");
		$pass2 = (isset($_POST['confirm_Password']) ? $_POST['confirm_Password'] : "");
		$firstName = (isset($_POST['First_name']) ? $_POST['First_name'] : "");
		$lastName = (isset($_POST['Last_name']) ? $_POST['Last_name'] : "");
		$email = (isset($_POST['email']) ? $_POST['email'] : "");
		$visits = 0;
		
		if (isset($_POST['Submit'])){
			if (empty($Username)){
				$errState = True;
				$errors[] = $errFive;
			}else{
				;
			}
			
			if (empty($firstName)){
				$errState = True;
				$errors[] = $errThree;
			}else{
				;
			}
			
			if (empty($lastName)){
				$errState = True;
				$errors[] = $errFour;
			}else{
				;
			}
			
			if (empty($email)){
				$errState = True;
				$errors[] = $errOne;
			}else{
				;
			}
			
			if (!empty($pass)){
				if ($pass == $pass2){
					if (preg_match($pattern,$pass)){
						
						echo "Success!";
						$pass = md5($pass);
						$SQL = "CREATE TABLE IF NOT EXISTS users (Date DATE, Time TIME,Username VARCHAR(25),Email VARCHAR(50),Password VARCHAR(50),Visits SMALLINT,FirstName VARCHAR(25),LastName VARCHAR(25))";
						$Result = mysqli_query($DBConnect,$SQL);
						$SQL = "INSERT INTO users (Date,Time,Username,Email,Password,Visits,FirstName,LastName) VALUES ('$date','$time','$Username','$email','$pass','$visits','$firstName','$lastName')";
						$Result = mysqli_query($DBConnect,$SQL);
						?>
						<script>
							location.href ='index.php?page=Login';
						</script>
						<?php
					}else{
						$errState = True;
						$errors[] = $errTwo;
					}
				}else{
					echo "Passwords do not match.";
				}
			}else{
				$errState = True;
				$errors[] = $errTwo;
			}

			if ($errState = True){
				$errors = array_unique($errors);
				foreach ($errors as $error){
					echo $error."<br/>";
				}
			}else{
				echo "Success!";
			}
		}
		?>


<p><form align="center" name ="loginForm" method="POST">
	First Name: <input type="text" name="First_name" /><br/><br/>
	Last Name: <input type="text" name="Last_name" /><br/><br/>
	Email:<input type="text" name="email" /><br/><br/>
	Username :<input type="text" name="Username"  /><br/><br/>
	Password: <input type ="Password" name="Password" value="" /><br/></br>
	Comfirm Password:<input type="Password" name="confirm_Password" value=""/><br/>
<input type="Submit" name="Submit" value="Submit"/><br/></form></p></div>