
<?php

	error_reporting(0);

	$dbname = 'EMSPSS';
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
				
				$Modify = getValueFromRequest('MOD');
				$ModSIN = getValueFromRequest('MODSIN');
				$ModCOM = getValueFromRequest('MODCOM');
				$OLDSIN	= getValueFromRequest('OLDSIN');
				$OLDCOM = getValueFromRequest('OLDCOM');
				
				if($Modify == "true")
				{
					if($ModSIN == "true")
					{
						$PersonExist = checkPersonExist($SIN);
						if($PersonExist)
						{
							echo "SIN Number Exist";
							exit();
						}
						else
						{
							mysql_query("update PERSON set SIN = '$SIN', FIRSTNAME = '$FirstName', LASTNAME = '$LastName', DATEOFBIRTH = '$DOB' where SIN = '$OLDSIN'") or exit(mysql_error());
							
						}
					}
					else
					{
							mysql_query("update PERSON set  FIRSTNAME = '$FirstName', LASTNAME = '$LastName', DATEOFBIRTH = '$DOB'  where SIN = '$SIN'") or exit(mysql_error());
					}
					
					$PersonID = "";
					 getPersonID($SIN,$PersonID);
					
					if($ModCOM == "true")
					{
						$NewCompanyID = "";
						$OLDCompanyID = "";
						$CompanyExist = checkCompanyExist($Company);  
						getCompanyID($OLDCOM,$OLDCompanyID);
						if($CompanyExist)
						{
							getCompanyID($Company,$NewCompanyID);
							
							mysql_query("update employee set company_id='$NewCompanyID' where company_id = 'OLDCompanyID' and person_id = '$PersonID' and EmployType = 'FT'") or exit(mysql_error());
							
						}
						else
						{
							$CompanyID = createNewCompany($Company);
							
							mysql_query("update employee set company_id = '$CompanyID' where company_id = 'OLDCompanyID' and person_id = '$PersonID' and EmployType = 'FT' ") or exit(mysql_error());
						}
					}
					
					
					
					
					$EmployeeID = "";
					if($DOT !== "")
					{
						$ReasonForLeave = getValueFromRequest("RFL");
						changeLeaveForReasons($EmployeeID,$ReasonForLeave);
						
						getEmployeeIDIncompleteActive($PersonID,$CompanyID,'FT',$EmployeeID);
						
						adminAlterExistFullEmployee($EmployeeID,$DOH,$DOT,$Salary);
						
						
						changeEmployeeStatusToInactive($SIN,$Company,'FT');
						
						changeReasonForLeave($SIN,$Company,'FT',$ReasonForLeave);
						
					}
					else 
					{
						
						getEmployeeIDIncompleteActive($PersonID,$CompanyID,'FT',$EmployeeID);
						
						adminAlterExistFullEmployee($EmployeeID,$DOH,$DOT,$Salary);
						//changeEmployeeStatusToInactive($SIN,$Company,'FT');
						changeEmployeeStatusToActive($SIN,$Company,'FT');
					}
				}
				else
				{
				
					$PersonExist = checkPersonExist($SIN);  //Check if the person have been added.
					
					if(!$PersonExist)    //If the database has not contain the person , then add the preson to DB.
					{
						$insertPerson = mysql_query("Insert into person(FIRSTNAME, LASTNAME,SIN,DATEOFBIRTH) values('$FirstName' , '$LastName','$SIN','$DOB')") or exit(mysql_error());
					}
					else
					{
						echo "SIN Number Already Exist.";
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
							//$Result = getEmployeeID($PersonID,$CompanyID,$EmployeeID);
							
							$Result = getEmployeeIDIncompleteActive($PersonID,$CompanyID,"FT",$EmployeeID);
							if($Result)
							{
								if(adminAddFullTimeEmployee($EmployeeID,$DOH,$DOT,$Salary))
								{
									changeEmployeeStatusToActive($SIN,$Company,'FT');
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
						//$Result = getEmployeeID($PersonID,$CompanyID,$EmployeeID);
						$Result = getEmployeeIDIncompleteActive($PersonID,$CompanyID,"FT",$EmployeeID);
				
						if($Result)
						{
							if(adminAlterExistFullEmployee($EmployeeID,$DOH,$DOT,$Salary))
							{
								changeEmployeeStatusToActive($SIN,$Company,'FT');
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
					
					
				}
				mysql_close($connection);
			}
			else if ($EmployType == "PT")
			{
				$FirstName = getValueFromRequest('FN');
				$LastName = getValueFromRequest('LN');
				$Company = getValueFromRequest('CM');
				$SIN 	= getValueFromRequest('SIN');
				$DOB	= getValueFromRequest('DOB');
				$DOH 	= getValueFromRequest('DOH');
				$DOT	= getValueFromRequest('DOT');
				$Salary = getValueFromRequest('HS');
				
				$Modify = getValueFromRequest('MOD');
				$ModSIN = getValueFromRequest('MODSIN');
				$ModCOM = getValueFromRequest('MODCOM');
				$OLDSIN	= getValueFromRequest('OLDSIN');
				$OLDCOM = getValueFromRequest('OLDCOM');
				
				if($Modify == "true")
				{
					if($ModSIN == "true")
					{
						$PersonExist = checkPersonExist($SIN);
						if($PersonExist)
						{
							echo "SIN Number Exist";
							exit();
						}
						else
						{
							mysql_query("update PERSON set SIN = '$SIN', FIRSTNAME = '$FirstName', LASTNAME = '$LastName', DATEOFBIRTH = '$DOB' where SIN = '$OLDSIN'") or exit(mysql_error());
							
						}
					}
					else
					{
							mysql_query("update PERSON set  FIRSTNAME = '$FirstName', LASTNAME = '$LastName', DATEOFBIRTH = '$DOB'  where SIN = '$SIN'") or exit(mysql_error());
					}
					
					$PersonID = "";
					 getPersonID($SIN,$PersonID);
					
					if($ModCOM == "true")
					{
						$NewCompanyID = "";
						$OLDCompanyID = "";
						$CompanyExist = checkCompanyExist($Company);  
						getCompanyID($OLDCOM,$OLDCompanyID);
						if($CompanyExist)
						{
							getCompanyID($Company,$NewCompanyID);
							
							mysql_query("update employee set company_id='$NewCompanyID' where company_id = 'OLDCompanyID' and person_id = '$PersonID' and EmployType = 'PT'") or exit(mysql_error());
							
						}
						else
						{
							$CompanyID = createNewCompany($Company);
							
							mysql_query("update employee set company_id = '$CompanyID' where company_id = 'OLDCompanyID' and person_id = '$PersonID' and EmployType = 'PT' ") or exit(mysql_error());
						}
					}
					
					
					
					
					$EmployeeID = "";
					if($DOT !== "")
					{
						$ReasonForLeave = getValueFromRequest("RFL");
						changeLeaveForReasons($EmployeeID,$ReasonForLeave);
						
						getEmployeeIDIncompleteActive($PersonID,$CompanyID,"PT",$EmployeeID);
						
						adminAlterExistFullEmployee($EmployeeID,$DOH,$DOT,$Salary);
						
						
						changeEmployeeStatusToInactive($SIN,$Company,"PT");
						
						changeReasonForLeave($SIN,$Company,"PT",$ReasonForLeave);
						
					}
					else 
					{
						
						getEmployeeIDIncompleteActive($PersonID,$CompanyID,"PT",$EmployeeID);
						
						adminAlterExistFullEmployee($EmployeeID,$DOH,$DOT,$Salary);
						changeEmployeeStatusToInactive($SIN,$Company,"PT");
					}
				}
				else
				{
				
					$PersonExist = checkPersonExist($SIN);  //Check if the person have been added.
					
					if(!$PersonExist)    //If the database has not contain the person , then add the preson to DB.
					{
						$insertPerson = mysql_query("Insert into person(FIRSTNAME, LASTNAME,SIN,DATEOFBIRTH) values('$FirstName' , '$LastName','$SIN','$DOB')") or exit(mysql_error());
					}
					else
					{
						echo "SIN Number Already Exist.";
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
							//$Result = getEmployeeID($PersonID,$CompanyID,$EmployeeID);
							$Result = getEmployeeIDIncompleteActive($PersonID,$CompanyID,"PT",$EmployeeID);
							if($Result)
							{
								if(adminAddPartTimeEmployee($EmployeeID,$DOH,$DOT,$Salary))
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
				}
				mysql_close($connection);
				
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
		
						$result = mysql_query("Insert into company(CORPORATIONNAME) values('$Company')") or exit(mysql_error());
						if($result)
						{
							$CompanyID =  mysql_insert_id();
						}
						
						
						
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
		$WorkStatus = "";
		if(getEmployeeIDBySINComEmpTypeStatus($SIN,$COM,$EmplyeeType,$ErrorInfor,$EmployID,$WorkStatus))
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
				
				$array = array('Status' =>$WorkStatus,'FN' => $FirstName, 'LN' => $LastName, 'CM'=> $COM, 'SIN' => $SIN, 'DOB' => $DateOfBirth, 'DOH' => $DateOfHire, 'DOT' => $DateOfTermination, 'Salary' => $Salary);
				echo json_encode($array);
				
			}
			else if($EmplyeeType == "PT")
			{
				$FirstName = "";
				$LastName = "";
				$DateOfBirth = "";
				$DateOfHire = "";
				$DateOfTermination = "";
				$HourlyRate = "";
				getFirstNameLastNameDOBDOH($SIN,$FirstName,$LastName,$DateOfBirth, $DateOfHire, $DateOfTermination, $HourlyRate);

				$arr = array('FN' => $FirstName, 'LN' => $LastName, 'DOB' => $DateOfBirth,'DOH' => $DateOfHire, 'DOT' => $DateOfTermination, 'HR' => $HourlyRate, 'SIN' => $SIN, 'COM' => $COM);
				echo json_encode($arr);

			}
			else if($EmplyeeType == "SN")
			{
				$FirstName = "";
				$LastName = "";
				$DateOfBirth = "";
				$SeasonYear = "";
				$Season = "";
				$PiecePay = "";
				$EmployeeStatus = "";
				
				//getFirstNameLastNameDOBSandSYPPES($SIN,$FirstName,$LastName,$DateOfBirth, $SeasonYear, $Season, $PiecePay, $EmployeeStatus, $EmployID);
				$result1 = mysql_query("Select FIRSTNAME,LASTNAME,DATEOFBIRTH FROM person where SIN = '$SIN'");
				$result2 = mysql_query("Select SEASONYEAR, SEASON, PIECEPAY, EMPLPYEESTATUS FROM SeasonalEmployee WHERE Employ_ID = '$EmployID'");
				if($resultNum1 > 0 && $resultNum2 > 0)
				{
					$FirstName = mysql_result($result1,0,0);
					$LastName = mysql_result($result1,0,1);
					$DateOfBirth  = mysql_result($result1,0,2);
					$rowsForEmployee = mysql_num_rows(resultNum2);
					if($rowsForEmployee > 1)
					{
						
						for( $i = 0; $i < $rowsForEmployee; $i++)
						{
							$SeasonYear = mysql_result($result2,$i,0);
							$Season = mysql_result($result2,$i,1);
							$PiecePay = mysql_result($result2,$i,2);
							$EmployeeStatus = mysql_result($result2,$i,3);
							$array = array('FN' => $FirstName, 'LN' => $LastName, 'DOB' => $DateOfBirth, 'SY' => $SeasonYear, 'S' => $Season, 'PP' => $PiecePay,'ES' => $EmployeeStatus, 'SIN' => $SIN, 'COM' => $COM);
							echo json_encode($array);
						}
					}
					else
					{
						$SeasonYear = mysql_result($result2,0,0);
						$Season = mysql_result($result2,0,1);
						$PiecePay = mysql_result($result2,0,2);
						$EmployeeStatus = mysql_result($result2,0,3);
						$array = array('FN' => $FirstName, 'LN' => $LastName, 'DOB' => $DateOfBirth,'DOH' => $DateOfHire, 'SY' => $SeasonYear, 'S' => $Season, 'SIN' => $SIN, 'COM' => $COM);
						echo json_encode($array);
					}
					mysql_free_result($result1);
					mysql_free_result($result2);
				}
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
				
				$ChildEmployee = mysql_query("Select ID from SeasonalEmployee where employee_id = '$EmpID' AND Employeestatus = 'Active'")  or exit(mysql_error());
				if($ChildEmployee)
				{
					$EmpID = mysql_result($ChildEmployee,0,0);
				}
				
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
	else if ($q == "generalSeniorityReport")
	{
		generateSeniorityReport();
		
	}
	else if($q == "addNewUser")
 	{
		$UserName = getValueFromRequest('UN');
 		$FirstName = getValueFromRequest('FN');
 		$LastName = getValueFromRequest('LN');
 		$SecurityLevel = getValueFromRequest('SL');
 		$Password = getValueFromRequest('PD');
		
		$insertLogin = mysql_query("Insert into login(FIRSTNAME, LASTNAME, PASSWORD, TYPE) values('$FirstName' , '$LastName','$Password','$SecurityLevel')") or exit(mysql_error());

		$UserNameExist = checkUserNameExist($UserName);
		if (!$UserNameExist) 
		{
			$insertLogin = mysql_query("Insert into login(USERNAME, FIRSTNAME, LASTNAME, PASSWORD, TYPE) values('$UserName', $FirstName' , '$LastName','$Password','$SecurityLevel')") or exit(mysql_error());
		}
 		
 		mysql_close($connection);
	}
	else if($q == "weeklyReport")
	{
		weeklyReport();
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
	
	function getFirstNameLastNameDOBDOH($SIN, &$FirstName, &$LastNamem, &$DateOfBirth, &$DateOfHire, &$DateOfTermination, &$HourlyRate, $EmployID)
	{
		$result1 = mysql_query("Select FIRSTNAME,LASTNAME,DATEOFBIRTH FROM person where SIN = '$SIN'");

		$result2 = mysql_query("Select DATEOFHIRE, DATEOFTERMINATION, HOURLYRATE FROM ParttimeEmployee WHERE Employ_ID = '$EmployID'");


		$resultNum1 = mysql_num_rows($result1);
		$resultNum2 = mysql_num_rows($result2);
		if($resultNum1 > 0 && $resultNum2 > 0)
		{

			$FirstName = mysql_result($result1,0,0);
			$LastName = mysql_result($result1,0,1);
			$DateOfBirth  = mysql_result($result1,0,2);
			$DateOfHire = mysql_result($result2, 0, 0);
			$DateOfTermination = mysql_result($result2, 0, 1);
			$HourlyRate = mysql_result($result2, 0, 2); 


			mysql_free_result($result1);
			mysql_free_result($result2);
		}
	}
	
	function checkUserNameExist($UserName)
	{
		$UserNameExistAccount = mysql_query("Select count(*) as count from login where username = '$UserName'") or exit(mysql_error());
		$row = mysql_fetch_object($PersonExistAccount);
		$UserAccount = $row->count;
		
		if($UserAccount > 0)
		{
			return true;
		}
		else
		{
			return false;
			
		}
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
	
	function createNewCompany($CompanyName)
	{
			mysql_query("insert company(CORPORATIONNAME) values($CompanyName)") or exit(mysql_error());
			return mysql_insert_id();
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

		$amount = 	$MondayH + $TuesdayH + $WednesdayH +$ThursdayH +$FridayH + $SaturdayH + $SundayH;

		$result = mysql_query("Insert Into TimeCard(employee_id,mondayHours,tuesdayHours,wednesdayHours,thursdayHours,fridayHours,saturdayHours,sundayHours,amount) values('$EmpID', '$MondayH','$TuesdayH', '$WednesdayH', '$ThursdayH', '$FridayH','$SaturdayH','$SundayH' ,'$amount')") or exit(mysql_error());
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
		
		//$query = sprintf("SELECT * FROM Company WHERE CORPORATIONNAME='%s'",
       //     mysql_real_escape_string($CompanyName));
			
			//echo $query;
            
		//$query = "Select * From Company where  CORPORATIONNAME = '$CompanyName'";
		//$query =  mysql_real_escape_string($query);
		//echo $query;
		//	$query =  str_replace("'","''", $query);
		//	echo $query;
		//$CompanyExist = mysql_query($query) or exit(mysql_error());
		$CompanyExist = mysql_query("Select * From Company where  CORPORATIONNAME = '$CompanyName'") or exit(mysql_error());
	
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
	
	function changeEmployeeStatusToActive($SIN,$Company,$EmployType)
	{
		$PersonID = "";
		getPersonID($SIN,$PersonID);
		$CompanyID = "";
		getCompanyID($Company,$CompanyID);
		
		mysql_query("update employee set Employeestatus = 'Active' where company_id = 'CompanyID' and person_id = '$PersonID' and EmployType = '$EmployType' and Employeestatus = 'Incomplete'") or exit(mysql_error());
	}
	
	function changeEmployeeStatusToInactive($SIN,$Company,$EmployType)
	{
		$PersonID = "";
		getPersonID($SIN,$PersonID);
		$CompanyID = "";
		getCompanyID($Company,$CompanyID);
		
		mysql_query("update employee set Employeestatus = 'Inactive' where company_id = 'CompanyID' and person_id = '$PersonID' and EmployType = '$EmployType' and Employeestatus = 'Active'") or exit(mysql_error());
	}
	
	function changeReasonForLeave($SIN,$Company,$EmployType,$ReasonForLeave)
	{
		$PersonID = "";
		getPersonID($SIN,$PersonID);
		$CompanyID = "";
		getCompanyID($Company,$CompanyID);
		
		mysql_query("update employee set LeaveReasons = '$ReasonForLeave' where company_id = 'CompanyID' and person_id = '$PersonID' and EmployType = '$EmployType' and Employeestatus = 'Inactive'") or exit(mysql_error());
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
			echo $PersonID;
			echo $CompanyID;
			echo $EmployeeType;
	
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
	
	function adminAddPartTimeEmployee($EmployeeID,$DateOfHire,$DateOfTermination,$HourlySalary)
	{
		$result = mysql_query("Insert Into ParttimeEmployee(employee_id,dateofhire,dateoftermination,hourlyrate) values('$EmployeeID','$DateOfHire','$DateOfTermination','$HourlySalary')") or exit(mysql_error());
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
	
	function adminAlterPartTimeEmployee($EmployeeID,$DateOfHire,$DateOfTermination,$HourlySalary)
	{
		$result = mysql_query("update ParttimeEmployee set  dateofhire = '$DateOfHire', dateoftermination = '$DateOfTermination', hourlyrate = '$HourlySalary' where employee_id = '$EmployeeID'") or exit(mysql_error());
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
	
	function getEmployeeIDIncompleteActive($PersonID,$CompanyID,$EmployeeType,&$EmployeeID)
	{
		$meta = false;
		$result  = mysql_query("Select ID From employee where company_id = '$CompanyID' AND person_id = '$PersonID' AND EmployType = '$EmployeeType' AND Employeestatus != 'Inactive'");
		if(result)
		{
			$EmployeeID = mysql_result($result,0,0);
				
			$meta = true;
		}
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
	
				$result = mysql_query("Select ID from employee where  company_id = '$CompanyID' AND person_id = '$PersonID' AND EmployType = '$EMPTYPE' AND Employeestatus != 'Inactive'");
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
	
	
	function getEmployeeIDBySINComEmpTypeStatus($SIN,$COM,$EMPTYPE,&$ErrorInfor, &$EmployeeID,&$WorkStatus)
	{
		$resultValue = false;
		$PersonID = "";
		$CompanyID = "";
		
		if(getPersonID($SIN,$PersonID))
		{
			if(getCompanyID($COM,$CompanyID))
			{
	
				$result = mysql_query("Select ID,Employeestatus from employee where  company_id = '$CompanyID' AND person_id = '$PersonID' AND EmployType = '$EMPTYPE' AND Employeestatus != 'Inactive'");
				$resultNum = mysql_num_rows($result);
				if($resultNum > 0)
				{
					$EmployeeID = mysql_result($result,0,0);
					$WorkStatus = mysql_result($result,0,1);
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
	
	function getWorkStatusByEmployeeIDFTPTCT($EmployeeID,&$WorkStatus)
	{
		$result = mysql_query("Select Employeestatus from employee where ID = '$EmployeeID' ");
		if($result)
		{
			$WorkStatus =  mysql_result($result,0,0);
		}
	}
	
	
	function checkEmployeeExist($PersonID, $CompanyID, $EmployeeType)
	{
		$result = mysql_query("Select * From employee where company_id = '$CompanyID' AND person_id = '$PersonID' AND EmployType = '$EmployeeType' AND  Employeestatus != 'Inactive'");
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
		$result = mysql_query("Update FulltimeEmployee SET dateofhire = '$DateOfHire', dateoftermination = '$DateOfTermination', salary = '$Salary' where employee_id = $EmployeeID") or exit(mysql_error());
		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function adminAlterExistPartTimeEmployee($EmployeeID,$DateOfHire,$DateOfTermination,$HourlyS)
	{
		$result = mysql_query("Update ParttimeEmployee SET dateofhire = '$DateOfHire', dateoftermination = '$DateOfTermination', salary = '$HourlyS' where employee_id = $EmployeeID");
		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function changeLeaveForReasons($EmployeeID, $Reason)
	{
		mysql_query("update employee set LeaveReasons = '$Reason' where ID = '$EmployeeID' and Employeestatus != 'Inactive'") or exit(mysql_error());
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
				
				
				
				//$result_EMP = mysql_query("Select ID, EmployType, company_id From employee where person_id = '$PersonID'") or exit(mysql_error());
				
				$result_EMP_row = mysql_num_rows($result_EMP);
				
				if($result_EMP_row > 0)
				{
					for($indexS = 0; $indexS < $result_EMP_row; $indexS++)
					{
						$EmployeeID = mysql_result($result_EMP,$indexS,0);
						$EmployeeType = mysql_result($result_EMP,$indexS,1);
						$CompanyID = mysql_result($result_EMP,$indexS,2); 
						
						if($EmployeeType == "SN")
						{
							$result_Season = "";
							
							if($UTP == "G")
							{
								$result_Season = mysql_query("Select ID from SeasonalEmployee where  employee_id = '$EmployeeID' AND Employeestatus = 'Active' ") or exit(mysql_error());
							}
							else if($UTP == "A")
							{
								$result_Season = mysql_query("Select ID from SeasonalEmployee where  employee_id = '$EmployeeID'") or exit(mysql_error());
							}
							
						
							
							if($result_Season)
							{
								$result_SeasonNum = mysql_num_rows($result_Season);
								if($result_SeasonNum > 0)
								{
									for($i = 0;  $i < $result_SeasonNum; $i++)
									{		
											$temp = $EmployeeID;
											$childID = mysql_result($result_Season,$i,0);
											$temp .= "|";
											$temp .= $childID;
											$tableLists .="<tr><td>'$FN'</td><td>'$LN'</td><td>'$SIN'</td><td><button value='$temp' onclick='SelectEmp(this.value)'>Select</button></td></tr>";
									}
									
								}
							}
							
						}
						else
						{
							$tableLists .="<tr><td>'$FN'</td><td>'$LN'</td><td>'$SIN'</td><td><button value='$EmployeeID' onclick='SelectEmp(this.value)'>Select</button></td></tr>";
						}
						//$tableLists .="<tr><td>'$FN'</td><td>'$LN'</td><td>'$SIN'</td><td><button value = '$EmployeeID' onclick='SelectEmp($EmployeeID,$EmployeeType,$CompanyID,$PersonID)'>Select</button></td></tr>";
						
					}
					
					mysql_free_result(result_EMP);
					
				}
				
			}
			$tableLists .="</table>";
			mysql_free_result(result);
		
			$arr = array('searchResult' =>$tableLists);
			echo json_encode($arr);
			//echo $tableLists;
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
	
		
		if (strpos($EmployeeID, '|') !== false)
		{
			$pieces = explode("|", $EmployeeID);
			$EmployeeID =  $pieces[0];
		}
	
		
		
		$result_PCE = mysql_query("Select person_id,company_id,EmployType,Employeestatus from employee where ID = '$EmployeeID'");
		if($result_PCE)
		{
		
			$PersonID = mysql_result($result_PCE,0,0);
			$CompanyID = mysql_result($result_PCE,0,1);
			$EmployeeType = mysql_result($result_PCE,0,2);
			$EmployeeStatus = mysql_result($result_PCE,0,3);
	
			mysql_free_result($result_PCE);
			
		}
			
		if (strpos($EmployeeID, '|') !== false)
		{
			$pieces = explode("|", $EmployeeID);
			$EmployeeID =  $pieces[1];
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
							getWorkStatusByEmployeeIDFTPTCT($EmployeeID,$EmployeeStatus);
							$tableLists .= "<tr bgcolor='#009900'><td>DateOfHire:</td><td>$DateOfHire</td></tr>";
							$tableLists .= "<tr bgcolor='#006666'><td>DateOfTermination:</td><td>$DateOfTer</td></tr>";
							$tableLists .= "<tr bgcolor='#009900'><td>Salary:</td><td>$Salary</td></tr>";
							$tableLists .= "<tr bgcolor='#009900'><td>WorkStatus:</td><td>$EmployeeStatus</td></tr>";
	
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
							getWorkStatusByEmployeeIDFTPTCT($EmployeeID,$EmployeeStatus);
							
							$tableLists .= "<tr  bgcolor='#009900'><td>DateOfHire:</td><td>$DateOfHire</td></tr>";
							$tableLists .= "<tr  bgcolor='#006666'><td>DateOfTermination:</td><td>$DateOfTer</td></tr>";
							$tableLists .= "<tr  bgcolor='#009900'><td>HourlyRate:</td><td>$HourRate</td></tr>";
							$tableLists .= "<tr ><td>WorkStatus:</td><td>$EmployeeStatus</td></tr>";
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
					
					$result_SN = mysql_query("Select season,piecePay,seasonYear,Employeestatus from SeasonalEmployee where ID='$EmployeeID'") or exit(mysql_error());
					if($UserType == "A")
					{
						if($result_SN)
						{
							$Season = mysql_result($result_SN,0,0);
							$PiecePay = mysql_result($result_SN,0,1);
							$SeasonYear = mysql_result($result_SN,0,2);
							$EmployeeStatus = mysql_result($result_SN,0,3);
							
							//$result_WorkStatus = mysql_query("Select Employeestatus from SeasonalEmployee where ID = '$'")
							
							$tableLists .= "<tr bgcolor='#009900'><td>Season:</td><td>$Season</td></tr>";
							$tableLists .= "<tr  bgcolor='#006666'><td>Piecepay:</td><td>$PiecePay</td></tr>";
							$tableLists .= "<tr bgcolor='#009900'><td>SeasonYear:</td><td>$SeasonYear</td></tr>";
							$tableLists .= "<tr ><td>WorkStatus:</td><td>$EmployeeStatus</td></tr>";
						
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
				echo $tableLists; 
				//$arr = array('Result' => $tableLists);
				//echo json_encode($arr);
				
				
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
					//$Result = getEmployeeID($PersonID,$CompanyID,$EmployeeID);
					$Result = getEmployeeIDIncompleteActive($PersonID,$CompanyID,"SN",$EmployeeID);
					
					if($Result)
					{
						
						if(generalAddSeasonEmployee($EmployeeID,$SeasonYear,$Season))
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
				if(generalAddSeasonEmployee($EmployeeID,$SeasonYear,$Season))
				{
					echo "Sucess To Add Seasonal Employee";
				}
				else
				{
					echo "Failed to Add Seasonal Employee";
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
	
	function generateSeniorityReport()
	{
		$Company = getValueFromRequest('CM');
		$result_Com = mysql_query("Select ID from company where CORPORATIONNAME = '$Company'") or exit(mysql_error());
		$result_COMID = "";
		if($result_Com)
		{						
		
				$result_Count = mysql_num_rows($result_Com);
				if($result_Count > 0)
				{
					$result_COMID = mysql_result($result_Com,0,0);
				
				}
			
		
			$tableLists = "<table>"; 
			$tableLists .="<tr><th>Employee Name</th><th>SIN</th><th>Type</th><th>Date of Hire</th><th>Years of  Service</th></tr>";
			if($result_COMID !== "")
			{
				$colum1 = $colum2 =$colum3 =$colum4 =$colum5 = "";
				$result = mysql_query("Select ID, person_id, Employeestatus,EmployType from employee where company_id = '$result_COMID' AND (EmployType = 'FT'  OR EmployType = 'PT' )AND employeestatus != 'Incomplete'") or exit(mysql_error());
					
				if($result)
				{
				
					$result_Count = mysql_num_rows($result);
					
					for($i = 0; $i < $result_Count; $i++)
					{
						$EmployeeID = mysql_result($result,$i,0);
				
						$PersonID = mysql_result($result,$i,1);
			
						$WorkStatus = mysql_result($result,$i,2);
						$EmployeeType = mysql_result($result,$i,3);
			
			
						$Firstname = "";
						$Lastname = "";
						$SIN = "";
						
						$result_Person = mysql_query("Select FIRSTNAME,LASTNAME,SIN from PERSON where ID = '$PersonID'") or exit(mysql_error());
						if($result_Person)
						{
							
							$Firstname = mysql_result($result_Person,0,0);
							$Lastname = mysql_result($result_Person,0,1);
							$SIN = mysql_result($result_Person,0,2);
							
							mysql_free_result(result_Person);
						}
						
						$colum1 = $Firstname;
						$colum1 .= ", ";
						$colum1 .= $Lastname;
						
						$colum2 = $SIN;
						
						$colum3 = "";
						if($EmployeeType == 'FT')
						{
							$colum3 = "FullTime";
						}
						else if($EmployeeType == 'PT')
						{
							$colum3 = "PartTime";
						}
						
						$colum4 = "";
						$colum5 = "";
						
						$result_ChildFT = "";
						if($EmployeeType == 'FT')
						{
							$result_ChildFT = mysql_query("Select dateofhire, dateoftermination from FulltimeEmployee where employee_id = '$EmployeeID'") or exit(mysql_error());
						}
						else
						{
							$result_ChildFT = mysql_query("Select dateofhire, dateoftermination from ParttimeEmployee where employee_id = '$EmployeeID'") or exit(mysql_error());
						}
						
						if($result_ChildFT)
						{
						
							if($WorkStatus == "Active")
							{
								$colum4 = mysql_result($result_ChildFT,0,0);
								$time = date('Y-m-d');
							
								DiffDate($colum4, $time, $colum5);
								$tableLists .= "<tr><td>$colum1</td><td>$colum2</td><td>$colum3</td><td>$colum4</td><td>$colum5</td></tr>";

							}
							else
							{
								$colum4 =  mysql_result($result_ChildFT,0,0);
								$DateOfTerminate = mysql_result($result_ChildFT,0,1);
								DiffDate($colum4, $DateOfTerminate, $colum5);
								$tableLists .= "<tr><td>$colum1</td><td>$colum2</td><td>$colum3</td><td>$colum4</td><td>$colum5</td></tr>";
							}
						

						}
						
						
					}
					mysql_free_result($result);
					mysql_free_result($result_ChildFT);
				}
				
				$result = mysql_query("Select ID, person_id, Employeestatus,EmployType from employee where company_id = '$result_COMID' AND EmployType = 'SN' AND employeestatus != 'Incomplete'") or exit(mysql_error());
				if($result)
				{
					$result_Count = mysql_num_rows($result);
					
					for($i = 0; $i < $result_Count; $i++)
					{
						$EmployeeID = mysql_result($result,$i,0);
				
						$PersonID = mysql_result($result,$i,1);
			
						$WorkStatus = mysql_result($result,$i,2);
						$EmployeeType = mysql_result($result,$i,3);
			
			
						$Firstname = "";
						$Lastname = "";
						$SIN = "";
						
						$result_Person = mysql_query("Select FIRSTNAME,LASTNAME,SIN from PERSON where ID = '$PersonID'") or exit(mysql_error());
						if($result_Person)
						{
							
							$Firstname = mysql_result($result_Person,0,0);
							$Lastname = mysql_result($result_Person,0,1);
							$SIN = mysql_result($result_Person,0,2);
							
							mysql_free_result(result_Person);
						}
						
						$colum1 = $Firstname;
						$colum1 .= ", ";
						$colum1 .= $Lastname;
						
						$colum2 = $SIN;
						
						$colum3 = "Seasonal";
					
						
						$colum4 = "";
						$colum5 = "";
						
						$result_ChildFT = "";
						
						
				
						
						$result_ChildFT = mysql_query("Select * from SeasonalEmployee where employee_id = '$EmployeeID' AND Employeestatus != 'Incomplete'") or exit(mysql_error());
						if($result_ChildFT)
						{
							$result_ChildFT_Num = mysql_num_rows($result_ChildFT);
							
							if($result_ChildFT_Num < 4)
							{
								$colum5 = $result_ChildFT_Num * 4;
								$colum5 .= " Months";
							}
							else
							{
								$temp = (int)($result_ChildFT_Num / 4);
								$colum5 = $temp;
								
								$month = $result_ChildFT_Num%4;
								if($month !== 0 )
								{
									$colum5 .= ".";
									$colum5 .= $month;
									$colum5 .= "Years";
								}
								else
								{
									$colum5 .= "Years";
								}
								
							}
							mysql_free_result($result_ChildFT);
							
							$result_ChildFT = mysql_query("Select season,seasonYear from SeasonalEmployee where employee_id = '$EmployeeID' AND Employeestatus != 'Incomplete' order by ID DESC") or exit(mysql_error());
							if($result_ChildFT)
							{
								$colum4 = mysql_result($result_ChildFT,0,0);
								$colum4 .= mysql_result($result_ChildFT,0,1);
							}
							
						}
						
						
					}
					
				}
				
				
				$tableLists .= "</table>";
				echo $tableLists;
				
			}
		}
		else
		{
		}
	}
	
	
	
	function DiffDate($date1, $date2,&$diff) 
	{ 
	  if (strtotime($date1) > strtotime($date2)) 
	  { 
		$ymd = $date2; 
		$date2 = $date1; 
		$date1 = $ymd; 
	  } 
	  list($y1, $m1, $d1) = explode('-', $date1); 
	  list($y2, $m2, $d2) = explode('-', $date2); 
	  $y = $m = $d = $_m = 0; 
	  $math = ($y2 - $y1) * 12 + $m2 - $m1; 
	  $y = round($math / 12); 
	  $m = intval($math % 12); 
	  $d = (mktime(0, 0, 0, $m2, $d2, $y2) - mktime(0, 0, 0, $m2, $d1, $y2)) / 86400; 
	  if ($d < 0) { 
		$m -= 1; 
		$d += date('j', mktime(0, 0, 0, $m2, 0, $y2)); 
	  } 
	  $m < 0 && $y -= 1; 
	  $arr =  array('y' => $y,'m' => $m, 'd'=>$d); 
	  
	  
		if($y > 0)
		{
			$diff = $y;
			if($y > 1)
			{
				$diff .= " Years";
			}
			else
			{
				$diff .= " Year";
			}
		}
		else
		{
			if($m > 0)
			{
				$diff = $m;
				if($m > 1)
				{
					$diff .= " Months";
				}
				else
				{
					$diff .= " Month";
				}
			}
			else
			{
				$diff = $d;
				if($d > 1)
				{
						$diff .= " days";
				}
				else
				{
						$diff .= " day";
				}
			
			}
	
		}
	} 
	
	
	function weeklyReport()
	{
		createWorklyReport('FT');
		createWorklyReport('PT');
		createWorklyReport('SN');
	}
	
	function createWorklyReport($EmployeeType)
	{
		$Company = getValueFromRequest('CM');
		$result_Com = mysql_query("Select ID from company where CORPORATIONNAME = '$Company'") or exit(mysql_error());
		$result_COMID = "";
		if($result_Com)
		{						
		
				$result_Count = mysql_num_rows($result_Com);
				if($result_Count > 0)
				{
					$result_COMID = mysql_result($result_Com,0,0);
					if($result_COMID !== "")
					{
						
					
						$query = "select b.id, a.maxHour, person.FIRSTNAME, person.LastName, person.SIN from employee  b
					inner join  (select  employee_id, MAX(amount) maxHour from timecard  group by employee_id order by id Desc) a on a.employee_id  = b.id and b.employtype = '$EmployeeType' and b.Employeestatus = 'Active' and b.company_id = '$result_COMID'
					inner join person on b.person_id = person.ID order by maxHour DESC, FirstName ";
								$tableLists = "<table>"; 

								if($EmployeeType == "FT")
								{
									$tableLists .= "<tr><th></th><th>FullTime</th><th></th></tr>";
								}
								else if($EmployeeType == "PT")
								{
									$tableLists .= "<tr><th></th><th>PartTime</th><th></th></tr>";
								}
								else if($EmployeeType == "SN")
								{
									$tableLists .= "<tr><th></th><th>Seasonal</th><th></th></tr>";
								}
								$result = mysql_query($query) ;
								if($result)
								{
									
									
									
									
									$tableLists .= "<tr><td>Employee Name</td><td>SIN</td><td>Hours</td></tr>";
									$result_count = mysql_num_rows($result);
								
									if($result_count > 0)
									{
										for($i = 0; $i < $result_count; $i++)
										{
											$Name = mysql_result($result,$i,2);
										
											$Name .= ",   ";
											$Name .= mysql_result($result,$i,3);
											
											$SIN = mysql_result($result,$i,4);
											$Hours = mysql_result($result,$i,1);
											
											$tableLists .= "<tr><td>$Name</td><td>$SIN</td><td>$Hours</td></tr>";
											
										}
										$tableLists .= "</table>";
										echo $tableLists;
						
									}
									else
									{
										$tableLists .="<tr><td>No TimeCard Record</td></tr>";
										$tableLists .= "</table>";
										echo $tableLists;
									}
									
									
								}
								else
								{
										$tableLists .="<tr><td>No TimeCard Record</td></tr>";
										$tableLists .= "</table>";
										echo $tableLists;
								}
								mysql_free_result($result);	
					
					}
				
				}
				else
				{
					echo "Can not find Company ID";
				}
				
				
		}
	}
	
	
	function activeReport($EmployType, $Company)
	{
		$Company = getValueFromRequest('CM');
		$result_Com = mysql_query("Select ID from company where CORPORATIONNAME = '$Company'") or exit(mysql_error());
		$result_COMID = "";
		if($result_Com)
		{	
			$result_Count = mysql_num_rows($result_Com);
				if($result_Count > 0)
				{
					$result_COMID = mysql_result($result_Com,0,0);
					
					
				}
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>
