<?php
session_start();
require('db.php');
/*
if(filter_has_var(INPUT_POST, 'data')){
	$email = $_POST['data'];
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
  	echo $email.' ';
	 
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo 'is valid email';
	}else{
		echo 'is not a valid mail';
	}
}
*/

if(filter_has_var(INPUT_POST, 'submit')){
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	if(!empty($email) && !empty($password)){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
			echo $email.' is not valid';
		}else{
			//echo '<h4 style="color:green; text-align:center;">
			//Login successfull <br></h4>';
			$filters = array(
				"email"=> FILTER_VALIDATE_EMAIL,
				/*"password"=>array(
					"filter"=> 'FILTER_VALIDATE_CHAR',
					"options"=> array(
						"min_char"=> 5,
						"max_char"=>100 
					)
				)*/
			);
			//print_r(filter_input_array(INPUT_POST, $filters));
			$query= "SELECT * FROM `admin` WHERE `email`='$email' and `password`='$password' ";
			$_SESSION['query']=$query;
			$result = mysqli_query($conn, $query);
			
			$count=mysqli_num_rows($result);
			
			if($count==1){
				header('Location: '.ROOT_URL.'admin/home.php');
			}else{
				echo "Login Failed";
			}
		}
	}else{

			echo '<h4 style="color:red; text-align:center;">
			!!Please insert all the fields!!</h4>';
	}
} 

?>

<!DOCTYPE html>
<html>

<head>
	<title>SalarySheet.ac.bd</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>


<body>
	<div class="login-box">
	<img src="logo.jpg" class="avatar">
	<h1>Login Here</h1>


	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	
	<p>UserEmail</p>
	<input type="text" name="email" placeholder="Enter UserEmail"
	 value="<?php echo isset($_POST['email']) ? $email : ''; ?>">

	<p>Password</p>
	<input type="password" name="password" placeholder="Enter Password"
	 value="<?php echo isset($_POST['email']) ? $password : ''; ?>">

	<input type="submit" name="submit" value="Login">
	<a href="<?php echo ROOT_URL; ?>">Back</a>
	</form>




	</div>
</body>
</html>