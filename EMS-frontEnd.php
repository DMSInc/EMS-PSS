<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
#topDiv{
    position: absolute;
    top: 0%;
    left: 0%;
    height: 15%;
    width: 100%;
    background-color: #808080;
}
.adminAddEmpForm{
    position:absolute;
    top:0%;
    left:0%;
    height:100%;
    width:100%;
    opacity:1;
} 
#backDiv{
    position: absolute;
    top: 15%;
    left: 0%;
    height: 85%;
    width: 100%;
    background-color: #084347 ;
}
#middleDiv{
    position: absolute;
    top: 15%;
    left: 20%;
    height: 6%;
    width: 80%;
    visibility:hidden;
}
#middleDivGen{
    position: absolute;
    top: 15%;
    left: 23%;
    height: 6%;
    width: 75%;
    visibility:hidden;
}
#appLabel{
    position:absolute;
    left: 2%;
    top: -30%;
    font-size: 300%;
    color: white;
}
.middleDivBtn{
    background-color: #A5B1B2;
    color: black;
    height: 100%;
    top: 0%;
    width: 20%;
}
.middleDivBtnGen{
    background-color: #A5B1B2;
    color: black;
    height: 100%;
    top: 0%;
    width: 25%;
}        
#empMaintainence{
    position: absolute;
    left: 0%;
}
#empReportsBtn{
    position: absolute;
    left: 20%;
}
#adminBtn{
    position: absolute;
    left: 40%;
}
#searchBtn{
    position: absolute;
    left: 60%;
}
#empMaintainenceGen{
    position: absolute;
    left: 0%;
}
#empReportsBtnGen{
    position: absolute;
    left: 25%;
}
#searchBtnGen{
    position: absolute;
    left: 50%;
}        
#addEmp{
    position:absolute;
    top: 25%;
    background-color: #330066;
    color: white;
    visibility: hidden;
}
#addEmpAdminUser{
    position:absolute;
    top: 25%;
    background-color: #330066;
    color: white;
    visibility: hidden;
}
#modEmp{
    position:absolute;
    top: 37%;
    background-color: #333366;
    color: white;
    visibility: hidden;
}
/*
#delEmp{
    position:absolute;
    top: 49%;
    background-color: #336666;
    color: white;
    visibility: hidden;
}
*/
#timeCardEmp{
    position:absolute;
    top: 37%;
    background-color: #339966;
    color: white;
    visibility: hidden;
}
/*
#timeCardEmpAdminUser{
    position:absolute;
    top: 61%;
    background-color: #339966;
    color: white;
    visibility: hidden;
}
*/
#activeEmpReportAdmin{
    position:absolute;
    top: 25%;
    background-color: #330066;
    color: white;
    visibility: hidden;
}
#inactiveEmpReportAdmin{
    position:absolute;
    top: 37%;
    background-color: #333366;
    color: white;
    visibility: hidden;
}
#payrollReportAdmin{
    position:absolute;
    top: 49%;
    background-color: #336666;
    color: white;
    visibility: hidden;
}
#seniorityReportAdmin{
    position:absolute;
    top: 61%;
    background-color: #339966;
    color: white;
    visibility: hidden;
}
#weeklyHoursReportAdmin{
    position:absolute;
    top: 73%;
    background-color: #336600;
    color: white;
    visibility: hidden;
}

#seniorityReportGen{
    position:absolute;
    top: 25%;
    background-color: #330066;
    color: white;
    visibility: hidden;
}
#weeklyHoursReportGen{
    position:absolute;
    top: 37%;
    background-color: #99CCFF;
    color: white;
    visibility: hidden;
}
#adminCreateNewUser{
    position:absolute;
    top: 25%;
    background-color: #330066;
    color: white;
    visibility: hidden;
}
#auditTable{
    position:absolute;
    top: 37%;
    background-color: #333366;
    color: white;
    visibility: hidden;
}
#companyInformation{
    position:absolute;
    top: 49%;
    background-color: #336666;
    color: white;
    visibility: hidden;
}
.buttonStyles{
    color: #006633;
    width:15%;
    height: 8%;
    left:-1%;
    border-radius: 4px;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
}
.buttonStyles2{
    color: #006633;
    width:0%;
    height: 8%;
    left:-1%;
    border-radius: 4px;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
}
.buttonStylesUser{
    color: white;
    width:0%;
    height: 8%;
    left:-1%;
    border-radius: 4px;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
}
       
.centerDiv{

    position: absolute;
    left: 32%;
    top: 10%;
    height: 70%;
    width: 40%;
    overflow-y:scroll;
    background-color:#E6E6E6 ;
    opacity: 0;
}


.timeCardLabel{
    position:absolute;
    left:10%;
}

.seasonalTimeCardLabel{
    position:absolute;
    left:10%;
}  
.piecesLabel{
position:absolute;
    left:60%;
}
.piecesText{
position:absolute;
    left:62%;
    width:12%;
}
#reportsDiv{

    visibility:hidden;
}

#monPieces{
top:30%;
}#tuePieces{
top:40%;
}#wedPieces{
top:50%;
}#thurPieces{
top:60%;
}
        #friPieces{
top:70%;
}
        #satPieces{
top:80%;
}
#sunPieces{
top:90%;
}
.timeCardText{
position:absolute;
    left:35%;
}   
.timeCardTextS{
position:absolute;
    left:32%;
} 
.timeCardTextSS{
position:absolute;
    left:27%;
    width:12%;
}         
#selectEmpTypeDivForAdminUser{
    visibility: hidden;
}
#selectEmpTypeDivForGenUser{
    visibility: hidden;
}
#genUserAddingEmp{
    visibility: hidden;
}
#adminUserAddingFTEmp{
    visibility: hidden;
}
#adminUserAddingFTEmpAdd{
    visibility: hidden;
}        
#adminUserAddingPTEmp{
    visibility: hidden;
}
    #adminUserAddingPTEmpAdd{
    visibility: hidden;
}    
#adminUserAddingSEmp{
    visibility: hidden;
}
    #adminUserAddingSEmpAdd{
    visibility: hidden;
}    
        
#adminUserAddingCEmp{
    visibility: hidden;
}
#newUserForm{
    visibility: hidden;
    }
#adminModifyingEmp{
    visibility:hidden;
}
/*
#adminUserDeleteEmp{
    visibility:hidden;
}
*/
#searchDiv{
    visibility:hidden;
}
#gentimeCardFTPT{
    visibility:hidden;
}
#gentimeCardS{
    visibility:hidden;
}        
.submitBtn{
    position:absolute;
    left:40%;
}
#genUserAddEmp{
    position:absolute;
    top:90%;
}
#btnSubmitFT{
    top:90%;
}
 #btnSubmitPT{
     top:90%;
}
 #btnSubmitS{
     top:90%;
}
#btnSubmitCC{
    top:80%;
}

#sinLabelTC{
    top:10%;
}
#fnameNewUserLabel{
top:10%;
}
        #lnameNewUserLabel{
top:20%;
}
        #securityLevelNewUserLabel{
top:30%;
}
        #passwordNewUserLabel{
top:40%;
}
        #userNameNewUserLabel{
            top:50%;
        }
#fnameNewUserText{
top:10%;
}
        #lnameNewUserText{
top:20%;
}
        #selectSecurityLevel{
top:30%;
}
        #passwordNewUserText{
top:40%;
}   
        #userNameNewUserText{
            top:50%;
        }
#submitNewUser{
    position:absolute;
    left:30%;
    top:60%;
}
#compLabelTC{
    top:20%;
}
#monLabelTC{
    top:30%;
}
#tueLabelTC{
    top:40%;
}
#wedLabelTC{
    top:50%;
}
#thurLabelTC{
    top:60%;
} #friLabelTC{
    top:70%;
} #satLabelTC{
    top:80%;
} 
#sunLabelTC{
    top:90%;
} 
#submitTimeCardBtnFTPT{
position:absolute;
    top:100%;
    left:40%;
}
#sinTextGenTC{
    top:10%;
}
#companyTextGenTC{
    top:20%;
}
#monTextTC{
    top:30%;
}
        #tueTextTC{
    top:40%;
} #wedTextTC{
    top:50%;
} #thurTextTC{
    top:60%;
} #friTextTC{
    top:70%;
} #satTextTC{
    top:80%;
} 
        #sunTextTC{
    top:90%;
} 
/*      */
#sinLabelTCS{
    top:8%;
}
#compLabelTCS{
    top:16%;
}
#monLabelTCS{
    top:30%;
}
#tueLabelTCS{
    top:40%;
}
#wedLabelTCS{
    top:50%;
}
#thurLabelTCS{
    top:60%;
} #friLabelTCS{
    top:70%;
} #satLabelTCS{
    top:80%;
} 
#sunLabelTCS{
    top:90%;
} 
#submitTimeCardBtnS{
position:absolute;
    top:100%;
    left:40%;
}
#sinTextGenTCS{
    top:8%;
}
#companyTextGenTCS{
    top:16%;
}
#monTextTCS{
    top:30%;
}
#tueTextTCS{
    top:40%;
} #wedTextTCS{
    top:50%;
} #thurTextTCS{
    top:60%;
} #friTextTCS{
    top:70%;
} #satTextTCS{
    top:80%;
} 
        #sunTextTCS{
    top:90%;
}         
        
.employeeType{
    position:absolute;
    top:3%;
    left:35%;
}
.fnameL{
    position: absolute;
    left: 10%;
    top: 10%;
}
.fname{
    position: absolute;
    left: 50%;
    top: 10%;
}
.lnameL{
    position: absolute;
    left: 10%;
    top: 20%;
}
.lname{
    position: absolute;
    left: 50%;
    top: 20%;
}
.companyL{
    position: absolute;
    left: 10%;
    top: 30%;
}
.company{
    position: absolute;
    left: 50%;
    top: 30%;
}
.sinL{
    position: absolute;
    left: 10%;
    top: 40%;
}
.sin{
    position: absolute;
    left: 50%;
    top: 40%;
}
.dobL{
    position: absolute;
    left: 10%;
    top: 50%;
}
.dob{
    position: absolute;
    left: 50%;
    top: 50%;
}
.dohL{
    position: absolute;
    left: 10%;
    top: 60%;
}
.doh{
    position: absolute;
    left: 50%;
    top: 60%;
}
.seasonL{
    position: absolute;
    left: 10%;
    top: 60%;
}
.seasonLGen{
    position: absolute;
    left: 10%;
    top: 80%;
}     
.seasonTypeGen{
position: absolute;
    left: 40%;
    top: 80%;
}
.season{
    position: absolute;
    left: 50%;
    top: 60%;
}
.seasonyearL{
    position: absolute;
    left: 10%;
    top: 70%;
}
.piecePayL{
 position: absolute;
    left: 10%;

}
        #piecePayTextAdminS{
            position: absolute;
    left: 50%;
            top:80%;
        }
.seasonyear{
    position: absolute;
    left: 50%;
    top: 70%;
}

#dotLabelAdmin{
    position: absolute;
    left: 10%;
    top: 70%;
}
#dotTextAdmin{
    position: absolute;
    left: 50%;
    top: 70%;
}
    #dotTextAdminAdd{
    position: absolute;
    left: 50%;
    top: 70%;
}    
    #dotTextAdminPT{
    position: absolute;
    left: 50%;
    top: 70%;
}    
          #dotTextAdminPTAdd{
    position: absolute;
    left: 50%;
    top: 70%;
}  
 #salaryLabelAdmin{
    position: absolute;
    left: 10%;
    top: 80%;
}
#salary{
    position: absolute;
    left: 50%;
    top: 80%;
} 
        #salaryAdd{
    position: absolute;
    left: 50%;
    top: 80%;
} 
    #hourlyRatePT{
    position: absolute;
    left: 50%;
    top: 80%;
}  
          #hourlyRatePTAdd{
    position: absolute;
    left: 50%;
    top: 80%;
}  
#hourlyRateLabelAdmin{
    position: absolute;
    left: 10%;
    top: 80%;
}
#hourlyRate{
    position: absolute;
    left: 40%;
    top: 80%;
} 
#piecePayLabelAdmin{
    position: absolute;
    left: 10%;
    
    top: 80%;
}
#piecePay{
    position: absolute;
    left: 40%;
    top: 100%;
} 
#lnameLabelAdminC{
    position:absolute;
    left:10%;
    top:10%;
}
 #lnameTextAdminC{
    position:absolute;
    left:40%;
    top:10%;
}

#companyLabelAdminC{
    position:absolute;
    left:10%;
    top:20%;
}
 #compTextAdminC{
    position:absolute;
    left:40%;
    top:20%;
}
#searchResult{
position:absolute;
    left :10%;
    top:40%;
    height:30%;
    width:30%;
    color:blue;
    background-color:white;
}
        #modifySinLabel{
        top:10%;
        }
        #modifySinText{
        top:10%;
        }
        #modifyCompanyLabel{
        top:20%;
        }
         #modifyCompanyText{
        top:20%;
        }
        #submitModify{
        position:absolute;
            left:35%;
            top:35%;
        }
#sinLabelAdminC{
    position:absolute;
    left:10%;
    top:30%;
}
 #sinTextAdminC{
    position:absolute;
    left:40%;
    top:30%;
}

#dobLabelAdminC{
position:absolute;
    left:10%;
    top:40%;
}
 #dobTextAdminC{
position:absolute;
    left:40%;
    top:40%;
}

#csdLabelAdminC{
position:absolute;
    left:10%;
    top:50%;
}
 #csdTextAdminC{
position:absolute;
    left:40%;
    top:50%;
}

#cstopDLabelAdminC{
position:absolute;
    left:10%;
    top:60%;
}
 #cstopDTextAdminC{
position:absolute;
    left:40%;
    top:60%;
}

#contractAmountLabelC{
position:absolute;
    left:10%;
    top:70%;
}
 #contractAmountC{
position:absolute;
    left:40%;
    top:70%;
}
#searchFnameLabel{
    position: absolute;
    left: 10%;
    top: 10%;
}
#searchFnameText{
    position: absolute;
    left: 40%;
    top: 10%;
}
#searchLnameLabel{
    position: absolute;
    left: 10%;
    top: 20%;
}
#searchLnameText{
    position: absolute;
    left: 40%;
    top: 20%;
}
#searchSinLabel{
    position: absolute;
    left: 10%;
    top: 30%;
}
#searchSinText{
    position: absolute;
    left: 40%;
    top: 30%;
}
#searchEmpBtn{
 position: absolute;
    left: 35%;
    top: 40%;
}
.empTypeBtn{
    height: 17%;
    width: 26%;
    color: #fff;
    font-weight: lighter;
    background-color: #538fbe;
    //padding: 20px 70px;
    font-size: 12px;
    font-family: serif;
    border: 1px solid #2d6898;
    background-image: linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
    background-image: -o-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
    background-image: -moz-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
    background-image: -webkit-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
    background-image: -ms-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
 
    background-image: -webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0, rgb(73,132,180)),
        color-stop(1, rgb(97,155,203))
    );
}
#addEmployeeLabelAdmin{
position:absolute;
    left:35%;
    top:5%;
}
 #addEmployeeLabelGen{
position:absolute;
    left:25%;
    top:5%;
}       
#genUserChoiceFTEmp{
    position: absolute;
    left: 15%;
    top: 15%;
}
#adminUserChoiceFTEmp{
    position: absolute;
    left: 15%;
    top: 15%;
}
#genUserChoicePTEmp{
    position: absolute;
    left: 59%;
    top: 15%;
}
#adminUserChoicePTEmp{
    position: absolute;
    left: 59%;
    top: 15%;
}
#genUserSEmp{
    position: absolute;
    left: 15%;
    top: 60%;
}
#adminUserSEmp{
    position: absolute;
    left: 15%;
    top: 60%;
}
#adminUserChoiceCEmp{
    position: absolute;
    left: 59%;
    top: 60%;
}
.backBtn{
     position: absolute;
    left: 80%;
    top: 90%;
    height: 8%;
    width: 15%;
}
.cancelImage{
    position: absolute;
    left: 92%;
    top: -2%;
    height: 15%;
    width: 10%;
}
#logOutOfTheApp{
  position: absolute;
  left: 90%;
  top: 20%;
}
#copyright{
  position: absolute;
  left: 80%;
  top: 90%;
  width: 21%;
  color: white;
}
</style>

  <title>EMS-PSS</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script type="text/javascript">
var maintaineneceType = "";
var userType="";
var employeeType="";
var genUserEmpType="";
var userAction = "maintainence";
var genUserAction="maintainence";
var esum = 0;
var enumbers = "";
var checknum = 0;
var ch_sum = "";
var checkdigit = 0;
var sin = "";
var lastdigit = 0;
var bYYYY = 0;
var hYYYY;
var hMM;
var hDD;
var oldSin="";  
var reportType="";

   $(document).ready(function () {
    userType="<?php echo $_SESSION["userType"]; ?>";
       if(userType==="A")
       {
           document.getElementById("addEmpAdminUser").style.visibility = "visible";
           document.getElementById("modEmp").style.visibility = "visible";
          // document.getElementById("delEmp").style.visibility = "visible";
          // document.getElementById("timeCardEmpAdminUser").style.visibility = "visible";
           document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
           document.getElementById("middleDiv").style.visibility = "visible";
       }
       else
       {
           if(userType==="G")
           {
               document.getElementById("addEmp").style.visibility = "visible";
               document.getElementById("timeCardEmp").style.visibility = "visible";
               document.getElementById("middleDivGen").style.visibility = "visible";
           }
       }
   });

