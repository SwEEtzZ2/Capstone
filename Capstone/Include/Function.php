<?php 
include('inc_Connection.php');
@session_start();
$user = $_SESSION['Username'];
	function getUserData($UserId)
	{
		$UserArray = array();
		$q = mysqli_query("Select * FROM users WHERE UserId = ".$UserId);
		$Result = mysqli_query($DBConnect,$q);
		while ($r = mysqli_fetch_assoc($Result))
		{
		$UserArray['UserId'] = $r['UserId'];
		}
		return $UserArray;
	}
	function getID($user)
	{
		$q = mysqli_query("Select * FROM users WHERE Username = ".$user.'"');
		$Result = mysqli_query($DBConnect,$q);
		while ($r = mysqli_fetch_assoc($Result))
		{
			return $r['UserId'];
		}

	}
	?>