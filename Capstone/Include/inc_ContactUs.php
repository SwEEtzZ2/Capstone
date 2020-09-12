<div class ="dynamic_content">
<h1> We'd Love to Hear Your Feedback</h1>
<?php
	$errF = "Please fill in your Firstname.";
	$errL="Please fill in your Lastname.";
	$errU ="Please put in your Username.";
	$errE ="Please put in your Email.";
	$errFB ="You left your feedback empty.";
	$errState = false;
	$errors = array();
	$First_name=(isset($_POST['First_name']) ? $_POST['First_name']:"");
	$Last_name =(isset($_POST['Last_name']) ? $_POST['Last_name']:"");
	$Username =(isset($_POST['Username']) ? $_POST['Username']:"");
	$email =(isset($_POST['email']) ? $_POST['email']:"");
	$Feedback =(isset($_POST['Feedback']) ? $_POST['Feedback']:"");
	
	if(isset($_POST['Submit'])){
		if(empty($First_name)){
			$errState = True;
			$errors[]= $errF;
		}else{
			;
		}
		if(empty($Last_name)){
			$errState= True;
			$errors[] = $errL;
		}else{
			;
		}
		if(empty($Username)){
			$errState = True;
			$errors[] = $errU;
		}else{
			;
		}
		if(empty($email)){
			$errState = True;
			$errors[] = $errE;
		}else{
			;
		}
		if(!empty($Feedback)){
			$errState = True;
			$errors[] = $errFB;
		}else{
			;
		}
		if($errState = True){
			$errors = array_unique($errors);
			foreach($errors as $error){
				echo $error."<br/>";
			}
		}else{
			echo "Thank you for your feedback someone will get back to you within 3 business days.";
		}
	}
?>
<p><form  action ="index.php?page=ContactUs" method="POST">
	First Name: <input type="text" name ="First_name"/></br></br>
	Last Name: <input type="text" name="Last_name"/></br></br>
	Username : <input type="text" name="Username"/></br></br>
	Email : <input type ="text" name="email"/></br>
	Feedback : </br><center><textarea id="Feedback" placeholder="Tell us how you feel....."
				style="height:300px;width:300px"></textarea></center>
	<input type="Submit" name ="Submit" value="Submit"/>
</form>

</p>
</div>