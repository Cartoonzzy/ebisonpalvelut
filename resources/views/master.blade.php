<!doctype html>
<html lang="en">
  <head>
  <title class="title-style">Ebisonpalvelut &#124; @yield('title', 'Ebison')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
content="Ebison cleaning company website" />
<meta name="keywords"
content="Ebison, Cleaning, Finland, Helsinki" />
<meta http-equiv="author"
content="CartoonZzy" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />



	@yield('head')
  </head>
  <body style="background-image: url('images/background.jpg');">
    <div class="jumbotron">
  <h1>Ebison Siivous Palvelut</h1>

    </div>
    <nav class="navbar navbar-expand-sm justify-content-center navbar1">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ URL::to('home') }}">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ URL::to('about') }}">ABOUT US</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ URL::to('services') }}">SERVICES</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ URL::to('contact') }}">CONTACT US</a>
    </li>
  </ul>
</nav>






<div class="content">
@yield('content')
</div>


<footer class ="footer">
  <div class="row">
      <div class="col-md-4" >
      <h5><u>Quick Links</u></h5>
      <a class="nav-link" href="{{ URL::to('home') }}">Home</a>
      <a class="nav-link" href="{{ URL::to('about') }}">About Us</a>
      <a class="nav-link" href="{{ URL::to('contact') }}">Contact Us</a>
      <a class="nav-link" href="{{ URL::to('services') }}">Services</a>

    </div>

    <div class="col-md-4">
      <p>
      <strong>BusinessID: 3104904-2 </strong><br>
      <strong>Address: Isännäntie 1b 6 </strong></br>
      <strong>Espoo, 02940</strong></br>
      </p>
    </div>

      <div class="col-md-4" >
        <h5><u>Contact Info</u></h5>


  <strong>Emails: ebi.inyamaeke@yahoo.com</strong><br/>
  <strong> nnejennifer@yahoo.com </strong>
  <br/>
  <strong>Phone Numbers: 0451576175, 0449919299.</strong>
  <br/>
      </div>

    </div>

</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/myjs.js"></script>



</body>
</html>
