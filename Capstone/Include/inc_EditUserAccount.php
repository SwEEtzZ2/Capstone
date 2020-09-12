<div class ="dynamic_content">
<?php 
@session_start();
include('inc_Connection.php');
if(isset($_SESSION['Username']))
{
	$Username = $_SESSION['Username'];
 $SQL = "Select * FROM users where Username = '$Username'";
 $Result = mysqli_query($DBConnect,$SQL);
 while ($row = mysqli_fetch_assoc($Result)){
	 $UserID = ($row['UserId']);
	 $Firstname = ($row['FirstName']);
	 $Lastname = ($row['Lastname']);
	 $User = ($row['Username']);
	$Email = ($row['Email']);
	$Date = ($row['Date']);
	$Time = ($row['Time']);
 }
 echo "Profile";?></br></br>
<?php
}
if(isset($_POST['Submit'])){
	if(empty($Firstname)){
		$SQL = "UPDATE users SET FirstName = '$Firstname' Where UserId = '$UserID'";
		$Result = mysqli_query($DBConnect,$SQL);
		echo "Your first name was change.";
	}else{
		echo "Try again.";
	}
	if(empty($Lastname)){
		$SQL = "UPDATE users SET Lastname = '$Lastname' Where UserId = '$UserID'";
		$Result = mysqli_query($DBConnect,$SQL);
		echo "Your Last name was changed.";
	}else{
		echo " Try again";
	}
	if(empty($User)){
		$SQL = "UPDATE users SET Username = '$User' Where UserId = '$UserID'";
		$Result = mysqli_query($DBConnect,$SQL);
		echo "Your User name was changed.";
	}else{
		echo " Try again";
	}
	if(empty($Email)){
		$SQL = "UPDATE users SET Email = '$Email' Where UserId = '$UserID'";
		$Result = mysqli_query($DBConnect,$SQL);
		echo "Your Email was changed.";
	}else{
		echo " Try again";
	}
}
?>
</br></br>
<form method="POST" >
<?php echo "First Name: $Firstname  ";?><input type="text" name="First_name" value=""/></br></br>
<?php echo "Last Name: $Lastname  ";?><input type="text" name="Last_name" value=""/></br></br>
<?php echo "Email: $Email  ";?><input type="text" name="Email" value=""/></br></br>
<?php echo "Username: $User  ";?><input type="text" name="First_name" value=""/></br></br>
<input type="Submit" name="Submit" value="Submit"/></form>
</div>