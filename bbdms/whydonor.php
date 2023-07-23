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
        <br><br>
    <h4><span class="bold"><b>Why is it Important to Donate Blood?</b></span></h4>
			<p style = "text-align:justify">Giving blood saves lives. The blood you give is a lifeline in an emergency and for people who need long-term treatments.
            every two seconds of every day, someone needs blood. Since blood cannot be manufactured outside the body and has a limited shelf life, the supply must constantly be replenished by generous blood donors.
            About 328 million people currently live in the U.S. Each year, approximately 6.8 million people in the U.S donate blood. Annually, this adds up to about 13.6 million units of whole blood collected for donation in the U.S. The Red Cross provides about 40% of our nation’s blood and blood cell components to donors. Your blood donations are used for patients in need of surgery, cancer treatment and transfusions for blood loss from traumatic injuries. </p>
<br>
            <h4><span class="bold"><b>Why Cancer Patients Need Blood?</b></span></h4>
<p style = "text-align:justify">For cancer patients, blood transfusions can act as a resource to implement platelets back into the body after heavy treatments such as chemo or radiation therapy.

For cancer patients, blood cells that are made in the bone marrow are often at risk. This lack of blood cell production can cause chronic diseases over time which may affect organs such as the kidneys, spleen and liver.</p>
<center><a style="text-decoration: none;" class="btn btn-danger" href="index.php">BACK</a></center></div><br><br><br>

    <!-- Footer -->
   <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
