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

    $qualification = $_POST["qualification"];

    $email = $_POST["email"];

    $phone = $_POST["phone"];

            $pic       = $_FILES['file']['name'];  
            //echo $pic;
            //print_r($_FILES['file']);
            $temp_name  = $_FILES['file']['tmp_name'];  
            if(isset($pic)){
                if(!empty($pic)){      
                    $location = "teachers/" . $_FILES["file"]["name"];
                    if(move_uploaded_file($temp_name, $location)){
                        //echo 'File uploaded successfully';
                    }
                }       
            }  else {
                echo 'You should select a file to upload !!';
            }

            if(!empty($name) && !empty($phone) && !empty($email)){

                    $query = "INSERT INTO `teachers` ( `name`, `qualification`, `email`, `phone`, `propic`) 
                    VALUES ('$name', '$qualification', '$email', '$phone', '$location')";

                    if(mysqli_query($db, $query)){
                        header('Location: '.'home.php');
                    } else {
                        echo 'ERROR: '. mysqli_error($db);
                        }

            }else{
                echo 'please insert all elements';
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
<h1 style="text-align:center; color:white">Please insert new teacher details</h1>

<form action="addteacher.php" method="post" enctype="multipart/form-data">
<div class="container">
<div class="box-1">

    <label>name</label>
    <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" ><br><br>
    
    <label>qualifications</label>
	<input type="text" name="qualification" value="<?php echo isset($_POST['qualification']) ? $qualification : ''; ?>" ><br><br>

    <label>email</label>
	<input type="email" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" ><br><br>

    <label>phone no</label>
	<input type="text" name="phone" value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>" ><br><br>
    
    <label>choose a DP</label>
    <input type="file" name="file">
</div>
<div class="box-2">
    <input type="submit" name="submit" value="Upload">
</div>
</form>