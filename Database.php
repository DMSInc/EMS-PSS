
<?php

	error_reporting(0);

	$dbname = 'EMS-PSS';
	$connection = mysql_connect('localhost', 'root',' ') or die("Counldn't connect to the server");
	
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
				
				$PersonID ="";
				$CompanyID  = "";
				if(!getPersonID($SIN,$PersonID))
				{
					echo "Faile to Add Employee";
					exit;
				}
				if(!getCompanyID($Company,$CompanyID))
				{
					echo "Faile to Add Employee";
					exit;
				}
				$EmployeeIDExist = checkEmployeeExist($PersonID,$CompanyID,$EmployType);
				
				if(!$EmployeeIDExist)
				{	
					if(adminAddGeneralEmployee($PersonID,$CompanyID,$EmployType))
					{
						$EmployeeID = "";
						$Result = getEmployeeID($PersonID,$CompanyID,$EmployeeID);
						
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
					$Result = getEmployeeID($PersonID,$CompanyID,$EmployeeID);
			
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
				$FirstName = getValueFromRequest('FN');
				$LastName = getValueFromRequest('LN');
				$Company = getValueFromRequest('CM');
				$SIN 	= getValueFromRequest('SIN');
				$DOB	= getValueFromRequest('DOB');
				$DOH 	= getValueFromRequest('DOH');
				
				
				$PersonID ="";
				if($SIN !== "")
				{
					$PersonExist = checkPersonExist($SIN);  //Check if the person have been added.
					if(!$PersonExist)    //If the database has not contain the person , then add the preson to DB.
					{
						$insertPerson = mysql_query("Insert into person(FIRSTNAME, LASTNAME,SIN,DATEOFBIRTH) values('$FirstName' , '$LastName','$SIN','$DOB')") or exit(mysql_error());
						$PersonID = mysql_insert_id();
					}
					else
					{
						getPersonID($SIN,$PersonID);
					}
				}
				else
				{
					$insertPerson = mysql_query("Insert into person(FIRSTNAME, LASTNAME,SIN,DATEOFBIRTH) values('$FirstName' , '$LastName','$SIN','$DOB')") or exit(mysql_error());
					$PersonID = mysql_insert_id();
				}
				
				
				$CompanyID  = "";
				if($Company !== "")
				{
					$CompanyExist = checkCompanyExist($Company);  //Check  if the Company have been added to database.
					if(!$CompanyExist)   // If the company has not been added to the DB, then add the company to DB
					{
						mysql_query("Insert into company(CORPORATIONNAME) values('$Company')") or exit(mysql_error());
						$CompanyID =  mysql_insert_id();
						
					}	
					else
					{
						getCompanyID($Company,$CompanyID);
					}
				}
				else
				{
					$insertCom_result = mysql_query("Insert into company(CORPORATIONNAME) values('$Company')") or exit(mysql_error());
					if($insertCom_result)
					{
						$CompanyID = mysql_insert_id();
					}
				}
				
				$EmployeeIDExist = checkEmployeeExist($PersonID,$CompanyID,$EmployType);   //?
				
				if(!$EmployeeIDExist)
				{	
					//check person id exsit in the table 
					if(checkExsitPersonID($PersonID))
					{
						if(generalAddGeneralEmployee($PersonID, $CompanyID, $EmployType))
						{
							$EmployeeID = "";
							$Result = getEmployeeID($PersonID,$CompanyID,$EmployeeID);
							
							if($Result)
							{
								if(generalAddFullTimeEmployee($EmployeeID,$DOH))
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
							echo "General Add Employee Failed ";
						}
					}
					else
					{
						echo "Person ID exist in the table";
					}
				}
				else
				{
					
					$EmployeeID = "";
					$Result = getEmployeeID($PersonID,$CompanyID,$EmployeeID);
			
					if($Result)
					{
						//echo "get Employee ID via personID, CompanyId, EmployeeID";
						if(generalAlterExistFullEmployee($EmployeeID,$DOH))
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
			else if($EmployType == "PT")
			{
				$FirstName = getValueFromRequest('FN');
				$LastName = getValueFromRequest('LN');
				$Company = getValueFromRequest('CM');
				$SIN 	= getValueFromRequest('SIN');
				$DOB	= getValueFromRequest('DOB');
				$DOH 	= getValueFromRequest('DOH');
				
				$PersonID ="";
				if($SIN !== "")
				{
					$PersonExist = checkPersonExist($SIN);  //Check if the person have been added.
					if(!$PersonExist)    //If the database has not contain the person , then add the preson to DB.
					{
						$insertPerson = mysql_query("Insert into person(FIRSTNAME, LASTNAME,SIN,DATEOFBIRTH) values('$FirstName' , '$LastName','$SIN','$DOB')") or exit(mysql_error());
						$PersonID = mysql_insert_id();
					}
					else
					{
						getPersonID($SIN,$PersonID);
					}
				}
				else
				{
					$insertPerson = mysql_query("Insert into person(FIRSTNAME, LASTNAME,SIN,DATEOFBIRTH) values('$FirstName' , '$LastName','$SIN','$DOB')") or exit(mysql_error());
					$PersonID = mysql_insert_id();
				}
				
				
				$CompanyID  = "";
				if($Company !== "")
				{
					$CompanyExist = checkCompanyExist($Company);  //Check  if the Company have been added to database.
					if(!$CompanyExist)   // If the company has not been added to the DB, then add the company to DB
					{
						mysql_query("Insert into company(CORPORATIONNAME) values('$Company')") or exit(mysql_error());
						$CompanyID =  mysql_insert_id();
						
					}	
					else
					{
						getCompanyID($Company,$CompanyID);
					}
				}
				else
				{
					$insertCom_result = mysql_query("Insert into company(CORPORATIONNAME) values('$Company')") or exit(mysql_error());
					if($insertCom_result)
					{
						$CompanyID = mysql_insert_id();
					}
				}
	
				$EmployeeIDExist = checkEmployeeExist($PersonID,$CompanyID,$EmployType);   //?
				
				if(!$EmployeeIDExist)
				{	
					//check person id exsit in the table 
					if(checkExsitPersonID($PersonID))
					{
						if(generalAddGeneralEmployee($PersonID, $CompanyID, $EmployType))
						{
							$EmployeeID = "";
							$Result = getEmployeeID($PersonID,$CompanyID,$EmployeeID);
							
							if($Result)
							{
								
								if(generalAddPartTimeEmployee($EmployeeID,$DOH))
								{
									echo "Sucess To add PartTime Employee";
								}
								else
								{
									echo "Failed to add PartTime Employee";
								}
							}
							else
							{
								echo "Employee do not exist!";
							}
						}
						else
						{
							echo "General Add PartTime Employee Failed ";
						}
					}
					else
					{
						echo "Person ID exist in the table";
					}
				}
				else
				{
					
					$EmployeeID = "";
					$Result = getEmployeeID($PersonID,$CompanyID,$EmployeeID);
			
					if($Result)
					{
						//echo "get Employee ID via personID, CompanyId, EmployeeID";
						if(generalAlertExistPartTimeEmployee($EmployeeID,$DOH))
						{
							echo "Sucess To Alter PartTime Employee";
						}
						else
						{
							echo "Failed to Alter PartTime Employee";
						}
					}
					else
					{
						echo "Employee do not exist!";
					}
				}
				mysql_close($connection);
			}
			else if($EmployType == "SN")
			{
				generalAddSeansonEmployeeToDB();
			}
		}
	}
	else if($q == "modifyEmployee")
	{
		
		$SIN = getValueFromRequest('SIN');
		$COM  = getValueFromRequest('CM');
	
		$EmplyeeType = getValueFromRequest('ET');
		$EmployID = "";
		$ErrorInfor = "";
		if(getEmployeeIDBySINComEmpType($SIN,$COM,$EmplyeeType,$ErrorInfor,$EmployID))
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
			
			echo json_encode($ErrorInfor);
		}
		
		mysql_close($connection);
			
	}
	else if($q == "enterTimeCard")
	{
	
		$EmpType  = getValueFromRequest('ET');
		$SIN 	= getValueFromRequest('SIN');
		$COM    = getValueFromRequest('CM');
		$EmpID  =  "";
		$ErrorInfo = "";
		if(getEmployeeIDBySINComEmpType($SIN,$COM,$EmpType,$ErrorInfo, $EmpID))
		{
			
			if($EmpType == "SN")
			{
				$MondayH = getValueFromRequest('MH');
				$TuesdayH = getValueFromRequest('TH');
				$WednesdayH = getValueFromRequest('WH');
				$ThursdayH = getValueFromRequest('THH');
				$FridayH = getValueFromRequest('FH');
				$SaturdayH = getValueFromRequest('SAH');
				$SundayH = getValueFromRequest('SUNH');
				$WeekAmount = getValueFromRequest('WA');
				if(insertTimeCard($EmpID, $MondayH, $TuesdayH, $WednesdayH, $ThursdayH, $FridayH,$SaturdayH,$SundayH))
				{
					 $TimeCardID = mysql_insert_id();
					if(insertSeasonEmpWeekPiece($TimeCardID,$WeekAmount))
					{
						$arr = array("Result" => "Sucess to Insert SeasonEmpWorkPiece table.");
						echo json_encode($arr);
					}
					else
					{
						$arr = array("Result" => "Failed to Insert SeasonEmpWorkPiece table.");
						echo json_encode($arr);
					}
					
					
				}
				else
				{
					$arr = array("Result" => "Failed insret TimeCard");
					echo json_encode($arr);
				}
				
			
			}
			else
			{
				$MondayH = getValueFromRequest('MH');
				$TuesdayH = getValueFromRequest('TH');
				$WednesdayH = getValueFromRequest('WH');
				$ThursdayH = getValueFromRequest('THH');
				$FridayH = getValueFromRequest('FH');
				$SaturdayH = getValueFromRequest('SAH');
				$SundayH = getValueFromRequest('SUNH');
				if(insertTimeCard($EmpID, $MondayH, $TuesdayH, $WednesdayH, $ThursdayH, $FridayH,$SaturdayH,$SundayH))
				{
			
					$arr = array("Result" => "Sucess insret TimeCard");
					echo json_encode($arr);
					
				}
				else
				{
					$arr = array("Result" => "Failed insret TimeCard");
					echo json_encode($arr);
				}
			}
		}
		else
		{
			$arr = array("Result" => "Do not Find Employee ID");
			echo json_encode($arr);
		}
		
		mysql_close($connection);
	}
	else if($q == "searchEmployee")
	{
		$FNP = getValueFromRequest('FN');
		$LNP = getValueFromRequest('LN');
		$SINP 	= getValueFromRequest('SIN');
		$UTP	= getValueFromRequest('UT');
		
		searchEmployee($FNP,$LNP,$SINP,$UTP);
	}
	else if($q == "selectSearchedEmployee")
	{
		
			userSelectSearchedEmployee();
		
	}
    else{
        
        echo "sameer";
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
	
	function insertSeasonEmpWeekPiece($TimeCardID,$PieceAmount)
	{
		$result = mysql_query("Insert into SeasonEmpWeekPiece(timecard_id,pieceamount) values('$TimeCardID','$PieceAmount')") or exit(mysql_error()) ;
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
	
	function insertTimeCard($EmpID, $MondayH, $TuesdayH, $WednesdayH, $ThursdayH, $FridayH,$SaturdayH,$SundayH)
	{	
		$MondayH = floatval($MondayH);
		$TuesdayH = floatval($TuesdayH);
		$WednesdayH = floatval($WednesdayH);
		$ThursdayH = floatval($ThursdayH);
		$FridayH = floatval($FridayH);
		$SaturdayH = floatval($SaturdayH);
		$SundayH = floatval($SundayH);
		

		$result = mysql_query("Insert Into TimeCard(employee_id,mondayHours,tuesdayHours,wednesdayHours,thursdayHours,fridayHours,saturdayHours,sundayHours) values('$EmpID', '$MondayH','$TuesdayH', '$WednesdayH', '$ThursdayH', '$FridayH','$SaturdayH','$SundayH')") or exit(mysql_error());
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
			
			return false;
		}
	}
	
	function checkExsitPersonID($PersonID)
	{
		if($PersonID !== "")
		{
			$result = mysql_query("Select COUNT(person_id = $PersonID) from employee");
			if($result == 0)
			{
				return false;
			}
			else
			{
				return true;
			}
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
	function generalAddGeneralEmployee($PersonID, $CompanyID, $EmployeeType)
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
	
	function getEmployeeIDBySINComEmpType($SIN,$COM,$EMPTYPE,&$ErrorInfor, &$EmployeeID)
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
					$ErrorInfor = array('ErrorInfor' => "Can Not Find Employee ID");
				}
			}
			else
			{
				$ErrorInfor = array('ErrorInfor' => "Can Not Find Company ID");
			}
		}
		else
		{
			$ErrorInfor = array('ErrorInfor' => "Can Not Find Person ID");
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
	
	function generalAddFullTimeEmployee($EmployeeID,$DateOfHire)
	{
		$result = mysql_query("Insert Into FulltimeEmployee(employee_id,dateofhire) values('$EmployeeID','$DateOfHire')");
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
	
	function generalAlterExistFullEmployee($EmployeeID,$DateOfHire)
	{
		$result = mysql_query("Update FulltimeEmployee SET dateofhire = '$DateOfHire' where employee_id = $EmployeeID");
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
	
	function generalAddPartTimeEmployee($EmployeeID,$DateOfHire)
	{
		$result = mysql_query("Insert Into ParttimeEmployee(employee_id,dateofhire) values('$EmployeeID','$DateOfHire')");
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
	
	function generalAlertExistPartTimeEmployee($EmployeeID,$DateOfHire)
	{
			$result = mysql_query("Update ParttimeEmployee SET dateofhire = '$DateOfHire' where employee_id = $EmployeeID");
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
	
	
	function searchEmployee($FNP,$LNP,$SINP,$UTP)
	{
	
		$result = "";
		if($FNP !== "" && $LNP == "" && $SINP == "")
		{

			$result = mysql_query("Select ID,FIRSTNAME,LASTNAME,SIN From  PERSON where FIRSTNAME='$FNP'") or exit(mysql_error());
		}
		else if($FNP == "" && $LNP !== "" && $SINP == "")
		{
			$result = mysql_query("Select ID,FIRSTNAME,LASTNAME,SIN From  PERSON where LASTNAME='$LNP'") or exit(mysql_error());
		}
		else if($FNP == "" && $LNP == "" && $SINP !== "")
		{
			$result = mysql_query("Select ID,FIRSTNAME,LASTNAME,SIN From  PERSON where SIN='$SINP'") or exit(mysql_error());
		}
		else if($FNP !== "" && $LNP !== "" && $SINP == "")
		{
			$result = mysql_query("Select ID,FIRSTNAME,LASTNAME,SIN From  PERSON where FIRSTNAME='$FNP' AND LASTNAME='$LNP'") or exit(mysql_error());
		}
		else if($FNP !== "" && $LNP == "" && $SINP !== "")
		{
			$result = mysql_query("Select ID,FIRSTNAME,LASTNAME,SIN From  PERSON where FIRSTNAME='$FNP' AND SIN='$SINP' ") or exit(mysql_error());
		}
		else if($FNP == "" && $LNP !== "" && $SINP !== "")
		{
			$result = mysql_query("Select ID,FIRSTNAME,LASTNAME,SIN From  PERSON where LASTNAME='$LNP' AND SIN='$SINP'") or exit(mysql_error());
		}
		else if($FNP !== "" && $LNP !== "" && $SINP !== "")
		{
			$result = mysql_query("Select ID,FIRSTNAME,LASTNAME,SIN From  PERSON where FIRSTNAME='$FNP' AND LASTNAME='$LNP' AND SIN='$SINP'") or exit(mysql_error());
		}
		
		
		
		$result_row = mysql_num_rows($result);
		
		if($result_row > 0)
		{
			$tableLists = "<table>";
			for($index = 0; $index < $result_row; $index++)
			{
				$FN = mysql_result($result,$index,1);
				$LN = mysql_result($result,$index,2);
				$SIN = mysql_result($result,$index,3);
				
				$PersonID = mysql_result($result,$index,0);
				
				$result_EMP = "";
				if($UTP == "G")
				{
					$result_EMP = mysql_query("Select ID, EmployType, company_id From employee where person_id = '$PersonID' AND Employeestatus = 'Active' AND EmployType != 'CT' ") or exit(mysql_error());
				}
				else if($UTP == "A")
				{
					$result_EMP = mysql_query("Select ID, EmployType, company_id From employee where person_id = '$PersonID'") or exit(mysql_error());
				}
				else
				{
					$arr = array("ErrorMsg" => "No Employee Exist!");
					echo json_encode($arr);
					exit;
				}
				
				$result_EMP = mysql_query("Select ID, EmployType, company_id From employee where person_id = '$PersonID'") or exit(mysql_error());
				
				$result_EMP_row = mysql_num_rows($result_EMP);
				
				if($result_EMP_row > 0)
				{
					for($indexS = 0; $indexS < $result_EMP_row; $indexS++)
					{
						$EmployeeID = mysql_result($result_EMP,$indexS,0);
						$EmployeeType = mysql_result($result_EMP,$indexS,1);
						$CompanyID = mysql_result($result_EMP,$indexS,2); 
						
						
						//$tableLists .="<tr><td>'$FN'</td><td>'$LN'</td><td>'$SIN'</td><td><button value = '$EmployeeID' onclick='SelectEmp($EmployeeID,$EmployeeType,$CompanyID,$PersonID)'>Select</button></td></tr>";
						$tableLists .="<tr><td>'$FN'</td><td>'$LN'</td><td>'$SIN'</td><td><button value='$EmployeeID' onclick='SelectEmp(this.value)'>Select</button></td></tr>";
					}
					
					mysql_free_result(result_EMP);
					
				}
				
			}
			$tableLists .="</table>";
			mysql_free_result(result);
		
			$arr = array('searchResult' =>$tableLists);
			echo json_encode($arr);
		}
		else
		{
			$arr = array('searchResult' => "No Result");
			echo json_encode($arr);
		}
		
	
	}
	
	
	function userSelectSearchedEmployee()
	{
		$EmployeeID 	= getValueFromRequest('EID');
		$UserType    = getValueFromRequest('UT');
		$PersonID = "";
		$CompanyID = "";
		$EmployeeType  =  "";
		$EmployeeStatus = "";
		$EmployeeReasonForLeave = "";
		
		$result_PCE = mysql_query("Select person_id,company_id,EmployType,Employeestatus,ReasonForLeave from employee where ID = '$EmployeeID'");
		if($result_PCE)
		{
		
			$PersonID = mysql_result($result_PCE,0,0);
			$CompanyID = mysql_result($result_PCE,0,1);
			$EmployeeType = mysql_result($result_PCE,0,2);
			$EmployeeStatus = mysql_result($result_PCE,0,3);
			$EmployeeReasonForLeave = mysql_result($result_PCE,0,4);
			mysql_free_result($result_PCE);
			
		}
		$FirstName = "";
		$LastName = "";
		$SIN = "";
		$DateOfBirth = "";
		
		$CompanyName = "";
		
		
		$result = mysql_query("Select FIRSTNAME,LASTNAME,SIN,DATEOFBIRTH FROM PERSON WHERE ID = '$PersonID' ") or exit(mysql_error());
		if($result)
		{
		
			$result_row = mysql_num_rows($result);
			
			if($result_row > 0)
			{
			
				$tableLists = "<table>";
				
				$tableLists .= "<tr bgcolor='#009900'><td>EmployeeType:</td><td>$EmployeeType</td></tr>";
				
				$FirstName = mysql_result($result,0,0);
				$tableLists .= "<tr bgcolor='#006666'><td>FirstName:</td><td>$FirstName</td></tr>";
				
				$LastName = mysql_result($result,0,1);
				$tableLists .= "<tr bgcolor='#009900'><td>LastName:</td><td>$LastName</td></tr>";
				
				
				$SIN = mysql_result($result, 0,2);
				$tableLists .= "<tr bgcolor='#006666'><td>SIN:</td><td>$SIN</td></tr>";
				
				$DateOfBirth = mysql_result($result,0,3);
				dateTransfor($DateOfBirth);
				$tableLists .= "<tr bgcolor='#009900'><td>DateOfBirth:</td><td>$DateOfBirth</td></tr>";
				
				//Free Result undo
				mysql_free_result($result);
				
				
				//Find the Company
				$CompanyResult = mysql_query("Select CORPORATIONNAME From company where ID = '$CompanyID'");
				if($CompanyResult)
				{
					$CompanyResult_row = mysql_num_rows($CompanyResult);
					if($CompanyResult_row > 0)
					{
						$CompanyName = mysql_result($CompanyResult,0,0);
						$tableLists .= "<tr bgcolor='#006666'><td>CompanyName:</td><td>$CompanyName</td></tr>";
					}
				}
			
			
				if($EmployeeType == "FT")
				{
					$result_FT = mysql_query("Select dateofhire,dateoftermination,salary From FulltimeEmployee where employee_id = '$EmployeeID'")  or exit(mysql_error());
					if($UserType == "A")
					{
						if($result_FT)
						{
							$DateOfHire = mysql_result($result_FT,0,0);
							dateTransfor($DateOfHire);
							$DateOfTer = mysql_result($result_FT,0,1);
							dateTransfor($DateOfTer);
							$Salary	 = mysql_result($result_FT,0,2);
							$tableLists .= "<tr bgcolor='#009900'><td>DateOfHire:</td><td>$DateOfHire</td></tr>";
							$tableLists .= "<tr bgcolor='#006666'><td>DateOfTermination:</td><td>$DateOfTer</td></tr>";
							$tableLists .= "<tr bgcolor='#009900'><td>Salary:</td><td>$Salary</td></tr>";
	
						}
					}
					else if($UserType == "G")
					{
						if($result_FT)
						{
							$DateOfHire = mysql_result($result_FT,0,0);
							dateTransfor($DateOfHire);
							$tableLists .= "<tr bgcolor='#009900'><td>DateOfHire:</td><td>$DateOfHire</td></tr>";
						}
					}
					mysql_free_result($result_FT);
					
				}
				else if($EmployeeType == "PT")
				{
					$result_PT = mysql_query("Select dateofhire,dateoftermination,hourlyrate from ParttimeEmployee where employee_id='$EmployeeID'") or exit(mysql_error());
					
					if($UserType == "A")
					{
						if($result_PT)
						{
							$DateOfHire = mysql_result($result_PT,0,0);
							dateTransfor($DateOfHire);
							$DateOfTer = mysql_result($result_PT,0,1);
							dateTransfor($DateOfTer);
							$HourRate = mysql_result($result_PT,0,2);
							
							$tableLists .= "<tr  bgcolor='#009900'><td>DateOfHire:</td><td>$DateOfHire</td></tr>";
							$tableLists .= "<tr  bgcolor='#006666'><td>DateOfTermination:</td><td>$DateOfTer</td></tr>";
							$tableLists .= "<tr  bgcolor='#009900'><td>HourlyRate:</td><td>$HourRate</td></tr>";
						}
						
					}
					else if($UserType == "G")
					{
						$DateOfHire = mysql_result($result_PT,0,0);
						dateTransfor($DateOfHire);
						$tableLists .= "<tr bgcolor='#009900'><td>DateOfHire:</td><td>$DateOfHire</td></tr>";
					}
					mysql_free_result($result_PT);
				}
				else if($EmployeeType == "SN")
				{
					$result_SN = mysql_query("Select season,piecePay,seasonYear from SeasonalEmployee where employee_id='$EmployeeID'") or exit(mysql_error());
					if($UserType == "A")
					{
						if($result_SN)
						{
							$Season = mysql_result($result_SN,0,0);
							$PiecePay = mysql_result($result_SN,0,1);
							$SeasonYear = mysql_result($result_SN,0,2);
							
							
							$tableLists .= "<tr bgcolor='#009900'><td>Season:</td><td>$Season</td></tr>";
							$tableLists .= "<tr  bgcolor='#006666'><td>Piecepay:</td><td>$PiecePay</td></tr>";
							$tableLists .= "<tr bgcolor='#009900'><td>SeasonYear:</td><td>$SeasonYear</td></tr>";
						}
					}
					else if($UserType == "G")
					{
						$Season = mysql_result($result_SN,0,0);
						$SeasonYear = mysql_result($result_SN,0,2);
						
						
						$tableLists .= "<tr  bgcolor='#009900'><td>Season:</td><td>$Season</td></tr>";
						$tableLists .= "<tr bgcolor='#006666'><td>SeasonYear:</td><td>$SeasonYear</td></tr>";
					}
					
					mysql_free_result($result_SN);
					
				}
				else if($EmployeeType == "CT")
				{
					
					if($UserType == "A")
					{
						$result_CT = mysql_query("Select contractStartDate,contractStopDate,fixedContractAmount from Contractor where employee_id='$EmployeeID'") or exit(mysql_error());
						if($result_CT)
						{
							$ContractStartDate = mysql_result($result_CT,0,0);
							dateTransfor($ContractStartDate);
							$ContractStopdate = mysql_result($result_CT,0,1);
							dateTransfor($ContractStopdate);
							$ContractFixedContractAmount = mysql_result($result_CT,0,2);
							
							$tableLists .= "<tr bgcolor='#009900'><td>ContractStartDate:</td><td>$ContractStartDate</td></tr>";
							$tableLists .= "<tr bgcolor='#006666'><td>ContractStopdate:</td><td>$ContractStopdate</td></tr>";
							$tableLists .= "<tr bgcolor='#009900'><td>ContractFixedContractAmount:</td><td>$ContractFixedContractAmount</td></tr>";
						}
					}
				}
		
				
				$tableLists .= "</table>";
				$arr = array('Result' => $tableLists);
				echo json_encode($arr);
				
				
			}
			else
			{
				
			}
		}
		
	}
	
	function dateTransfor(&$Date)
	{
		$Date = date("Y-m-d", strtotime($Date));
	}
	
	function generalAddSeansonEmployeeToDB()
	{
		$FirstName = getValueFromRequest('FN');
		$LastName = getValueFromRequest('LN');
		$Company = getValueFromRequest('CM');
		$SIN 	= getValueFromRequest('SIN');
		$DOB	= getValueFromRequest('DOB');
		$DOH 	= getValueFromRequest('DOH');
		$SeasonYear = getValueFromRequest('SY');
		$Season		= getValueFromRequest('S');
		$EmployType = "SN";
		
		$PersonID ="";
		if($SIN !== "")
		{
			$PersonExist = checkPersonExist($SIN);  //Check if the person have been added.
			if(!$PersonExist)    //If the database has not contain the person , then add the preson to DB.
			{
				$insertPerson = mysql_query("Insert into person(FIRSTNAME, LASTNAME,SIN,DATEOFBIRTH) values('$FirstName' , '$LastName','$SIN','$DOB')") or exit(mysql_error());
				$PersonID = mysql_insert_id();
			}
			else
			{
				getPersonID($SIN,$PersonID);
			}
		}
		else
		{
			$insertPerson = mysql_query("Insert into person(FIRSTNAME, LASTNAME,SIN,DATEOFBIRTH) values('$FirstName' , '$LastName','$SIN','$DOB')") or exit(mysql_error());
			$PersonID = mysql_insert_id();
		}
		
		
		$CompanyID  = "";
		if($Company !== "")
		{
			$CompanyExist = checkCompanyExist($Company);  //Check  if the Company have been added to database.
			if(!$CompanyExist)   // If the company has not been added to the DB, then add the company to DB
			{
				mysql_query("Insert into company(CORPORATIONNAME) values('$Company')") or exit(mysql_error());
				$CompanyID =  mysql_insert_id();
				
			}	
			else
			{
				getCompanyID($Company,$CompanyID);
			}
		}
		else
		{
			$insertCom_result = mysql_query("Insert into company(CORPORATIONNAME) values('$Company')") or exit(mysql_error());
			if($insertCom_result)
			{
				$CompanyID = mysql_insert_id();
			}
		}

		$EmployeeIDExist = checkEmployeeExist($PersonID,$CompanyID,$EmployType);   //?
		
		if(!$EmployeeIDExist)
		{	
			//check person id exsit in the table 
			if(checkExsitPersonID($PersonID))
			{
				if(generalAddGeneralEmployee($PersonID, $CompanyID, $EmployType))
				{
					$EmployeeID = "";
					$Result = getEmployeeID($PersonID,$CompanyID,$EmployeeID);
					
					if($Result)
					{
						
						if(generalAddSeasonEmployee($EmployeeID,$SY,$S))
						{
							echo "Sucess To add Seasonal Employee";
						}
						else
						{
							echo "Failed to add Seasonal Employee";
						}
					}
					else
					{
						echo "Employee do not exist!";
					}
				}
				else
				{
					echo "General Add Seasonal Employee Failed ";
				}
			}
			else
			{
				echo "Person ID exist in the table";
			}
		}
		else
		{
			
			$EmployeeID = "";
			$Result = getEmployeeID($PersonID,$CompanyID,$EmployeeID);
	
			if($Result)
			{
				//echo "get Employee ID via personID, CompanyId, EmployeeID";
				if(generalAlterExistSeasonEmployee($EmployeeID,$SY,$S))
				{
					echo "Sucess To Alter Seasonal Employee";
				}
				else
				{
					echo "Failed to Alter Seasonal Employee";
				}
			}
			else
			{
				echo "Employee do not exist!";
			}
		}
		mysql_close($connection);
	}
	
	
	function generalAddSeasonEmployee($EmployeeID,$SY,$S)
	{
		$result = mysql_query("Insert Into SeasonalEmployee(employee_id,seasonYear,season) values('$EmployeeID','$SY','$S')");
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
	
	function generalAlterExistSeasonEmployee($EmployeeID,$SY,$S)
	{
		$result = mysql_query("Update SeasonalEmployee SET season = '$S', seasonYear = '$SY' where employee_id = $EmployeeID");
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>
