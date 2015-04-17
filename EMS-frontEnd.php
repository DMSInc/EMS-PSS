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
    left: 20%;
    height: 6%;
    width: 60%;
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
    width: 20%;
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
    left: 20%;
}
#searchBtnGen{
    position: absolute;
    left: 40%;
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
#delEmp{
    position:absolute;
    top: 49%;
    background-color: #336666;
    color: white;
    visibility: hidden;
}
#timeCardEmp{
    position:absolute;
    top: 61%;
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
    left:20%;
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
    left:65%;
    
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
    left:45%;
}   
.timeCardTextS{
position:absolute;
    left:32%;
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
#adminUserAddingPTEmp{
    visibility: hidden;
}
#adminUserAddingSEmp{
    visibility: hidden;
}
#adminUserAddingCEmp{
    visibility: hidden;
}
#adminModifyingEmp{
    visibility:hidden;
}
#adminUserDeleteEmp{
    visibility:hidden;
}
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
     top:80%;
}
#btnSubmitC{
    top:80%;
}
#adminUserTimeCard{
    visibility:hidden;
}  
#sinLabelTC{
    top:10%;
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
    top:5%;
    left:20%;
}
.fnameL{
    position: absolute;
    left: 10%;
    top: 10%;
}
.fname{
    position: absolute;
    left: 40%;
    top: 10%;
}
.lnameL{
    position: absolute;
    left: 10%;
    top: 20%;
}
.lname{
    position: absolute;
    left: 40%;
    top: 20%;
}
.companyL{
    position: absolute;
    left: 10%;
    top: 30%;
}
.company{
    position: absolute;
    left: 40%;
    top: 30%;
}
.sinL{
    position: absolute;
    left: 10%;
    top: 40%;
}
.sin{
    position: absolute;
    left: 40%;
    top: 40%;
}
.dobL{
    position: absolute;
    left: 10%;
    top: 50%;
}
.dob{
    position: absolute;
    left: 40%;
    top: 50%;
}
.dohL{
    position: absolute;
    left: 10%;
    top: 60%;
}
.doh{
    position: absolute;
    left: 40%;
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
    left: 40%;
    top: 60%;
}
.seasonyearL{
    position: absolute;
    left: 10%;
    top: 70%;
}

.seasonyear{
    position: absolute;
    left: 40%;
    top: 70%;
}

#dotLabelAdmin{
    position: absolute;
    left: 10%;
    top: 70%;
}
#dotTextAdmin{
    position: absolute;
    left: 40%;
    top: 70%;
}
 #salaryLabelAdmin{
    position: absolute;
    left: 10%;
    top: 80%;
}
#salary{
    position: absolute;
    left: 40%;
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
    top: 100%;
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
    left:25%;
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
    
   $(document).ready(function () {
    userType="<?php echo $_SESSION["userType"]; ?>";
       if(userType==="A")
       {
           document.getElementById("addEmpAdminUser").style.visibility = "visible";
           document.getElementById("modEmp").style.visibility = "visible";
           document.getElementById("delEmp").style.visibility = "visible";
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
                }
            }
        }           
    }
     maintaineneceType = "addEmployee";
}

function hideAdminTimeCardForm()
{
    //check which time card divs are open
    if(document.getElementById("adminUserTimeCard").style.visibility == "visible")
    {        
         $("#adminUserTimeCard").fadeTo(1000, 0,function(){
             document.getElementById("adminUserTimeCard").style.visibility = "hidden";
             //show card time divs
                document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
                $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
                // document.getElementById("addEmployeeLabelAdmin").innerHTML="Time Card Admin";
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
                  //  document.getElementById("addEmployeeLabelAdmin").innerHTML="Time Card Employee Admin";
         });
        }
    }
}
    
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
    