function addEmpDivs()
{
    //if its the first choice
    if(maintaineneceType=="")
    {
        document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "visible";
        $("#selectEmpTypeDivForGenUser").fadeTo(1000, 1);
        document.getElementById("addEmployeeLabelGen").innerHTML="Add Employee General User";
    }
    else
    {
        //if going back and forth in add emp meny only
        if(maintaineneceType==="addEmployee")
        {
        }
        //last button pressed was time card button
        else
        {
            if(maintaineneceType==="timeCardEmp")
            {
                //check which time card divs are open
                if(document.getElementById("gentimeCardFTPT").style.visibility == "visible")
                {        
                     $("#gentimeCardFTPT").fadeTo(1000, 0,function(){
                         document.getElementById("gentimeCardFTPT").style.visibility = "hidden";
                         //show card time divs
                            document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "visible";
                            $("#selectEmpTypeDivForGenUser").fadeTo(1000, 1);
                         document.getElementById("addEmployeeLabelGen").innerHTML="Add Employee General User";
                     });
                }
                else
                {
                    if(document.getElementById("selectEmpTypeDivForGenUser").style.visibility == "visible")
                    {
                        $("#selectEmpTypeDivForGenUser").fadeTo(1000, 0,function(){
                         document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "hidden";

                        //show card time divs
                        document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "visible";
                        $("#selectEmpTypeDivForGenUser").fadeTo(1000, 1);
                            document.getElementById("addEmployeeLabelGen").innerHTML="Add Employee General User";
                     });
                    }
                    else
                    {
                        if(document.getElementById("gentimeCardS").style.visibility == "visible")
                        {
                            $("#gentimeCardS").fadeTo(1000, 0,function(){
                                document.getElementById("gentimeCardS").style.visibility = "hidden";
                                //show card time divs
                                document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "visible";
                                $("#selectEmpTypeDivForGenUser").fadeTo(1000, 1);
                                document.getElementById("addEmployeeLabelGen").innerHTML="Add Employee General User";
                            }); 
                        }
                    }
                }
            }
        }           
    }
     maintaineneceType = "addEmployee";
}
//
//function hideAdminTimeCardForm()
//{
//    //check which time card divs are open
//    if(document.getElementById("adminUserTimeCard").style.visibility == "visible")
//    {        
//         $("#adminUserTimeCard").fadeTo(1000, 0,function(){
//             document.getElementById("adminUserTimeCard").style.visibility = "hidden";
//             //show card time divs
//                document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
//                $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
//                // document.getElementById("addEmployeeLabelAdmin").innerHTML="Time Card Admin";
//         });
//    }
//    else
//    {
//        if(document.getElementById("selectEmpTypeDivForAdminUser").style.visibility == "visible")
//        {
//            $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0,function(){
//             document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
//
//            //show card time divs
//            document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
//            $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
//                  //  document.getElementById("addEmployeeLabelAdmin").innerHTML="Time Card Employee Admin";
//         });
//        }
//    }
//}
    
function hideAdminModifyForm()
{
    if(document.getElementById("selectEmpTypeDivForAdminUser").style.visibility == "visible")
    {
        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0,function(){
         document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";

        //show card time divs
        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
             //   document.getElementById("addEmployeeLabelAdmin").innerHTML="Modify Employee Admin";
     });
    }
    else
    {
        if(document.getElementById("adminModifyingEmp").style.visibility == "visible")
        {
            $("#adminModifyingEmp").fadeTo(1000, 0,function(){
             document.getElementById("adminModifyingEmp").style.visibility = "hidden";

            //show card time divs
            document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
            $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
                 //   document.getElementById("addEmployeeLabelAdmin").innerHTML="Modify Employee Admin";
         });
        }
    }
}
    
//function hideAdminDeleteForm()
//{
//    if(document.getElementById("selectEmpTypeDivForAdminUser").style.visibility == "visible")
//    {
//        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0,function(){
//         document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
//
//        //show card time divs
//        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
//        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
//               // document.getElementById("addEmployeeLabelAdmin").innerHTML="Add Employee Admin";
//     });
//    }
//    else
//    {
//        if(document.getElementById("adminUserDeleteEmp").style.visibility == "visible")
//        {
//            $("#adminUserDeleteEmp").fadeTo(1000, 0,function(){
//             document.getElementById("adminUserDeleteEmp").style.visibility = "hidden";
//
//            //show card time divs
//            document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
//            $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
//                 //   document.getElementById("addEmployeeLabelAdmin").innerHTML="Add Employee Admin";
//         });
//        }
//    }
//}
    
function getSeniorityReport()
{	
        var report="";
        if(reportType=="Weekly")
        {
            report="weeklyReport";
            //alert(report);
        }
    if(reportType=="Seniority")
    {
        report="generalSeniorityReport";
        //alert(report);
    }
		var sendData = "";
		var company = document.getElementById("reportCompanyNameText").value;
		sendData += makeUpJson("q",{"q":report},true);
		sendData += makeUpJson("CM",{"CM":company});

		
		//alert(sendData);
			 $.ajax({url: "Database.php",
							type: "GET",
							async:true,
							data : sendData,
							success:function(result)
							{
								//alert(result);
								
								  document.getElementById("reportsResult").style.visibility = "visible";
								$("#reportsResult").fadeTo(1000, 1);
								$("#reportsResult").html(result);
							},
							 error: function( objRequest )
							 {
								//alert(objRequest);
							 }
							
							});
	}
    
function hideAdminAddEmpForm()
{
    if(document.getElementById("adminUserAddingFTEmpAdd").style.visibility == "visible")
    {        
         $("#adminUserAddingFTEmpAdd").fadeTo(1000, 0,function(){
             document.getElementById("adminUserAddingFTEmpAdd").style.visibility = "hidden";
             //show card time divs
            document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
            $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
//document.getElementById("addEmployeeLabelAdmin").innerHTML="Modify Employee Admin";
         });
    }
    else
    {
        if(document.getElementById("adminUserAddingPTEmpAdd").style.visibility == "visible")
        {        
             $("#adminUserAddingPTEmpAdd").fadeTo(1000, 0,function(){
                 document.getElementById("adminUserAddingPTEmpAdd").style.visibility = "hidden";
                 //show card time divs
                document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
                $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
//document.getElementById("addEmployeeLabelAdmin").innerHTML="Modify Employee Admin";
             });
        }
        else
        {
            if(document.getElementById("adminUserAddingSEmpAdd").style.visibility == "visible")
            {        
                 $("#adminUserAddingSEmpAdd").fadeTo(1000, 0,function(){
                     document.getElementById("adminUserAddingSEmpAdd").style.visibility = "hidden";
                     //show card time divs
                    document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
                    $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
//document.getElementById("addEmployeeLabelAdmin").innerHTML="Modify Employee Admin";
                 });
            }
            else
            {
                if(document.getElementById("adminUserAddingCEmp").style.visibility == "visible")
                {        
                     $("#adminUserAddingCEmp").fadeTo(1000, 0,function(){
                         document.getElementById("adminUserAddingCEmp").style.visibility = "hidden";
                         //show card time divs
                        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
                        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
                    //    document.getElementById("addEmployeeLabelAdmin").innerHTML="Modify Employee Admin";
                     });
                }
                else
                {
                    if(document.getElementById("selectEmpTypeDivForAdminUser").style.visibility == "visible")
                    {
                        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0,function(){
                             document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";

                            //show card time divs
                            document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
                            $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
                           // document.getElementById("addEmployeeLabelAdmin").innerHTML="Modify Employee Admin";
                        });
                    }
                }
            }
        }
    }
}
function addEmpDivsAdmin()
{

    //if its the first choice
    if(maintaineneceType=="")
    {
       // alert("nnnn");
        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
        document.getElementById("addEmployeeLabelAdmin").innerHTML="Add Employee Admin";
    }
    else
    {
        //if going back and forth in add emp meny only
        if(maintaineneceType==="addEmployee")
        {
        }
        //last button pressed was time card button
        else
        {
            if(maintaineneceType==="timeCardEmp")
            {
                hideAdminTimeCardForm();
                 document.getElementById("addEmployeeLabelAdmin").innerHTML="Add Employee Admin";
            }
            else
            {
                if(maintaineneceType==="modifyEmployee")
                {
                    hideAdminModifyForm();
                     document.getElementById("addEmployeeLabelAdmin").innerHTML="Add Employee Admin";
                }
            }
        }           
    }
    
     //document.getElementById("addEmployeeLabelAdmin").innerHTML="Add Employee Admin";
     maintaineneceType = "addEmployee";
}
    
    
//admin user modifying user
function modifyEmpDivsAdmin()
{

    //if its the first choice
    if(maintaineneceType=="")
    {
        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
        document.getElementById("addEmployeeLabelAdmin").innerHTML="Modify Employee Admin";
    }
    else
    {
        //if going back and forth in add emp meny only
        if(maintaineneceType==="addEmployee")
        {
            hideAdminAddEmpForm();
                document.getElementById("addEmployeeLabelAdmin").innerHTML="Modify Employee Admin";
                
        }
        //last button pressed was time card button
        else
        {
            if(maintaineneceType==="timeCardEmp")
            {
                hideAdminTimeCardForm();
                    document.getElementById("addEmployeeLabelAdmin").innerHTML="Modify Employee Admin";
            }
            else
            {
                if(maintaineneceType==="modifyEmployee")
                {
                   // alert("fsfsfs");
                }
//                else
//                {
//                    if(maintaineneceType==="deleteEmployee")
//                    {
//                       hideAdminDeleteForm();
//                    }
//                }
            }
        }           
    }

     maintaineneceType = "modifyEmployee";
}

//function adminDeleteEmp()
//{
//
//    //if its the first choice
//    if(maintaineneceType=="")
//    {
//        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
//        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
//        document.getElementById("addEmployeeLabelAdmin").innerHTML="Delete Employee Admin";
//    }
//    else
//    {
//        //if going back and forth in add emp meny only
//        if(maintaineneceType==="addEmployee")
//        {
//            hideAdminAddEmpForm();
//        }
//        //last button pressed was time card button
//        else
//        {
//            if(maintaineneceType==="timeCardEmp")
//            {
//                hideAdminTimeCardForm();
//            }
//            else
//            {
//                if(maintaineneceType==="modifyEmployee")
//                {
//                    hideAdminModifyForm();
//                }
//                else
//                {
//                    if(maintaineneceType==="deleteEmployee")
//                    {
//                        
//                    }
//                }
//            }
//        }           
//    }
//     //document.getElementById("addEmployeeLabelAdmin").innerHTML="Delete Employee Admin";
//     maintaineneceType = "deleteEmployee";
//}
    
function timeCardDivs()
{
    if(maintaineneceType=="")
    {
        document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "visible";
        $("#selectEmpTypeDivForGenUser").fadeTo(1000, 1);  
        document.getElementById("addEmployeeLabelGen").innerHTML="Time Card General User";
    }
    else
    {
        //if going back and forth in add emp meny only
        if(maintaineneceType==="timeCardEmp")
        {
        }
         //last button pressed was time card button
        else
        {
            if(maintaineneceType==="addEmployee")
            {
                //check which add emp divs are open
                //hide all add amp divs
                if(document.getElementById("genUserAddingEmp").style.visibility == "visible")
                {        
                     $("#genUserAddingEmp").fadeTo(1000, 0,function(){
                        document.getElementById("genUserAddingEmp").style.visibility = "hidden";
                        //show card time divs
                        document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "visible";
                        $("#selectEmpTypeDivForGenUser").fadeTo(1000, 1);
                        document.getElementById("addEmployeeLabelGen").innerHTML="Time Card General User";
                     });
                }
                else
                {
                    if(document.getElementById("selectEmpTypeDivForGenUser").style.visibility == "visible")
                    {
                        $("#selectEmpTypeDivForGenUser").fadeTo(1000, 0,function(){
                            document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "hidden";
                            //show card time divs
                            document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "visible";
                            $("#selectEmpTypeDivForGenUser").fadeTo(1000, 1);
                            document.getElementById("addEmployeeLabelGen").innerHTML="Time Card General User";
                        });
                    }
                }    
            }
        }     
    }
    maintaineneceType = "timeCardEmp";
}
    
function  makeUpJson(key,keyValue,prefix)
{
    var result="";

    prefix = typeof prefix =='undefined' ? false : true;

    if(!prefix)
    {
        result="&";
    }

    var myObjectString = JSON.stringify(keyValue);

    result += key;
    result +="=";
    result += myObjectString;
    return result;
}    
	      
    
//Admin user wants to add an employee
  $(document).ready(function () {
    "use strict";
    $("#addEmpAdminUser").click(function () {
        addEmpDivsAdmin();
            });
  });
    
//Admin user wants to modify an employee
  $(document).ready(function () {
    "use strict";
    $("#modEmp").click(function () {
        modifyEmpDivsAdmin();
        emptyModifySpans();
        emptyModifyFields();
            });
  });
    
    
     $(document).ready(function () {
    "use strict";
    $("#submitNewUser").click(function () {
       createNewUser();
            });
  });
     
   $(document).ready(function () {
    "use strict";
    $("#submitModify").click(function () {
        modifyEmp();
            });
  });    
    
function modifyEmp()
{
    emptyModifySpans();
    //validate the fields
    if(validateModifyFields() == "true")
    {
        //modify in database
        createJSONModifyObject("modifyEmployee");
    }
}
function createJSONModifyObject(userAction)
{
    if(employeeType=="ST")
    {
        employeeType="SN";
    }
    
    var sendData = "";
        var sin = document.getElementById("modifySinText").value;
        var company = document.getElementById("modifyCompanyText").value;
        
		sendData += makeUpJson("q",{"q":userAction},true);
		
		sendData += makeUpJson("CM",{"CM":company});
	
		sendData += makeUpJson("SIN",{"SIN":sin});
		
		sendData += makeUpJson("ET",{"ET":employeeType});
    
    if(employeeType=="FT")
    {
		document.getElementById("adminUserAddingFTEmp").style.visibility = "visible";
	   $("#adminUserAddingFTEmp").fadeTo(1000, 1);
    }
    if(employeeType=="PT")
    {
     document.getElementById("adminUserAddingPTEmp").style.visibility = "visible";
	   $("#adminUserAddingPTEmp").fadeTo(1000, 1);   
    }
		//alert(sendData);
	 $.ajax({url: "Database.php",
							type: "GET",
							async:true,
							data : sendData,
							success:function(result)
							{
                                //alert(result);   
								var values = [];
								values = makeItAnObject(result);
                                showModifyResultFT(values,employeeType);
//                                if(employeeType=="FT")
//                                {
//                                    showModifyResultFT(values,employeeType);
//                                }
//                                if(employeeType=="PT")
//                                {
//                                    showModifyResultPT(values,employeeType);
//                                }
                               
							},
							 error: function( objRequest )
							 {
								//alert(objRequest);
							 }
							
							});
    
}
    
