<?php
session_Start();
?>
<!DOCTYPE html>
<html>
<style type="text/css">
html { 
  background: url(lightbulb.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

#topDiv{
	position: absolute;
	top: 0%;
	left: 0%;
	height: 15%;
	width: 100%;

}

#appLabel{
	position:absolute;
	left: 2%;
	top: 2%;
	font-size: 300%;
	font-family: verdana;
    color: white;
}
#formDiv{
	position: absolute;
	color: white;
    left: 35%;
	top: 30%;
    height:40%;
    width:30%;
}
.labels{
    position:absolute;
    left:10%;
}

#uName{
    top:20%;
}
#uNameText{
    top:20%;
}
#password{
    top:33%;
}
    
#passwordText{
    top:33%;
}
.textField{
    position:absolute;
    left:30%;
}
#submitForm{
    position:absolute;
    left:36%;
    top:47%;
}

#failedInfo{
    position:absolute;
    top:40%;
    left:30%;
    background-color:rgba(0, 0, 0, 0);
    color:white;
    border: none;
    outline:none;
    height:30px;
    transition:height 1s;
    -webkit-transition:height 1s;
}
</style>
<script type="text/javascript">
    function checkNull()
    {
        var nameValue = document.getElementById('uNameText').value;
        var passwordValue = document.getElementById('passwordText').value;
        var bCheckNull = true;

        if(nameValue == "" || passwordValue == "" || nameValue == null || passwordValue == null || nameValue.length == 0 || passwordValue.length == 0)
        {
            bCheckNull = false;
            document.getElementById("failedInfo").value = "FAILED INPUT";
        }

        return bCheckNull;
    }


    
</script>
<head>
	<title>Login to EMS-PSS</title>
	<link rel="shortcut icon" href="logo1.png" />
</head>
<body>	
    <label id="appLabel">EMS-PSS</label>
    <form id="formDiv" action="server.php" method="POST" onsubmit="return checkNull()">
        <label class="labels" id="uName">Username</label><input class="textField" type="text" id="uNameText" name="username"/>
        <label class="labels" id="password">Password</label><input type="password" id="passwordText" class="textField" name="password"/>
        <button name="login" type="submit" id="submitForm" >Submit</button>
        <input type="text" id="failedInfo" style="border:3px; color: #FF0000" readonly/>

    </form>


</body>
</html>
