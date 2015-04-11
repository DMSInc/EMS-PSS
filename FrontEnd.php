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
}
#appLabel{
  position:absolute;
  left: 2%;
  top: -30%;
  font-size: 300%;
  color: white;
}
.middleDivBtn{
  background-color: #A5B1B2   ;
  //background-color: white;
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
#timeCardEmpAdminUser{
  position:absolute;
  top: 61%;
  background-color: #339966;
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
    //background-color:#336666 ;
    opacity: 0;
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
#genUserTimeCard{
visibility:hidden;
}
        .submitBtn{
        position:absolute;
            left:40%;
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
    
   $(document).ready(function () {
    userType="<?php echo $_SESSION["userType"]; ?>";
       if(userType==="A")
       {
           document.getElementById("addEmpAdminUser").style.visibility = "visible";
           document.getElementById("modEmp").style.visibility = "visible";
           document.getElementById("delEmp").style.visibility = "visible";
           document.getElementById("timeCardEmpAdminUser").style.visibility = "visible";
           document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
       }
       else
       {
           if(userType==="G")
           {
               document.getElementById("addEmp").style.visibility = "visible";
               document.getElementById("timeCardEmp").style.visibility = "visible";
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
                if(document.getElementById("genUserTimeCard").style.visibility == "visible")
                {        
                     $("#genUserTimeCard").fadeTo(1000, 0,function(){
                         document.getElementById("genUserTimeCard").style.visibility = "hidden";
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
                //check which time card divs are open
                if(document.getElementById("adminUserTimeCard").style.visibility == "visible")
                {        
                     $("#adminUserTimeCard").fadeTo(1000, 0,function(){
                         document.getElementById("adminUserTimeCard").style.visibility = "hidden";
                         //show card time divs
                            document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
                            $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
                             document.getElementById("addEmployeeLabelAdmin").innerHTML="Add Employee Admin";
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
                                document.getElementById("addEmployeeLabelAdmin").innerHTML="Add Employee Admin";
                     });
                    }
                }
            }
        }           
    }
     maintaineneceType = "addEmployee";
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
    
    
function timeCardDivsAdmin()
{
    
    if(maintaineneceType=="")
    {
        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);   
        document.getElementById("addEmployeeLabelAdmin").innerHTML="Time Card Admin";
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
                if(document.getElementById("adminUserAddingFTEmp").style.visibility == "visible")
                {        
                     $("#adminUserAddingFTEmp").fadeTo(1000, 0,function(){
                         document.getElementById("adminUserAddingFTEmp").style.visibility = "hidden";
                         //show card time divs
                        document.getElementById("selectEmpTypeDivForAdminUser").style.visibility = "visible";
                        $("#selectEmpTypeDivForAdminUser").fadeTo(1000, 1);
document.getElementById("addEmployeeLabelAdmin").innerHTML="Time Card Admin";
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
    document.getElementById("addEmployeeLabelAdmin").innerHTML="Time Card Admin";
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
        document.getElementById("addEmployeeLabelAdmin").innerHTML="Time Card Admin";
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
                                    document.getElementById("addEmployeeLabelAdmin").innerHTML="Time Card Admin";
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
                                        document.getElementById("addEmployeeLabelAdmin").innerHTML="Time Card Admin";
                                 });
                                }
                            }
                        }
                    }
                }
            }
        }     
    }
    maintaineneceType = "timeCardEmp";
}

    
    
//Admin user wants to add an employee
  $(document).ready(function () {
    "use strict";
    $("#addEmpAdminUser").click(function () {
        addEmpDivsAdmin();
            });
  });
        
