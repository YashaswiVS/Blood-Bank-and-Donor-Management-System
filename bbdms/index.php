<?php
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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body style=" font-family: 'Times New Roman', Times, serif; font-size:16px">

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Welcome to Blood Bank & Donor Management System</h1><br>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header"><center>The Need for Blood</center></h4>
                   
                        <p class="card-text" style="text-align:justify">Blood is the most essential thing for human life. It is an inhuman body fluid that delivers necessary substances such as nutrients and oxygen to the cells.Blood is a transport liquid pumped by the heart to all parts of the body<center><a style="text-decoration: none;" class="btn btn-danger" href="impblood.php">Click here to know more</a></center></p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header"><center>Blood Tips</center></h4>
                   
                        <p class="card-text" style="text-align:justify">Additional tips for the day of your donation:
<br>
Drink an extra 16 oz. of water (or other nonalcoholic drink) before your appointment.<br>
Eat a healthy meal, avoiding fatty foods like hamburgers, fries or ice cream.<center><a style="text-decoration: none;" class="btn btn-danger" href="bloodtips.php">Click here to know more</a></center></p>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header"><center>About Blood Donation</center></h4>
                   
                        <p class="card-text" style="text-align:justify" >Blood bank is a place where blood bag that is collected from blood donation events is stored in one place. The term “blood bank” refers to a division of a hospital laboratory where the storage of blood product occur and <center><a style="text-decoration: none;" class="btn btn-danger" href="aboutus.php">Click here to know more</a></center></p>
                </div>
            </div>

        </div><br><br>
        <!-- /.row -->

        
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
          <p>  
              Blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>
                
                
<li>A positive or A negative</li>
<li>B positive or B negative</li>
<li>O positive or O negative</li>
<li>AB positive or AB negative.</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/blood-donor (1).jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-danger btn-secondary btn-block" href="become-donar.php">Become a Donor</a>
            </div>
        </div>
<!-- Portfolio Section -->
<h2><center>Some of the Donors</center></h2>

<div class="row">
           <?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

    <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
            
            <div class="card-block">
                <h4 class="card-title"><?php echo htmlentities($result->FullName);?></h4>
                <p class="card-text"><b>  Age :</b> <?php echo htmlentities($result->Age);?></p>
<p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
<p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>

            </div>
        </div>
    </div>

    <?php }} ?>
  




</div>
<!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
