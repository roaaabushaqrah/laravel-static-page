
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>landing</title>
</head>
<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900');

* {
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    text-shadow: rgba(0, 0, 0, .01) 0 0 1px
}

body {
    font-family: 'Rubik', sans-serif;
    font-size: 14px;
    font-weight: 400;
    background: #fff;
    color: #000000;
    margin-top: 0px
}

div {
    display: block;
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: 'Rubik', sans-serif;
    font-weight: 500;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    text-shadow: rgba(0, 0, 0, .01) 0 0 1px
}

.button {
    display: inline-block;
    background: #97cbfa;
    border-radius: 5px;
    height: 48px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.button a {
    display: block;
    font-size: 18px;
    font-weight: 400;
    line-height: 48px;
    color: #FFFFFF;
    padding-left: 35px;
    padding-right: 35px
}

.button:hover {
    opacity: 0.8
}

.contact_info {
    width: 100%;
    padding-top: 70px
}

.contact_info_item {
    width: calc((100% - 60px) / 3);
    height: 100px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    padding-left: 32px;
    padding-right: 15px
}

.contact_info_image {
    width: 35px;
    height: 35px;
    text-align: center
}

.contact_info_image img {
    max-width: 100%
}

.contact_info_content {
    padding-left: 17px
}

.contact_info_title {
    font-weight: 500
}

.contact_info_text {
    font-size: 12px;
    color: rgba(0, 0, 0, 0.5)
}

.contact_form {
    padding-top: 85px
}

.contact_form_container {}

.contact_form_title {
    font-size: 30px;
    font-weight: 500;
    margin-bottom: 37px
}

.contact_form_inputs {
    margin-bottom: 30px
}

.input_field {
    width: calc((100% - 60px) / 3);
    height: 50px;
    padding-left: 25px;
    border: solid 1px #e5e5e5;
    border-radius: 5px;
    outline: none;
    color: #0e8ce4;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.input_field:focus,
.text_field:focus {
    border-color: #b2b2b2
}

.input_field:hover,
.text_field:hover {
    border-color: #b2b2b2
}

.input_field::-webkit-input-placeholder,
.text_field::-webkit-input-placeholder {
    font-size: 16px;
    font-weight: 400;
    color: rgba(0, 0, 0, 0.3)
}

.input_field:-moz-placeholder,
.text_field:-moz-placeholder {
    font-size: 16px;
    font-weight: 400;
    color: rgba(0, 0, 0, 0.3)
}

.input_field::-moz-placeholder,
.text_field::-moz-placeholder {
    font-size: 16px;
    font-weight: 400;
    color: rgba(0, 0, 0, 0.3)
}

.input_field:-ms-input-placeholder,
.text_field:-ms-input-placeholder {
    font-size: 16px;
    font-weight: 400;
    color: rgba(0, 0, 0, 0.3)
}

.input_field::input-placeholder,
.text_field::input-placeholder {
    font-size: 16px;
    font-weight: 400;
    color: rgba(0, 0, 0, 0.3)
}

.text_field {
    width: 100%;
    height: 160px;
    padding-left: 25px;
    padding-top: 15px;
    border: solid 1px #e5e5e5;
    border-radius: 5px;
    color: #0e8ce4;
    outline: none;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.contact_submit_button {
    padding-left: 35px;
    padding-right: 35px;
    color: #FFFFFF;
    font-size: 18px;
    border: none;
    outline: none;
    cursor: pointer;
    margin-top: 24px
}

.panel {
    width: 100%;
    height: 50px;
    background: #fafafa;
    margin-top: 120px
}

@media only screen and (max-width: 991px) {
    .contact_info_item {
        width: 100%;
        margin-bottom: 30px
    }

    .contact_info_item:last-child {
        margin-bottom: 0px
    }
}

@media only screen and (max-width: 767px) {
    .input_field {
        margin-bottom: 30px;
        width: 100%
    }

    .input_field:last-child {
        margin-bottom: 0px
    }
}

@media only screen and (max-width: 575px) {
    .contact_submit_button {
        font-size: 13px;
        padding-left: 25px;
        padding-right: 25px
    }
}
    </style>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/landing">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/aboutus">about us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/service">service</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/contactus">Contact us</a>
      </li>
    </ul>
    
  </div>
</nav>

<div class="contact_info">
     <div class="container">
         <div class="row">
             <div class="col-lg-10 offset-lg-1">
                 <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">
                     <!-- Contact Item -->
                     <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                         <div class="contact_info_image"><img src="https://img.icons8.com/office/24/000000/iphone.png" alt=""></div>
                         <div class="contact_info_content">
                             <div class="contact_info_title">Phone</div>
                             <div class="contact_info_text">+91 9876 543 2198</div>
                         </div>
                     </div> <!-- Contact Item -->
                     <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                         <div class="contact_info_image"><img src="https://img.icons8.com/ultraviolet/24/000000/filled-message.png" alt=""></div>
                         <div class="contact_info_content">
                             <div class="contact_info_title">Email</div>
                             <div class="contact_info_text">contact@bbbootstrap.com</div>
                         </div>
                     </div> <!-- Contact Item -->
                     <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                         <div class="contact_info_image"><img src="https://img.icons8.com/ultraviolet/24/000000/map-marker.png" alt=""></div>
                         <div class="contact_info_content">
                             <div class="contact_info_title">Address</div>
                             <div class="contact_info_text">298,Menlo Park,CA,USA</div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div> <!-- Contact Form -->
 <div class="contact_form">
     <div class="container">
         <div class="row">
             <div class="col-lg-10 offset-lg-1">
                 <div class="contact_form_container">
                     <div class="contact_form_title">Get in Touch</div>
                     <form action="#" id="contact_form">
                         <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between"> <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Your name" required="required" data-error="Name is required."> <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="Your email" required="required" data-error="Email is required."> <input type="text" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Your phone number"> </div>
                         <div class="contact_form_text"> <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea> </div>
                         <div class="contact_form_button"> <button type="submit" class="button contact_submit_button">Send Message</button> </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
     <div class="panel"></div>
 </div>

