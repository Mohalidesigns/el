@include('header')
<div class="layout">

<main class="main main-inner main-contacts bg-contacts" data-stellar-background-ratio="0.6">
<div class="container">
<header class="main-header">
<h1>Contacts</h1>
</header>
</div>

<div class="page-lines">
<div class="container">
<div class="col-line col-xs-4">
<div class="line"></div>
</div>
<div class="col-line col-xs-4">
<div class="line"></div>
</div>
<div class="col-line col-xs-4">
<div class="line"></div>
<div class="line"></div>
</div>
</div>
</div>
</main>
<div class="content">

<section class="contact-details">
<div class="col-map col-md-7">
<div class="gmap col-md-7">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5517771474683!2d3.422219614770324!3d6.451540695332594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4cdd0acc45f%3A0x4770c7b38b85e26c!2sELALAN+Construction+Company!5e0!3m2!1sen!2sng!4v1552861126815" width="880" height="620" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
<div class="contact-info col-md-5 col-md-offset-7">
<div class="contact-info-content">
<div class="contact-info-title">Contacts</div>
<div class="phone contact-row">
<i class="fa fa-phone"></i>
<div class="contact-body">
<h4>Phone</h4>
<div class="phone-row">+234 815 096 5387</div>
</div>
</div>
<div class="contact-row">
<i class="fa fa-envelope"></i>
<div class="contact-body">
<h4>Email</h4>
<div class="contact-content">info@elalan.com</div>
</div>
</div>
<div class="contact-row">
<i class="fa fa-map-marker"></i>
<div class="contact-body">
<h4>Address</h4>
<div class="contact-content">

9 Macgregor Road, Ikoyi,
Lagos, Nigeria
</div>
</div>
</div>
</div>
</section>


<section class="contacts section">
<div class="container">
<header class="section-header">
<h2 class="section-title">Get <span class="text-primary">in touch</span></h2>
</header>
<div class="section-content">
<div class="row-base row">
<div class="col-address col-base col-md-4">
  +234 815 096 5387<br>
  info@elalan.com<br>
  9 Macgregor Road, Ikoyi,
  Lagos, Nigeria
</div>
<div class="col-base col-md-8">
<form class="js-ajax-form">
<div class="row-field row">
<div class="col-field col-sm-6 col-md-4">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="Name">
</div>
<div class="form-group">
<input type="email" class="form-control" name="email" required placeholder="Email *">
</div>
</div>
<div class="col-field col-sm-6 col-md-4">
<div class="form-group">
<input type="tel" class="form-control" name="phone" placeholder="Phone">
</div>
<div class="form-group">
<input type="text" class="form-control" name="company" placeholder="Company">
</div>
</div>
<div class="col-field col-sm-12 col-md-4">
<div class="form-group">
<textarea class="form-control" name="message" placeholder="Message"></textarea>
</div>
</div>
<div class="col-message col-field col-sm-12">
<div class="form-group">
<div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
<div class="error-message">We're sorry, but something went wrong</div>
</div>
</div>
</div>
<div class="form-submit text-right"><button class="btn btn-shadow-2 wow swing">Send <i class="icon-next"></i></button></div>
</form>
</div>
</div>
</div>
</div>
</section>
@include('footer')