function showModifyResultFT(values,employeeType)
{

        
    if(employeeType=="FT")
    {   
        document.getElementById("employeeTypeFT").innerHTML = "Fulltime Employee";
        document.getElementById("fnameTextAdmin").value = values[0];
        document.getElementById("lnameTextAdmin").value = values[1];
        document.getElementById("compTextAdmin").value = document.getElementById("modifyCompanyText").value;
        document.getElementById("sinTextAdmin").value = document.getElementById("modifySinText").value;
        document.getElementById("dobTextAdmin").value = values[2];
        document.getElementById("dohTextAdmin").value = values[3];
        document.getElementById("dotTextAdmin").value = values[4];
        document.getElementById("salary").value = values[5];
    }
    if(employeeType=="PT")
    {
        document.getElementById("employeeTypePT").innerHTML = "Parttime Employee";
        document.getElementById("fnameTextAdminPT").value = values[0];
        document.getElementById("lnameTextAdminPT").value = values[1];
        document.getElementById("compTextAdminPT").value = document.getElementById("modifyCompanyText").value;
        document.getElementById("sinTextAdminPT").value = document.getElementById("modifySinText").value;
        document.getElementById("dobTextAdminPT").value = values[2];
        document.getElementById("dohTextAdminPT").value = values[3];
        document.getElementById("dotTextAdminPT").value = values[4];
         document.getElementById("hourlyRatePT").value = values[5];
    }
    
}
        
    
function validateModifyFields()
{
   
    var boolToSubmit="true";
    
    if(!checkSin(document.getElementById("modifySinText").value,"true"))
    {
        //show error message
        document.getElementById("spanModifySin").innerHTML = "*Invalid Data";
        boolToSubmit="false";
    } 
    if(!checkCompany(document.getElementById("modifyCompanyText").value))
    {
        //show error message
        document.getElementById("spanModifyCompany").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    return boolToSubmit;
}
    
function emptyModifySpans()
{
    document.getElementById("spanModifySin").innerHTML = "";
    document.getElementById("spanModifyCompany").innerHTML = "";
}
 function emptyModifyFields(){
  document.getElementById("modifySinText").value = "";
    document.getElementById("modifyCompanyText").value = "";   
 }
    
function createNewUser()
{
    emptyAllNewUserSpans();
    //validate all the fields
    if(validateNewUserFields()=="true")
    {
        //create New User in database
        createJSONObjectForNewUser();
    }
}

function createJSONObjectForNewUser()
{
    var sendData = "";
        var fname = document.getElementById("fnameNewUserText").value;
        var lname = document.getElementById("lnameNewUserText").value;
        var secLevel = document.getElementById("selectSecurityLevel").value;
    var password = document.getElementById("passwordNewUserText").value;
    var uname =  document.getElementById("userNameNewUserText").value;
    //alert(uname);
		sendData += makeUpJson("q",{"q":"addNewUser"},true);

		sendData += makeUpJson("FN",{"FN":fname});
		
		sendData += makeUpJson("LN",{"LN":lname});
	
		sendData += makeUpJson("SL",{"SL":secLevel});
		sendData += makeUpJson("UN",{"UN":uname});
        sendData += makeUpJson("PD",{"PD":password});
		sendData += makeUpJson("UT",{"UT":userType});
    
		//document.getElementById("searchResultDiv").style.visibility = "visible";
	
		////alert(sendData);
	 $.ajax({url: "Database.php",
							type: "GET",
							async:true,
							data : sendData,
							success:function(result)
							{
								////alert(result);
								//$("#searchResultDiv").html(result);
							},
							 error: function( objRequest )
							 {
								////alert(objRequest);
							 }
							
							});
}
function emptyAllNewUserFields()
{
    document.getElementById("fnameNewUserText").value = "";
    document.getElementById("lnameNewUserText").value = "";
    document.getElementById("selectSecurityLevel").selectedIndex = 0;
    document.getElementById("passwordNewUserText").value  = "";
}

function emptyAllNewUserSpans()
{
    document.getElementById("spanFnameNewUser").innerHTML = "";
    document.getElementById("spanLnameNewUser").innerHTML = "";
    document.getElementById("spanSecLevelNewUser").innerHTML = "";
    document.getElementById("spanpasswordNewUser").innerHTML  = "";
    document.getElementById("spanUsernameNewUser").innerHTML  = "";
}
    
function validateNewUserFields()
{
    var boolToSubmit="true";
    if(!checkFname(document.getElementById("fnameNewUserText").value))
    {
        //show error message
        document.getElementById("spanFnameNewUser").innerHTML = "*Invalid Data";
        boolToSubmit="false";
    } 
    if(!checkLname(document.getElementById("lnameNewUserText").value))
    {
        //show error message
        document.getElementById("spanLnameNewUser").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(document.getElementById("selectSecurityLevel").selectedIndex == 0)
    {
        //show error message
        document.getElementById("spanSecLevelNewUser").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(document.getElementById("passwordNewUserText").value=="")
    {
        //show error message
        document.getElementById("spanpasswordNewUser").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(document.getElementById("userNameNewUserText").value=="")
    {
        //show error message
        document.getElementById("spanUsernameNewUser").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
  
    return boolToSubmit;
}
    
//    //Admin user wants to delete an employee
//  $(document).ready(function () {
//    "use strict";
//    $("#delEmp").click(function () {
//       // adminDeleteEmp();
//            });
//  });
    
function clearSearchSpans()
{
    document.getElementById("searchSpanGenFname").innerHTML = "";
    document.getElementById("searchSpanGenLname").innerHTML = "";
    document.getElementById("searchSpanGenSin").innerHTML = "";
    document.getElementById("searchError").innerHTML  = "";
}
    
    function clearSearchFields()
    {
         document.getElementById("searchSinText").value = "";
    document.getElementById("searchFnameText").value = "";
    document.getElementById("searchLnameText").value = "";
    }
   

 
  $(document).ready(function () {
    "use strict";
    $("#searchEmpBtn").click(function (){
        clearSearchSpans();
        var boolSearch = "true";
        if(document.getElementById("searchFnameText").value =="" && document.getElementById("searchLnameText").value =="" && document.getElementById("searchSinText").value =="")
        {
            //show the error message.
            document.getElementById("searchError").innerHTML = "*Enter fields to search.";
        }
        else
        {
            if(document.getElementById("searchFnameText").value !="")
            {
                //do the validation
                if(!checkFname(document.getElementById("searchFnameText").value))
                {
                    //show the error
                    document.getElementById("searchSpanGenFname").innerHTML = "*Invalid Data";
                    boolSearch = "false";
                }
            }
            if(document.getElementById("searchLnameText").value !="")
            {
                //do the validation
                if(!checkLname(document.getElementById("searchLnameText").value))
                {
                    //show the error
                    document.getElementById("searchSpanGenLname").innerHTML = "*Invalid Data";
                     boolSearch = "false";
                }
            }
            if(document.getElementById("searchSinText").value !="")
            {
                //do the validation
                if(!checkSin(document.getElementById("searchSinText").value,"true"))
                {
                    //show the error
                    document.getElementById("searchSpanGenSin").innerHTML = "*Invalid Data";  
                     boolSearch = "false";
                }
            }
            if( boolSearch == "true" )
            {
                createJSONObjectSearch("searchEmployee");
            }
        }
         
    });
});

    function createJSONObjectSearch(userAction)
    {
		var sendData = "";
        var fname = document.getElementById("searchFnameText").value;
        var lname = document.getElementById("searchLnameText").value;
        var sin = document.getElementById("searchSinText").value;
		sendData += makeUpJson("q",{"q":userAction},true);

		sendData += makeUpJson("FN",{"FN":fname});
		
		sendData += makeUpJson("LN",{"LN":lname});
	
		sendData += makeUpJson("SIN",{"SIN":sin});
		
		sendData += makeUpJson("UT",{"UT":userType});
		document.getElementById("searchResultDiv").style.visibility = "visible";
	
		////alert(sendData);
	 $.ajax({url: "Database.php",
							type: "GET",
							async:true,
							data : sendData,
							success:function(result)
							{
								////alert(result);
								$("#searchResultDiv").html(result);
							},
							 error: function( objRequest )
							 {
								////alert(objRequest);
							 }
							
							});
        
		
	}


//function SelectEmp(EmployeeID,EmployeeType,CompanyID,PersonID)
function SelectEmp(EmployeeID)
{
		var value = "selectSearchedEmployee";
		var sendData = "";
	
		sendData += makeUpJson("q",{"q":value},true);
		
		sendData += makeUpJson("EID",{"EID":EmployeeID});
	
		sendData += makeUpJson("UT",{"UT":userType});
		
			
	 $.ajax({url: "Database.php",
							type: "GET",
							async:true,
							data : sendData,
							success:function(result)
							{
							////alert(result);	
                            $("#searchResultDiv").html(result);
							},
							 error: function( objRequest )
							 {
							//	//alert(objRequest);
							 }
							
							});
		
}
    
////Admin user wants to add time card entry for an employee 
//$(document).ready(function () {
//    "use strict";
//        $("#timeCardEmpAdminUser").click(function () { 
//           timeCardDivsAdmin(); 
//        });
//});

    
////general user wants to add an employee
  $(document).ready(function () {
    "use strict";
    $("#addEmp").click(function () { 
        addEmpDivs();
    });
  });
    
//general user wants to add time card entry for an employee 
$(document).ready(function () {
    "use strict";
        $("#timeCardEmp").click(function () { 
            timeCardDivs();
        });
});
    
$(document).ready(function () {
    "use strict";
        $("#adminCreateNewUser").click(function () {
            createNewUserForAdmin();
        });
});    
    
function createNewUserForAdmin()
{
    emptyAllNewUserFields();
    emptyAllNewUserSpans();
     document.getElementById("newUserForm").style.visibility = "visible";
    $("#newUserForm").fadeTo(1000, 1);
}
    
//general user selected to add full time employee .    
$(document).ready(function () {
    "use strict";
    $("#genUserChoiceFTEmp").click(function () {  
        genUserEmpType="FT";
        if(maintaineneceType=="addEmployee"){
                $("#selectEmpTypeDivForGenUser").fadeTo(1000, 0, function () {
                document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "hidden";
                document.getElementById("genUserAddingEmp").style.visibility = "visible";
                document.getElementById("seasonTypeLabel").style.visibility = "hidden";
                document.getElementById("seasonTypeDD").style.visibility = "hidden";
                document.getElementById("seasonYearLabel").style.visibility = "hidden";
                document.getElementById("seasonYearText").style.visibility = "hidden";
                $("#genUserAddingEmp").fadeTo(1000, 1);
            });
        }
        else
        {
            if(maintaineneceType=="timeCardEmp")
            {
              $("#selectEmpTypeDivForGenUser").fadeTo(1000, 0, function (){
                  document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "hidden";
                  document.getElementById("gentimeCardFTPT").style.visibility = "visible";
                $("#gentimeCardFTPT").fadeTo(1000, 1);
              });
            }
        }
        //clear the previous form data
        
    });
});
   
    //admin user selected to add full time employee .    
$(document).ready(function () {
    "use strict";
    $("#adminUserChoiceFTEmp").click(function () {  
        employeeType="FT";
        
        if(maintaineneceType=="addEmployee"){
                $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function () {
                document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
                document.getElementById("adminUserAddingFTEmpAdd").style.visibility = "visible";
                $("#adminUserAddingFTEmpAdd").fadeTo(1000, 1);
                document.getElementById("employeeTypeFT").innerHTML = "Fulltime Employee";
            });
        }
        else
        {
            if(maintaineneceType=="timeCardEmp")
            {
//              $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
//                  document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
//                  document.getElementById("adminUserTimeCard").style.visibility = "visible";
//                $("#adminUserTimeCard").fadeTo(1000, 1);
//              });
            }
            else
            {
                 if(maintaineneceType=="modifyEmployee")
                 {
                     $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
                  document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
                  document.getElementById("adminModifyingEmp").style.visibility = "visible";
                $("#adminModifyingEmp").fadeTo(1000, 1);
              });
                 }
//                else
//                {
//                    if(maintaineneceType=="deleteEmployee")
//                    {
//                        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
//                        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
//                        document.getElementById("adminUserDeleteEmp").style.visibility = "visible";
//                        $("#adminUserDeleteEmp").fadeTo(1000, 1);
//                        });
//                    }
//                }
            }
        }
        //clear the previous form data
        
    });
});
   

        
//general user selected to add part time employee .    
$(document).ready(function () {
    "use strict";
    $("#genUserChoicePTEmp").click(function () {
        genUserEmpType="PT";
         if(maintaineneceType=="addEmployee"){
            $("#selectEmpTypeDivForGenUser").fadeTo(1000, 0, function () {
                document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "hidden";
                document.getElementById("genUserAddingEmp").style.visibility = "visible";
                document.getElementById("seasonTypeLabel").style.visibility = "hidden";
                document.getElementById("seasonTypeDD").style.visibility = "hidden";
                document.getElementById("seasonYearLabel").style.visibility = "hidden";
                document.getElementById("seasonYearText").style.visibility = "hidden";
                $("#genUserAddingEmp").fadeTo(1000, 1);
            });
        }
        else
        {
            if(maintaineneceType=="timeCardEmp")
            {
              $("#selectEmpTypeDivForGenUser").fadeTo(1000, 0, function (){
                  document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "hidden";
                  document.getElementById("gentimeCardFTPT").style.visibility = "visible";
                $("#gentimeCardFTPT").fadeTo(1000, 1);
              });
            }
        }
    //clear the previous form data
      
    });
});
    
    //general user selected to add part time employee .    
$(document).ready(function () {
    "use strict";
    $("#adminUserChoicePTEmp").click(function () {
        employeeType="PT";
         if(maintaineneceType=="addEmployee"){
            $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function () {
                document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
                document.getElementById("adminUserAddingPTEmpAdd").style.visibility = "visible";
                $("#adminUserAddingPTEmpAdd").fadeTo(1000, 1);
                 document.getElementById("employeeTypePT").innerHTML = "Parttime Employee";
            });
        }
        else
        {
            if(maintaineneceType=="timeCardEmp")
            {
//              $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
//                  document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
//                  document.getElementById("adminUserTimeCard").style.visibility = "visible";
//                $("#adminUserTimeCard").fadeTo(1000, 1);
//              });
            }
            else
            {
                 if(maintaineneceType=="modifyEmployee")
                 {
                    $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
                    document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
                    document.getElementById("adminModifyingEmp").style.visibility = "visible";
                    $("#adminModifyingEmp").fadeTo(1000, 1);
                    });
                 }
//                else
//                {
//                    if(maintaineneceType=="deleteEmployee")
//                    {
//                        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
//                        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
//                        document.getElementById("adminUserDeleteEmp").style.visibility = "visible";
//                        $("#adminUserDeleteEmp").fadeTo(1000, 1);
//                        });
//                    }
//                }
            }
        }
    //clear the previous form data
      
    });
});
    
//general user selected to add seasonal employee .    
$(document).ready(function () {
    "use strict";
    $("#genUserSEmp").click(function () {
        genUserEmpType="ST";
        if(maintaineneceType=="addEmployee"){    
        $("#selectEmpTypeDivForGenUser").fadeTo(1000, 0, function () {
                document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "hidden";
                document.getElementById("genUserAddingEmp").style.visibility = "visible";
                document.getElementById("seasonTypeLabel").style.visibility = "visible";
                document.getElementById("seasonTypeDD").style.visibility = "visible";
                document.getElementById("seasonYearLabel").style.visibility = "visible";
                document.getElementById("seasonYearText").style.visibility = "visible";
                $("#genUserAddingEmp").fadeTo(1000, 1);
            });
        }
        else
        {
            if(maintaineneceType=="timeCardEmp")
            {
              $("#selectEmpTypeDivForGenUser").fadeTo(1000, 0, function (){
                  document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "hidden";
                  document.getElementById("gentimeCardS").style.visibility = "visible";
                $("#gentimeCardS").fadeTo(1000, 1);
              });
            }
            
        }
        
    //clear the previous form data
     
    document.getElementById("seasonYearText").value = "";
    document.getElementById("seasonTypeDD").selectedIndex = 0; 
    });
});
    
    
    //general user selected to add seasonal employee .    
$(document).ready(function () {
    "use strict";
    $("#adminUserSEmp").click(function () {
        employeeType="ST";
        if(maintaineneceType=="addEmployee"){    
        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function () {
                document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
                document.getElementById("adminUserAddingSEmpAdd").style.visibility = "visible";
                $("#adminUserAddingSEmpAdd").fadeTo(1000, 1);
                document.getElementById("employeeTypeS").innerHTML = "Seasonal Employee";
            });
        }
        else
        {
            if(maintaineneceType=="timeCardEmp")
            {
//              $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
//                  document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
//                  document.getElementById("adminUserTimeCard").style.visibility = "visible";
//                $("#adminUserTimeCard").fadeTo(1000, 1);
//              });
            }
            else
            {
                 if(maintaineneceType=="modifyEmployee")
                 {
                    $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
                    document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
                    document.getElementById("adminModifyingEmp").style.visibility = "visible";
                    $("#adminModifyingEmp").fadeTo(1000, 1);
                    });
                 }
//                else
//                {
//                    if(maintaineneceType=="deleteEmployee")
//                    {
//                        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
//                        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
//                        document.getElementById("adminUserDeleteEmp").style.visibility = "visible";
//                        $("#adminUserDeleteEmp").fadeTo(1000, 1);
//                        });
//                    }
//                }
            }
        }
        
    //clear the previous form data
     
    document.getElementById("seasonYearText").value = "";
    document.getElementById("seasonTypeDD").selectedIndex = 0; 
    });
});
    
    
$(document).ready(function () {
    "use strict";
    $("#adminUserChoiceCEmp").click(function () {
        employeeType="CT";
        if(maintaineneceType=="addEmployee"){    
        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function () {
                document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
                document.getElementById("adminUserAddingCEmp").style.visibility = "visible";
                $("#adminUserAddingCEmp").fadeTo(1000, 1);
                 document.getElementById("employeeTypeC").innerHTML = "Contract Employee";
            });
        }
        else
        {
            if(maintaineneceType=="timeCardEmp")
            {
//              $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
//                  document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
//                  document.getElementById("adminUserTimeCard").style.visibility = "visible";
//                $("#adminUserTimeCard").fadeTo(1000, 1);
//              });
            }
            else
            {
                 if(maintaineneceType=="modifyEmployee")
                 {
                    $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
                    document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
                    document.getElementById("adminModifyingEmp").style.visibility = "visible";
                    $("#adminModifyingEmp").fadeTo(1000, 1);
                    });
                 }
//                else
//                {
//                    if(maintaineneceType=="deleteEmployee")
//                    {
//                        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
//                        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
//                        document.getElementById("adminUserDeleteEmp").style.visibility = "visible";
//                        $("#adminUserDeleteEmp").fadeTo(1000, 1);
//                        });
//                    }
//                }
            }
        }

    //clear the previous form data
     
    document.getElementById("seasonYearText").value = "";
    document.getElementById("seasonTypeDD").selectedIndex = 0; 
    });
});
    
    
  $(document).ready(function () {
    "use strict";
    
    $("#activeEmpReportAdmin").click(function () {
          alert("active");
        if(reportType=="Weekly" || reportType=="Inactive" ||reportType=="Seniority"||reportType=="Payroll")
        {
            $("#reportsResult").empty();
        }
         reportType="Active";
         showReportDiv();
        });
  });
    

  $(document).ready(function () {
    "use strict";
     
    $("#inactiveEmpReportAdmin").click(function () {
         alert("inactive");
         if(reportType=="Weekly" || reportType=="Active" ||reportType=="Seniority"||reportType=="Payroll")
        {
            $("#reportsResult").empty();
        }
         reportType="Inactive";
         showReportDiv();
            });
  });
    
    
$(document).ready(function () {
    "use strict";
    $("#payrollReportAdmin").click(function () {
         alert("payroll");
         if(reportType=="Weekly" || reportType=="Inactive" ||reportType=="Seniority"||reportType=="Active")
        {
            $("#reportsResult").empty();
        }
         reportType="Payroll";
         showReportDiv();
            });
  });
    
    
$(document).ready(function () {
    "use strict";
    $("#seniorityReportAdmin").click(function () {
         alert("seniority");
         if(reportType=="Weekly" || reportType=="Inactive" ||reportType=="Payroll"||reportType=="Active")
        {
            $("#reportsResult").empty();
        }
         reportType="Seniority";
         showReportDiv();
            });
  });
  $(document).ready(function () {
    "use strict";
    $("#weeklyHoursReportAdmin").click(function () {
         alert("weekly");
         if(reportType=="Seniority" || reportType=="Inactive" ||reportType=="Payroll"||reportType=="Active")
        {
            $("#reportsResult").empty();
        }
         reportType="Seniority";
         showReportDiv();
            });
  });  

    
//go back to employee type div, to select employee type.    
$(document).ready(function () {
    "use strict";
    $("#goBack").click(function () {
    //hide the add emp form    
    $("#genUserAddingEmp").fadeTo(1000, 0, function () {
        document.getElementById("genUserAddingEmp").style.visibility = "hidden";
        document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "visible";
        $("#selectEmpTypeDivForGenUser").fadeTo(1000, 1);
        //clear all fields of employee form
        clearAllFields();
        emptyAllSpanValues();
        });
    });
});
    
function clearAllFields()
{
    document.getElementById("fnameText").value = "";
     document.getElementById("lnameText").value = "";
     document.getElementById("compText").value = "";
     document.getElementById("sinText").value = "";
     document.getElementById("dobText").value = "";
     document.getElementById("dohText").value = "";
     document.getElementById("seasonYearText").value = "";
     document.getElementById("seasonTypeDD").selectedIndex = 0;
}
$(document).ready(function () {
    "use strict";
    $("#goBackTimeCard").click(function () {
        if( document.getElementById("gentimeCardFTPT").style.visibility == "visible")
        {
            $("#gentimeCardFTPT").fadeTo(1000, 0, function () {
            document.getElementById("gentimeCardFTPT").style.visibility = "hidden";
            document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "visible";
            $("#selectEmpTypeDivForGenUser").fadeTo(1000, 1);
                emptyAllTCSpanValues();
                
            });
            
        }
    });
});
    
//    $(document).ready(function () {
//    "use strict";
//    $("#goBackTimeCardAdmin").click(function () {
//        $("#adminUserTimeCard").fadeTo(1000, 0, function () {
//            document.getElementById("adminUserTimeCard").style.visibility = "hidden";
//            document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
//            $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
//        });
//    });
//});
    
$(document).ready(function () {
    "use strict";
    $("#cancelImageEmpType").click(function () {
        $("#selectEmpTypeDivForGenUser").fadeTo(1000, 0, function () {
            document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "hidden";
        });
    });
});
    
$(document).ready(function () {
    "use strict";
    $("#cancelImageAddEmp").click(function () {
        $("#genUserAddingEmp").fadeTo(1000, 0, function () {
            document.getElementById("genUserAddingEmp").style.visibility = "hidden";
        });
    });
});
    
    $(document).ready(function () {
    "use strict";
    $("#cancelImageTimeCard").click(function () {
        $("#gentimeCardFTPT").fadeTo(1000, 0, function () {
            document.getElementById("gentimeCardFTPT").style.visibility = "hidden";
        });
    });
});
    $(document).ready(function () {
    "use strict";
    $("#cancelImageEmpTypeAdmin").click(function () {
        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function () {
            document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
        });
    });
});
    

