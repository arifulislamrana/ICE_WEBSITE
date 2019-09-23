<?php
    require('db.php');
    
    $id = mysqli_real_escape_string($conn, $_GET['id']);

	$query = 'SELECT * FROM details WHERE id='.$id;

	$result = mysqli_query($conn, $query);

	$detail = mysqli_fetch_assoc($result);
	
	mysqli_free_result($result);

	mysqli_close($conn);
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>student</title>
		</head>
	<body> 
	<h1><a href="allstudents.php">
				back</a>
		</h1>
		<div style= "text-align:center">
				<img src="<?php echo $detail['propic']; ?>" width="150" height="150">
				<h3>ID:<?php echo $detail['id']; ?></h3>
				<h4>NAME: <?php echo $detail['name']; ?> <br>
				CGPA: <?php echo $detail['cgpa']; ?><br></h4>
				<h5><a href="<?php echo $detail['email']?>">E-mail:<?php echo $detail['email']?></a></h5>
				<p>adress:<?php echo $detail['address']; ?></p>
		</div>


</body>
</html>