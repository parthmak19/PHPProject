<?php
session_start();
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$mob=$_POST['mob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$pw=$_POST['pw'];
$cpw=$_POST['cpw'];
$sql = "INSERT INTO passengers (p_fname, p_lname, p_age, p_contact, p_gender, email, password) VALUES ('$fname', '$lname', '$age', '$mob', '$gender', '$email', '$pw');";
	if(mysqli_query($conn, $sql))
{  
	$message = "You have been successfully registered";
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<html>

<HEAD>
    <TITLE>Register on Indian Railways</TITLE>
    <LINK REL="styleSHEET" href="style.css">
    <style type="text/css">
    * {
        color: white;
    }

    #td {
        color: black;
    }

    #register_form {
        background-color: rgba(0, 0, 0, 0.3);
        width: 40%;
        margin: auto;
        border-radius: 25px;
        border: 2px solid white;
        margin-top: 25px;
    }

    #nav {
        color: white;
    }

    #nav:hover {
        color: black;
    }

    #logintext {
        margin-top: 10px;
    }

    #login {
        margin-top: 10px;
        margin-bottom: 20px;
    }

    form input {
        color: black;
    }
    </style>
    <SCRIPT src="validation.js"></SCRIPT>
</HEAD>

<body background="img/wallpaper1.jpg" link="white" alink="white" vlink="white" width="1024" height="768">
    <?php
		include_once 'header.php';
		// include ('header.php');
	?>
    <div id="register_form" align="center" height="200" width="200">
        <form name="register" method="post" action="register.php" onsubmit="return validate()">
            <TABLE border="0">
                <CAPTION>
                    <font size="6" style="color:WHITE;"><br />Enter your details:</font>
                </CAPTION>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <TR class="left">
                    <td>
                        <font size="5" style="color:white;">First name:</font>
                    </td>
                    <td style="color:black;"><input name="fname" type="TEXT" placeholder="Enter your first name"
                            size="30" maxlength="30" align="center" id="fname"></td>
                </TR>
                <tr></tr>
                <tr></tr>
                <TR class="left">
                    <td>
                        <font size="5" style="color:WHITE;"> Last name: </font>
                    </td>
                    <td><input type="text" name="lname" align="center" size="30" maxlength="30"
                            placeholder="Enter your last name" id="lname"></td>
                </TR>
                <tr></tr>
                <tr></tr>
                <TR class="left">
                    <td>
                        <font size="5" style="color:WHITE;">Age:</font>
                    </td>
                    <td><input type="TEXT" name="age" align="center" size="30" maxlength="3" placeholder="Enter age"
                            id="age"></td>
                </TR>
                <tr></tr>
                <tr></tr>
                <TR class="left">
                    <td>
                        <font size="5" style="color:WHITE;">Mobile Number:</font>
                    </td>
                    <td><input type="TEXT" name="mob" size="30" maxlength="10" placeholder="Enter your mobile number"
                            id="mob"></td>
                </TR>
                <tr></tr>
                <tr></tr>
                <TR class="left">
                <TR class="left">
                    <td>
                        <font size="5" style="color:WHITE;">Gender:</font>
                    </td>
                    <td>&nbsp;&nbsp;
                        <input type="radio" name="gender" value="Male" align="center" id="gender">
                        <b style="color:white;">Male</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="gender" value="Female" align="center" id="gender">
                        <b style="color:white;">Female</b>
                    </td>
                </TR>
                <tr></tr>
                <tr></tr>
                <TR class="left">
                    <td>
                        <font size="5" style="color:WHITE;">E-Mail ID:</font>
                    </td>
                    <td><input name="email" type="TEXT" id="email" placeholder="Enter your E-Mail ID" size="30"
                            maxlength="30"></td>
                </TR>
                <tr></tr>
                <tr></tr>
                <TR class="left">
                    <td>
                        <font size="5" style="color:WHITE;">Password:</font>
                    </td>
                    <td><input type="PASSWORD" name="pw" size="30" id="pw"></td>
                </TR>
                <tr></tr>
                <tr></tr>
                <TR class="left">
                    <td>
                        <font size="5" style="color:WHITE;">Confirm Password:</font>
                    </td>
                    <td><input type="PASSWORD" name="cpw" size="30" id="cpw"></td>
                </TR>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
            </TABLE>
            <P><input TYPE="Submit" value="Submit" name="submit" id="submit" class="button"
                    onclick="if(!this.form.tc.checked){alert('You must agree to the terms first.');return false}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input TYPE="Reset" value="Reset" id="reset" class="button">
            </P>
        </form><br />
        <HR width="450" style="border-color: blue;display: block;" noshade>
        <form action="login.php">
            <P align="CENTER" id="logintext">
                <font size="6" color="white" face="Arial" style="color:WHITE;">
                    Already have an account with us?<BR /></font>
                </font>
                <input TYPE="submit" value="Login" id="login" class="button">
            </P>
        </form>
    </div>
</body>

</html>