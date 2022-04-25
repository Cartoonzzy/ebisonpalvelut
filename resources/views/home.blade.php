@extends('master')
@section('title')
HOME
@stop
@section('content')
<div class="container divContainer">
  <div class="row divCarousel">
    <div class="col-md-12 ">
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>

    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/home.jpg" class="img-fluid" alt="cleaning" width="100%" height="50%">
      </div>
      <div class="carousel-item ">
        <img src="images/pic2.jpg" class="img-fluid" alt="cleaning" width="100%" height="50%">
      </div>
      <div class="carousel-item ">
        <img src="images/window.jpg" class="img-fluid" alt="cleaning" width="100%" height="50%">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>
</div>
<div class="row divOurCompany">
  <div class="col-md-12">
  <h1>About Our Company</h1>
  <p>
    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
    from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
    discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum"
    (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
    The first line of Lorem Ipsum, "L
  </p>
</div>
</div>
<h1 id="services">Services</h1>
<div class="row div1">

  <br/>
  <div class="col-md-4">
    <img src="images/window1.jpg" class="img-fluid" alt="cleaning" width="250px" height="250px">
    <p>Window Cleaning</p>
  </div>
  <div class="col-md-4">
    <img src="images/home.jpg" class="img-fluid" alt="cleaning" width="250px" height="250px">
    <p>Home Cleaning</p>
  </div>
  <div class="col-md-4">
    <img src="images/pic2.jpg" class="img-fluid" alt="cleaning" width="250px" height="250px">
    <p> Office Cleaning</p>
  </div>
</div>
<h1 id="reviews">Reviews</h1>
<div class="row div2">
<div class="col-md-12">
  <div class="row">
<div class="text-center col-md-4">
<img src="images/avatar1.png" class="rounded" alt="Review 1">
<p>Anonymous</p>
<p>Pidän palvelusta.</p>
</div>

<div class="text-center col-md-4">
<img src="images/avatar1.png" class="rounded" alt="Review 2">
<p>Student</p>
<p>The cleaning service helped me so much in time of my exams</p>
</div>

<div class="text-center col-md-4">
<img src="images/avatar1.png" class="rounded" alt="Review 3">
<p>Anonymous</p>
<p>Suosittelen palvelua ehdottomasti!</p>
</div>



</div>
</div>
</div>
<h1 id="contact">Contact Us</h1>
<div class="row div3">

<div class="col-md-12">
  <form action="{{url('sendForm')}}" id="contactForm" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name"  name="name" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
    <label for="phonenumber">Phone Number:</label>
    <input type="text" class="form-control" id="phone"  name="phone" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" name="email" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
  <label for="comment">Message:</label>
  <textarea class="form-control" rows="6" id="message" name="message"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@stop
