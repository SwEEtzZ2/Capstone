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
	 $Firstname = ($row['FirstName']);
	 $Lastname = ($row['Lastname']);
	 $User = ($row['Username']);
	$Email = ($row['Email']);
	$Date = ($row['Date']);
	$Time = ($row['Time']);
 }
 echo "Profile";?></br></br>
 <?php
 echo "Name : $Firstname $Lastname";
 ?></br>
 <?php
 echo " Username : $User";?>
 </br>
 <?php echo "Email : $Email";?>
 </br>
 <?php echo "Last day you visited the website was $Date at $Time.";
}
 ?>
<form action ="index.php?page=EditUserAccount" method="POST">
<button type="Submit" class="EditUserAccount">Edit Account</button></form>
</div>