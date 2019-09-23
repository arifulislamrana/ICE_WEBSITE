<?php
session_start();
include("header.php");

    
	$result = mysqli_query($conn, $_SESSION['query']);

	$detail = mysqli_fetch_assoc($result);
	
	mysqli_free_result($result);

	mysqli_close($conn);
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>student</title>
			<style>
			.container-1{
        margin-top: 0px;
        display: flex;
        /*align-items: flex-start;
        align-items: flex-end;
        align-items: center;
        align-items: stretch//dfault
        flex-direction: column;*/
        justify-content: space-between;
    }
    .container-1 div{
        border: 1px #ccc solid;
        padding: 10px;
		border-radius: 15px;
    }
    
    .box-1{
        flex: 2;
        order: 1;
        background-color: rgb(250, 139, 119);
        /*flex-basis: 27%; // set the width*/
    }
    .box-2{
        flex: 1;
        order: 2;
        background-color: rgb(250, 139, 119);
        /*flex-basis: 27%; // set the width*/
    }
    .box-3{
        flex: 1;
        order: 3;
        background-color: rgb(250, 139, 119);
        /*flex-basis: 27%; // set the width*/
    }
			
			</style>
		</head>
	<body> 
	
			<hr>

	<div class="container-1">

		<div class="box-1" style= "text-align:center">
				
				<h4>NAME: <?php echo $detail['name']; ?><br>
				<h3>ID:<?php echo $detail['id']; ?></h3>
				CGPA: <?php echo $detail['cgpa']; ?><br>
				FATHER'S NAME: <?php echo $detail['fname']; ?> <br>
				MOTHER'S NAME: <?php echo $detail['mname']; ?> <br></h4>
				<h3>Address:<?php echo $detail['address']; ?></h3>
				<h3>Phone:<?php echo $detail['phone']; ?></h3>
				<h5>E-mail:<a href="<?php echo $detail['email']?>"><?php echo $detail['email']?></a></h5>

		</div>

		<div class="box-2" style= "text-align:center">

			<img src="<?php echo 'admin/'.$detail['propic']; ?>">

		</div>

		<div class="box-3" style= "text-align:center">

		<h1><a href="<?php echo ROOT_URL;?>">
			Update Profile</a></h1>	
		<h1><a href="<?php echo ROOT_URL;?>">
			Reset Password</a></h1>
		<h1><a href="<?php echo ROOT_URL;?>">
			Logout</a></h1>

		</div>

</div>


</body>
</html>
<?php
include("footer.php");
?>