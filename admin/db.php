<?php
    
    //config
  define('ROOT_URL', 'http://localhost/ICE/');
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '170632');
	define('DB_NAME', 'students');

	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check Connection
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Failed to connect to MySQL '. mysqli_connect_errno();
    }
   