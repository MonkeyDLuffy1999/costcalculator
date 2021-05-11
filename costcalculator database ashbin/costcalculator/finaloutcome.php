<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>NRSPP Cost Calculator</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>\
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>

<!-- css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- favicon -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<body class="jumbotron">


  <section class="header">

    <nav class="navbar navbar-light navbar-expand-lg bg-light fixed-top">
      <div class="container-fluid">
        <a href="#" class="main-logo">
          <img class="logo" src="https://www.nrspp.org.au/wp-content/themes/nrspp/images/nrspp-logo.svg" alt="NRSPP logo">
        </a>

        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> Contact </a></li>

        </ul>
      </div> -->


        <div class="btn-group">

          <button type="button" class="data-button btn btn-sm btn-outline-success dropdown-toggle" data-bs-toggle="dropdown">
            Menu
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
          </ul>
        </div>

      </div>
    </nav>

  </section>


  <section class="middle">
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-6">


          <h5>Total Road Incident Cost Calculator</h5>
          <h6>NRSPP Calculation</h6><br />
            <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="data-button btn btn-outline-success btn-sm btn-active">Welcome</button>
  <button type="button" class="data-button btn btn-outline-success btn-sm">Data entry</button>
  <button type="button" class="data-button btn btn-outline-success btn-sm">Calculation</button>
  <button type="button" class="data-button btn btn-outline-success btn-sm">Final outcome</button>
</div>
            <hr>
            <form action="submit.php" method = "POST">
            <div class="data-entry">
              <label class="form-label">Unit Revenue</label>
              <input class="form-control" type="text" placeholder="">
              <label class="form-label">Direct incident costs</label>
              <input class="form-control" type="text" placeholder="">
              <label class="form-label">Direct incident costs</label>
              <input class="form-control" type="text" placeholder="">
              <label class="form-label">Indirect incident costs</label>
              <input class="form-control" type="text" placeholder="">
              <label class="form-label">Indirect incident costs</label>
              <input class="form-control" type="text" placeholder="">
              <label class="form-label">Total incident costs managed fleet</label>
              <input class="form-control" type="text" placeholder="">
              <label class="form-label">Total incident costs managed fleet</label>
              <input class="form-control" type="text" placeholder="">
              <label class="form-label">Total incident costs - all vehicles ( managed + grey fleet )</label>
              <input class="form-control" type="text" placeholder="">
              <label class="form-label">Total incident costs - all vehicles ( managed + grey fleet )</label>
              <input class="form-control" type="text" placeholder="">
            </div>


          <hr>


            </form>
            <button type="submit" class="next-button btn btn-outline-success btn-md"> Submit </button></a>

        </div>

<?php
   
$host="localhost";
$username1="root";
$password1="";
$db="nrsppdata";

$conn= new mysqli($host , $username1, $password1, $db);



if (mysqli_connect_error()){
    die("connection failed");
}

else{
  
    $sql_table ="firstdatatbl";
    
    $Premium = trim($_POST["Premium"]); 
    $Profits = trim($_POST["Profits"]); 
    
    $OvrClaim = trim($_POST["OvrClaim"]); 
    $Kmtravelled = trim($_POST["Kmtravelled"]); 
    $Rateperv = trim($_POST["Rateperv"]); 
    
    $Dircost = trim($_POST["Dircost"]); 
    $Dirturnover = trim($_POST["Dirturnover"]); 
    $Dirnetprofit = trim($_POST["Dirnetprofit"]); 
    
    $Indirectcost = trim($_POST["Indirectcost"]); 
    $Indturnover = trim($_POST["Indturnover"]); 
    $Indnetprofit = trim($_POST["Indnetprofit"]); 
    
    $Estcostflable = trim($_POST["Estcostflable"]); 
    $Estturnoverfl = trim($_POST["Estturnoverfl"]); 
    $Estnetprofitfl = trim($_POST["Estnetprofitfl"]); 
    
    $Estcostvh = trim($_POST["Estcostvh"]); 
    $Estturnovervh = trim($_POST["Estturnovervh"]); 
    $Estnetprofitvh = trim($_POST["Estnetprofitvh"]); 

       $query2 = "insert into $sql_table (preVehi, profitsFrm, overClaim, kmperclaim, ovrClaim, dirCost, percentGrossdir, percentProfdir, indCost, percentGrossind, percentProfind, estCostfleet, percentGrossfleet, percentProffleet, allvehCost, percentGrossallveh, percentProfallveh)
                values ('$Premium = $Insurance/$Vehicles', '$Profits = ($Return/100)* $Turnover','$OvrClaim = ','$Kmtravelled','$Rateperv','$Dircost','$Dirturnover','$Dirnetprofit','$Indirectcost','$Indturnover','$Indnetprofit','$Estcostflable','$Estturnoverfl','$Estnetprofitfl','$Estcostvh','$Estturnovervh','$Estnetprofitvh')";
    $result = mysqli_query($conn, $query);

    mysqli_close($conn); 
  }

