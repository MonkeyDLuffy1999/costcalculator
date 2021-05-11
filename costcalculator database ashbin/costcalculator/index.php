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

  <section>
    <div class="container-fluid">
      <br>
      <h2 > Requirement lists</h2>
<div class="requirementList">


      <ul class="">
        <li>
          Annual sales of units
        </li>
        <li>
          Cost of incidents (insurers cost)</li>
        <li>
          Number of incidents annually</li>
        <li>
          Total number of vehicles</li>
        <li>
          Total distance travelled by fleet</li>
        <li>
          Annual cost of current insurance</li>
        <li>
          Insurance cost per vehicles</li>
        <li>
          If there was any excess cost of insurance</li>
        <li>
          Gross annual turnover</li>
      </ul>
      </div>
      <a href="welcome.php"><button type="submit" name="button" class = "btn btn-lg btn-outline-success">Proceed</button>
</a>
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