function hideAdminDeleteForm()
{
    if(document.getElementById("selectEmpTypeDivForAdminUser").style.visibility == "visible")
    {
        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0,function(){
         document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";

        //show card time divs
        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
               // document.getElementById("addEmployeeLabelAdmin").innerHTML="Add Employee Admin";
     });
    }
    else
    {
        if(document.getElementById("adminUserDeleteEmp").style.visibility == "visible")
        {
            $("#adminUserDeleteEmp").fadeTo(1000, 0,function(){
             document.getElementById("adminUserDeleteEmp").style.visibility = "hidden";

            //show card time divs
            document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
            $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
                 //   document.getElementById("addEmployeeLabelAdmin").innerHTML="Add Employee Admin";
         });
        }
    }
}
    
function hideAdminAddEmpForm()
{
    if(document.getElementById("adminUserAddingFTEmp").style.visibility == "visible")
    {        
         $("#adminUserAddingFTEmp").fadeTo(1000, 0,function(){
             document.getElementById("adminUserAddingFTEmp").style.visibility = "hidden";
             //show card time divs
            document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
            $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
//document.getElementById("addEmployeeLabelAdmin").innerHTML="Modify Employee Admin";
         });
    }
    else
    {
        if(document.getElementById("adminUserAddingPTEmp").style.visibility == "visible")
        {        
             $("#adminUserAddingPTEmp").fadeTo(1000, 0,function(){
                 document.getElementById("adminUserAddingPTEmp").style.visibility = "hidden";
                 //show card time divs
                document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
                $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
//document.getElementById("addEmployeeLabelAdmin").innerHTML="Modify Employee Admin";
             });
        }
        else
        {
            if(document.getElementById("adminUserAddingSEmp").style.visibility == "visible")
            {        
                 $("#adminUserAddingSEmp").fadeTo(1000, 0,function(){
                     document.getElementById("adminUserAddingSEmp").style.visibility = "hidden";
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
            }
            else
            {
                if(maintaineneceType==="modifyEmployee")
                {
                    hideAdminModifyForm();
                }
                else
                {
                    if(maintaineneceType==="deleteEmployee")
                    {
                        hideAdminDeleteForm();
                    }
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
                
        }
        //last button pressed was time card button
        else
        {
            if(maintaineneceType==="timeCardEmp")
            {
                hideAdminTimeCardForm();
            }
            else
            {
                if(maintaineneceType==="modifyEmployee")
                {
                   // alert("fsfsfs");
                }
                else
                {
                    if(maintaineneceType==="deleteEmployee")
                    {
                       hideAdminDeleteForm();
                    }
                }
            }
        }           
    }
    //document.getElementById("addEmployeeLabelAdmin").innerHTML="Modify Employee Admin";
     maintaineneceType = "modifyEmployee";
}

function adminDeleteEmp()
{

    //if its the first choice
    if(maintaineneceType=="")
    {
        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
        document.getElementById("addEmployeeLabelAdmin").innerHTML="Delete Employee Admin";
    }
    else
    {
        //if going back and forth in add emp meny only
        if(maintaineneceType==="addEmployee")
        {
            hideAdminAddEmpForm();
        }
        //last button pressed was time card button
        else
        {
            if(maintaineneceType==="timeCardEmp")
            {
                hideAdminTimeCardForm();
            }
            else
            {
                if(maintaineneceType==="modifyEmployee")
                {
                    hideAdminModifyForm();
                }
                else
                {
                    if(maintaineneceType==="deleteEmployee")
                    {
                        
                    }
                }
            }
        }           
    }
     //document.getElementById("addEmployeeLabelAdmin").innerHTML="Delete Employee Admin";
     maintaineneceType = "deleteEmployee";
}
    
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
    
//    
//function timeCardDivsAdmin()
//{
//    
//    if(maintaineneceType=="")
//    {
//        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
//        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);   
//        document.getElementById("addEmployeeLabelAdmin").innerHTML="Time Card Admin";
//    }
//    else
//    {
//        //if going back and forth in add emp meny only
//        if(maintaineneceType==="timeCardEmp")
//        {
//        }
//         //last button pressed was time card button
//        else
//        {
//            if(maintaineneceType==="addEmployee")
//            {
//                hideAdminAddEmpForm();
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
//                        hideAdminDeleteForm();
//                    }
//                }
//            }
//        }     
//    }
//    // document.getElementById("addEmployeeLabelAdmin").innerHTML="Time Card Admin";
//    maintaineneceType = "timeCardEmp";
//}
    
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
	    

function submitAdminFullTimeEmp()
    {
       //start the validation
        
        //if no errors then goto this page
        //location.href = "Database.php";
		
		var value = "addEmployee";
		var sendData = "";
	
		sendData += makeUpJson("q",{"q":value},true);
		
		sendData += makeUpJson("UT",{"UT":"A"});
		
		sendData += makeUpJson("ET",{"ET":"FT"});
		
		sendData += makeUpJson("FN",{"FN":"Xiaodong"});
		
		sendData += makeUpJson("LN",{"LN":"Meng"});
		
		sendData += makeUpJson("CM",{"CM":"Conestoga"});
		
		sendData += makeUpJson("SIN",{"SIN":"123456789"});
		
		sendData += makeUpJson("DOB",{"DOB":"19990909"});
		
		sendData += makeUpJson("DOH",{"DOH":"20000909"});
		
		sendData += makeUpJson("DOT",{"DOT":"20101010"});
		
		sendData += makeUpJson("Salary",{"Salary":"90000"});
		
	alert(sendData);
	 $.ajax({url: "Database.php",
							type: "GET",
							async:true,
							data : sendData,
							success:function(result)
							{
							
								alert(result);
							},
							 error: function( objRequest )
							 {
								alert(objRequest);
							 }
							
							});
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
            });
  });
    
       
    //Admin user wants to delete an employee
  $(document).ready(function () {
    "use strict";
    $("#delEmp").click(function () {
        adminDeleteEmp();
            });
  });
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
       clearEmpForm();
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
                document.getElementById("adminUserAddingFTEmp").style.visibility = "visible";
                $("#adminUserAddingFTEmp").fadeTo(1000, 1);
                document.getElementById("employeeTypeFT").innerHTML = "Fulltime Employee";
            });
        }
        else
        {
            if(maintaineneceType=="timeCardEmp")
            {
              $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
                  document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
                  document.getElementById("adminUserTimeCard").style.visibility = "visible";
                $("#adminUserTimeCard").fadeTo(1000, 1);
              });
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
                else
                {
                     if(maintaineneceType=="deleteEmployee")
                     {
                         $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
                  document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
                  document.getElementById("adminUserDeleteEmp").style.visibility = "visible";
                $("#adminUserDeleteEmp").fadeTo(1000, 1);
              });
                     }
                }
            }
        }
        //clear the previous form data
       clearEmpForm();
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
     clearEmpForm();
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
                document.getElementById("adminUserAddingPTEmp").style.visibility = "visible";
                $("#adminUserAddingPTEmp").fadeTo(1000, 1);
                 document.getElementById("employeeTypePT").innerHTML = "Parttime Employee";
            });
        }
        else
        {
            if(maintaineneceType=="timeCardEmp")
            {
              $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
                  document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
                  document.getElementById("adminUserTimeCard").style.visibility = "visible";
                $("#adminUserTimeCard").fadeTo(1000, 1);
              });
            }
        }
    //clear the previous form data
     clearEmpForm();
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
    clearEmpForm();
    document.getElementById("seasonYearText").value = "";
    document.getElementById("seasonTypeDD").value = "winter"; 
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
                document.getElementById("adminUserAddingSEmp").style.visibility = "visible";
                $("#adminUserAddingSEmp").fadeTo(1000, 1);
                document.getElementById("employeeTypeS").innerHTML = "Seasonal Employee";
            });
        }
        else
        {
            if(maintaineneceType=="timeCardEmp")
            {
              $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
                  document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
                  document.getElementById("adminUserTimeCard").style.visibility = "visible";
                $("#adminUserTimeCard").fadeTo(1000, 1);
              });
            }
        }
        
    //clear the previous form data
    clearEmpForm();
    document.getElementById("seasonYearText").value = "";
    document.getElementById("seasonTypeDD").value = "winter"; 
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
              $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 0, function (){
                  document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "hidden";
                  document.getElementById("adminUserTimeCard").style.visibility = "visible";
                $("#adminUserTimeCard").fadeTo(1000, 1);
              });
            }
        }

    //clear the previous form data
    clearEmpForm();
    document.getElementById("seasonYearText").value = "";
    document.getElementById("seasonTypeDD").value = "winter"; 
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
        });
    });
});
    
    
$(document).ready(function () {
    "use strict";
    $("#goBackTimeCard").click(function () {
        if( document.getElementById("gentimeCardFTPT").style.visibility == "visible")
        {
            $("#gentimeCardFTPT").fadeTo(1000, 0, function () {
            document.getElementById("gentimeCardFTPT").style.visibility = "hidden";
            document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "visible";
            $("#selectEmpTypeDivForGenUser").fadeTo(1000, 1);
            });
        }
//        else
//        {
//            if(document.getElementById("gentimeCardS").style.visibility == "visible")
//            {
//                alert("sdfsd");
//                $("#gentimeCardS").fadeTo(1000, 0, function () {
//                document.getElementById("gentimeCardS").style.visibility = "hidden";
//                document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "visible";
//                $("#selectEmpTypeDivForGenUser").fadeTo(1000, 1);
//                });
//            }
//        }
    });
});
    
    $(document).ready(function () {
    "use strict";
    $("#goBackTimeCardAdmin").click(function () {
        $("#adminUserTimeCard").fadeTo(1000, 0, function () {
            document.getElementById("adminUserTimeCard").style.visibility = "hidden";
            document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
            $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
        });
    });
});
    
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
    
    
//$(document).ready(function () {
//    "use strict";
//    $("#cancelImageTimeCardAdmin").click(function () {
//        $("#adminUserTimeCard").fadeTo(1000, 0, function () {
//            document.getElementById("adminUserTimeCard").style.visibility = "hidden";
//        });
//    });
//});
    

  
$(document).ready(function () {
    "use strict";
    $("#empMaintainence").click(function () {
        if(userAction=="reports")
        {
            hideReportsButton();
        }
        else
        {
            if(userAction=="systemAdmin")
            {
                hideSystemButtons();
            }
            else
            {
                if(userAction=="search")
                {

                }
            }
        }
        userAction ="maintainence";
        hideAllAdminForms();
        showMaintainenceButtons();
    });   
});
    