//Admin user wants to add time card entry for an employee 
$(document).ready(function () {
    "use strict";
        $("#timeCardEmpAdminUser").click(function () { 
           timeCardDivsAdmin(); 
        });
});

    
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
        employeeType="FT";
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
                  document.getElementById("genUserTimeCard").style.visibility = "visible";
                $("#genUserTimeCard").fadeTo(1000, 1);
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
        }
        //clear the previous form data
       clearEmpForm();
    });
});
   

        
//general user selected to add part time employee .    
$(document).ready(function () {
    "use strict";
    $("#genUserChoicePTEmp").click(function () {
        employeeType="PT";
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
                  document.getElementById("genUserTimeCard").style.visibility = "visible";
                $("#genUserTimeCard").fadeTo(1000, 1);
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
        employeeType="ST";
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
                  document.getElementById("genUserTimeCard").style.visibility = "visible";
                $("#genUserTimeCard").fadeTo(1000, 1);
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
    
    
    
//clear all the previous form data
function clearEmpForm(){   

}
    
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
        $("#genUserTimeCard").fadeTo(1000, 0, function () {
            document.getElementById("genUserTimeCard").style.visibility = "hidden";
            document.getElementById("selectEmpTypeDivForGenUser").style.visibility = "visible";
            $("#selectEmpTypeDivForGenUser").fadeTo(1000, 1);
        });
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
        $("#genUserTimeCard").fadeTo(1000, 0, function () {
            document.getElementById("genUserTimeCard").style.visibility = "hidden";
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
    $("#cancelImageTimeCardAdmin").click(function () {
        $("#adminUserTimeCard").fadeTo(1000, 0, function () {
            document.getElementById("adminUserTimeCard").style.visibility = "hidden";
        });
    });
});
    
$(document).ready(function () {
    "use strict";
    $("#empMaintainence").click(function () {
        
        
        //remmove the genral and admin user code, because it does not exist.
       /* $("#generalUser").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("generalUser").style.visibility = "hidden";
            }
        );*/

       /* $("#adminUser").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("adminUser").style.visibility = "hidden"; 
                document.getElementById("addEmp").style.visibility = "visible";
                document.getElementById("modEmp").style.visibility = "visible";
                document.getElementById("delEmp").style.visibility = "visible";
                document.getElementById("timeCardEmp").style.visibility = "visible";
                $("#addEmp").animate(
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
                $("#timeCardEmp").animate(
                    {
                        width: "15%"
                    },
                    "slow"
                );
            }
        );*/
    });
});


$(document).ready(function () {
    "use strict";
    $("#userBtn").click(function () {
        $("#addEmp").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("addEmp").style.visibility = "hidden";
            }
        );
        $("#delEmp").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("delEmp").style.visibility = "hidden";
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
        $("#timeCardEmp").animate(
            {
                width: "0%"
            },
            600,
            function () {
                document.getElementById("timeCardEmp").style.visibility = "hidden";
                document.getElementById("generalUser").style.visibility = "visible";
                document.getElementById("adminUser").style.visibility = "visible";
                $("#generalUser").animate(
                    {
                        width: "15%"
                    },
                    600
                );
                $("#adminUser").animate(
                    {
                        width: "15%"
                    },
                    600
                );
            }
        );
    });
});

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
    <button id="timeCardEmpAdminUser" class="buttonStyles">Time Card</button>
<!--    Buttons for General User-->
    <button id="addEmp" class="buttonStyles">Add Employee</button>
    <button id="timeCardEmp" class="buttonStyles">Time Card</button>
      
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
            <label id="fnameLabel" class="fnameL">First Name</label><input type="text" id="fnameText" class="fname"/>
            <label id="lnameLabel" class="lnameL">Last Name</label><input type="text" id="lnameText" class="lname"/>
            <label id="companyLabel" class="companyL">Company</label><input type="text" id="compText" class="company"/>
            <label id="sinLabel" class="sinL">SIN</label><input type="text" id="sinText" class="sin"/>
            <label id="dobLabel" class="dobL">Date OF Birth</label><input type="text" id="dobText" class="dob"/>
            <label id="dohLabel" class="dohL">Date Of Hire</label><input type="text" id="dohText" class="doh"/>
            <label id="seasonTypeLabel" class="seasonL">Season</label>
              <select id="seasonTypeDD" class="season">
                <option value="winter">Winter</option>
                <option value="spring">Spring</option>
                <option value="fall">Fall</option>
                <option value="summer">Summer</option>
            </select> 
            <label id="seasonYearLabel" class="seasonyearL">Season Year</label><input type="text" id="seasonYearText" class="seasonyear"/>
            <input type="hidden" name="needCompletion" value="Y">
            <input type="image" src="cancel.png" id="cancelImageAddEmp" class="cancelImage"/>
            <button id="goBack" class="backBtn">Back</button> 
          </div>
      
           <div id="adminUserAddingFTEmp" class="centerDiv">
            <label id="employeeTypeFT" class="employeeType"></label>
            <label id="fnameLabelAdmin" class="fnameL">First Name</label><input type="text" id="fnameTextAdmin" class="fname"/>
            <label id="lnameLabelAdmin" class="lnameL">Last Name</label><input type="text" id="lnameTextAdmin" class="lname"/>
            <label id="companyLabelAdmin" class="companyL">Company</label><input type="text" id="compTextAdmin" class="company"/>
            <label id="sinLabelAdmin" class="sinL">SIN</label><input type="text" id="sinTextAdmin" class="sin"/>
            <label id="dobLabelAdmin" class="dobL">Date OF Birth</label><input type="text" id="dobTextAdmin" class="dob"/>
            <label id="dohLabelAdmin" class="dohL">Date Of Hire</label><input type="text" id="dohTextAdmin" class="doh"/>
            <label id="dotLabelAdmin">Date Of Termination</label><input type="text" id="dotTextAdmin" class="dot"/>
            <label id="salaryLabelAdmin">Salary</label><input type="text" id="salary"/>
            <button type="submit" class="submitBtn" id="btnSubmitFT">Submit</button>
            <input type="image" src="cancel.png" onclick="cancelImage()" class="cancelImage"/>
            <button class="backBtn" onclick="goBack()">Back</button> 
          </div>
      
        <div id="adminUserAddingPTEmp" class="centerDiv">
            <label id="employeeTypePT" class="employeeType"></label>
            <label id="fnameLabelAdmin" class="fnameL">First Name</label><input type="text" id="fnameTextAdmin" class="fname"/>
            <label id="lnameLabelAdmin" class="lnameL">Last Name</label><input type="text" id="lnameTextAdmin" class="lname"/>
            <label id="companyLabelAdmin" class="companyL">Company</label><input type="text" id="compTextAdmin" class="company"/>
            <label id="sinLabelAdmin" class="sinL">SIN</label><input type="text" id="sinTextAdmin" class="sin"/>
            <label id="dobLabelAdmin" class="dobL">Date OF Birth</label><input type="text" id="dobTextAdmin" class="dob"/>
            <label id="dohLabelAdmin" class="dohL">Date Of Hire</label><input type="text" id="dohTextAdmin" class="doh"/>
            <label id="dotLabelAdmin">Date Of Termination</label><input type="text" id="dotTextAdmin" class="dot"/>
            <label id="hourlyRateLabelAdmin">Hourly Rate</label><input type="text" id="hourlyRate"/>
            <button type="submit" class="submitBtn" id="btnSubmitPT">Submit</button>
            <input type="image" src="cancel.png" onclick="cancelImage()" class="cancelImage"/>
            <button class="backBtn" onclick="goBack()">Back</button> 
          </div>
      
          <div id="adminUserAddingSEmp" class="centerDiv">
            <label id="employeeTypeS" class="employeeType"></label>
            <label id="fnameLabelAdmin" class="fnameL">First Name</label><input type="text" id="fnameTextAdmin" class="fname"/>
            <label id="lnameLabelAdmin" class="lnameL">Last Name</label><input type="text" id="lnameTextAdmin" class="lname"/>
            <label id="companyLabelAdmin" class="companyL">Company</label><input type="text" id="compTextAdmin" class="company"/>
            <label id="sinLabelAdmin" class="sinL">SIN</label><input type="text" id="sinTextAdmin" class="sin"/>
            <label id="dobLabelAdmin" class="dobL">Date OF Birth</label><input type="text" id="dobTextAdmin" class="dob"/>         
            <label id="seasonTypeLabelAdmin" class="seasonL">Season</label>
              <select id="seasonTypeDDAdmin" class="season">
                <option value="winter">Winter</option>
                <option value="spring">Spring</option>
                <option value="fall">Fall</option>
                <option value="summer">Summer</option>
            </select> 
            <label id="seasonYearLabelAdmin" class="seasonyearL">Season Year</label><input type="text" id="seasonYearTextAdmin" class="seasonyear"/>
            <button type="submit" class="submitBtn" id="btnSubmitS">Submit</button>
            <input type="image" src="cancel.png" onclick="cancelImage()" class="cancelImage"/>
            <button class="backBtn" onclick="goBack()">Back</button> 
          </div>
      
      
        <div id="adminUserAddingCEmp" class="centerDiv">
            <label id="employeeTypeC" class="employeeType"></label>
            <label id="lnameLabelAdminC">Last Name</label><input type="text" id="lnameTextAdminC"/>
            <label id="companyLabelAdminC">Company</label><input type="text" id="compTextAdminC"/>
            <label id="sinLabelAdminC">SIN</label><input type="text" id="sinTextAdminC" />
            <label id="dobLabelAdminC">Date OF Birth</label><input type="text" id="dobTextAdminC"/>
            <label id="csdLabelAdminC">Contract Start Date</label><input type="text" id="csdTextAdminC"/>
            <label id="cstopDLabelAdminC">Contract Stop Date</label><input type="text" id="cstopDTextAdminC"/>
            <label id="contractAmountLabelC">Contract Amount</label><input type="text" id="contractAmountC"/>
            <button type="submit" class="submitBtn" id="btnSubmitC">Submit</button>
            <input type="image" src="cancel.png" onclick="cancelImage()" class="cancelImage"/>
            <button class="backBtn" onclick="goBack()">Back</button> 
          </div>
      
      
          <div id="genUserTimeCard" class="centerDiv">
            <label id="ok">gen time card</label>
            <input type="image" src="cancel.png" id="cancelImageTimeCard" class="cancelImage"/>
            <button id="goBackTimeCard" class="backBtn">Back</button> 
          </div>
      
        <div id="adminUserTimeCard" class="centerDiv">
            <label id="ok">admin time card</label>
            <input type="image" src="cancel.png" id="cancelImageTimeCardAdmin" class="cancelImage"/>
            <button id="goBackTimeCardAdmin" class="backBtn">Back</button> 
          </div>
     
      <p id="copyright">Developed & Maintained by DMS Inc.</p>   
  </div>

  <div id="middleDiv">
    <button id="empMaintainence" class="middleDivBtn">EMPLOYEE MAINTAINENECE</button>
    <button id="empReportsBtn" class="middleDivBtn">EMPLOYEE REPORTS</button>
    <button id="adminBtn" class="middleDivBtn">EMS SYSTEM ADMIN</button>
    <button id="searchBtn" class="middleDivBtn">SEARCH EMPLOYEE</button>
  </div>
</body>
</html>
