
<?php

	error_reporting(0);

	$dbname = 'users';
	$connection = mysql_connect('localhost', 'root','Conestoga1') or die("Counldn't connect to the server");
	
	mysql_select_db($dbname, $connection);# or die("Failed to connect to MySQL: " . mysql_error());
	

	$q = "";
	$q = getValueFromRequest('q');

	if($q == "addEmployee")
	{
		$userType = getValueFromRequest('UT');
		if($userType == "A")
		{
		
			$EmployType = getValueFromRequest('ET'); //get Employ type.
			if($EmployType == "FT")
			{
				$FirstName = getValueFromRequest('FN');
				$LastName = getValueFromRequest('LN');
				$Company = getValueFromRequest('CM');
				$SIN 	= getValueFromRequest('SIN');
				$DOB	= getValueFromRequest('DOB');
				$DOH 	= getValueFromRequest('DOH');
				$DOT	= getValueFromRequest('DOT');
				$Salary = getValueFromRequest('Salary');
				
				
				$query = mysql_query("INSERT INTO FullTimeEmp(FirstName,LastName,Company,SIN,DateOfBirth,DataOfHire,DateOfTermination,Salary)
					VALUES ('$FirstName' , '$LastName','$Company','$SIN','$DOB','$DOH','$DOT','$Salary')");
					
				if($query)
				{
					echo "Success";
				}
				else
				{
					echo "Failed";
				}
				
				mysql_close($connection);
			}
		}
	}

	function getValueFromRequest($Request)
	{
		$return = "";
		if(isset($_REQUEST[$Request]))
		{
		
			$json = stripslashes($_REQUEST[$Request]);

			$obj = json_decode($json,true);
		
			echo $obj;
			$return  = $obj[$Request];
		}	
		return $return;
	}
?>