$(document).ready(function () {
    "use strict";
    $("#empReportsBtn").click(function () {
        
        if(userAction=="maintainence")
        {
            hideMaintaineneceButtons();
        }
        else
        {
            if(userAction=="search")
            {
                
            }
            else
            {
                if(userAction=="systemAdmin")
                {
                    hideSystemButtons();
                }
            }
        }
        hideAllAdminForms();
        showReportsButtons();
        userAction ="reports";
    });   
});
    
$(document).ready(function () {
    "use strict";
    $("#adminBtn").click(function () {
        
        if(userAction=="maintainence")
        {
            hideMaintaineneceButtons();
        }
        else
        {
            if(userAction=="search")
            {
                
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
        userAction ="systemAdmin";
        showAdminSystemButtons();
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
    document.getElementById("delEmp").style.visibility = "visible";
   // document.getElementById("timeCardEmpAdminUser").style.visibility = "visible";
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
     $("#delEmp").animate(
        {
            width: "15%"
        },
        "slow"
    );
//     $("#timeCardEmpAdminUser").animate(
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
       $("#delEmp").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("delEmp").style.visibility = "hidden";
        });
//       $("#timeCardEmpAdminUser").animate(
//            {
//                width: "0%"
//            },
//            600,
//            function () {
//                document.getElementById("timeCardEmpAdminUser").style.visibility = "hidden";
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
    if(document.getElementById("adminUserAddingPTEmp").style.visibility == "visible")
    {
        $("#adminUserAddingPTEmp").fadeTo(1000, 0, function () {
            document.getElementById("adminUserAddingPTEmp").style.visibility = "hidden";
        });
    }

    if(document.getElementById("adminUserAddingSEmp").style.visibility == "visible")
    {
        $("#adminUserAddingSEmp").fadeTo(1000, 0, function () {
            document.getElementById("adminUserAddingSEmp").style.visibility = "hidden";
        });
    }

    if(document.getElementById("adminUserAddingCEmp").style.visibility == "visible")
    {
        $("#adminUserAddingCEmp").fadeTo(1000, 0, function () {
            document.getElementById("adminUserAddingCEmp").style.visibility = "hidden";
        });
    }
//    if(document.getElementById("adminUserTimeCard").style.visibility == "visible")
//    {
//        $("#adminUserTimeCard").fadeTo(1000, 0, function () {
//            document.getElementById("adminUserTimeCard").style.visibility = "hidden";
//        });
//    }
    if(document.getElementById("adminUserDeleteEmp").style.visibility == "visible")
    {
        $("#adminUserDeleteEmp").fadeTo(1000, 0, function () {
            document.getElementById("adminUserDeleteEmp").style.visibility = "hidden";
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
}
 

function goBack()
{
    if(document.getElementById("adminUserAddingFTEmp").style.visibility == "visible")
    {
        $("#adminUserAddingFTEmp").fadeTo(1000, 0, function () {
            document.getElementById("adminUserAddingFTEmp").style.visibility = "hidden";
            document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
            $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
        });
    }
    else
    {
        if(document.getElementById("adminUserAddingPTEmp").style.visibility == "visible")
        {
            $("#adminUserAddingPTEmp").fadeTo(1000, 0, function () {
                document.getElementById("adminUserAddingPTEmp").style.visibility = "hidden";
                document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
                $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
            });
        }
        else
        {
             if(document.getElementById("adminUserAddingSEmp").style.visibility == "visible")
            {
                $("#adminUserAddingSEmp").fadeTo(1000, 0, function () {
                    document.getElementById("adminUserAddingSEmp").style.visibility = "hidden";
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
    if(document.getElementById("adminUserAddingFTEmp").style.visibility == "visible")
    {
        $("#adminUserAddingFTEmp").fadeTo(1000, 0, function () {
            document.getElementById("adminUserAddingFTEmp").style.visibility = "hidden";
        });
    }
    else
    {
        if(document.getElementById("adminUserAddingPTEmp").style.visibility == "visible")
        {
             $("#adminUserAddingPTEmp").fadeTo(1000, 0, function () {
                document.getElementById("adminUserAddingPTEmp").style.visibility = "hidden";
            });
        }
        else
        {
             if(document.getElementById("adminUserAddingSEmp").style.visibility == "visible")
            {
                 $("#adminUserAddingSEmp").fadeTo(1000, 0, function () {
                    document.getElementById("adminUserAddingSEmp").style.visibility = "hidden";
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
    
function submitAdminContractEmp()
{
    //start the validation

    //if no errors then goto this page
    location.href = "Database.php";
}

function submitAdminPartTimeEmp()
{
    //start the validation

    //if no errors then goto this page
    location.href = "Database.php";
}
function submitAdminSeasonEmp()
{
   //start the validation

    //if no errors then goto this page
    location.href = "Database.php";
}
function submitTimeCardForFTPT()
{
    alert("submit time card for ft and pt");
}
function submitTimeCardForS()
{
    alert("submit time card for seasonal");
}
function submitGenEmp()
{
    if(genUserEmpType=="FT")
    {
        alert("full time");
    }
    else
    {
        if(genUserEmpType=="PT")
        {
            alert("part time");
        }
        else
        {
            if(genUserEmpType=="ST")
            {
                alert("seasonal time");
            }
        }
    }
}
function goBackTimeCardS()
    {
         if(document.getElementById("gentimeCardS").style.visibility == "visible")
            {
                $("#gentimeCardS").fadeTo(1000, 0, function () {
                document.getElementById("gentimeCardS").style.visibility = "hidden";
                document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "visible";
                $("#selectEmpTypeDivForGenUser").fadeTo(1000, 1);
                });
            }
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
    <button id="delEmp" class="buttonStyles">Delete Employee</button>
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
                    <label id="fnameLabel" class="fnameL">First Name</label><input type="text" id="fnameText" name="fnameTextG" class="fname"/>
                    <label id="lnameLabel" class="lnameL">Last Name</label><input type="text" id="lnameText"  name="lnameTextG" class="lname"/>
                    <label id="companyLabel" class="companyL">Company</label><input type="text" id="compText"  name="compTextG" class="company"/>
                    <label id="sinLabel" class="sinL">SIN</label><input type="text" id="sinText" class="sin" name="sinTextG" />
                    <label id="dobLabel" class="dobL">Date OF Birth</label><input type="text" id="dobText" class="dob" name="dobTextG" />
                    <label id="dohLabel" class="dohL">Date Of Hire</label><input type="text" id="dohText" class="doh" name="dohTextG" />
                   
                    <label id="seasonYearLabel" class="seasonyearL">Season Year</label><input type="text" id="seasonYearText" class="seasonyear" name="seasonYearTextG" />
                    <label id="seasonTypeLabel" class="seasonLGen">Season</label>
                      <select id="seasonTypeDD" class="seasonTypeGen" name="seasonTypeDDG">
                        <option value="winter">Winter</option>
                        <option value="spring">Spring</option>
                        <option value="fall">Fall</option>
                        <option value="summer">Summer</option>
                    </select> 
                    <input type="hidden" name="needCompletion" value="Y">
                    <button type="button" class="submitBtn" id="genUserAddEmp" onclick="submitGenEmp()">Submit</button>
            </form>
            <input type="image" src="cancel.png" id="cancelImageAddEmp" class="cancelImage"/>
            <button id="goBack" class="backBtn">Back</button> 
          </div>
      
           <div id="adminUserAddingFTEmp" class="centerDiv">
            <form class="adminAddEmpForm">
                <label id="employeeTypeFT" class="employeeType"></label>
                <label id="fnameLabelAdmin" class="fnameL">First Name</label><input type="text" id="fnameTextAdmin" name="fnameTextAdmin" class="fname"/>
                <label id="lnameLabelAdmin" class="lnameL">Last Name</label><input type="text" id="lnameTextAdmin"  name="lnameTextAdmin" class="lname"/>
                <label id="companyLabelAdmin" class="companyL">Company</label><input type="text" id="compTextAdmin"  name="compTextAdmin" class="company"/>
                <label id="sinLabelAdmin" class="sinL">SIN</label><input type="text" id="sinTextAdmin"  name="sinTextAdmin" class="sin"/>
                <label id="dobLabelAdmin" class="dobL">Date OF Birth</label><input type="text" id="dobTextAdmin"  name="dobTextAdmin" class="dob"/>
                <label id="dohLabelAdmin" class="dohL">Date Of Hire</label><input type="text" id="dohTextAdmin"  name="dohTextAdmin" class="doh"/>
                <label id="dotLabelAdmin">Date Of Termination</label><input type="text" id="dotTextAdmin"  name="dotTextAdmin" class="dot"/>
                <label id="salaryLabelAdmin">Salary</label><input type="text"  name="salary" id="salary"/>
                <button type="button" class="submitBtn" id="btnSubmitFT" onclick="submitAdminFullTimeEmp()">Submit</button>
            </form>
            <input type="image" src="cancel.png" onclick="cancelImage()" class="cancelImage"/>
            <button class="backBtn" onclick="goBack()">Back</button> 
             
          </div>
      
        <div id="adminUserAddingPTEmp" class="centerDiv">
            <form class="adminAddEmpForm">
                <label id="employeeTypePT" class="employeeType"></label>
                <label id="fnameLabelAdmin" class="fnameL">First Name</label><input type="text" id="fnameTextAdmin" name="fnameTextAdmin" class="fname"/>
                <label id="lnameLabelAdmin" class="lnameL">Last Name</label><input type="text" id="lnameTextAdmin" name="lnameTextAdmin" class="lname"/>
                <label id="companyLabelAdmin" class="companyL">Company</label><input type="text" id="compTextAdmin" name="compTextAdmin" class="company"/>
                <label id="sinLabelAdmin" class="sinL">SIN</label><input type="text" id="sinTextAdmin"  name="sinTextAdmin" class="sin"/>
                <label id="dobLabelAdmin" class="dobL">Date OF Birth</label><input type="text" id="dobTextAdmin" name="dobTextAdmin"  class="dob"/>
                <label id="dohLabelAdmin" class="dohL">Date Of Hire</label><input type="text" id="dohTextAdmin"  name="dohTextAdmin" class="doh"/>
                <label id="dotLabelAdmin">Date Of Termination</label><input type="text" id="dotTextAdmin"  name="dotTextAdmin" class="dot"/>
                <label id="hourlyRateLabelAdmin">Hourly Rate</label><input type="text"  name="hourlyRate" id="hourlyRate"/>
                <button type="button" class="submitBtn" id="btnSubmitPT" onclick="submitAdminPartTimeEmp()">Submit</button>
            </form>
            <input type="image" src="cancel.png" onclick="cancelImage()" class="cancelImage"/>
            <button class="backBtn" onclick="goBack()">Back</button> 
           
          </div>
      
          <div id="adminUserAddingSEmp" class="centerDiv">
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
      
      
        <div id="adminUserAddingCEmp" class="centerDiv">   
            <form class="adminAddEmpForm">
                <label id="employeeTypeC" class="employeeType"></label>
                <label id="lnameLabelAdminC">Last Name</label><input type="text" id="lnameTextAdminC" name="lnameTextAdminC"/>
                <label id="companyLabelAdminC">Company</label><input type="text" id="compTextAdminC" name="compTextAdminC"/>
                <label id="sinLabelAdminC">SIN</label><input type="text" id="sinTextAdminC" name="sinTextAdminC"/>
                <label id="dobLabelAdminC">Date OF Birth</label><input type="text" id="dobTextAdminC" name="dobTextAdminC"/>
                <label id="csdLabelAdminC">Contract Start Date</label><input type="text" id="csdTextAdminC" name="csdTextAdminC"/>
                <label id="cstopDLabelAdminC">Contract Stop Date</label><input type="text" id="cstopDTextAdminC" name="cstopDTextAdminC"/>
                <label id="contractAmountLabelC">Contract Amount</label><input type="text" id="contractAmountC" name="contractAmountC"/>
                <button type="submit" class="submitBtn" id="btnSubmitC">Submit</button>
                <input type="hidden" name="adminEmpType" value="CONTRACT">
            </form>
            <input type="image" src="cancel.png" onclick="cancelImage()" class="cancelImage"/>
            <button class="backBtn" onclick="goBack()">Back</button>       
          </div>
      
<!--      Admin user modifying an employee-->
       <div id="adminModifyingEmp" class="centerDiv"> 
           <form class="adminAddEmpForm">
                <label>modify emp</label>
           </form>
          </div>
      
          <div id="gentimeCardFTPT" class="centerDiv">
            <label id="sinLabelTC" class="timeCardLabel">SIN</label><input type="text" id="sinTextGenTC" class="timeCardText" name="sinTextGen">
            <label id="compLabelTC" class="timeCardLabel">Company Name</label><input type="text" id="companyTextGenTC" class="timeCardText" name="companyTextGen">
            <label id="monLabelTC" class="timeCardLabel">Monday</label><input type="text" id="monTextTC" class="timeCardText" name="monText">
            <label id="tueLabelTC" class="timeCardLabel">Tuesday</label><input type="text" id="tueTextTC" class="timeCardText" name="tueText">
            <label id="wedLabelTC" class="timeCardLabel">Wednesday</label><input type="text" id="wedTextTC" class="timeCardText" name="wedText">
            <label id="thurLabelTC" class="timeCardLabel">Thursday</label><input type="text" id="thurTextTC" class="timeCardText" name="thurText">
            <label id="friLabelTC" class="timeCardLabel">Friday</label><input type="text" id="friTextTC" class="timeCardText" name="friText">
            <label id="satLabelTC" class="timeCardLabel">Saturday</label><input type="text" id="satTextTC" class="timeCardText" name="satText">
            <label id="sunLabelTC" class="timeCardLabel">Sunday</label><input type="text" id="sunTextTC" class="timeCardText" name="sunText">
              <button type="button" id="submitTimeCardBtnFTPT" onclick="submitTimeCardForFTPT()">Submit</button>  
            <input type="image" src="cancel.png" id="cancelImageTimeCard" class="cancelImage">
            <button id="goBackTimeCard" class="backBtn">Back</button> 
          </div>
      
        <div id="gentimeCardS" class="centerDiv">
            <label id="sinLabelTCS" class="seasonalTimeCardLabel">SIN</label><input type="text" id="sinTextGenTCS" class="timeCardTextS" name="sinTextGenS">
            <label id="compLabelTCS" class="seasonalTimeCardLabel">Company Name</label><input type="text" id="companyTextGenTCS" class="timeCardTextS" name="companyTextGenS">
            <label id="pieceText" style="position:absolute;left:66%;top:23%;">Number of Pieces</label>
            <label id="monLabelTCS" class="seasonalTimeCardLabel">Monday</label><input type="text" id="monTextTCS" class="timeCardTextS" name="monTextS"><input type="text" id="monPieces" class="piecesText">
            <label id="tueLabelTCS" class="seasonalTimeCardLabel">Tuesday</label><input type="text" id="tueTextTCS" class="timeCardTextS" name="tueTextS"><input type="text" id="tuePieces" class="piecesText">
            <label id="wedLabelTCS" class="seasonalTimeCardLabel">Wednesday</label><input type="text" id="wedTextTCS" class="timeCardTextS" name="wedTextS"><input type="text" id="wedPieces" class="piecesText">
            <label id="thurLabelTCS" class="seasonalTimeCardLabel">Thursday</label><input type="text" id="thurTextTCS" class="timeCardTextS" name="thurTextS"><input type="text" id="thurPieces" class="piecesText">
            <label id="friLabelTCS" class="seasonalTimeCardLabel">Friday</label><input type="text" id="friTextTCS" class="timeCardTextS" name="friTextS"><input type="text" id="friPieces" class="piecesText">
            <label id="satLabelTCS" class="seasonalTimeCardLabel">Saturday</label><input type="text" id="satTextTCS" class="timeCardTextS" name="satTextS"><input type="text" id="satPieces" class="piecesText">
            <label id="sunLabelTCS" class="seasonalTimeCardLabel">Sunday</label><input type="text" id="sunTextTCS" class="timeCardTextS" name="sunTextS"><input type="text" id="sunPieces" class="piecesText">
              <button type="button" id="submitTimeCardBtnS" onclick="submitTimeCardForS()">Submit</button>  
            <input type="image" src="cancel.png" id="cancelImageTimeCard" class="cancelImage">
            <button id="goBackTimeCard" class="backBtn" onclick="goBackTimeCardS()">Back</button> 
        </div>
      
        <div id="adminUserTimeCard" class="centerDiv">
            <label id="ok">admin time card</label>
            <input type="image" src="cancel.png" id="cancelImageTimeCardAdmin" class="cancelImage"/>
            <button id="goBackTimeCardAdmin" class="backBtn">Back</button> 
          </div>
      
        <div id="adminUserDeleteEmp" class="centerDiv">
            <label id="ok">admin delete card</label>
            <input type="image" src="cancel.png" id="cancelImageTimeCardAdmin" class="cancelImage"/>
            <button id="goBackTimeCardAdmin" class="backBtn">Back</button> 
          </div>
      
      <div id="searchDiv" class="centerDiv">
        <label id="userAction" class="employeeType"></label>
        <label id="searchFnameLabel">First Name</label><input type="text" id="searchFnameText" name="searchFnameText">
        <label id="searchLnameLabel">Last Name</label><input type="text" id="searchLnameText" name="searchLnameText">
        <label id="searchSinLabel">SIN</label><input type="text" id="searchSinText" name="searchSinText">
        <button id="searchEmpBtn">Search</button>
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
