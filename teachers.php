<?php
	include("header.php");


	$query = 'SELECT * FROM teachers';

	$result = mysqli_query($conn, $query);

	$details = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_free_result($result);

	mysqli_close($conn);
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Teachers</title>

			<style>
	.container-1{
        margin-top: 10px;
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
	</style>
		</head>
	<body>

	
				
	
		<h1 style= "text-align:center">All Students of ICE</h1>
		<?php foreach($details as $detail) : ?>
		<div class="container-1">
			
			<div class="box-1" style= "text-align:center">
				<h3>NAME: <?php echo $detail['name']; ?></h3>
				<p>Qualifications:<?php echo $detail['qualification']; ?> <br>
				Email: <?php echo $detail['email']; ?></p>
				<p>Phone:<?php echo $detail['phone']; ?></p>
			</div>

			<div class="box-2" style= "text-align:center">
				<img src="<?php echo 'admin/'.$detail['propic']; ?>" height="200px" width="200px" style="border-radius: 50%">
			</div>
			
		</div>
			
		<?php endforeach; ?>


</body>
</html>
<?php
include("footer.php");
?>