$(document).ready(function () {
    "use strict";
    $("#empMaintainence").click(function () {
        if(userAction=="reports")
        {
            hideReportsButton();
             hideAllAdminForms();
            showMaintainenceButtons();
        }
        else
        {
            if(userAction=="systemAdmin")
            {
                hideSystemButtons();
                 hideAllAdminForms();
                showMaintainenceButtons();
            }
            else
            {
                if(userAction=="search")
                {
                     hideAllAdminForms();
                    showMaintainenceButtons();
                }
            }
        }
        userAction ="maintainence";   
    });   
});
    
$(document).ready(function () {
    "use strict";
    $("#empReportsBtn").click(function () {
        
        if(userAction=="maintainence")
        {
            hideMaintaineneceButtons();
             hideAllAdminForms();
            showReportsButtons();
        }
        else
        {
            if(userAction=="search")
            {
                hideAllAdminForms();
                showReportsButtons();
            }
            else
            {
                if(userAction=="systemAdmin")
                {
                    hideSystemButtons();
                    hideAllAdminForms();
                    showReportsButtons();
                }
            }
        }
       
        
        userAction ="reports";
    });   
});
    
$(document).ready(function () {
    "use strict";
    $("#adminBtn").click(function () {
        
        if(userAction=="maintainence")
        {
            hideMaintaineneceButtons();
             hideAllAdminForms();
             showAdminSystemButtons();
        }
        else
        {
            if(userAction=="search")
            {
                hideAllAdminForms();
                showAdminSystemButtons();
            }
            else
            {
                if(userAction=="reports")
                {
                    hideReportsButton();
                     hideAllAdminForms();
                     showAdminSystemButtons();
                }
            }
        }
       
        userAction ="systemAdmin";
       
    });   
});  
    
$(document).ready(function () {
    "use strict";
    $("#searchBtn").click(function () {
        
        if(userAction=="maintainence")
        {
            hideMaintaineneceButtons();
        }
        else
        {
            if(userAction=="systemAdmin")
            {
                hideSystemButtons();
            }
            else
            {
                if(userAction=="reports")
                {
                    hideReportsButton();
                }
            }
        }
        hideAllAdminForms();
    
        userAction ="search";
        
        document.getElementById("userAction").innerHTML = "Search For an Employee";
        document.getElementById("searchDiv").style.visibility = "visible";
        $("#searchDiv").fadeTo(1000, 1);
    });
});     

    
$(document).ready(function () {
    "use strict";
    $("#empReportsBtnGen").click(function (){
        if(genUserAction == "maintainence")
        {
            genUserAction="reports";
            hideMaintainenceBtnsGen();
            showEmpReportsBtnsGen();
            hideAllGenForms();
        }
         if(genUserAction == "search")
        {
            genUserAction="reports";
            hideAllGenForms();
            showEmpReportsBtnsGen();
        }
       
    });
   
});
    
    
 $(document).ready(function () {
    "use strict";
    $("#empMaintainenceGen").click(function (){
        if(genUserAction == "reports")
        {
            genUserAction="maintainence";
            hideReportsBtnsGen();
            showMaintainenceBtnsGen();
            hideAllGenForms();
        }
        if(genUserAction == "search")
        {
            genUserAction="maintainence";
            hideAllGenForms();
            showMaintainenceBtnsGen();
        }
    });
});
    
 $(document).ready(function () {
    "use strict";
    $("#searchBtnGen").click(function (){ 
       clearSearchSpans();
        clearSearchFields();
         document.getElementById("searchResultDiv").style.visibility = "hidden";
        if(genUserAction == "reports")
        {
            hideReportsBtnsGen();
            hideAllGenForms();
        }
        
        else
        if(genUserAction == "maintainence")
        {   
            hideMaintainenceBtnsGen();
            hideAllGenForms();
            
        }
         document.getElementById("userAction").innerHTML = "Search For an Employee";
        document.getElementById("searchDiv").style.visibility = "visible";
        $("#searchDiv").fadeTo(1000, 1); 
        genUserAction="search";
        
       
    });
 });    
    
 $(document).ready(function () {
    "use strict";
    $("#seniorityReportGen").click(function (){ 
       
        if(reportType=="Weekly")
        {
            $("#reportsResult").empty();
        }
         reportType="Seniority";
         showReportDiv();
       
    });
 });
    
    
     $(document).ready(function () {
    "use strict";
    $("#weeklyHoursReportGen").click(function (){    
       //saveFileContent();
        
      
        if(reportType=="Seniority")
        {
            $("#reportsResult").empty();
        }
         reportType="Weekly";
          showReportDiv();
        
    });
 });
    $(document).ready(function () {
    "use strict";
    $("#generateReport").click(function (){ 
        //get the report from the server and show it in the div
       // //alert("generate report, USE reportsResult this div to show result");
        getSeniorityReport();
    });
});
    
function showReportDiv()
{
    document.getElementById("reportsDiv").style.visibility = "visible";
    $("#reportsDiv").fadeTo(1000, 1);
}
    
function hideAllGenForms()
{
    maintaineneceType="";
    if( document.getElementById("reportsDiv").style.visibility == "visible")
    {
        $("#reportsDiv").fadeTo(1000, 0, function () {
            document.getElementById("reportsDiv").style.visibility = "hidden";
        });   
    }
    if( document.getElementById("genUserAddingEmp").style.visibility == "visible")
    {
        $("#genUserAddingEmp").fadeTo(1000, 0, function () {
            document.getElementById("genUserAddingEmp").style.visibility = "hidden";
        });   
    }
    if( document.getElementById("selectEmpTypeDivForGenUser").style.visibility == "visible")
    {
        $("#selectEmpTypeDivForGenUser").fadeTo(1000, 0, function () {
            document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "hidden";
        });   
    }
     if( document.getElementById("searchDiv").style.visibility == "visible")
    {
        $("#searchDiv").fadeTo(1000, 0, function () {
            document.getElementById("searchDiv").style.visibility = "hidden";
        });   
    }
    if( document.getElementById("gentimeCardS").style.visibility == "visible")
    {
        $("#gentimeCardS").fadeTo(1000, 0, function () {
            document.getElementById("gentimeCardS").style.visibility = "hidden";
        });   
    }
     if( document.getElementById("gentimeCardFTPT").style.visibility == "visible")
    {
        $("#gentimeCardFTPT").fadeTo(1000, 0, function () {
            document.getElementById("gentimeCardFTPT").style.visibility = "hidden";
        });   
    }
}
    

function showEmpReportsBtnsGen()
{
    document.getElementById("seniorityReportGen").style.visibility = "visible";
    document.getElementById("weeklyHoursReportGen").style.visibility = "visible";
    $("#seniorityReportGen").animate(
        {
            width: "15%"
        },
        "slow"
    );
    $("#weeklyHoursReportGen").animate(
        {
            width: "15%"
        },
        "slow"
    );  
}
function showMaintainenceBtnsGen()
{
    document.getElementById("addEmp").style.visibility = "visible";
    document.getElementById("timeCardEmp").style.visibility = "visible";
    $("#addEmp").animate(
        {
            width: "15%"
        },
        "slow"
    );
    $("#timeCardEmp").animate(
        {
            width: "15%"
        },
        "slow"
    );  
}    
function showReportsButtons()
{
    document.getElementById("activeEmpReportAdmin").style.visibility = "visible";
    document.getElementById("inactiveEmpReportAdmin").style.visibility = "visible";
    document.getElementById("payrollReportAdmin").style.visibility = "visible";
    document.getElementById("seniorityReportAdmin").style.visibility = "visible";
    document.getElementById("weeklyHoursReportAdmin").style.visibility = "visible";
    $("#activeEmpReportAdmin").animate(
        {
            width: "15%"
        },
        "slow"
    );
    $("#inactiveEmpReportAdmin").animate(
        {
            width: "15%"
        },
        "slow"
    );
     $("#payrollReportAdmin").animate(
        {
            width: "15%"
        },
        "slow"
    );
     $("#seniorityReportAdmin").animate(
        {
            width: "15%"
        },
        "slow"
    );
     $("#weeklyHoursReportAdmin").animate(
        {
            width: "15%"
        },
        "slow"
    );   
}

function showMaintainenceButtons()
{
    document.getElementById("addEmpAdminUser").style.visibility = "visible";
    document.getElementById("modEmp").style.visibility = "visible";
   // document.getElementById("delEmp").style.visibility = "visible";
    //document.getElementById("timeCardEmpAdminUser").style.visibility = "visible";
    $("#addEmpAdminUser").animate(
        {
            width: "15%"
        },
        "slow"
    );
    $("#modEmp").animate(
        {
            width: "15%"
        },
        "slow"
    );
//     $("#delEmp").animate(
//        {
//            width: "15%"
//        },
//        "slow"
//    );
}

function showAdminSystemButtons()
{
    document.getElementById("adminCreateNewUser").style.visibility = "visible";
    document.getElementById("auditTable").style.visibility = "visible";
    document.getElementById("companyInformation").style.visibility = "visible";
   
    $("#adminCreateNewUser").animate(
        {
            width: "15%"
        },
        "slow"
    );
    $("#auditTable").animate(
        {
            width: "15%"
        },
        "slow"
    );
     $("#companyInformation").animate(
        {
            width: "15%"
        },
        "slow"
    );
}
    
function hideMaintainenceBtnsGen()
{
    // check which div is visible
    if( document.getElementById("addEmp").style.visibility == "visible")
    {
        $("#addEmp").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("addEmp").style.visibility = "hidden";
            }
        );
       $("#timeCardEmp").animate(
        {
            width: "0%"
        },
        600,
        function () {
            document.getElementById("timeCardEmp").style.visibility = "hidden";
        });
    }
}
    
function hideReportsBtnsGen()
{
    // check which div is visible
    if( document.getElementById("seniorityReportGen").style.visibility == "visible")
    {
        $("#seniorityReportGen").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("seniorityReportGen").style.visibility = "hidden";
            });
       $("#weeklyHoursReportGen").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("weeklyHoursReportGen").style.visibility = "hidden";
            });
    }    
}
    
    
function hideReportsButton()
{
      // check which div is visible
    if( document.getElementById("activeEmpReportAdmin").style.visibility == "visible")
    {
        $("#activeEmpReportAdmin").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("activeEmpReportAdmin").style.visibility = "hidden";
            }
        );
       $("#inactiveEmpReportAdmin").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("inactiveEmpReportAdmin").style.visibility = "hidden";
            }
       );
       $("#payrollReportAdmin").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("payrollReportAdmin").style.visibility = "hidden";
        });
        $("#seniorityReportAdmin").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("seniorityReportAdmin").style.visibility = "hidden";
        });
       $("#weeklyHoursReportAdmin").animate(
        {
            width: "0%"
        },
        600,
        function () {
            document.getElementById("weeklyHoursReportAdmin").style.visibility = "hidden";         
           // hideAllAdminForms();
        });
    }
}


    
function hideMaintaineneceButtons()
{
    // check which div is visible
    if( document.getElementById("addEmpAdminUser").style.visibility == "visible")
    {
        $("#addEmpAdminUser").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("addEmpAdminUser").style.visibility = "hidden";
            }
        );
       $("#modEmp").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("modEmp").style.visibility = "hidden";
            }
       );
//       $("#delEmp").animate(
//            {
//                width: "0%"
//            },
//            600,
//            function () {
//                document.getElementById("delEmp").style.visibility = "hidden";
//        });
    }
}
    
function hideSystemButtons()
{
        // check which div is visible
    if( document.getElementById("adminCreateNewUser").style.visibility == "visible")
    {
        $("#adminCreateNewUser").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("adminCreateNewUser").style.visibility = "hidden";
            }
        );
       $("#auditTable").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("auditTable").style.visibility = "hidden";
            }
       );
       $("#companyInformation").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("companyInformation").style.visibility = "hidden";
              //  hideAllAdminForms();
        });
    }
}
    
function hideAllAdminForms()
{
    maintaineneceType="";
    if(document.getElementById("selectEmpTypeDivForAdminUser").style.visibility == "visible")
    {
        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function () {
            document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
        });
    }
    if(document.getElementById("adminUserAddingFTEmp").style.visibility == "visible")
    {
        $("#adminUserAddingFTEmp").fadeTo(1000, 0, function () {
            document.getElementById("adminUserAddingFTEmp").style.visibility = "hidden";
        });
    }
     if(document.getElementById("adminUserAddingFTEmpAdd").style.visibility == "visible")
    {
        $("#adminUserAddingFTEmpAdd").fadeTo(1000, 0, function () {
            document.getElementById("adminUserAddingFTEmpAdd").style.visibility = "hidden";
        });
    }
    if(document.getElementById("adminUserAddingPTEmpAdd").style.visibility == "visible")
    {
        $("#adminUserAddingPTEmpAdd").fadeTo(1000, 0, function () {
            document.getElementById("adminUserAddingPTEmpAdd").style.visibility = "hidden";
        });
    }

    if(document.getElementById("adminUserAddingSEmpAdd").style.visibility == "visible")
    {
        $("#adminUserAddingSEmpAdd").fadeTo(1000, 0, function () {
            document.getElementById("adminUserAddingSEmpAdd").style.visibility = "hidden";
        });
    }

    if(document.getElementById("adminUserAddingCEmp").style.visibility == "visible")
    {
        $("#adminUserAddingCEmp").fadeTo(1000, 0, function () {
            document.getElementById("adminUserAddingCEmp").style.visibility = "hidden";
        });
    }
    if( document.getElementById("reportsDiv").style.visibility == "visible")
    {
        $("#reportsDiv").fadeTo(1000, 0, function () {
            document.getElementById("reportsDiv").style.visibility = "hidden";
        });   
    }
    if(document.getElementById("adminModifyingEmp").style.visibility == "visible")
    {
        $("#adminModifyingEmp").fadeTo(1000, 0, function () {
            document.getElementById("adminModifyingEmp").style.visibility = "hidden";
        });
    }
    if(document.getElementById("searchDiv").style.visibility == "visible")
    {
        $("#searchDiv").fadeTo(1000, 0, function () {
            document.getElementById("searchDiv").style.visibility = "hidden";
        });
    }
     if(document.getElementById("newUserForm").style.visibility == "visible")
    {
        $("#newUserForm").fadeTo(1000, 0, function () {
            document.getElementById("newUserForm").style.visibility = "hidden";
        });
    }
    
}
 

function goBack()
{
    if(document.getElementById("adminUserAddingFTEmpAdd").style.visibility == "visible")
    {
        $("#adminUserAddingFTEmpAdd").fadeTo(1000, 0, function () {
            document.getElementById("adminUserAddingFTEmpAdd").style.visibility = "hidden";
            document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
            $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
        });
    }
    else
    {
        if(document.getElementById("adminUserAddingPTEmpAdd").style.visibility == "visible")
        {
            $("#adminUserAddingPTEmpAdd").fadeTo(1000, 0, function () {
                document.getElementById("adminUserAddingPTEmpAdd").style.visibility = "hidden";
                document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
                $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
            });
        }
        else
        {
             if(document.getElementById("adminUserAddingSEmpAdd").style.visibility == "visible")
            {
                $("#adminUserAddingSEmpAdd").fadeTo(1000, 0, function () {
                    document.getElementById("adminUserAddingSEmpAdd").style.visibility = "hidden";
                    document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
                    $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
                });
            }
            else
            {
                if(document.getElementById("adminUserAddingCEmp").style.visibility == "visible")
                {
                    $("#adminUserAddingCEmp").fadeTo(1000, 0, function () {
                        document.getElementById("adminUserAddingCEmp").style.visibility = "hidden";
                        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
                        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
                    });
                }
            }
        }
    }
}
    
function cancelImage()
{
    if(document.getElementById("adminUserAddingFTEmpAdd").style.visibility == "visible")
    {
        $("#adminUserAddingFTEmpAdd").fadeTo(1000, 0, function () {
            document.getElementById("adminUserAddingFTEmpAdd").style.visibility = "hidden";
        });
    }
    else
    {
        if(document.getElementById("adminUserAddingPTEmpAdd").style.visibility == "visible")
        {
             $("#adminUserAddingPTEmpAdd").fadeTo(1000, 0, function () {
                document.getElementById("adminUserAddingPTEmpAdd").style.visibility = "hidden";
            });
        }
        else
        {
             if(document.getElementById("adminUserAddingSEmpAdd").style.visibility == "visible")
            {
                 $("#adminUserAddingSEmpAdd").fadeTo(1000, 0, function () {
                    document.getElementById("adminUserAddingSEmpAdd").style.visibility = "hidden";
                });
            }
            else
            {
                if(document.getElementById("adminUserAddingCEmp").style.visibility == "visible")
                {
                     $("#adminUserAddingCEmp").fadeTo(1000, 0, function () {
                        document.getElementById("adminUserAddingCEmp").style.visibility = "hidden";
                    });
                }
            }

        }
    }
}
    
//  $(document).ready(function () {
//    "use strict";
//    $("#btnsubmitCC").click(function (){
//        alert("sapra");
//        
//    });
//  });
    
    
    function submitContractAdminAdd()
    {
        alert("sfsf");
        emptyCAddEmpAdminSpans();
        //validate fields first
        if(validateAddEmpAdminC()=="true")
        {
            createJSONObjectCAddEmp("addEmployee");
        }
    }
    
    
function emptyCAddEmpAdminSpans()  
{
    
    document.getElementById("spanCAdminAddLname").innerHTML = "";
    document.getElementById("spanCdminAddCompany").innerHTML = "";
    document.getElementById("spanCAdminAddSin").innerHTML = "";
    document.getElementById("spanCAdminAddDob").innerHTML = "";
    document.getElementById("spanCAdminAddCSD").innerHTML = "";
    document.getElementById("spanCAdminAddCstopD").innerHTML = "";
    document.getElementById("spanCAdminAddAmount").innerHTML = "";
}
    
    
    
