
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
				
				
				$PersonExist = checkPersonExist($SIN);  //Check if the person have been added.
				
				if(!$PersonExist)    //If the database has not contain the person , then add the preson to DB.
				{
					$insertPerson = mysql_query("Insert into person(FIRSTNAME, LASTNAME,SIN,DATEOFBIRTH) values('$FirstName' , '$LastName','$SIN','$DOB')") or exit(mysql_error());
				}
				
				$CompanyExist = checkCompanyExist($Company);  //Check  if the Company have been added to database.
					
			
				if(!$CompanyExist)   // If the company has not been added to the DB, then add the company to DB
				{
					mysql_query("Insert into company(CORPORATIONNAME) values('$Company')");
				}
				
				
				$PresonID = getPersonID($SIN);
				$CompanyID = getCompanyID($Company);
				$EmployeeIDExist = checkEmployeeExist($PresonID,$CompanyID,$EmployType);
				
				if(!$EmployeeIDExist)
				{	
					if(adminAddGeneralEmployee($PresonID,$CompanyID,$EmployType))
					{
						$EmployeeID = "";
						$Result = getEmployeeID($PresonID,$CompanyID,$EmployeeID);
						
						if($Result)
						{
							if(adminAddFullTimeEmployee($EmployeeID,$DOH,$DOT,$Salary))
							{
								echo "Sucess To add FullTime Employee";
							}
							else
							{
								echo "Failed to add FullTIme Employee";
							}
						}
						else
						{
							echo "Employee do not exist!";
						}
						
					}
					else
					{
						echo "Admin Add Employee Failed";
					}
				}
				else
				{
					
					$EmployeeID = "";
					$Result = getEmployeeID($PresonID,$CompanyID,$EmployeeID);
			
					if($Result)
					{
						if(adminAlterExistFullEmployee($EmployeeID,$DOH,$DOT,$Salary))
						{
							echo "Sucess To Alter FullTime Employee";
						}
						else
						{
							echo "Failed to Alter FullTIme Employee";
						}
					}
					else
					{
						echo "Employee do not exist!";
					}
				
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
		
		
			$return  = $obj[$Request];
		}	
		return $return;
	}
	
	function checkPersonExist($PersonSIN)
	{
		$PersonExistAccount = mysql_query("Select count(*) as count from person where SIN = '$PersonSIN'") or exit(mysql_error());
		$row = mysql_fetch_object($PersonExistAccount);
		$PersonAccount = $row->count;
		
		if($PersonAccount > 0)
		{
			return true;
		}
		else
		{
			return false;
			
		}
	}
	
	function checkCompanyExist($CompanyName)
	{
		
		$CompanyExist = mysql_query("Select * From Company where  CORPORATIONNAME = '$CompanyName' limit 1") or exit(mysql_error());
		$CompanyExist_Rows = mysql_num_rows($CompanyExist);
		
		if($CompanyExist_Rows > 0)
		{
			mysql_free_result($CompanyExist);
			return true;
		}
		else
		{
			mysql_free_result($CompanyExist);
			return false;
		}
	}
	
	function getPersonID($PersonSIN)
	{
		
		$result = mysql_query("Select * From PERSON where SIN = '$PersonSIN' limit 1") or exit(mysql_error());
		if($result)
		{
			
			$meta = mysql_result($result,0,0);
			mysql_free_result($result);
			return $meta;
		}
		
	}
	
	function getCompanyID($CompanyName)
	{
		$meta = "";
		$result = mysql_query("Select ID From company where CORPORATIONNAME = '$CompanyName' limit 1") or exit(mysql_error());
		if($result)
		{
		
			$meta = mysql_result($result,0,0);
				
		}
		mysql_free_result($result);
		return $meta;
	}
	
	function adminAddGeneralEmployee($PersonID, $CompanyID, $EmployeeType)
	{
		if($PersonID !== "" && $CompanyID !== "" )
		{
		
			$result = mysql_query("Insert Into employee(company_id, person_id,EmployType) values('$CompanyID','$PersonID','$EmployeeType')");
			if($result)
			{
				mysql_free_result($result);
				return true;
			}
			else
			{
				mysql_free_result($result);
				return false;
			}
		}
	}
	
	function adminAddFullTimeEmployee($EmployeeID,$DateOfHire,$DateOfTermination,$Salary)
	{
		$result = mysql_query("Insert Into FulltimeEmployee(employee_id,dateofhire,dateoftermination,salary) values('$EmployeeID','$DateOfHire','$DateOfTermination','$Salary')");
		if($result)
		{
			mysql_free_result($result);
			return true;
		}
		else
		{
			mysql_free_result($result);
			return false;
		}
		
	}
	
	function getEmployeeID($PersonID,$CompanyID,&$EmployeeID)
	{
		$meta = false;
		$result = mysql_query("Select ID From employee where company_id = '$CompanyID' AND person_id = '$PersonID' ");
		if($result)
		{
				$EmployeeID = mysql_result($result,0,0);
				$meta = true;
		}
		mysql_free_result($result);
		return $meta;
	}
	
	function checkEmployeeExist($PersonID, $CompanyID, $EmployeeType)
	{
		$result = mysql_query("Select * From employee where company_id = '$CompanyID' AND person_id = '$PersonID' AND EmployType = '$EmployeeType'");
		$EmployeeExist_Rows = mysql_num_rows($result);
		mysql_free_result($result);
		if($EmployeeExist_Rows > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function checkFullEmployeeExist($EmployeeID)
	{
		$result = mysql_query("Select * from FulltimeEmployee where employee_id = '$EmployeeID'");
		$FullTimeEmployeeExist_Rows = mysql_num_rows($result);
		mysql_free_result($result);
		if($FullTimeEmployeeExist_Rows > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	
	function adminAlterExistFullEmployee($EmployeeID,$DateOfHire,$DateOfTermination,$Salary)
	{
		$result = mysql_query("Update FulltimeEmployee SET dateofhire = '$DateOfHire', dateoftermination = '$DateOfTermination', salary = '$Salary' where employee_id = $EmployeeID");
		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	

?>

