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
#searchResult{
position:absolute;
    left :10%;
    top:40%;
    height:30%;
    width:30%;
    color:blue;
    background-color:white;
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
var genUserAction="maintainence";
var esum = 0;
var enumbers = "";
var checknum = 0;
var ch_sum = "";
var checkdigit = 0;
var sin = "";
var lastdigit = 0;
    
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
        alert("nnnn");
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
            });
  });
    
       
    //Admin user wants to delete an employee
  $(document).ready(function () {
    "use strict";
    $("#delEmp").click(function () {
        adminDeleteEmp();
            });
  });
    
function clearSearchSpans()
{
    document.getElementById("searchSpanGenFname").innerHTML = "";
    document.getElementById("searchSpanGenLname").innerHTML = "";
    document.getElementById("searchSpanGenSin").innerHTML = "";
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
                if(!checkSin(document.getElementById("searchSinText").value))
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
		
	
		alert(sendData);
	 $.ajax({url: "Database.php",
							type: "GET",
							async:true,
							data : sendData,
							success:function(result)
							{
								alert(result);
								$("#searchResultDiv").html(result);
							},
							 error: function( objRequest )
							 {
								alert(objRequest);
							 }
							
							});
		
	}


//function SelectEmp(EmployeeID,EmployeeType,CompanyID,PersonID)
function SelectEmp(EmployeeID)
{
		alert("fsfjjlsjfsjfkljk");
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
							alert(result);	$("#searchResultDiv").html(result);
							},
							 error: function( objRequest )
							 {
								alert(objRequest);
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
     
    document.getElementById("seasonYearText").value = "";
    document.getElementById("seasonTypeDD").value = "winter"; 
    });
});
    
    
  $(document).ready(function () {
    "use strict";
    $("#activeEmpReportAdmin").click(function () {
        //saveFileContent();
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
     document.getElementById("seasonTypeDD").value = "winter";
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
       saveFileContent(); 
    });
 });
    
    
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
       $("#delEmp").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("delEmp").style.visibility = "hidden";
        });
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
       createJSONObjectTimeCardGen("enterTimeCard","SN");
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

    if(!checkSin(document.getElementById("sinTextGenTCS").value))
    {
        //show error message
        document.getElementById("sinGenSpanS").innerHTML = "*Invalid Data";
        boolToSubmit="false";
    } 
    if(!checkCompany(document.getElementById("companyTextGenTCS").value))
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
    if(!checkCompany(document.getElementById("compText").value))
    {
        //show error message
        document.getElementById("companyGenSpan").innerHTML = "*Invalid Data";
         boolToSubmit="false";
    } 
    if(!checkSin(document.getElementById("sinText").value))
    {
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
    if(!checkSin(document.getElementById("sinTextGenTC").value))
    {
        //show error message
        document.getElementById("sinTCGenSpan").innerHTML = "*Invalid Data";
        boolToSubmit="false";
    } 
    if(!checkCompany(document.getElementById("companyTextGenTC").value))
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
                    alert("done");
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
							
								alert(result);
							},
							 error: function( objRequest )
							 {
								alert(objRequest);
							 }
							
							});
}
    
    
function createJSONObjectTimeCardGen(userAction,empType)
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
							alert(result);
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
								alert(objRequest);
							 }
							
							});
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
    
    
function checkFname(inputValue)
{

	var bName = true;
	var patt = /^[a-zA-Z'.]{1,40}$/;
	var nameCheck = inputValue;

	if(nameCheck == null || nameCheck == "")
	{
		bName = false;
	}
	else
	{
		if(inputValue.match(patt) == null)
		{
			bName = false;
		}
	}
	return bName;
}  
    
//validation for last name
function checkLname(inputValue)
{

	var bName = true;
	var patt = /^[a-zA-Z'.]{1,40}$/;
	var nameCheck = inputValue;

	if(nameCheck == null || nameCheck == "")
	{
		bName = false;
	}
	else
	{
		if(inputValue.match(patt) == null)
		{
			bName = false;
		}
	}
	return bName;
}    
//validation for comapny
function checkCompany(inputValue)
{

	var bCompany = true;
	var companyCheck = inputValue;

	if(companyCheck == null || companyCheck == "")
	{
		bCompany = false;
	}
	return bCompany;
}   
    
//validaiton for date of birth
function checkDateOfBirth(value)
{
	var bDate  = true;
	var dateReg = /^\d{4}-\d{2}-\d{2}$/;
	
	if(value == null || value == "")
	{
		bDate = false;
	}
	else
	{
		if(value.match(dateReg) != null)
		{
			var regs = value.split("-");
			var yyyy = parseInt(regs[0]);
			var mm = parseInt(regs[1]);
			var dd = parseInt(regs[2]);

			if(yyyy < 1902 || yyyy > (new Date().getFullYear())) 
			{
	          bDate = false;
	        }
	        if (mm < 1 || mm > 12) 
	        {
	        	bDate = false;
	        }
	        if (dd < 1 || dd > 31) 
	        {
	        	bDate = false;
	        }
	        else
	        {
	        	if(mm == 2 && dd > 28)
	        	{
	        		bDate = false;
	        	}
	        }				
		}
		else
		{
			bDate = false;	
		}
	}
	return bDate;	
}
//validation for date of hire
function checkDateOfHire(value)
{
	var bDate  = true;
	var dateReg = /^\d{4}-\d{2}-\d{2}$/;
	
	if(value == null || value == "")
	{
		bDate = false;
	}
	else
	{
		if(value.match(dateReg) != null)
		{
			var regs = value.split("-");
			var yyyy = parseInt(regs[0]);
            
			var mm = parseInt(regs[1]);
			var dd = parseInt(regs[2]);

			if(yyyy < 1902 || yyyy > (new Date().getFullYear())) 
			{
	          bDate = false;
	        }
	        if (mm < 1 || mm > 12) 
	        {
	        	bDate = false;
	        }
	        if (dd < 1 || dd > 31) 
	        {
	        	bDate = false;
	        }
	        else
	        {
	        	if(mm == 2 && dd > 28)
	        	{
	        		bDate = false;
	        	}
	        }				
		}
		else
		{
			bDate = false;	
		}
	}
	return bDate;	
}
//validaiton for season year
function checkSeasonYear(value)
{
	var bSeasonYear = true;
	var yearReg = /^\d{4}$/;

	if(value == null || value == "")
	{
		bSeasonYear = false;
	}
	else
	{
		if(value.match(yearReg) != null)
		{
			var yyyy = parseInt(value);
			if(yyyy < 1902 || yyyy > (new Date().getFullYear())) 
			{
				bSeasonYear = false;
			}
		}
		else
		{
			bSeasonYear = false;
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
    
function saveFileContent()
{	
    if (window.XMLHttpRequest)	
    {
      // code for IE7+, Firefox, Chrome, Opera, SafariCreate
      xmlhttp=new XMLHttpRequest();
    }
    else
    {
      // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=sampleCallBack;
    xmlhttp.open("GET","Database.php",true);
    xmlhttp.send(null);
}
    
function sampleCallBack()
{
    if(xmlhttp.readyState==4)
    {

            document.getElementById("reportsDiv").style.visibility = "visible";
            $("#reportsDiv").fadeTo(1000, 1);
        
      document.getElementById("reportsDiv").innerHTML = xmlhttp.responseText;
    }
}

function checkSin(value)
{
	esum = 0;
    enumbers = "";
    checknum = 0;
    ch_sum = "";
    checkdigit = 0;
    sin = "";
    lastdigit = 0;
	var bCheckSinResult = false;
	
    if (isNum(value.value))
	{
		bCheckSinResult = true;
	}

	return bCheckSinResult;
}

function isNum(text) 
{
	if(text == "" || text == null || text.length == 0) 
	{
		return false;
	}
	inStr = text;
	sin = text;
	inLen = inStr.length;

	if (inLen > 11 || inLen < 11) 
	{
		return false;
	}

	for (var i = 0; i < text.length; i++) 
	{
		var ch = text.substring(i, i + 1)

		if ((ch < "0" || "9" < ch) && (ch != " "))  
		{
			return false;
		}
		if ((i == 3 || i == 7) && (ch != " ")) 
		{
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
                    <label id="fnameLabel" class="fnameL">First Name</label><input type="text" id="fnameText" name="fnameTextG" class="fname"/><span style="position:absolute; top:10%; left:70%;" id="fnameGenSpan"></span>
                    <label id="lnameLabel" class="lnameL">Last Name</label><input type="text" id="lnameText"  name="lnameTextG" class="lname"/><span style="position:absolute; top:20%; left:70%;" id="lnameGenSpan"></span>
                    <label id="companyLabel" class="companyL">Company</label><input type="text" id="compText"  name="compTextG" class="company"/><span style="position:absolute; top:30%; left:70%;" id="companyGenSpan"></span>
                    <label id="sinLabel" class="sinL">SIN</label><input type="text" id="sinText" class="sin" name="sinTextG" /><span style="position:absolute; top:40%; left:70%;" id="sinGenSpan"></span>
                    <label id="dobLabel" class="dobL">Date OF Birth</label><input type="text" id="dobText" class="dob" name="dobTextG" /><span style="position:absolute; top:50%; left:70%;" id="dobGenSpan"></span>
                    <label id="dohLabel" class="dohL">Date Of Hire</label><input type="text" id="dohText" class="doh" name="dohTextG" />
                   <span style="position:absolute; top:60%; left:70%;" id="dohGenSpan"></span>
                    <label id="seasonYearLabel" class="seasonyearL">Season Year</label><input type="text" id="seasonYearText" class="seasonyear" name="seasonYearTextG" /> <span style="position:absolute; top:70%; left:70%;" id="seasonYearGenSpan"></span>
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
        <label id="searchFnameLabel">First Name</label><input type="text" id="searchFnameText" name="searchFnameText"><span style="position:absolute; top:10%; left:70%;" id="searchSpanGenFname"></span>
        <label id="searchLnameLabel">Last Name</label><input type="text" id="searchLnameText" name="searchLnameText"><span style="position:absolute; top:20%; left:70%;" id="searchSpanGenLname"></span>
        <label id="searchSinLabel">SIN</label><input type="text" id="searchSinText" name="searchSinText"><span style="position:absolute; top:30%; left:70%;" id="searchSpanGenSin"></span>
        <button id="searchEmpBtn">Search</button>
      <div id="searchResultDiv" style="position:absolute; width:100%;top:0px;left:0px;"></div>   
      </div>

      <div id="reportsDiv" class="centerDiv"></div>
      
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
