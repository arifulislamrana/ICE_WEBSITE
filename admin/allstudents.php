<?php
	include("header.php");


	$query = 'SELECT * FROM details';

	$result = mysqli_query($conn, $query);

	$details = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

	mysqli_close($conn);
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Students</title>

			<style>
	body{
            background-color: rgb(025, 39, 52);
        }
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

	
				
	
		<h1 style= "text-align:center; color:white">All Students of ICE</h1>
		<?php foreach($details as $detail) : ?>
		<div class="container-1">
			
			<div class="box-1" style= "text-align:center">
				<h3>NAME: <?php echo $detail['name']; ?></h3>
				<p>ID:<?php echo $detail['id']; ?> <br>
				CGPA: <?php echo $detail['cgpa']; ?></p>
				<p>adress:<?php echo $detail['address']; ?></p>

				<a href=
				"student.php?id=<?php echo $detail['id']; ?>">
				Read More</a>
			</div>

			<div class="box-2" style= "text-align:center">
				<img src="<?php echo $detail['propic']; ?>" height="200px" width="200px" style="border-radius: 50%">
			</div>
			
		</div>
			
		<?php endforeach; ?>


</body>
</html>
<?php
include("footer.php");
?>