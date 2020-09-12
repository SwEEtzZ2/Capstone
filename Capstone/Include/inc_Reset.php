<div class ="dynamic_content">
<?php
@session_start();
	include('inc_Connection.php');

	$Username = (isset($_POST['Username']) ? $_POST['Username'] : "");
	$L4user = "";

	$SQL = "SELECT username FROM Users WHERE Username ='$Username'";
	$result = mysqli_query($DBConnect,$SQL);
	$row = mysqli_fetch_row($result);
	$L4user = $row[0];
	
	
	
	function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'){
		$newpass = [];
		$max = mb_strlen($keyspace, '8bit') - 1;
		for ($i = 0; $i < $length; ++$i){
			$newpass []= $keyspace[random_int(0, $max)];
		}
		return implode('', $newpass);
	}
	$tempPass = (random_str(8, 'abcdefghijklmnopqrstuvwxyz'));
	
	if (isset($_POST['Submit'])){
		if ($L4user == $Username){
			echo "Your temporary mission password is ".$tempPass."<br/>";
			$newPass = md5($tempPass);
			$SQL = "UPDATE users SET Password='$newPass' WHERE Username ='$Username'";
			$result = mysqli_query($DBConnect,$SQL);
		}else{
			echo "Invalid Username";
		}
	}

?>
<form align="center" name ="Reset" method="POST" >
	<p><h1>Reset your Password</h1>
		Username :<input type="text" name="Username" value="<?php echo $Username;?>" /><br/><br/>
	<input type="submit" name="Submit"/></form>
	<form action="index.php?page=Login" method ="POST">
	<button type="Submit" >Login</button>
</body>
</div>