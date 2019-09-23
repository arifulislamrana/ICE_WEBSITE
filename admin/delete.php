<?php
include("db.php");
?>

<head>
    <style>
    body{
            background-color: rgb(025, 39, 52);
        }
    .container{
        margin-top: 10px;
        display: flex;
        align-items: center;
        flex-direction: column;
        /*align-items: flex-start;
        align-items: flex-end;
        
        align-items: stretch
        */
        justify-content: space-between;
        
    }
    .container div{
        border: 1px #ccc solid;
        padding: 10px;
        border-radius: 15px;
    }

    .box-1{
        flex: 1;
        order: 1;
        background-color: rgb(250, 139, 119);
        /*flex-basis: 27%; // set the width*/
        text-align: center;
    }
    .box-2{
        flex: 1;
        order: 2;
        background-color: rgb(250, 139, 119);
        /*flex-basis: 27%; // set the width*/
        text-align: center;
    }

    </style>
</head>
<h1 ><a href="home.php" style="text-decoration:none; color:yellow; float:right">
				Go Home</a></h1>
<h1 style="text-align:center; color:white">Please insert one or more of following data to delete student details</h1>

<form actions="delete.php" method="post" enctype="multipart/form-data">
<div class="container">
<div class="box-1">

    <label>id</label>
    <input type="text" name="id" value="<?php echo isset($_POST['name']) ? $id : ''; ?>" ><br><br>
    <label>email</label>
	<input type="email" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" ><br><br>

    <label>phone no</label>
	<input type="text" name="phone" value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>" ><br><br>
</div>
<div class="box-2">
    <input type="submit" name="submit" value="Upload">
</div>
</form>
