@extends('master')
@section('title')
CONTACT US
@stop
@section('content')
<div class="container divContainer">
<div class="row contactMap">
<div class="col-md-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1685.7171179574682!2d25.53866691635066!3d65.0071770504848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4681cd5f9487a443%3A0xc52dd1ca8376813b!2zSXPDpG5uw6RudGllIDEsIDkwMjMwIE91bHU!5e0!3m2!1sen!2sfi!4v1641999546689!5m2!1sen!2sfi" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>"
</div>
<div class="col-md-6">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<p class="morevisible1">
<strong>BusinessID: 3104904-2 </strong><br>
<strong>Address: Isännäntie 1b 6 </strong></br>
<strong>Espoo, 02940</strong></br>
</p>
<br/>
<br/>
</div>
<div class="col-md-6 contactForm">
<p id="contactHeader"> Contact form </p>
  <hr id="hrLine"/>
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
