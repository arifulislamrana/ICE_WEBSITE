<?php
// Database configuration
define('ROOT_URL', 'http://localhost/ICE/');
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "170632";
$dbName     = "students";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if(isset($_POST['submit'])){

    $name = $_POST["name"];

    $id = $_POST["id"];

    $cgpa = $_POST["cgpa"];

    $fname = $_POST["fname"];

    $mname = $_POST["mname"];

    $address = $_POST["address"];

    $email = $_POST["email"];
    
    $password = $_POST["password"];// password md5() kore encrypt korte hobe.

    $cpassword = $_POST["cpassword"];

    if(strlen($password)>5 && ($password==$cpassword)){


            $phone = $_POST["phone"];

            $pic       = $_FILES['file']['name'];  
            //echo $pic;
            //print_r($_FILES['file']);
            $temp_name  = $_FILES['file']['tmp_name'];  
            if(isset($pic)){
                if(!empty($pic)){      
                    $location = "uploads/" . $_FILES["file"]["name"];
                    if(move_uploaded_file($temp_name, $location)){
                        //echo 'File uploaded successfully';
                    }
                }       
            }  else {
                echo 'You should select a file to upload !!';
            }

            if(!empty($name) && !empty($id) && !empty($cgpa) && !empty($address)
                                                && !empty($phone) && !empty($email) && !empty($password)){

                    $query = "INSERT INTO `details` (`id`, `name`, `cgpa`, `fname`, `mname`, `address`, `email`, `password`, `propic`, `phone`) 
                    VALUES ('$id', '$name', '$cgpa', '$fname', '$mname', '$address', '$email', '$password', '$location', '$phone')";

                    if(mysqli_query($db, $query)){
                        header('Location: '.ROOT_URL.'admin/student.php?id='.$id);
                    } else {
                        echo 'ERROR: '. mysqli_error($db);
                        }

            }else{
                echo 'please insert all elements';
            }


    }else{
        echo " inserted password should is less than 5 char<br>OR<br> password and confirm password should be same.<br> ";
    }
    
}


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
        flex: 4;
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
<div class="box-1"><h1>Please insert new student details</h1></div>


<form action="upload.php" method="post" enctype="multipart/form-data">
<div class="container">
<div class="box-1">
    <label>name</label>
	<input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" ><br><br>

    <label>ID</label>
    <input type="text" name="id" value="<?php echo isset($_POST['id']) ? $id : ''; ?>"><br><br>

    <label>CGPA</label>
	<input type="text" name="cgpa" value="<?php echo isset($_POST['cgpa']) ? $cgpa : ''; ?>"><br><br>

    <label>fname</label>
	<input type="text" name="fname" value="<?php echo isset($_POST['fname']) ? $fname : ''; ?>" ><br><br>

	<label>mname</label>
	<input type="text" name="mname" value="<?php echo isset($_POST['mname']) ? $mname : ''; ?>" ><br><br>

    <label>Address</label>
	<textarea name="address" value="<?php echo isset($_POST['address']) ? $address : ''; ?>"></textarea><br><br>
</div>
<div class="box-1">
    <label>email</label>
	<input type="email" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" ><br><br>

	<label>password</label>
	<input type="password" name="password" value="<?php echo isset($_POST['password']) ? $password : ''; ?>" ><br><br>

	<label>confirm password</label>
	<input type="password" name="cpassword" value="" ><br><br>

    <label>phone no</label>
	<input type="text" name="phone" value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>" ><br><br>
    
    <label>choose a DP</label>
    <input type="file" name="file">
</div>
<div class="box-2">
    <input type="submit" name="submit" value="Upload">
</div>
</div>
</form>
