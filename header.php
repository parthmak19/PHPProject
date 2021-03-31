<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="s1.css" type="text/css">

    <script src="jquery.js"></script>
    <script>
    $(document).ready(function() {
        $("#Logout").hide();
    });
    $(document).ready(function() {
        $("#user").hover(function() {
            $("#Logout").toggle("slow");
        });
    });
    </script>
    <style>
    .dropbtn {
        color: white;
        padding: 16px;
        font-size: 22px;
        border: none;
        background-color: rgba(0, 0, 0, 0.00003);
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 2px 3px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
    </style>

</head>

<body>

    <div class="container success">
        <div class="wrapper">
            <div class="Menu">
                <ul id="navmenu">
                    <li><A href=" index.php" style="font-size:20px;  color:whitesmoke">
                            <h2>Home</h2>
                        </A></li>
                    <li><A href="pnrstatus.php" style="font-size:20px;  color:whitesmoke">
                            <h4>PNR Status</h4>
                        </A></li>
                    <li><a href=" booktkt.php" style="font-size:20px;  color:whitesmoke">
                            <h4>Booking</h4>
                        </a></li>
                    <li>
                        <?php 
                        if(isset($_SESSION['user_info'])) 
                        {
                          
                            echo '<div id="dropdown" class="dropdown" style=" font-size:20px; color:white;color:whitesmoke;">
                                    <button class="dropbtn"><h4>'.$_SESSION['user_info'].'</h4></button>
                                    <div class="dropdown-content">
                                    <a>Logout</a>
                                    </div>
                                    </div>';
                        }

                        else echo '<A href="register.php" style=" font-size:20px; color:white;  color:whitesmoke"><h4>Login/Signup</h4></A>';
                        ?></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>