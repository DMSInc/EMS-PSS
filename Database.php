
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
				
				$PresonID ="";
				$CompanyID  = "";
				if(!getPersonID($SIN,$PresonID))
				{
					echo "Faile to Add Employee";
					exit;
				}
				if(!getCompanyID($Company,$CompanyID))
				{
					echo "Faile to Add Employee";
					exit;
				}
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
			else if ($EmployType == "PT")
			{
				
			}
			else if($EmployType == "SN")
			{
			}
			else if($EmployType == "CT")
			{
			}
		}
		else if($userType == "G")
		{
			$EmployType = getValueFromRequest('ET'); //get Employ type.
			if($EmployType == "FT")
			{
			}
			else if($EmployType == "PT")
			{
			}
			else if($EmployType == "SN")
			{
			}
		}
	}
	else if($q == "modifyEmployee")
	{
		
		$SIN = getValueFromRequest('SIN');
		$COM  = getValueFromRequest('CM');
	
		$EmplyeeType = getValueFromRequest('ET');
		$EmployID = "";
		
		if(getEmployeeIDBySINComEmpType($SIN,$COM,$EmplyeeType,$EmployID))
		{
			if($EmplyeeType == "FT")
			{
				$FirstName = "";
				$LastName = "";
				$DateOfBirth = "";
				getFirstNameLastNameDOB($SIN,$FirstName,$LastName,$DateOfBirth);
				$DateOfHire = "";
				$DateOfTermination  = "";
				$Salary = "";
	
				
				getFullTimeDOHDOTSalary($EmployID,$DateOfHire,$DateOfTermination,$Salary);
				
				$array = array('FN' => $FirstName, 'LN' => $LastName, 'DOB' => $DateOfBirth,'DOH' => $DateOfHire, 'DOT' => $DateOfTermination, 'Salary' => $Salary);
				echo json_encode($array);
				
			}
			else if($EmplyeeType == "PT")
			{
			}
			else if($EmplyeeType == "SN")
			{
			}
		}
		else
		{
			echo "Can not find Employee in Employee Table";
		}
		
		mysql_close($connection);
			
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
	
	function getFirstNameLastNameDOB($SIN,&$FirstName,&$LastName,&$DateOfBirth)
	{
		$result = mysql_query("Select FIRSTNAME,LASTNAME,DATEOFBIRTH FROM Person WHERE SIN = '$SIN'");
		$resultNum = mysql_num_rows($result);
		
		if($resultNum > 0)
		{
			
			$FirstName = mysql_result($result,0,0);
			$LastName = mysql_result($result,0,1);
			$DateOfBirth  = mysql_result($result,0,2);
			mysql_free_result($result);
		}
		else
		{
			
		}
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
	
	function getPersonID($PersonSIN,&$PersonID)
	{
		
		$result = mysql_query("Select * From PERSON where SIN = '$PersonSIN' limit 1") or exit(mysql_error());
		
		$resultNUM = mysql_num_rows($result);
		
		if($resultNUM > 0)
		{
			$PersonID = mysql_result($result,0,0);
			mysql_free_result($result);
			return true;
		}
		else
		{
			echo "Person Do Not Exist";
			return false;
		}
		
	}
	
	function getCompanyID($CompanyName,&$COMID)
	{
		$meta = "";
		$result = mysql_query("Select ID From company where CORPORATIONNAME = '$CompanyName' limit 1") or exit(mysql_error());
		
		$resultNUM = mysql_num_rows($result);
		
		if($resultNUM > 0)
		{
			$COMID = mysql_result($result,0,0);
			mysql_free_result($result);
			return true;
		}
		else
		{
			echo "Company Do Not Exist";
			return false;
		}
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
	
	function getEmployeeIDBySINComEmpType($SIN,$COM,$EMPTYPE, &$EmployeeID)
	{
		$resultValue = false;
		$PersonID = "";
		$CompanyID = "";
		
		if(getPersonID($SIN,$PersonID))
		{
			if(getCompanyID($COM,$CompanyID))
			{
				$result = mysql_query("Select ID from employee where  company_id = '$CompanyID' AND person_id = '$PersonID' AND EmployType = '$EMPTYPE'");
				$resultNum = mysql_num_rows($result);
				if($resultNum > 0)
				{
					$EmployeeID = mysql_result($result,0,0);
					$resultValue = true;
				}
				else
				{
					echo "Can Not Find Employee ID";
				}
			}
		}
		
		return $resultValue;
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
	
	function getFullTimeDOHDOTSalary($EmployeeID, &$DOH, &$DOT, &$Salary)
	{
		
		$result = mysql_query("Select dateofhire, dateoftermination, salary from FulltimeEmployee where employee_id = '$EmployeeID'");
		$result_num = mysql_num_rows($result);
		
		if($result_num > 0)
		{
		
			$DOH = mysql_result($result,0,0);
			$DOT = mysql_result($result,0,1);
			$Salary = mysql_result($result,0,2);
		}
		else
		{
			//$array = array('server' => "Do find employee in Fulltime Table");
			//echo  json_encode($array);
		}
		
		mysql_free_result($result);
	}
	

?>

