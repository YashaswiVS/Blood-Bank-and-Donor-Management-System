<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BBDMS</title>
    <link rel="icon" href="images/b2.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body style=" font-family: 'Times New Roman', Times, serif; font-size:16px">


<?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">
    <br><br><br>
    <h4> <span class="bold"><b>Additional tips for the day of your donation:</span></b>  </h4>
    <br>
			<ul style = "text-align:justify" >
                <li>Drink an extra 16 oz. of water (or other nonalcoholic drink) before your appointment.</li>
                <li>Eat a healthy meal, avoiding fatty foods like hamburgers, fries or ice cream.</li>
                <li>Wear a shirt with sleeves that you can roll up above your elbows.</li>
                <li>Let us know if you have a preferred arm or particular vein that has been used successfully in the past to draw blood.</li>
                <li>Relax, listen to music, talk to other donors or read while you donate.</li>
            </ul>
<br>
    <h4> <span class="bold"><b>Additional tips for after your donation:</b></span>  </h4>
    
			<ul style = "text-align:justify" >
                <li>Keep the strip bandage on for the next several hours; to avoid a skin rash, clean the area around the bandage with soap and water.</li>
                <li>Don’t do any heavy lifting or vigorous exercise for the rest of the day.li>
                <li>If the needle site starts to bleed, apply pressure and raise your arm straight up for 5-10 minutes or until bleeding stops..</li>
                <li>If you experience dizziness or lightheadedness, stop what you’re doing and sit down or lie down until you feel better; avoid performing any activity where fainting may lead to injury for at least 24 hours.</li>
                <li>Keep eating iron-rich foods.</li>
                <li>If you donate frequently, be sure to take multivitamins with iron to ensure you continue to replenish your iron stores before your next donation.</li>
            </ul>
<p class="top" style = "text-align:center">Thank you and Happy Blood donating!</p>
<center><a style="text-decoration: none;" class="btn btn-danger" href="index.php">BACK</a></center>

    </div>
    <br></br><br>
    <!-- Footer -->
   <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
