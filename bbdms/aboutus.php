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

<body style=" font-family: 'Times New Roman', Times, serif; font-size:16px" >


<?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">
    <br><br>
    <h4> <center><span class="bold"><b>ABOUT BLOOD DONATION</b></span> </center> </h4>
    <br>
			<p style = "text-align:justify" ></a>Blood bank is a place where blood bag that is collected from 
            blood donation events is stored in one place. The term “blood bank” refers to a division of a 
            hospital laboratory where the storage of blood product occurs and where proper testing is
            performed to reduce the risk of transfusion related events. Universally,
             'Blood' is recognized as the most precious element that sustains life. It saves innumerable lives
              across the world in a variety of conditions. Once in every 2- seconds, someone, somewhere 
              is desperately in need of blood. More than 29 million units of blood components are transfused 
              every year. The need for blood is great - on any given day, approximately 39,000 units of Red 
              Blood Cells are needed. Each year, we could meet only up to 1% (approx) of our nation's demand
               for blood transfusion.</p>

			<p class="top" style = "text-align:justify" >Despite the increase in the number of donors,
             blood remains in short supply during emergencies, mainly attributed to the lack of information 
             and accessibility. We positively believe this tool can overcome most of these challenges by
              effectively connecting the blood donors with the blood recipients.We remind every visitor that 
              we have the empowerment to save lives and let's do that - right now, right here. If you are
               eligible for blood donation, please register yourself as a blood donor now!</p>

<h4> <span class="bold"><b>Who are eligible to donate blood?</b></span> </h4>	

<p style = "text-align:justify" >Any healthy adult, both male and female, can donate blood. Men can donate safely once in every three months while women can donate every four months.</p>
<p style = "text-align:justify"><b>Age</b> : Donor should be in the age group of 18 to 65 years.</p>
<p style = "text-align:justify"><b>Weight</b> : The Donor Should not be less than 45 Kilograms.</p>
<p style = "text-align:justify"><b>Pulse</b>  : Temperature and Pulse of the donor shall be normal.</p>
<p style = "text-align:justify"><b>Blood Pressure</b> : The systolic and diastolic blood pressures are within normal limits.</p>
<p style = "text-align:justify"><b>Child Birth</b> : Should have delivered 1 year ago and stopped lactation.</p>
<p style = "text-align:justify"><b>Haemoglobin</b> : Haemoglobin should not be less than 12.5 grams.</p>
<p style = "text-align:justify"><b>Malaria</b> : Should Not have been treated for malaria in last 3 months or 3 years if residing in endemic areas</p>
<p style = "text-align:justify"><b>Tattoo/Acupunture </b> : Should NOT have had any in last 12 months .</p>
<p style = "text-align:justify"><b>Immunization & Vaccination </b> : Should NOT have had shots for any of the following - Cholera, Typhoid, Diptheria, Tetanus, Plague, Gammaglobulin in last 15 days; Rabies vaccination in last 1 year.</p>
<p style = "text-align:justify"><b>Scars/Skin Puncture </b> : Arms & Forearms should be free from Skin punctures or Scars which are indicative of Intravenous drug use or frequent blood donations.</p>
<p style = "text-align:justify"><b>Surgery </b> : Should NOT have had Tattoo in last 6 months.</p>
<p style = "text-align:justify"><b>Cancer</b> : Should NOT have any forms of cancer</p>
<p style = "text-align:justify"><b>Infection </b> : Should NOT have Hepatitis B, C, Tuberculosis, Leprosy, HIV.</p>
<p style = "text-align:justify"><b>Heart Disease </b> : Should NOT have any Heart diseases.</p>
<p style = "text-align:justify"><b>Other Disease </b> : Should NOT have Epilepsy, Asthma on Steroids, Bleeding disorders, Thalassemia, Sickle Cell Anemia, Polycythemia Vera.</p>

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
