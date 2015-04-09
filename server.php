<?php
session_start();
	error_reporting(0);
	$login = $_POST['login'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$dbname = 'users';
	$connection = mysql_connect('localhost', 'root',' ') or die("Counldn't connect to the server");
	mysql_select_db($dbname, $connection);# or die("Failed to connect to MySQL: " . mysql_error());


	if (isset($login)) 
    {
		session_start();
		if(!empty($username))
        {
			$query = mysql_query("SELECT * FROM login WHERE username = '$username' AND `password` = '$password'"); #or die(mysql_error());
			$row = mysql_fetch_array($query); #or die(mysql_error());
			if (!empty($row['username']) AND !empty($row['password'])) 
            {   
                $_SESSION["userType"] = $row['type'];
        
				header('Location: EMS-frontEnd.php');
			}
			else{
                $_SESSION["loginStatus"]="fail";
                header('Location: Login.php');
			}

		}
	}
?>