?>

        <div class="col-lg-6">
          <div class="input-group mb-3 search-box">
            <input type="text" class="form-control" placeholder="Type" aria-label="Username" aria-describedby="basic-addon1">
            <span class="input-group-text searchbox" id="basic-addon1"><img class="searchlogo" src="images/searchlogo.PNG"></span>
          </div>
          <img src="https://www.xero.com/content/dam/xero/images/chaptered-guide/financing-your-business/c1-what.svg" alt="">
        </div>

      </div>
    </div>
  </section>



  <section class="bottom">

    <div class="container-fluid">
      <div class="row description">
        <div class="col-lg-4">
          <h6>
            <div class="about">
              What is NRSPP calculator?
            </div>
          </h6>
          <p class = "about-description">The National Road Safety Partnership Program (NRSPP) Total Road Incident Cost Calculator was designed to provide organisations with an estimate of the direct and indirect costs associated with a road incident.

            The calculator presents an estimate of total incident costs in simple terms, underlining how much each incident could potentially cost an

          </p>

        </div>
        <div class="col-lg-4">
          <h6>
            <div class="about"></div>
          </h6>
          <p class = "about-description"><br>
            organisation in terms of lost revenue or service provision. In so doing, it helps organisations understand the cost of road incidents relative to productivity, profitability and service delivery. The calculator will help you articulate
            the additional production or service delivery needed to recover the Total Cost of Risk.
          </p>
        </div>
        <div class="col-lg-4">
          <h6>
            <div class="about">
              Who Can Use The Calculator?</div>
          </h6>
          <p class = "about-description">
            The calculator recognises the differences in operations and business structure across different sectors. To this end, tailored solutions and calculations are provided for the Manufacturing and Services sector, State and Local Government
            sector, Health and Emergency Services and Other Community Services and Not-for-Profit organisations.
          </p>

        </div>

      </div>


    </div>
  </section>

  <section class="related-content">
    <div class="container-fluid">
          <h1>Related contents</h1>
      <div class="row">
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
          <img class="card-img-top firstimage" src="https://quantreports.com/wp-content/uploads/2020/01/a4-stack-v2.jpg" alt="Card image cap">
        <h5 class="card-title">Factsheet</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-success">Learn more</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
          <img class="card-img-top secondimage" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOhOkPCRUcjQ2zfX9kFZcDC5jIkTwEn2JS_g&usqp=CAU" alt="Card image cap">
        <h5 class="card-title">Packages</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-success">Learn more</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
          <img class="card-img-top lastimage" src="https://cdn-s3-nrspp-2020.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/sites/4/2021/02/04131330/muarc-graduatecourse.jpg" alt="Card image cap">
        <h5 class="card-title">News Insights</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-success">Learn more</a>
      </div>
    </div>
  </div>
</div>
    </div>
  </section>

  <section class="subscription">
    <div class="container-fluid">
<p class="subscriptiontext">Subscribe to our monthly newsletter</p>
      <form class="row row-cols-lg-auto subscriptionform">
    <div class="col-12">
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
    </div>

    <div class="col-12">
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email">
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-outline-success subbutton">Subscribe</button>
    </div>
  </form>

</div>
  </section>
<section class="footer">
  <footer class="white-section" id="footer">
    <div class="container-fluid">
      <i class="social-icon fab fa-facebook-f"></i>
      <i class="social-icon fab fa-twitter"></i>
      <i class="social-icon fab fa-instagram"></i>
      <i class="social-icon fas fa-envelope"></i>
      <p class="footertext">© 2021 NRSPP Australia. All Rights Reserved</p>

      <div class="row">
        <div class="col-6">
          <p class="terms">Terms and Conditon </p>
        </div>
        <div class="col-6">

      <p class="contact">Contact us</p>
        </div>

      </div>


      </div>

  </footer>
</section>


</body>

</html>