function validateAddEmpAdminC()
{
    var boolToSubmit="true";
    if(!checkLname(document.getElementById("lnameTextAdminC").value))
    {
        //show error message
        document.getElementById("spanCAdminAddFname").innerHTML = "*Invalid Data";
        boolToSubmit="false";
    } 
    if(!checkCompany(document.getElementById("compTextAdminC").value, "false"))
    {
        //show error message
        document.getElementById("spancAdminAddCompany").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkSin(document.getElementById("sinTextAdminC").value,"true"))
    {
       // //alert(document.getElementById("sinText").value);
        //show error message
        document.getElementById("spanCAdminAddSin").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkDateOfBirth(document.getElementById("dobTextAdminSinC").value))
    {
        //show error message
        document.getElementById("spanCAdminAddDob").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkDateOfHire(document.getElementById("csdTextAdminSinC").value))
    {
        //show error message
        document.getElementById("spanCAdminAddCSD").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkDateOfTermination(document.getElementById("cstopDTextAdminSinC").value))
    {
        //show error message
        document.getElementById("spanCAdminAddCstopD").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    }
    if(!checkSalary(document.getElementById("contractAmountTextAdminC").value))
    {
        //show error message
        document.getElementById("spanCAdminAddAmount").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    return boolToSubmit;
}
    
    function createJSONObjectCAddEmp(userAction)
    {
     var sendData = "";
       
        var lname = document.getElementById("lnameTextAdminC").value;
        var company = document.getElementById("compTextAdminC").value;
        var sin = document.getElementById("sinTextAdminC").value;
        var dob = document.getElementById("dobTextAdminC").value;
        var csd = document.getElementById("csdTextAdminC").value;
    var cstop = document.getElementById("cstopDTextAdminC").value;
     var amount = document.getElementById("contractAmontAdminC").value;
    
		sendData += makeUpJson("q",{"q":userAction},true);
		
		sendData += makeUpJson("UT",{"UT":userType});
		
		sendData += makeUpJson("ET",{"ET":employeeType});
		
//		sendData += makeUpJson("FN",{"FN":fname});
		
		sendData += makeUpJson("LN",{"LN":lname});
		
		sendData += makeUpJson("CM",{"CM":company});
		
		sendData += makeUpJson("SIN",{"SIN":sin});
		
		sendData += makeUpJson("DOB",{"DOB":dob});
		
		//sendData += makeUpJson("DOH",{"DOH":doh});
		
		//sendData += makeUpJson("DOT",{"DOT":dot});
		
	//	sendData += makeUpJson("HourlyRate",{"HourlyRate":hourly});
		
	////alert(sendData);
	 $.ajax({url: "Database.php",
							type: "GET",
							async:true,
							data : sendData,
							success:function(result)
							{
							
								////alert(result);
							},
							 error: function( objRequest )
							 {
								////alert(objRequest);
							 }
							
							});   
    }
    
    
function validatePTAdminAdd()
{
    
    var boolToSubmit="true";
     if(!checkFname(document.getElementById("fnameTextAdminPTAdd").value))
    {
        //show error message
        document.getElementById("spanPTAdminAddFname").innerHTML = "*Invalid Data";
        boolToSubmit="false";
    } 
    if(!checkLname(document.getElementById("lnameTextAdminPTAdd").value))
    {
        //show error message
        document.getElementById("spanPTAdminAddLname").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkCompany(document.getElementById("compTextAdminPTAdd").value, "false"))
    {
        //show error message
        document.getElementById("spanPTAdminAddCompany").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkSin(document.getElementById("sinTextAdminPTAdd").value,"true"))
    {
       // //alert(document.getElementById("sinText").value);
        //show error message
        document.getElementById("spanPTAdminAddSin").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkDateOfBirth(document.getElementById("dobTextAdminPTAdd").value))
    {
        //show error message
        document.getElementById("spanPTAdminAddDob").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkDateOfHire(document.getElementById("dohTextAdminPTAdd").value))
    {
        //show error message
        document.getElementById("spanPTAdminAddDoh").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkDateOfTermination(document.getElementById("dotTextAdminPTAdd").value))
    {
        //show error message
        document.getElementById("spanPTAdminAddDot").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("hourlyRatePTAdd").value))
    {
        //show error message
        document.getElementById("spanPTAdminAddHourlyRate").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
   
    return boolToSubmit;
}
function submitAdminContractEmp()
{
    //start the validation

    //if no errors then goto this page
    location.href = "Database.php";
}

function submitAdminPartTimeEmp()
{
 
    emptyAllPTAdminSpans();
    //start the validation
    if(validatePTAdminAdd()=="true")
    {
        
        createJSONObjectAdminAddPT("addEmployee");
    }
}
    function emptyAllPTAdminSpans()
    {
        document.getElementById("spanPTAdminAddFname").innerHTML = "";
        document.getElementById("spanPTAdminAddLname").innerHTML = "";
        document.getElementById("spanPTAdminAddCompany").innerHTML = "";
        document.getElementById("spanPTAdminAddSin").innerHTML = "";
        document.getElementById("spanPTAdminAddDob").innerHTML = "";
        document.getElementById("spanPTAdminAddDot").innerHTML = "";
        document.getElementById("spanPTAdminAddDoh").innerHTML = "";
        document.getElementById("spanPTAdminAddHourlyRate").innerHTML = "";
    }
    
function createJSONObjectAdminAddPT(userAction)
{
        var sendData = "";
        var fname = document.getElementById("fnameTextAdminPTAdd").value;
        var lname = document.getElementById("lnameTextAdminPTAdd").value;
        var company = document.getElementById("compTextAdminPTAdd").value;
        var sin = document.getElementById("sinTextAdminPTAdd").value;
        var dob = document.getElementById("dobTextAdminPTAdd").value;
        var doh = document.getElementById("dohTextAdminPTAdd").value;
    var dot = document.getElementById("dotTextAdminPTAdd").value;
     var hourly = document.getElementById("hourlyRatePTAdd").value;
    
		sendData += makeUpJson("q",{"q":userAction},true);
		
		sendData += makeUpJson("UT",{"UT":userType});
		
		sendData += makeUpJson("ET",{"ET":employeeType});
		
		sendData += makeUpJson("FN",{"FN":fname});
		
		sendData += makeUpJson("LN",{"LN":lname});
		
		sendData += makeUpJson("CM",{"CM":company});
		
		sendData += makeUpJson("SIN",{"SIN":sin});
		
		sendData += makeUpJson("DOB",{"DOB":dob});
		
		sendData += makeUpJson("DOH",{"DOH":doh});
		
		sendData += makeUpJson("DOT",{"DOT":dot});
		
		sendData += makeUpJson("HourlyRate",{"HourlyRate":hourly});
		
	////alert(sendData);
	 $.ajax({url: "Database.php",
							type: "GET",
							async:true,
							data : sendData,
							success:function(result)
							{
							
								////alert(result);
							},
							 error: function( objRequest )
							 {
								////alert(objRequest);
							 }
							
							});
}
function submitAdminSeasonEmp()
{
    emptySpanSAdminAdd();
   //start the validation
    if(validateAdminEmpS()=="true")
    {
           //if no errors then goto this page
        createJSONObjectSAddEmpAdmin();
    }
}
function emptySpanSAdminAdd()
{
    document.getElementById("spanSAdminAddFname").innerHTML = "";
    document.getElementById("spanSAdminAddLname").innerHTML = "";
    document.getElementById("spanSAdminAddCompany").innerHTML = "";
    document.getElementById("spanSAdminAddSin").innerHTML = "";
    document.getElementById("spanSAdminAddDob").innerHTML = "";
    document.getElementById("spanSAdminAddSeason").innerHTML = "";
    document.getElementById("spanSAdminAddSeasonYear").innerHTML = "";
    document.getElementById("spanSAdminAddPiecePay").innerHTML = "";
}
function  validateAdminEmpS()
{
    var boolToSubmit = "true";

    if(!checkFname(document.getElementById("fnameTextAdminS").value))
    {
        //show error message
        document.getElementById("spanSAdminAddFname").innerHTML = "*Invalid Data";
        boolToSubmit="false";
    } 
    if(!checkLname(document.getElementById("lnameTextAdminS").value))
    {
        //show error message
        document.getElementById("spanSAdminAddLname").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkCompany(document.getElementById("compTextAdminS").value, "true"))
    {
        //show error message
        document.getElementById("spanSAdminAddCompany").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkSin(document.getElementById("sinTextAdminS").value,"true"))
    {
       // //alert(document.getElementById("sinText").value);
        //show error message
        document.getElementById("spanSAdminAddSin").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkDateOfBirth(document.getElementById("dobTextAdminS").value))
    {
        //show error message
        document.getElementById("spanSAdminAddDob").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(document.getElementById("seasonTypeDDAdminS").selectedIndex == 0)
    {
        //show error message
        document.getElementById("spanSAdminAddSeason").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkSeasonYear(document.getElementById("seasonYearTextAdminS").value))
    {
        //show error message
        document.getElementById("spanSAdminAddSeasonYear").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("piecePayTextAdminS").value))
    {
        //show error message
        document.getElementById("spanSAdminAddPiecePay").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    return boolToSubmit;
}
    
function createJSONObjectSAddEmpAdmin()
{
        var sendData = "";
        var fname = document.getElementById("fnameTextAdminS").value;
        var lname = document.getElementById("lnameTextAdminS").value;
        var company = document.getElementById("compTextAdminS").value;
        var sin = document.getElementById("sinTextAdminS").value;
        var dob = document.getElementById("dobTextAdminS").value;
        var piecePay = document.getElementById("piecePayTextAdminS").value;
        var seasonYear = document.getElementById("seasonYearTextAdminS").value;
        var season = document.getElementById("seasonTypeDDAdminS").value;
    
		sendData += makeUpJson("q",{"q":userAction},true);
		
		sendData += makeUpJson("UT",{"UT":userType});
		
		sendData += makeUpJson("ET",{"ET":employeeType});
		
		sendData += makeUpJson("FN",{"FN":fname});
		
		sendData += makeUpJson("LN",{"LN":lname});
		
		sendData += makeUpJson("CM",{"CM":company});
		
		sendData += makeUpJson("SIN",{"SIN":sin});
		
		sendData += makeUpJson("DOB",{"DOB":dob});
		
		sendData += makeUpJson("PP",{"PP":piecePay});
		
		sendData += makeUpJson("SY",{"SY":seasonYear});
        sendData += makeUpJson("S",{"S":season});
		
		//sendData += makeUpJson("HourlyRate",{"HourlyRate":hourly});
		
	////alert(sendData);
	 $.ajax({url: "Database.php",
							type: "GET",
							async:true,
							data : sendData,
							success:function(result)
							{
							
								//alert(result);
							},
							 error: function( objRequest )
							 {
								//alert(objRequest);
							 }
							
							});
}
    
function submitTimeCardForFTPT()
{

    emptyAllTCSpanValues();
  
    //check the validation
    if(genUserEmpType=="FT")
    {
        if(validateTCFromFTPT()=="true")
        {
            createJSONObjectTimeCardGen("enterTimeCard","FT");
        }
    }
    if(genUserEmpType=="PT")
    {
        if(validateTCFromFTPT()=="true")
        {
            createJSONObjectTimeCardGen("enterTimeCard","PT");
        }
    }
}

function submitTimeCardForS()
{
    emptyAllTCGenSpansS();
    
    //validate the fields
    if(validateTCForS()=="true")
    {
       createJSONObjectTimeCardGenS("enterTimeCard","SN");
    }
}
    
function emptyAllTCGenSpansS()
{
    document.getElementById("sinGenSpanS").innerHTML = "";
    document.getElementById("compGenSpanS").innerHTML = "";
    document.getElementById("monGenSpanS").innerHTML = "";
    document.getElementById("tueGenSpanS").innerHTML = "";
    document.getElementById("wedGenSpanS").innerHTML = "";
    document.getElementById("thurGenSpanS").innerHTML = "";
    document.getElementById("friGenSpanS").innerHTML = "";
    document.getElementById("satGenSpanS").innerHTML = "";
    document.getElementById("sunGenSpanS").innerHTML = "";
    
    document.getElementById("monPSpanS").innerHTML = "";
    document.getElementById("tuePSpanS").innerHTML = "";
    document.getElementById("wedPSpanS").innerHTML = "";
    document.getElementById("thurPSpanS").innerHTML = "";
    document.getElementById("friPSpanS").innerHTML = "";
    document.getElementById("satPSpanS").innerHTML = "";
    document.getElementById("sunPSpanS").innerHTML = "";
    
}
    
function validateTCForS()
{
    var boolToSubmit = "true";

    if(!checkSin(document.getElementById("sinTextGenTCS").value,"true"))
    {
        //show error message
        document.getElementById("sinGenSpanS").innerHTML = "*Invalid Data";
        boolToSubmit="false";
    } 
    if(!checkCompany(document.getElementById("companyTextGenTCS").value,"true"))
    {
        //show error message
        document.getElementById("compGenSpanS").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("monTextTCS").value))
    {
        //show error message
        document.getElementById("monGenSpanS").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("tueTextTCS").value))
    {
        //show error message
        document.getElementById("tueGenSpanS").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("wedTextTCS").value))
    {
        //show error message
        document.getElementById("wedGenSpanS").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("thurTextTCS").value))
    {
        //show error message
        document.getElementById("thurGenSpanS").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("friTextTCS").value))
    {
        //show error message
        document.getElementById("friGenSpanS").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("satTextTCS").value))
    {
        //show error message
        document.getElementById("satGenSpanS").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("sunTextTCS").value))
    {
        //show error message
        document.getElementById("sunGenSpanS").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    
//    validating pieces
    if(!checkHours(document.getElementById("monPieces").value))
    {
        //show error message
        document.getElementById("monPSpanS").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("tuePieces").value))
    {
        //show error message
        document.getElementById("tuePSpanS").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("wedPieces").value))
    {
        //show error message
        document.getElementById("wedPSpanS").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("thurPieces").value))
    {
        //show error message
        document.getElementById("thurPSpanS").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("friPieces").value))
    {
        //show error message
        document.getElementById("friPSpanS").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("satPieces").value))
    {
        //show error message
        document.getElementById("satPSpanS").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("sunPieces").value))
    {
        //show error message
        document.getElementById("sunPSpanS").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    
    return boolToSubmit;
}   
    
