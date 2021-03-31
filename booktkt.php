<?php 
session_start();
	if(empty($_SESSION['user_info'])){
		echo "<script type='text/javascript'>alert('Please login before proceeding further!');</script>";
	}
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$trains=$_POST['trains'];
$sql = "SELECT * FROM trains WHERE t_name = '$trains'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$email=$_SESSION['user_info'];
$query="INSERT INTO entry (t_no,email,t_name,dates,no_of_adult,no_of_child) VALUES('$row[t_no]','$email','$row[t_name]','$_POST[dates]','$_POST[adult]','$_POST[child]')";
	if(mysqli_query($conn, $query))
{  
	$message = "Ticket booked successfully";
}
	else {
        echo "$conn->error";
		$message="Ticket booking failed";
	}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Book a ticket</title>
    <link REL="STYLESHEET" HREF="STYLE.CSS">
    <style type="text/css">
    #booktkt {
        margin: auto;
        margin-top: 120px;
        width: 40%;
        height: 60%;
        padding: auto;
        padding-top: 50px;
        padding-left: 50px;
        background-color: rgba(0, 0, 0, 0.3);
        border-radius: 25px;
        border: 2px solid white;

    }

    html {
        background: url(img/r1.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    #journeytext {
        color: white;
        font-size: 28px;
        font-family: "Comic Sans MS", cursive, sans-serif;
    }

    #trains {
        margin-left: 90px;
        font-size: 15px;
    }

    #submit {
        margin-left: 150px;
        margin-bottom: 40px;
        margin-top: 30px
    }
    </style>
    <script type="text/javascript">
    function validate() {
        var trains = document.getElementById("trains");
        if (trains.selectedIndex == 0) {
            alert("Please select your train");
            trains.focus();
            return false;
        }
    }
    </script>





</head>

<body>
    <?php
		include ('header.php');
	?>
    <div id="booktkt" class="container-fluid d-flex justify-content-center">
        <h1 align="center" style="padding-left:1px;" id="journeytext">Choose your journey
        </h1>
        <br /><br />
        <form method="post" name="journeyform" onsubmit="return validate()">
            <select id="trains" name="trains" required>
                <option selected disabled>-------------------Select trains here----------------------</option>
                <option value="rajdhani">Rajdhani Express</option>
                <option value="duronto">Duronto Express</option>
                <option value="geetanjali">Geetanjali Express</option>
                <option value="garibrath">Garib Rath</option>
                <option value="mysoreexp">Mysore Express</option>

            </select>
            <br /><br />

            <div style="padding-left:130px;">
                <label for="From">
                    <b style="color: white;  font-family: Comic Sans MS , cursive, sans-serif;">From
                    </b>
                </label>
                <select name="source">
                    <option value="pune">pune</option>
                    <option value="delhi">delhi</option>
                    <option value="mumbai">Mumbai</option>
                    <option value="Chennai">Chennai</option>
                    <option value="New Delhi">New Delhi</option>
                    <option value="anand vihar">Aand vihar</option>
                    <option value="Surat">Surat</option>
                    <option value="Kota">Kota</option>
                    <option value="Banglore">Banglore</option>
                </select>
                <label>
                    <b style="color: white; font-family: Comic Sans MS , cursive, sans-serif;">To
                    </b>
                </label>
                <select name="destination">
                    <option value="Mumbai">Mumbai</option>
                    <option value="New Delhi">New Delhi</option>
                    <option value="Surat">Surat</option>
                    <option value="Banglore">Banglore</option>
                    <option value="delhi">delhi</option>
                    <option value="kota">Kota</option>
                    <option value="Banglore">Ahmedabad</option>
                    <option value="delhi">Kolkata</option>
                    <option value="kota">Jaipur</option>
                </select><br /><br />
            </div>

            <div style="padding-left:130px;">

                <label for="Adult">
                    <b style="color: white; font-family: Comic Sans MS , cursive, sans-serif;">No Adult's
                    </b>
                </label><select name="adult" id="child">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>

                <label for="child">
                    <b style="color: white; font-family: Comic Sans MS , cursive, sans-serif;">No child's
                    </b>
                </label><select name="child" id="child">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select><br /><br />
            </div>
            <div style="padding-left:100px;">
                <label for="date">
                    <b style="color: white;  font-family: Comic Sans MS , cursive, sans-serif;">Date
                    </b>
                </label><input type="datetime-local" name="dates" id="dates" required>

                <label>
                    <b style="color: white; font-family: Comic Sans MS , cursive, sans-serif;">General
                    </b>
                </label>
                <select name="General">
                    <option value="Mumbai">General</option>
                    <option value="New Delhi">Divyaang</option>
                    <option value="Surat">Tatkal</option>
                    <option value="Banglore">SR.Citizen</option>
                    <option value="delhi">Ladies</option>
                </select>
            </div>


            <input type="submit" name="submit" id="submit" class="button" />



    </div>

</body>

</html>