function validateGenAddForm(seasonal)
{
    var boolToSubmit = "true";

    if(!checkFname(document.getElementById("fnameText").value))
    {
        //show error message
        document.getElementById("fnameGenSpan").innerHTML = "*Invalid Data";
        boolToSubmit="false";
    } 
if(!checkLname(document.getElementById("lnameText").value))
    {
        //show error message
        document.getElementById("lnameGenSpan").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkCompany(document.getElementById("compText").value, "false"))
    {
        //show error message
        document.getElementById("companyGenSpan").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkSin(document.getElementById("sinText").value,"false"))
    {
       // alert(document.getElementById("sinText").value);
        //show error message
        document.getElementById("sinGenSpan").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkDateOfBirth(document.getElementById("dobText").value))
    {
        //show error message
        document.getElementById("dobGenSpan").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkDateOfHire(document.getElementById("dohText").value))
    {
        //show error message
        document.getElementById("dohGenSpan").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(seasonal=="true")
    {
        if(!checkSeasonYear(document.getElementById("seasonYearText").value))
        {
            //alert(document.getElementById("seasonYearText").value);
            //show error message
            document.getElementById("seasonYearGenSpan").innerHTML = "*Invalid Data";
             boolToSubmit="false";
        }
    }
    return boolToSubmit;
}

function validateTCFromFTPT()
{
    var boolToSubmit="true";
    if(!checkSin(document.getElementById("sinTextGenTC").value ,"true"))
    {
        //show error message
        document.getElementById("sinTCGenSpan").innerHTML = "*Invalid Data";
        boolToSubmit="false";
    } 
    if(!checkCompany(document.getElementById("companyTextGenTC").value ,"true"))
    {
        //show error message
        document.getElementById("compTCGenSpan").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("monTextTC").value))
    {
        //show error message
        document.getElementById("monGenSpan").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("tueTextTC").value))
    {
        //show error message
        document.getElementById("tueGenSpan").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("wedTextTC").value))
    {
        //show error message
        document.getElementById("wedGenSpan").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkHours(document.getElementById("thurTextTC").value))
    {
        //show error message
        document.getElementById("thurGenSpan").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    }
     if(!checkHours(document.getElementById("friTextTC").value))
    {
        //show error message
        document.getElementById("friGenSpan").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
     if(!checkHours(document.getElementById("satTextTC").value))
    {
        //show error message
        document.getElementById("satGenSpan").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
     if(!checkHours(document.getElementById("sunTextTC").value))
    {
        //show error message
        document.getElementById("sunGenSpan").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    return boolToSubmit;
}    
function submitGenEmp()
{
    //var boolToSubmit="true";
    
    //empty all spans
    emptyAllSpanValues();
    
    if(genUserEmpType=="FT")
    {
        //check whether all validation succeeded or not
        if(validateGenAddForm("false") =="true")
        {
            //create a json object 
            createJSONObjectAddEmp("addEmployee",genUserEmpType,"G");
        }
    }
    else
    {
        if(genUserEmpType=="PT")
        {
            //check whether all validation succeeded or not
            if(validateGenAddForm("false") =="true")
            {
                //create a json object 
                createJSONObjectAddEmp("addEmployee",genUserEmpType,"G");
            }
        }
        else
        {
            if(genUserEmpType=="ST")
            {
               //check whether all validation succeeded or not
                if(validateGenAddForm("true") =="true")
                {
                    //alert("done");
                    //create a json object 
                    createJSONObjectAddEmp("addEmployee","SN","G");
                } 
            }
        }
    }
   
}
function emptyAllSpanValues()
{
        document.getElementById("fnameGenSpan").innerHTML = "";
        document.getElementById("lnameGenSpan").innerHTML = "";
        document.getElementById("companyGenSpan").innerHTML = "";
        document.getElementById("sinGenSpan").innerHTML = "";
        document.getElementById("dobGenSpan").innerHTML = "";
        document.getElementById("dohGenSpan").innerHTML = "";
        document.getElementById("seasonYearGenSpan").innerHTML = "";
         document.getElementById("seasonGenSpan").innerHTML = ""
}
function emptyAllTCSpanValues()
{
        document.getElementById("sinTCGenSpan").innerHTML = "";
        document.getElementById("compTCGenSpan").innerHTML = "";
        document.getElementById("monGenSpan").innerHTML = "";
        document.getElementById("tueGenSpan").innerHTML = "";
        document.getElementById("wedGenSpan").innerHTML = "";
        document.getElementById("thurGenSpan").innerHTML = "";
        document.getElementById("friGenSpan").innerHTML = "";
        document.getElementById("satGenSpan").innerHTML = "";
        document.getElementById("sunGenSpan").innerHTML = "";
}
function createJSONObjectAddEmp(userAction,empType,userType)
{
		var sendData = "";
    var fname = document.getElementById("fnameText").value;
     var lname = document.getElementById("lnameText").value;
     var company = document.getElementById("compText").value;
     var sin = document.getElementById("sinText").value;
     var dob = document.getElementById("dobText").value;
     var doh = document.getElementById("dohText").value;
		sendData += makeUpJson("q",{"q":userAction},true);
		
		sendData += makeUpJson("UT",{"UT":userType});
		
		sendData += makeUpJson("ET",{"ET":empType});
		
		sendData += makeUpJson("FN",{"FN":fname});
		
		sendData += makeUpJson("LN",{"LN":lname});
		
		sendData += makeUpJson("CM",{"CM":company});
		
		sendData += makeUpJson("SIN",{"SIN":sin});
		
		sendData += makeUpJson("DOB",{"DOB":dob});
		
		sendData += makeUpJson("DOH",{"DOH":doh});
		
		sendData += makeUpJson("DOT",{"DOT":"20101010"});
		
		sendData += makeUpJson("Salary",{"Salary":"90000"});
		
	//alert(sendData);
	 $.ajax({url: "Database.php",
							type: "GET",
							async:true,
							data : sendData,
							success:function(result)
							{
							
								//alert(result);
							},
							 error: function( objRequest )
							 {
								//alert(objRequest);
							 }
							
							});
}
    
//$(document).ready(function () {
//    "use strict";
//    $("#submitAdminFullTimeEmp").click(function () {    
//        submitAddFTEmpAdmin();
//    });
//});
    
function submitAdminFullTimeEmp()
{
    //empty all spans
    emptyAllAdminSpansAdd();
    //validate data
    if(validateFTAdminAddEmp()=="true")
    { 
        //submit data
        createJSONObjectAddEmpAdmin("addEmployee");
    }
}
function emptyAllAdminSpansAdd()
{
    document.getElementById("spanFTAdminAddFname").innerHTML = "";
    document.getElementById("spanFTAdminAddLname").innerHTML = "";
    document.getElementById("spanFTAdminAddCompany").innerHTML = "";
    document.getElementById("spanFTAdminAddSin").innerHTML = "";
    document.getElementById("spanFTAdminAddDob").innerHTML = "";
    document.getElementById("spanFTAdminAddDot").innerHTML = "";
    document.getElementById("spanFTAdminAddDoh").innerHTML = "";
    document.getElementById("spanFTAdminAddSalary").innerHTML = ""
}
    
function validateFTAdminAddEmp()
{
    var boolToSubmit = "true";

    if(!checkFname(document.getElementById("fnameTextAdminAdd").value))
    {
        //show error message
        document.getElementById("spanFTAdminAddFname").innerHTML = "*Invalid Data";
        boolToSubmit="false";
    } 
    if(!checkLname(document.getElementById("lnameTextAdminAdd").value))
    {
        //show error message
        document.getElementById("spanFTAdminAddLname").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkCompany(document.getElementById("compTextAdminAdd").value, "false"))
    {
        //show error message
        document.getElementById("spanFTAdminAddCompany").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkSin(document.getElementById("sinTextAdminAdd").value,"true"))
    {
       // alert(document.getElementById("sinText").value);
        //show error message
        document.getElementById("spanFTAdminAddSin").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkDateOfBirth(document.getElementById("dobTextAdminAdd").value))
    {
        //show error message
        document.getElementById("spanFTAdminAddDob").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkDateOfHire(document.getElementById("dohTextAdminAdd").value))
    {
        //show error message
        document.getElementById("spanFTAdminAddDoh").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkDateOfTermination(document.getElementById("dotTextAdminAdd").value))
    {
        //show error message
        document.getElementById("spanFTAdminAddDot").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkSalary(document.getElementById("salaryAdd").value))
    {
        //show error message
        document.getElementById("spanFTAdminAddSalary").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
   
    return boolToSubmit;
}
    
function createJSONObjectAddEmpAdmin(userAction)
{
        var sendData = "";
        var fname = document.getElementById("fnameTextAdminAdd").value;
        var lname = document.getElementById("lnameTextAdminAdd").value;
        var company = document.getElementById("compTextAdminAdd").value;
        var sin = document.getElementById("sinTextAdminAdd").value;
        var dob = document.getElementById("dobTextAdminAdd").value;
        var doh = document.getElementById("dohTextAdminAdd").value;
    var dot = document.getElementById("dotTextAdminAdd").value;
     var salary = document.getElementById("salaryAdd").value;
    
		sendData += makeUpJson("q",{"q":userAction},true);
		
		sendData += makeUpJson("UT",{"UT":userType});
		
		sendData += makeUpJson("ET",{"ET":employeeType});
		
		sendData += makeUpJson("FN",{"FN":fname});
		
		sendData += makeUpJson("LN",{"LN":lname});
		
		sendData += makeUpJson("CM",{"CM":company});
		
		sendData += makeUpJson("SIN",{"SIN":sin});
		
		sendData += makeUpJson("DOB",{"DOB":dob});
		
		sendData += makeUpJson("DOH",{"DOH":doh});
		
		sendData += makeUpJson("DOT",{"DOT":dot});
		
		sendData += makeUpJson("Salary",{"Salary":salary});
		
	//alert(sendData);
	 $.ajax({url: "Database.php",
							type: "GET",
							async:true,
							data : sendData,
							success:function(result)
							{
							
								//alert(result);
							},
							 error: function( objRequest )
							 {
								//alert(objRequest);
							 }
							
							});
}
    function createJSONObjectTimeCardGenS(userAction,empType)
{
   // alert("submit time card for ft and pt");
	 
		//var value = "enterTimeCard";
		var sendData = "";
	    var sin = document.getElementById("sinTextGenTCS").value;
        var comp = document.getElementById("companyTextGenTCS").value;
        var mon = document.getElementById("monTextTCS").value;
        var tue = document.getElementById("tueTextTCS").value;
        var wed = document.getElementById("wedTextTCS").value;
        var thur = document.getElementById("thurTextTCS").value; 
        var fri = document.getElementById("friTextTCS").value;
        var sat = document.getElementById("satTextTCS").value;
        var sun = document.getElementById("sunTextTCS").value; 
    
		sendData += makeUpJson("q",{"q":userAction},true);
        sendData += makeUpJson("ET",{"ET":empType});
		sendData += makeUpJson("SIN",{"SIN":sin});
		
		sendData += makeUpJson("CM",{"CM":comp});
		sendData += makeUpJson("MH",{"MH":mon});
		sendData += makeUpJson("TH",{"TH":tue});
		
		sendData += makeUpJson("WH",{"WH":wed});
		
		sendData += makeUpJson("THH",{"THH":thur});
		
		sendData += makeUpJson("FH",{"FH":fri});
		
		sendData += makeUpJson("SAH",{"SAH":sat});
		
		sendData += makeUpJson("SUNH",{"SUNH":sun});
        
        var sum = sumAllPieces();
    
        sendData += makeUpJson("WA",{"WA":sum});
		
	   $.ajax({url: "Database.php",
							type: "GET",
							async:true,
							data : sendData,
							success:function(result)
							{
							//alert(result);
								var values = [];
								values = makeItAnObject(result);
								var len= values.length;
								for(var i = 0; i< len; i++)
								{
									//alert(values[i]);
								}
							},
							 error: function( objRequest )
							 {
								//alert(objRequest);
							 }
							
							});
}  
function createJSONObjectTimeCardGen(userAction,empType)
{
   // alert("submit time card for ft and pt");
	 
		//var value = "enterTimeCard";
		var sendData = "";
	    var sin = document.getElementById("sinTextGenTC").value;
        var comp = document.getElementById("companyTextGenTC").value;
        var mon = document.getElementById("monTextTC").value;
        var tue = document.getElementById("tueTextTC").value;
        var wed = document.getElementById("wedTextTC").value;
        var thur = document.getElementById("thurTextTC").value; 
        var fri = document.getElementById("friTextTC").value;
        var sat = document.getElementById("satTextTC").value;
        var sun = document.getElementById("sunTextTC").value; 
    
		sendData += makeUpJson("q",{"q":userAction},true);
        sendData += makeUpJson("ET",{"ET":empType});
		sendData += makeUpJson("SIN",{"SIN":sin});
		
		sendData += makeUpJson("CM",{"CM":comp});
		sendData += makeUpJson("MH",{"MH":mon});
		sendData += makeUpJson("TH",{"TH":tue});
		
		sendData += makeUpJson("WH",{"WH":wed});
		
		sendData += makeUpJson("THH",{"THH":thur});
		
		sendData += makeUpJson("FH",{"FH":fri});
		
		sendData += makeUpJson("SAH",{"SAH":sat});
		
		sendData += makeUpJson("SUNH",{"SUNH":sun});
        
        var sum = sumAllPieces();
    
        sendData += makeUpJson("WA",{"WA":sum});
		
	   $.ajax({url: "Database.php",
							type: "GET",
							async:true,
							data : sendData,
							success:function(result)
							{
							//alert(result);
								var values = [];
								values = makeItAnObject(result);
								var len= values.length;
								for(var i = 0; i< len; i++)
								{
									//alert(values[i]);
								}
							},
							 error: function( objRequest )
							 {
								//alert(objRequest);
							 }
							
							});
}    
    
function makeItAnObject(jsonvalue)
      {
        var jsonObj;
        var keys = []; 		// array to hold the JSON keys
        var subKeys = [];
        var values = [];
        var haveSubElements;

        var jsonString = jsonvalue;		// what did the user enter?
	  
	  // use eval() to translate (parse) the string into an object
	  jsonObj = eval("(" + jsonString + ")");

	  // now walk through the JSON object and print out the key/value pairs

	  haveSubElements = false;
	  for (var key in jsonObj)
	  {
	    keys.push(key);		// make a list of the highest level items in the JSON object

	    if(typeof jsonObj[key] === 'object')	// check if the value for this key value is itself an object - meaning that there is more to the hierarchy of the JSON object
	    {
	       haveSubElements = true;
	       for (var subElement in jsonObj[key])
	       {
 	         for (var subKey in jsonObj[key][subElement])
	         {
                 if(subElement == 0) subKeys.push(subKey);
                 values.push(jsonObj[key][subElement][subKey]);
               }
	       }
	    }
	    else
	    {
	      values.push(jsonObj[key]);
	    }
	  }

      return values;
      }     

function sumAllPieces()
{
    var totalPieces = 0;
    totalPieces += parseInt(document.getElementById("monPieces").value) * parseInt(document.getElementById("monTextTCS").value);
    totalPieces += parseInt(document.getElementById("tuePieces").value) * parseInt(document.getElementById("tueTextTCS").value);
    totalPieces += parseInt(document.getElementById("wedPieces").value) * parseInt(document.getElementById("wedTextTCS").value);
    totalPieces += parseInt(document.getElementById("thurPieces").value) * parseInt(document.getElementById("thurTextTCS").value); 
    totalPieces += parseInt(document.getElementById("friPieces").value) * parseInt(document.getElementById("friTextTCS").value);
    totalPieces += parseInt(document.getElementById("satPieces").value) * parseInt(document.getElementById("satTextTCS").value);
    totalPieces += parseInt(document.getElementById("sunPieces").value) * parseInt(document.getElementById("sunTextTCS").value);

    return totalPieces;
}
    
function goBackTimeCardS()
{
     if(document.getElementById("gentimeCardS").style.visibility == "visible")
        {
            $("#gentimeCardS").fadeTo(1000, 0, function () {
            document.getElementById("gentimeCardS").style.visibility = "hidden";
            document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "visible";
            $("#selectEmpTypeDivForGenUser").fadeTo(1000, 1);
               emptyAllTCGenSpansS();
            });
        }
}
    
//validation for first name
function checkFname(inputValue)
{
	var bName = false;
	if(userType == "A")
	{
		
		var pattAd = /^[a-zA-Z'.]{1,40}$/;
		//var nameCheckAd = inputValue;
		
		if(inputValue != null && inputValue != "" && inputValue.match(pattAd) != null)
		{
			bName = true;
		}
		/*else
		{
			if(inputValue.match(pattAd) == null)
			{
				bName = false;
			}
		}*/
	}
	else
	{
		var number = /[\d+]/;
		var pattGe = /[a-zA-Z-`\s]{1,40}/;
		if(inputValue == null || inputValue == "" || inputValue.match(pattGe) != null)
		{
			if(inputValue.match(number) == null)
			{
				bName = true;
			}
		}
	}
	
	return bName;
}
//validation for last name
function checkLname(inputValue)
{
	var bName = false;
	if(userType == "A")
	{
		
		var pattAd = /^[a-zA-Z'.]{1,40}$/;
		//var nameCheckAd = inputValue;
		
		if(inputValue != null && inputValue != "" && inputValue.match(pattAd) != null)
		{
			bName = true;
		}
		/*else
		{
			if(inputValue.match(pattAd) == null)
			{
				bName = false;
			}
		}*/
	}
	else
	{
		var number = /[\d+]/;
		var pattGe = /[a-zA-Z-`\s]{1,40}/;
		if(inputValue == null || inputValue == "" || inputValue.match(pattGe) != null)
		{
			if(inputValue.match(number) == null)
			{
				bName = true;
			}
		}
	}
	
	return bName;
}   
//validation for comapny
function checkCompany(inputValue,boolTimeCard)
{


	var bCompany = true;
	if(userType == "A" || boolTimeCard =="true")
	{
		if(inputValue == null || inputValue == "")
		{
			bCompany = false;
		}
	}
	else
	{
		bCompany = true;
	}

	
	return bCompany;
}   
    

function checkDateOfHire(value)
{
	var bDate  = false;
	//var dateReg = /^\d{4}-\d{2}-\d{2}$/;
	var dateReg = /^\d{4}-\d{2}-\d{2}|^\d{4}-\d{1}-\d{1}|^\d{4}-\d{1}-\d{2}|^\d{4}-\d{2}-\d{1}$/;
	
	if(userType == "A")
	{
		if(value != null && value != "" && value.match(dateReg) != null)
		{
			var regs = value.split("-");
			var yyyy = parseInt(regs[0]);
			var mm = parseInt(regs[1]);
			var dd = parseInt(regs[2]);
			hYYYY = yyyy;
			hMM = mm;
			hDD = dd;
			if(yyyy >= 1902 && yyyy <= (new Date().getFullYear()) && mm >= 1 && mm <= 12 && dd >= 1 && dd <= 31 && compareBirthdayAndHireDay(bYYYY, yyyy) == true)
			{
				bDate = true;
				if(mm == 2 && dd >28)
				{
					bDate = false;
				}
			}
		}
	}
	else
	{
		if(value == null || value == "" || value == "0") 
		{
			bDate = true;
		}
		if(value.match(dateReg) != null)
		{
			var regs = value.split("-");
			var yyyy = parseInt(regs[0]);
			var mm = parseInt(regs[1]);
			var dd = parseInt(regs[2]);
			hYYYY = yyyy;
			
			if(yyyy >= 1902 && yyyy <= (new Date().getFullYear()) && mm >= 1 && mm <= 12 && dd >= 1 && dd <= 31 && compareBirthdayAndHireDay(bYYYY, yyyy) == true) 
			{
				bDate = true;
				if(mm == 2 && dd > 28)
				{
					bDate = false;
				}
				
			}
		}
	}
	return bDate;
}
//validaiton for date of birth
var bYYYY;
function checkDateOfBirth(value)
{
	var bDate  = false;
	var dateRegFormat = /^\d{4}-\d{2}-\d{2}|^\d{4}-\d{1}-\d{1}|^\d{4}-\d{1}-\d{2}|^\d{4}-\d{2}-\d{1}$/;
	if(userType == "A")
	{
		
		if(value != null && value != "" && value.match(dateRegFormat) != null)
		{
			var regs = value.split("-");
			var yyyy = parseInt(regs[0]);
			var mm = parseInt(regs[1]);
			var dd = parseInt(regs[2]);
			bYYYY = yyyy;
			
			if(yyyy >= 1902 && yyyy <= (new Date().getFullYear()) && mm >= 1 && mm <= 12 && dd >= 1 && dd <= 31) 
			{
				bDate = true;
				if(mm == 2 && dd > 28)
				{
					bDate = false;
				}
				
			}
			
		}
	}
	else
	{
		if(value == null || value == "" || value == "0") 
		{
			bDate = true;
		}
		if(value.match(dateRegFormat) != null)  //this check for real, actual valid date for general user
		{
			var regs = value.split("-");
			var yyyy = parseInt(regs[0]);
			var mm = parseInt(regs[1]);
			var dd = parseInt(regs[2]);
			bYYYY = yyyy;
			
			if(yyyy >= 1902 && yyyy <= (new Date().getFullYear()) && mm >= 1 && mm <= 12 && dd >= 1 && dd <= 31) 
			{
				bDate = true;
				if(mm == 2 && dd > 28)
				{
					bDate = false;
				}
				
			}
		}
	}
	
	return bDate;	
}
    
//validaiton for date of termination
function checkDateOfTermination(value)
{
	var bDate  = false;
	//var dateReg = /^\d{4}-\d{2}-\d{2}$/;
	var dateReg = /^\d{4}-\d{2}-\d{2}|^\d{4}-\d{1}-\d{1}|^\d{4}-\d{1}-\d{2}|^\d{4}-\d{2}-\d{1}$/;
	if(userType == "A")
	{
		
		if(value != null && value != "" && value.match(dateReg) != null)
		{
			var regs = value.split("-");
			var yyyy = parseInt(regs[0]);
			var mm = parseInt(regs[1]);
			var dd = parseInt(regs[2]);
			bYYYY = yyyy;
			if(yyyy >= 1902 && yyyy <= (new Date().getFullYear()) && mm >= 1 && mm <= 12 && dd >= 1 && dd <= 31 && compareHireDayandTermination(hYYYY, hMM, hDD, yyyy, mm, dd) == true)
			{
				bDate = true;
				if (mm == 2 && dd >28)
				{
					bDate = false;
				}
			}
		}
	}
	else
	{
		if(value == null || value == "" || value == "0" || value == "N/A") 
		{
			bDate = true;
		}
		if(value.match(dateReg) != null)
		{
			var regs = value.split("-");
			var yyyy = parseInt(regs[0]);
			var mm = parseInt(regs[1]);
			var dd = parseInt(regs[2]);
			bYYYY = yyyy;
			
			if(yyyy >= 1902 && yyyy <= (new Date().getFullYear()) && mm >= 1 && mm <= 12 && dd >= 1 && dd <= 31) 
			{
				bDate = true;
				if(mm == 2 && dd > 28)
				{
					bDate = false;
				}
				
			}
		}
	}
	return bDate;
}    
    
//validation for salary
function checkSalary(value)
{
	var bSalary = false;
	if(userType == "A")
	{
		if(value > 0 && value != null && value != "")
		{
            
			bSalary = true;
		}		
	}
	else
	{
		if(value >= 0 && value != null && value != "")
		{
			bSalary = true;
		}
	}
	return bSalary;
}    

//compare birthday with hire day
//for now, I didn't add work type(fulltime and seasonal 18+) (parttime 16+)
function compareBirthdayAndHireDay(bYYYY, hYYYY)
{
	bResult = false;
	if(hYYYY - bYYYY >= 18)
	{
		bResult = true;
	}
	
	return bResult;
	
}
//compare for hire day and termination

function compareHireDayandTermination(hYYYY, hMM, hDD, tYYYY, tMM, tDD)   
{
	bResult = false;
	if(tYYYY - hYYYY >= 0)
	{
		if(tMM - hMM >= 0)
		{
			if(tDD - hDD >= 0)
			{
				bResult = true;
			}
		}
	}
	return bResult;
	
}
//validate season year    
function checkSeasonYear(value)
{

	var bSeasonYear = false;
	var yearReg = /^\d{4}$/;
	if(userType == "A")
	{
		if(value != null && value != "" && value.match(yearReg) != null)
		{
			
			var yyyy = parseInt(value);
			if(yyyy >= 1902 && yyyy <= (new Date().getFullYear())) 
			{
				bSeasonYear = true;
			}
		}
	}
	else
	{
		if(value != null && value != "" && value.match(yearReg) != null)
		{
			
			var yyyy = parseInt(value);
			if(yyyy >= 1902 && yyyy <= (new Date().getFullYear())) 
			{
				bSeasonYear = true;
			}
        }
			
	}
	
	return bSeasonYear;
}

	
	
//validation for hour
function checkHours(value)
{
	var hourReg = /^\d*(?:\.\d{1,2})?$/;
	var bResult = true;
	if(value == null || value == "")
	{
		bResult = false;
	}
	else
	{
		if(value.match(hourReg) != null)
		{

			var hour = parseFloat(value);
			if(hour == 0.00 || hour >= 24.01)
			{
				bResult = false;
			}
			
		}
		else
		{
			bResult = false;
		}
	}
	return bResult;
}
    
//function saveFileContent()
//{	
//    if (window.XMLHttpRequest)	
//    {
//      // code for IE7+, Firefox, Chrome, Opera, SafariCreate
//      xmlhttp=new XMLHttpRequest();
//    }
//    else
//    {
//      // code for IE6, IE5
//      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//    }
//    xmlhttp.onreadystatechange=sampleCallBack;
//    xmlhttp.open("GET","Database.php",true);
//    xmlhttp.send(null);
//}
//    
//function sampleCallBack()
//{
//    if(xmlhttp.readyState==4)
//    {
//
//        document.getElementById("reportsDiv").style.visibility = "visible";
//        $("#reportsDiv").fadeTo(1000, 1);
//        
//      document.getElementById("reportsDiv").innerHTML = xmlhttp.responseText;
//    }
//}

function checkSin(inputValue,boolTimeCard)
{
   	esum = 0;
    enumbers = "";
    checknum = 0;
    ch_sum = "";
    checkdigit = 0;
    sin = "";
    lastdigit = 0;
	var bCheckSinResult = false;
	if(userType == "A" || boolTimeCard=="true" )
	{
		if (isNum(inputValue))
		{
			bCheckSinResult = true;
		}
	}
	else
	{
		if(isNum(inputValue) || inputValue == "" || inputValue == 0 || inputValue.length == 0)
		{
			bCheckSinResult = true;
		}
	}
    

	return bCheckSinResult;
}

function isNum(text) 
{
    //alert(text);
	if(text == "" || text == null || text.length == 0) 
	{
       // alert("1");
		return false;
        
	}
	inStr = text;
	sin = text;
	inLen = inStr.length;

	if (inLen > 11 || inLen < 11) 
	{
          //alert("2");
		return false;
       
	}

	for (var i = 0; i < text.length; i++) 
	{
		var ch = text.substring(i, i + 1)

		if ((ch < "0" || "9" < ch) && (ch != " "))  
		{
             //alert("3");
			return false;
            
		}
		if ((i == 3 || i == 7) && (ch != " ")) 
		{
             //alert("4");
			return false;
		}
	}
	lastdigit = text.substring(10, 10 + 1);
	// add numbers in odd positions; IE 1, 3, 6, 8		
	var odd = ((text.substring(0,0 + 1)) * (1.0)  + (text.substring(2,2 + 1)) * (1.0)+(text.substring(5, 5+1)) * (1.0) + (text.substring(8,8 + 1)) * (1.0));
            			
	// form texting of numbers in even positions IE 2, 4, 6, 8
	var enumbers =  (text.substring(1,1 + 1)) + (text.substring(4,4 + 1))+
	(text.substring(6,6 + 1)) + (text.substring(9,9 + 1));
            
	// add together numbers in new text string
	// take numbers in even positions; IE 2, 4, 6, 8
	// and double them to form a new text string
	// EG if numbers are 2,5,1,9 new text string is 410218
	for (var i = 0; i < enumbers.length; i++) 
	{
		var ch = (enumbers.substring(i, i + 1) * 2);
		ch_sum = ch_sum + ch;
	}
            
	for (var i = 0; i < ch_sum.length; i++) 
	{
		var ch = (ch_sum.substring(i, i + 1));
		esum = ((esum * 1.0) + (ch * 1.0));
	}

	checknum = (odd + esum);

	// subtextact checknum from next highest multiple of 10
	// to give check digit which is last digit in valid SIN
	if (checknum <= 10) 
	{
		(checdigit = (10 - checknum));
	}
	if (checknum > 10 && checknum <= 20) 
	{
		(checkdigit = (20 - checknum));
	}
	if (checknum > 20 && checknum <= 30) 
	{
		(checkdigit = (30 - checknum));
	}
	if (checknum > 30 && checknum <= 40) 
	{
		(checkdigit = (40 - checknum));
	}
	if (checknum > 40 && checknum <= 50) 
	{
		(checkdigit = (50 - checknum));
	}
    if (checknum > 50 && checknum <= 60)
	{
		(checkdigit = (60 - checknum));
	}
			
    if (checkdigit != lastdigit) 
	{
         //alert("5");
		return false;
	}					  			
	return true;
}   
    

</script>
</head>
<body>
  <div id="topDiv">
    <p id="appLabel">EMS-PSS</p>
    <button id="logOutOfTheApp">Log Out</button>
  </div>

  <div id="backDiv">  
<!--      Button for Admin User-->
    <button id="addEmpAdminUser" class="buttonStyles">Add Employee</button>
    <button id="modEmp" class="buttonStyles">Modify Employee</button>
<!--    <button id="delEmp" class="buttonStyles">Delete Employee</button>-->
<!--    <button id="timeCardEmpAdminUser" class="buttonStyles">Time Card</button>-->
<!--    Buttons for General User-->
    <button id="addEmp" class="buttonStyles">Add Employee</button>
    <button id="timeCardEmp" class="buttonStyles">Time Card</button>
      
      
<!-- Admin emp report options-->
     <button id="activeEmpReportAdmin" class="buttonStyles2">Active Employment Report</button>
     <button id="inactiveEmpReportAdmin" class="buttonStyles2">InActive Employment Report</button>
     <button id="payrollReportAdmin" class="buttonStyles2">Payroll Report</button>
     <button id="seniorityReportAdmin" class="buttonStyles2">Seniority Report</button>
     <button id="weeklyHoursReportAdmin" class="buttonStyles2">Weekly Hours Report</button>

<!--      General user reports options-->
    <button id="seniorityReportGen" class="buttonStyles2">Seniority Report</button>
    <button id="weeklyHoursReportGen" class="buttonStyles2">Weekly Hours Report</button>

      <!--System Admin      -->
    <button id="adminCreateNewUser" class="buttonStyles2">Create New User</button> 
    <button id="auditTable" class="buttonStyles2">Audit Table</button> 
    <button id="companyInformation" class="buttonStyles2">Company Information</button> 
      
        <div id="selectEmpTypeDivForGenUser" class="centerDiv"> 
            <label id="addEmployeeLabelGen"></label>
            <button id="genUserChoiceFTEmp" class="empTypeBtn">Full Time Employee</button>
            <button id="genUserChoicePTEmp" class="empTypeBtn">Part Time Employee</button>
            <button id="genUserSEmp" class="empTypeBtn">Season Employee</button>
            <input type="image" src="cancel.png" id="cancelImageEmpType" class="cancelImage"/>
        </div>
      
         <div id="selectEmpTypeDivForAdminUser" class="centerDiv"> 
            <label id="addEmployeeLabelAdmin"></label>
            <button id="adminUserChoiceFTEmp" class="empTypeBtn">Full Time Employee</button>
            <button id="adminUserChoicePTEmp" class="empTypeBtn">Part Time Employee</button>
            <button id="adminUserSEmp" class="empTypeBtn">Season Employee</button>
            <button id="adminUserChoiceCEmp" class="empTypeBtn">Contract Employee</button>
            <input type="image" src="cancel.png" id="cancelImageEmpTypeAdmin" class="cancelImage"/>
        </div>
      
          <div id="genUserAddingEmp" class="centerDiv">
               <form class="adminAddEmpForm">
                    <label id="fnameLabel" class="fnameL">First Name</label><input type="text" id="fnameText" name="fnameTextG" class="fname"/><span style="position:absolute; top:10%; left:80%;" id="fnameGenSpan"></span>
                    <label id="lnameLabel" class="lnameL">Last Name</label><input type="text" id="lnameText"  name="lnameTextG" class="lname"/><span style="position:absolute; top:20%; left:80%;" id="lnameGenSpan"></span>
                    <label id="companyLabel" class="companyL">Company</label><input type="text" id="compText"  name="compTextG" class="company"/><span style="position:absolute; top:30%; left:80%;" id="companyGenSpan"></span>
                    <label id="sinLabel" class="sinL">SIN</label><input type="text" id="sinText" class="sin" name="sinTextG" /><span style="position:absolute; top:40%; left:80%;" id="sinGenSpan"></span>
                    <label id="dobLabel" class="dobL">Date OF Birth</label><input type="text" id="dobText" class="dob" name="dobTextG" /><span style="position:absolute; top:50%; left:80%;" id="dobGenSpan"></span>
                    <label id="dohLabel" class="dohL">Date Of Hire</label><input type="text" id="dohText" class="doh" name="dohTextG" />
                   <span style="position:absolute; top:60%; left:80%;" id="dohGenSpan"></span>
                    <label id="seasonYearLabel" class="seasonyearL">Seasonal Year</label><input type="text" id="seasonYearText" class="seasonyear" name="seasonYearTextG" /> <span style="position:absolute; top:70%; left:80%;" id="seasonYearGenSpan"></span>
                    <label id="seasonTypeLabel" class="seasonLGen">Season</label>
                      <select id="seasonTypeDD" class="seasonTypeGen" name="seasonTypeDDG">
                        <option value="">Select Your Season</option>
                        <option value="winter">Winter</option>
                        <option value="spring">Spring</option>
                        <option value="fall">Fall</option>
                        <option value="summer">Summer</option>
                    </select><span style="position:absolute; top:80%; left:80%;" id="seasonGenSpan"></span>
                    <input type="hidden" name="needCompletion" value="Y">
                    <button type="button" class="submitBtn" id="genUserAddEmp" onclick="submitGenEmp()">Submit</button>
            </form>
            <input type="image" src="cancel.png" id="cancelImageAddEmp" class="cancelImage"/>
            <button id="goBack" class="backBtn">Back</button> 
          </div>
      
       <div id="adminUserAddingFTEmpAdd" class="centerDiv">
<!--           <div id="adminUserAddingFTEmp" style="position:absolute; top:50%; width:80%;height:100%;left:10%;">-->
                <form class="adminAddEmpForm">
                    <label id="employeeTypeFT" class="employeeType"></label>
                    <label id="fnameLabelAdmin" class="fnameL">First Name</label><input type="text" id="fnameTextAdminAdd" name="fnameTextAdmin" class="fname"/><span id="spanFTAdminAddFname" style="position:absolute; top:10%; left:80%;"></span>
                    <label id="lnameLabelAdmin" class="lnameL">Last Name</label><input type="text" id="lnameTextAdminAdd"  name="lnameTextAdmin" class="lname"/><span id="spanFTAdminAddLname" style="position:absolute; top:20%; left:80%;"></span>
                    <label id="companyLabelAdmin" class="companyL">Company</label><input type="text" id="compTextAdminAdd"  name="compTextAdmin" class="company"/><span id="spanFTAdminAddCompany" style="position:absolute; top:30%; left:80%;"></span>
                    <label id="sinLabelAdmin" class="sinL">SIN</label><input type="text" id="sinTextAdminAdd"  name="sinTextAdmin" class="sin"/><span id="spanFTAdminAddSin" style="position:absolute; top:40%; left:80%;"></span>
                    <label id="dobLabelAdmin" class="dobL">Date OF Birth</label><input type="text" id="dobTextAdminAdd"  name="dobTextAdmin" class="dob"/><span id="spanFTAdminAddDob" style="position:absolute; top:50%; left:80%;"></span>
                    <label id="dohLabelAdmin" class="dohL">Date Of Hire</label><input type="text" id="dohTextAdminAdd"  name="dohTextAdmin" class="doh"/><span id="spanFTAdminAddDoh" style="position:absolute; top:60%; left:80%;"></span>
                    <label id="dotLabelAdmin">Date Of Termination</label><input type="text" id="dotTextAdminAdd"  name="dotTextAdmin" class="dot"/><span id="spanFTAdminAddDot" style="position:absolute; top:70%; left:80%;"></span>
                    <label id="salaryLabelAdmin">Salary</label><input type="text"  name="salary" id="salaryAdd"/><span id="spanFTAdminAddSalary" style="position:absolute; top:80%; left:80%;"></span>
                    <button type="button" class="submitBtn" id="btnSubmitFT" onclick="submitAdminFullTimeEmp()">Submit</button>
                </form>
                <input type="image" src="cancel.png" onclick="cancelImage()" class="cancelImage"/>
                <button class="backBtn" onclick="goBack()">Back</button> 
        </div>
      
      <div id="adminUserAddingPTEmpAdd" class="centerDiv">
                    <form class="adminAddEmpForm">
                        <label id="employeeTypePT" class="employeeType"></label>
                        <label id="fnameLabelAdmin" class="fnameL">First Name</label><input type="text" id="fnameTextAdminPTAdd" name="fnameTextAdmin" class="fname"/><span id="spanPTAdminAddFname" style="position:absolute; top:10%; left:80%;"></span>
                        <label id="lnameLabelAdmin" class="lnameL">Last Name</label><input type="text" id="lnameTextAdminPTAdd" name="lnameTextAdmin" class="lname"/><span id="spanPTAdminAddLname" style="position:absolute; top:20%; left:80%;"></span>
                        <label id="companyLabelAdmin" class="companyL">Company</label><input type="text" id="compTextAdminPTAdd" name="compTextAdmin" class="company"/><span id="spanPTAdminAddCompany" style="position:absolute; top:30%; left:80%;"></span>
                        <label id="sinLabelAdmin" class="sinL">SIN</label><input type="text" id="sinTextAdminPTAdd"  name="sinTextAdmin" class="sin"/><span id="spanPTAdminAddSin" style="position:absolute; top:40%; left:80%;"></span>
                        <label id="dobLabelAdmin" class="dobL">Date OF Birth</label><input type="text" id="dobTextAdminPTAdd" name="dobTextAdmin"  class="dob"/><span id="spanPTAdminAddDob" style="position:absolute; top:50%; left:80%;"></span>
                        <label id="dohLabelAdmin" class="dohL">Date Of Hire</label><input type="text" id="dohTextAdminPTAdd"  name="dohTextAdmin" class="doh"/><span id="spanPTAdminAddDoh" style="position:absolute; top:60%; left:80%;"></span>
                        <label id="dotLabelAdmin">Date Of Termination</label><input type="text" id="dotTextAdminPTAdd"  name="dotTextAdmin" class="dot"/><span id="spanPTAdminAddDot" style="position:absolute; top:70%; left:80%;"></span>
                        <label id="hourlyRateLabelAdmin">Hourly Rate</label><input type="text"  name="hourlyRate" id="hourlyRatePTAdd"/><span id="spanPTAdminAddHourlyRate" style="position:absolute; top:80%; left:80%;"></span>
                        <button type="button" class="submitBtn" id="btnSubmitPT" onclick="submitAdminPartTimeEmp()">Submit</button>
                    </form>
                    <input type="image" src="cancel.png" onclick="cancelImage()" class="cancelImage"/>
                    <button class="backBtn" onclick="goBack()">Back</button> 

                </div>
      
      
               <div id="adminUserAddingSEmpAdd" class="centerDiv">
<!--                  <form class="adminAddEmpForm">-->
                        <label id="employeeTypeS" class="employeeType"></label>
                        <label id="fnameLabelAdmin" class="fnameL">First Name</label><input type="text" id="fnameTextAdminS" class="fname" name="fnameTextAdminS"/><span id="spanSAdminAddFname" style="position:absolute; top:10%; left:80%;"></span>
                        <label id="lnameLabelAdmin" class="lnameL">Last Name</label><input type="text" id="lnameTextAdminS" class="lname" name="lnameTextAdminS"/><span id="spanSAdminAddLname" style="position:absolute; top:20%; left:80%;"></span>
                        <label id="companyLabelAdmin" class="companyL">Company</label><input type="text" id="compTextAdminS" class="company" name="compTextAdminS"/><span id="spanSAdminAddCompany" style="position:absolute; top:30%; left:80%;"></span>
                        <label id="sinLabelAdmin" class="sinL">SIN</label><input type="text" id="sinTextAdminS" name="sinTextAdminS" class="sin"/><span id="spanSAdminAddSin" style="position:absolute; top:40%; left:80%;"></span>
                        <label id="dobLabelAdmin" class="dobL">Date OF Birth</label><input type="text" id="dobTextAdminS" name="dobTextAdminS" class="dob"/><span id="spanSAdminAddDob" style="position:absolute; top:50%; left:80%;"></span>         
                        <label id="seasonTypeLabelAdmin" class="seasonL">Season</label>
                          <select id="seasonTypeDDAdminS" name="seasonTypeDDAdminS" class="season">
                            <option value="">Select Season</option>
                              <option value="winter">Winter</option>
                            <option value="spring">Spring</option>
                            <option value="fall">Fall</option>
                            <option value="summer">Summer</option>
                        </select> <span id="spanSAdminAddSeason" style="position:absolute; top:60%; left:80%;"></span>
                        <label id="seasonYearLabelAdmin" class="seasonyearL">Season Year</label><input type="text" id="seasonYearTextAdminS" class="seasonyear" name="seasonYearTextAdminS" /><span id="spanSAdminAddSeasonYear" style="position:absolute; top:70%; left:80%;"></span>
                       <label id="piecePayLabelAdmin" class="piecePayL">Piece Pay</label><input type="text" id="piecePayTextAdminS" name="seasonYearTextAdminS" /><span id="spanSAdminAddPiecePay" style="position:absolute; top:80%; left:80%;"></span>
                        <button type="button" class="submitBtn" id="btnSubmitS" onclick="submitAdminSeasonEmp()">Submit</button>
<!--                </form>-->
    
<!--                <input type="image" src="cancel.png" onclick="cancelImage()" class="cancelImage"/>-->
                <button class="backBtn" onclick="goBack()">Back</button> 
    
              </div>
           
      

        <div id="adminUserAddingCEmp" class="centerDiv">   
<!--            <form class="adminAddEmpForm">-->
                <label id="employeeTypeC" class="employeeType"></label>
                <label id="lnameLabelAdminC">Corporation Name</label><input type="text" id="lnameTextAdminC" name="lnameTextAdminC"/><span id="spanCAdminAddLname" style="position:absolute; top:10%; left:80%;"></span>
                <label id="companyLabelAdminC">Company</label><input type="text" id="compTextAdminC" name="compTextAdminC"/><span id="spanCAdminAddCompany" style="position:absolute; top:20%; left:80%;"></span>
                <label id="sinLabelAdminC">SIN</label><input type="text" id="sinTextAdminC" name="sinTextAdminC"/><span id="spanCAdminAddSin" style="position:absolute; top:30%; left:80%;"></span>
                <label id="dobLabelAdminC">Date OF Birth</label><input type="text" id="dobTextAdminC" name="dobTextAdminC"/><span id="spanCAdminAddDob" style="position:absolute; top:40%; left:80%;"></span>
                <label id="csdLabelAdminC">Contract Start Date</label><input type="text" id="csdTextAdminC" name="csdTextAdminC"/><span id="spanCAdminAddCSD" style="position:absolute; top:50%; left:80%;"></span>
                <label id="cstopDLabelAdminC">Contract Stop Date</label><input type="text" id="cstopDTextAdminC" name="cstopDTextAdminC"/><span id="spanCAdminAddCstopD" style="position:absolute; top:60%; left:80%;"></span>
                <label id="contractAmountLabelC">Contract Amount</label><input type="text" id="contractAmountC" name="contractAmountC"/><span id="spanCAdminAddAmount" style="position:absolute; top:70%; left:80%;"></span>
                <button type="button" class="submitBtn" id="btnSubmitC" onclick="submitContractAdminAdd()">Submit</button>
<!--            </form>-->
<!--            <input type="image" src="cancel.png" onclick="cancelImage()" class="cancelImage"/>-->
            <button class="backBtn" onclick="goBack()">Back</button>       
          </div>

      
<!--      Admin user modifying an employee-->
       <div id="adminModifyingEmp" class="centerDiv"> 

                <label id="modifySinLabel" class="timeCardLabel">SIN</label><input type="text" id="modifySinText" class="timeCardText"><span id="spanModifySin" style="position:absolute; top:10%; left:70%;"></span>
               <label id="modifyCompanyLabel" class="timeCardLabel">Company Name</label><input type="text" id="modifyCompanyText" class="timeCardText"><span id="spanModifyCompany" style="position:absolute; top:20%; left:70%;"></span>
               <button type="button" id="submitModify">Modify</button>
           <div id="modifyResultDiv" style="position:absolute;top:50%;left:10%; background-color:white;"></div>
<!--               <div id="adminUserAddingFTEmp" class="centerDiv">-->
           
           <div id="adminUserAddingFTEmp" style="position:absolute; top:50%; width:80%;height:100%;left:10%;">
<!--                <form class="adminAddEmpForm">-->
                    <label id="employeeTypeFT" class="employeeType"></label>
                    <label id="fnameLabelAdmin" class="fnameL">First Name</label><input type="text" id="fnameTextAdmin" name="fnameTextAdmin" class="fname"/>
                    <label id="lnameLabelAdmin" class="lnameL">Last Name</label><input type="text" id="lnameTextAdmin"  name="lnameTextAdmin" class="lname"/>
                    <label id="companyLabelAdmin" class="companyL">Company</label><input type="text" id="compTextAdmin"  name="compTextAdmin" class="company"/>
                    <label id="sinLabelAdmin" class="sinL">SIN</label><input type="text" id="sinTextAdmin"  name="sinTextAdmin" class="sin"/>
                    <label id="dobLabelAdmin" class="dobL">Date OF Birth</label><input type="text" id="dobTextAdmin"  name="dobTextAdmin" class="dob"/>
                    <label id="dohLabelAdmin" class="dohL">Date Of Hire</label><input type="text" id="dohTextAdmin"  name="dohTextAdmin" class="doh"/>
                    <label id="dotLabelAdmin">Date Of Termination</label><input type="text" id="dotTextAdmin"  name="dotTextAdmin" class="dot"/>
                    <label id="salaryLabelAdmin">Salary</label><input type="text"  name="salary" id="salary"/>
                    <button type="button" class="submitBtn" id="btnSubmitFT" onclick="submitModAdminFullTimeEmp()">Submit</button>
<!--                </form>-->
<!--                <input type="image" src="cancel.png" onclick="cancelImage()" class="cancelImage"/>-->
                <button class="backBtn" onclick="goBack()">Back</button> 

                      </div>
                <div id="adminUserAddingPTEmp" style="position:absolute; top:50%; width:80%;height:100%;left:10%;">
<!--                    <form class="adminAddEmpForm">-->
                        <label id="employeeTypePT" class="employeeType"></label>
                        <label id="fnameLabelAdmin" class="fnameL">First Name</label><input type="text" id="fnameTextAdminPT" name="fnameTextAdmin" class="fname"/>
                        <label id="lnameLabelAdmin" class="lnameL">Last Name</label><input type="text" id="lnameTextAdminPT" name="lnameTextAdmin" class="lname"/>
                        <label id="companyLabelAdmin" class="companyL">Company</label><input type="text" id="compTextAdminPT" name="compTextAdmin" class="company"/>
                        <label id="sinLabelAdmin" class="sinL">SIN</label><input type="text" id="sinTextAdminPT"  name="sinTextAdmin" class="sin"/>
                        <label id="dobLabelAdmin" class="dobL">Date OF Birth</label><input type="text" id="dobTextAdminPT" name="dobTextAdmin"  class="dob"/>
                        <label id="dohLabelAdmin" class="dohL">Date Of Hire</label><input type="text" id="dohTextAdminPT"  name="dohTextAdmin" class="doh"/>
                        <label id="dotLabelAdmin">Date Of Termination</label><input type="text" id="dotTextAdminPT"  name="dotTextAdmin" class="dot"/>
                        <label id="hourlyRateLabelAdmin">Hourly Rate</label><input type="text"  name="hourlyRate" id="hourlyRatePT"/>
                        <button type="button" class="submitBtn" id="btnSubmitPT" onclick="submitModAdminPartTimeEmp()">Submit</button>
<!--                    </form>-->
<!--                    <input type="image" src="cancel.png" onclick="cancelImage()" class="cancelImage"/>-->
                    <button class="backBtn" onclick="goBack()">Back</button> 

                </div>
           

<!--
               <div id="adminUserAddingSEmp" style="position:absolute; top:50%; width:80%;height:100%;left:10%;">
                  <form class="adminAddEmpForm">
                        <label id="employeeTypeS" class="employeeType"></label>
                        <label id="fnameLabelAdmin" class="fnameL">First Name</label><input type="text" id="fnameTextAdminS" class="fname" name="fnameTextAdminS"/>
                        <label id="lnameLabelAdmin" class="lnameL">Last Name</label><input type="text" id="lnameTextAdminS" class="lname" name="lnameTextAdminS"/>
                        <label id="companyLabelAdmin" class="companyL">Company</label><input type="text" id="compTextAdminS" class="company" name="compTextAdminS"/>
                        <label id="sinLabelAdmin" class="sinL">SIN</label><input type="text" id="sinTextAdminS" name="sinTextAdminS" class="sin"/>
                        <label id="dobLabelAdmin" class="dobL">Date OF Birth</label><input type="text" id="dobTextAdminS" name="dobTextAdminS" class="dob"/>         
                        <label id="seasonTypeLabelAdmin" class="seasonL">Season</label>
                          <select id="seasonTypeDDAdminS" name="seasonTypeDDAdminS" class="season">
                            <option value="winter">Winter</option>
                            <option value="spring">Spring</option>
                            <option value="fall">Fall</option>
                            <option value="summer">Summer</option>
                        </select> 
                        <label id="seasonYearLabelAdmin" class="seasonyearL">Season Year</label><input type="text" id="seasonYearTextAdminS" class="seasonyear" name="seasonYearTextAdminS" />
                        <button type="button" class="submitBtn" id="btnSubmitS" onclick="submitAdminSeasonEmp()">Submit</button>
                </form>
    
                <input type="image" src="cancel.png" onclick="cancelImage()" class="cancelImage"/>
                <button class="backBtn" onclick="goBack()">Back</button> 
    
              </div>
-->

          </div>
      
        <div id="newUserForm" class="centerDiv">
            <label id="fnameNewUserLabel" class="timeCardLabel">First Name</label><input type="text" id="fnameNewUserText" class="timeCardText"><span id="spanFnameNewUser" style="position:absolute; top:10%; left:70%;"></span>
             <label id="lnameNewUserLabel" class="timeCardLabel">First Name</label><input type="text" class="timeCardText" id="lnameNewUserText"><span id="spanLnameNewUser" style="position:absolute; top:20%; left:70%;"></span>
             <label id="securityLevelNewUserLabel" class="timeCardLabel">Security Level</label>
            <select id="selectSecurityLevel" class="timeCardText">
                <option value="">Select Security Level</option>
                <option value="A">Admin</option>
                <option value="G">General</option>
            </select>
            <span id="spanSecLevelNewUser" style="position:absolute; top:30%; left:70%;"></span>
             <label id="passwordNewUserLabel" class="timeCardLabel">Password</label><input class="timeCardText" type="text" id="passwordNewUserText"><span id="spanpasswordNewUser" style="position:absolute; top:40%; left:70%;"></span>
             <label id="userNameNewUserLabel" class="timeCardLabel">UserName</label><input class="timeCardText" type="text" id="userNameNewUserText"><span id="spanUsernameNewUser" style="position:absolute; top:50%; left:70%;"></span>
            <button type="button" id="submitNewUser">Create</button>
        </div>
          <div id="gentimeCardFTPT" class="centerDiv">
            <label id="sinLabelTC" class="timeCardLabel">SIN</label><input type="text" id="sinTextGenTC" class="timeCardText" name="sinTextGen"><span style="position:absolute; top:10%; left:70%;" id="sinTCGenSpan"></span>
            <label id="compLabelTC" class="timeCardLabel">Company Name</label><input type="text" id="companyTextGenTC" class="timeCardText" name="companyTextGen"><span style="position:absolute; top:20%; left:70%;" id="compTCGenSpan"></span>
            <label id="monLabelTC" class="timeCardLabel">Monday</label><input type="text" id="monTextTC" class="timeCardText" name="monText"><span style="position:absolute; top:30%; left:70%;" id="monGenSpan"></span>
            <label id="tueLabelTC" class="timeCardLabel">Tuesday</label><input type="text" id="tueTextTC" class="timeCardText" name="tueText"><span style="position:absolute; top:40%; left:70%;" id="tueGenSpan"></span>
            <label id="wedLabelTC" class="timeCardLabel">Wednesday</label><input type="text" id="wedTextTC" class="timeCardText" name="wedText"><span style="position:absolute; top:50%; left:70%;" id="wedGenSpan"></span>
            <label id="thurLabelTC" class="timeCardLabel">Thursday</label><input type="text" id="thurTextTC" class="timeCardText" name="thurText"><span style="position:absolute; top:60%; left:70%;" id="thurGenSpan"></span>
            <label id="friLabelTC" class="timeCardLabel">Friday</label><input type="text" id="friTextTC" class="timeCardText" name="friText"><span style="position:absolute; top:70%; left:70%;" id="friGenSpan"></span>
            <label id="satLabelTC" class="timeCardLabel">Saturday</label><input type="text" id="satTextTC" class="timeCardText" name="satText"><span style="position:absolute; top:80%; left:70%;" id="satGenSpan"></span>
            <label id="sunLabelTC" class="timeCardLabel">Sunday</label><input type="text" id="sunTextTC" class="timeCardText" name="sunText"><span style="position:absolute; top:90%; left:70%;" id="sunGenSpan"></span>
              <button type="button" id="submitTimeCardBtnFTPT" onclick="submitTimeCardForFTPT()">Submit</button>  
            <input type="image" src="cancel.png" id="cancelImageTimeCard" class="cancelImage">
            <button id="goBackTimeCard" class="backBtn">Back</button> 
          </div>
      
        <div id="gentimeCardS" class="centerDiv">
            <label id="sinLabelTCS" class="seasonalTimeCardLabel">SIN</label><input type="text" id="sinTextGenTCS" class="timeCardTextS" name="sinTextGenS"><span style="position:absolute; top:10%; left:60%;" id="sinGenSpanS"></span>
            <label id="compLabelTCS" class="seasonalTimeCardLabel">Company Name</label><input type="text" id="companyTextGenTCS" class="timeCardTextS" name="companyTextGenS"><span style="position:absolute; top:20%; left:60%;" id="compGenSpanS"></span>
            <label id="pieceText" style="position:absolute;left:66%;top:23%;">Number of Pieces</label>
            <label id="monLabelTCS" class="seasonalTimeCardLabel">Monday</label><input type="text" id="monTextTCS" class="timeCardTextSS" name="monTextS"><span style="position:absolute; top:30%; left:41%;" id="monGenSpanS"></span><input type="text" id="monPieces" class="piecesText"><span style="position:absolute; top:30%; left:76%;" id="monPSpanS"></span>
            <label id="tueLabelTCS" class="seasonalTimeCardLabel">Tuesday</label><input type="text" id="tueTextTCS" class="timeCardTextSS" name="tueTextS"><span style="position:absolute; top:40%; left:41%;" id="tueGenSpanS"></span><input type="text" id="tuePieces" class="piecesText"><span style="position:absolute; top:40%; left:76%;" id="tuePSpanS"></span>
            <label id="wedLabelTCS" class="seasonalTimeCardLabel">Wednesday</label><input type="text" id="wedTextTCS" class="timeCardTextSS" name="wedTextS"><span style="position:absolute; top:50%; left:41%;" id="wedGenSpanS"></span><input type="text" id="wedPieces" class="piecesText"><span style="position:absolute; top:50%; left:76%;" id="wedPSpanS"></span>
            <label id="thurLabelTCS" class="seasonalTimeCardLabel">Thursday</label><input type="text" id="thurTextTCS" class="timeCardTextSS" name="thurTextS"><span style="position:absolute; top:60%; left:41%;" id="thurGenSpanS"></span><input type="text" id="thurPieces" class="piecesText"><span style="position:absolute; top:60%; left:76%;" id="thurPSpanS"></span>
            <label id="friLabelTCS" class="seasonalTimeCardLabel">Friday</label><input type="text" id="friTextTCS" class="timeCardTextSS" name="friTextS"><span style="position:absolute; top:70%; left:41%;" id="friGenSpanS"></span><input type="text" id="friPieces" class="piecesText"><span style="position:absolute; top:70%; left:76%;" id="friPSpanS"></span>
            <label id="satLabelTCS" class="seasonalTimeCardLabel">Saturday</label><input type="text" id="satTextTCS" class="timeCardTextSS" name="satTextS"><span style="position:absolute; top:80%; left:41%;" id="satGenSpanS"></span><input type="text" id="satPieces" class="piecesText"><span style="position:absolute; top:80%; left:76%;" id="satPSpanS"></span>
            <label id="sunLabelTCS" class="seasonalTimeCardLabel">Sunday</label><input type="text" id="sunTextTCS" class="timeCardTextSS" name="sunTextS"><span style="position:absolute; top:90%; left:41%;" id="sunGenSpanS"></span><input type="text" id="sunPieces" class="piecesText"><span style="position:absolute; top:90%; left:76%;" id="sunPSpanS"></span>
              <button type="button" id="submitTimeCardBtnS" onclick="submitTimeCardForS()">Submit</button>  
            <input type="image" src="cancel.png" id="cancelImageTimeCard" class="cancelImage">
            <button id="goBackTimeCard" class="backBtn" onclick="goBackTimeCardS()">Back</button> 
        </div>
      
<!--

        <div id="adminUserTimeCard" class="centerDiv">
            <label id="ok">admin time card</label>
            <input type="image" src="cancel.png" id="cancelImageTimeCardAdmin" class="cancelImage"/>
            <button id="goBackTimeCardAdmin" class="backBtn">Back</button> 
          </div>
-->

      
<!--
        <div id="adminUserDeleteEmp" class="centerDiv">
            <label id="ok">admin delete card</label>
            <input type="image" src="cancel.png" id="cancelImageTimeCardAdmin" class="cancelImage"/>
            <button id="goBackTimeCardAdmin" class="backBtn">Back</button> 
          </div>
-->
      
      <div id="searchDiv" class="centerDiv">
        <label id="userAction" class="employeeType"></label><span style="position:absolute; top:5%; left:70%;" id="searchError"></span>
        <label id="searchFnameLabel">First Name</label><input type="text" id="searchFnameText" name="searchFnameText"><span style="position:absolute; top:10%; left:70%;" id="searchSpanGenFname"></span>
        <label id="searchLnameLabel">Last Name</label><input type="text" id="searchLnameText" name="searchLnameText"><span style="position:absolute; top:20%; left:70%;" id="searchSpanGenLname"></span>
        <label id="searchSinLabel">SIN</label><input type="text" id="searchSinText" name="searchSinText"><span style="position:absolute; top:30%; left:70%;" id="searchSpanGenSin"></span>
        <button id="searchEmpBtn">Search</button>
      <div id="searchResultDiv" style="position:absolute;top:50%;left:10%; background-color:white;"></div>   
      </div>

      <div id="reportsDiv" class="centerDiv">
        <label id="reportCompNameLabel">Company Name</label><input type="text" id="reportCompanyNameText">
          <button id="generateReport">Generate</button>
          <div id="reportsResult" style="position:absolute;left:10%;top:20%;height:100%;width:90%;overflow-y:scroll;"></div>
    </div>
      
      <p id="copyright">Developed & Maintained by DMS Inc.</p>   
  </div>

  <div id="middleDiv">
    <button id="empMaintainence" class="middleDivBtn">EMPLOYEE MAINTAINENECE</button>
    <button id="empReportsBtn" class="middleDivBtn">EMPLOYEE REPORTS</button>
    <button id="adminBtn" class="middleDivBtn">EMS SYSTEM ADMIN</button>
    <button id="searchBtn" class="middleDivBtn">SEARCH EMPLOYEE</button>
  </div>
    
    <div id="middleDivGen">
    <button id="empMaintainenceGen" class="middleDivBtnGen">EMPLOYEE MAINTAINENECE</button>
    <button id="empReportsBtnGen" class="middleDivBtnGen">EMPLOYEE REPORTS</button>
    <button id="searchBtnGen" class="middleDivBtnGen">SEARCH EMPLOYEE</button>
  </div>    
</body>
</html>
