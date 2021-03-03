<?php 
$result ="";
    if(isset($_POST['submit'])){
        require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->Host='smtp.live.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';
        $mail->Username='miawallace1999@hotmail.co.uk';
        $mail->Password='Christa99!';

        $mail->setFrom($_POST['email'],$_POST['name']);
        $mail->addAddress('miawallace1999@hotmail.co.uk');
        $mail->addReplyTo($_POST['email'], $_POST['name']);

        $mail->isHTML(true);
        $mail->Subject='Test Form Submission';
        $mail->Body='<h1>Name:' .$_POST['name']. '</h1>' .$_POST['message'];

        if(!$mail->send()){
            $result = "Something went wrong";
        }
        else{
            $result = "Success!!";
        }
        
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Confectionary</title>
    <link rel="icon" href="media/Logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&family=Cormorant+Infant:wght@300&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/cart.js" async></script>
<!-- <script>
    (function(){
        'use strict';
        window.addEventListener('load', function(){
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form){
                form.addEventListener('submit',function(event){
                    if(form.checkValidity === false){
                        event.preventDefault();
                        event.stopPropogation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script> -->
<style>
    .carousel-caption d-none d-md-block{
        background-color: #432918;
    }  
    
    
    * {box-sizing: border-box}

/* Slideshow container */
.slideshow-container {
  position: relative;
}

.dot-container {
    text-align: center;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
</style>

</head>
<body>
    <nav class="navbar navbar-expand navbar-dark dark">
        <div class = "container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <span>
                        <img src="media/Logo.png">
                    </span>
                    
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#" data-target="#carouselExampleIndicators" data-slide-to="0">Home</a></li>
                <li><a href="#" data-target="#carouselExampleIndicators" data-slide-to="1">About Us</a></li>
                <li><a href="#" data-target="#carouselExampleIndicators" data-slide-to="2">Our Store</a></li>
                <li><a href="#" data-target="#carouselExampleIndicators" data-slide-to="3">How It's Made</a></li>
                <li><a href="#" data-target="#carouselExampleIndicators" data-slide-to="4">Our Confectionery</a></li>
                <li><a href="#" data-target="#carouselExampleIndicators" data-slide-to="5">Specials</a></li>
                <li><a href="#" data-target="#carouselExampleIndicators" data-slide-to="6">Contact Us</a></li>
                <li><a class="cart" href="#" data-target="#carouselExampleIndicators" data-slide-to="7"><span class="material-icons">shopping_cart</span><span class="material-icons__badge hide" id="cartCount"></span></a></li>
            </ul>
        </div>
    </nav>
    
    <!-- <div class="anim-container">
        <h1 class="index-header">Coffee Confectionery</h1> --> 
        
          
           <div id="carouselExampleIndicators" class="carousel slide" >
            <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>

         
          </ol>
          <!-- Carousel Items -->
          <div class="carousel-inner" role="listbox">

              <div id="carouselItem" class="carousel-item active">
                <img class="d-block w-100" src="media/StoreAnimation.gif" alt="First slide">
                <div class="carousel-caption d-none d-md-block" style="bottom: 270px;">
                  <h5> C<img class="a" src="media/img/ConfectioneryImages/coffeebean.png" width="25" height="40">ffee C<img class="a" src="media/img/ConfectioneryImages/sweet.png" width="30" height="40">nfectionery</h5>
                   <p>It's coffee with character!</p>
                </div>
                  
            </div>
              
            <div id="carouselItem" class="carousel-item">
                <img class="d-block w-100" src="bck.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block" style="top: 10px">
                  <h5>About Us</h5>
                  <div class="container">
                      <div class="row">
                          <div class ="col-sm">
                            <p>Coffee Confectionery specialises in distributing coffee infused candy. Our franchise focuses on presenting you with cool and tasty coffee Confectionery.<br><br>Our website also includes a fun game for our customers to play to get an idea of how we prepare our confections. </p>
                        </div>
                        <div class="col-sm">
                            <img src="media/img/ConfectioneryImages/packaging.png">
                        </div>
                      </div>
                  </div>
                </div>
            </div>
              
              <div id="carouselItem" class="carousel-item">
                <img class="d-block w-100" src="bck.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block" style="top: 10px">
                  <h5>Our Store</h5>
                  <div class="container">
                      <div class="row">
                          <div class ="col-sm">
                            <p>Feel free to visit our store!<br><br>Old Royal Naval College, <br>Park Row, Greenwich, <br>London SE10 9LS<br><br>Open Hours:<br>Monday - Friday 9am–7pm<br><br>Weekends:<br>9am– 5pm</p>
                        </div>
                        <div class="col-sm">
                            <img src="media/img/ConfectioneryImages/store.png">
                        </div>
                      </div>
                  </div>
                </div>
            </div>
              
            <div id="carouselItem" class="carousel-item">
                <img class="d-block w-100" src="bck.png" alt="Fourth Slide">
                <div class="carousel-caption d-none d-md-block" style="top: 10px; width: 950px;">
               <h5><img src="media/img/ConfectioneryImages/unitylogo.png" width="100" height="100">How It's Made</h5>
                    Press start to play our Coffee Confectionery game and help prepare some confections.
                <iframe src ="media/animation-build/index.html" width="900px" height="380px" scrolling = "no"></iframe>
                </div>
          </div>
              

<div id="carouselItem" class="carousel-item">
              <img class="d-block w-100" src="bck.png" alt="Fifth Slide">
              <div class="carousel-caption d-none d-md-block" style="top: 10px;">
<!-- 1st slide-->
<div class="slideshow-container">

<div class="mySlides">
 <h5>Our Confectionery</h5>
 <div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span>
</div>
                  <div class = "shop-items">
    
      <div class = "shop-item"><img class = "shop-item-image"src="media/img/ConfectioneryImages/regular.png" width="100" height="100"> <h3 class = "shop-item-title" style="color:#432918;">Regular</h3><div class = "shop-item-detail"> 
<!-- Coffee strength radio buttons-->
<input type="radio" id="1" name="strength" value="1">
  <label for="1"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 1 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="2" name="strength" value="2">
  <label for="2"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 2 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="3" name="strength" value="3">
  <label for="3"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 3 tbsp of coffee powder</label></label><br>
          
                            <h4 class = "shop-item-price" style="color:#432918;">£5.00</h4>
                            <button class="btn shop-item-btn" type="button">Add to cart</button>
                        </div></div>
    <!-- Coffee strength radio buttons-->  
      <div class = "shop-item"><img class = "shop-item-image" src="media/img/ConfectioneryImages/caramel.png" width="100" height="100"> <h3 class = "shop-item-title" style="color:#432918;">Caramel</h3><div class = "shop-item-detail">
<!-- Coffee strength radio buttons-->
 <input type="radio" id="1" name="strength" value="1">
  <label for="1"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 1 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="2" name="strength" value="2">
  <label for="2"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 2 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="3" name="strength" value="3">
  <label for="3"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 3 tbsp of coffee powder</label></label><br>
          
                            <h4 class = "shop-item-price" style="color:#432918;">£5.00</h4>
                            <button class="btn shop-item-btn" type="button">Add to cart</button>
                        </div></div>
  <!-- Coffee strength radio buttons-->    
      <div class = "shop-item"><img class = "shop-item-image" src="media/img/ConfectioneryImages/cream.png" width="100" height="100"> <h3 class = "shop-item-title" style="color:#432918;">Cream</h3><div class = "shop-item-detail">
  <!-- Coffee strength radio buttons-->        
 <input type="radio" id="1" name="strength" value="1">
  <label for="1"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 1 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="2" name="strength" value="2">
  <label for="2"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 2 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="3" name="strength" value="3">
  <label for="3"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 3 tbsp of coffee powder</label></label><br>
          
                            <h4 class = "shop-item-price" style="color:#432918;">£5.00</h4>
                            <button class="btn shop-item-btn" type="button">Add to cart</button>
                        </div></div>
   <!-- Coffee strength radio buttons-->   
      <div class = "shop-item"><img class = "shop-item-image" src="media/img/ConfectioneryImages/chocolate.png" width="100" height="100"> <h3 class = "shop-item-title" style="color:#432918;">Chocolate</h3><div class = "shop-item-detail">
 <!-- Coffee strength radio buttons-->         
<input type="radio" id="1" name="strength" value="1">
  <label for="1"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 1 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="2" name="strength" value="2">
  <label for="2"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 2 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="3" name="strength" value="3">
  <label for="3"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 3 tbsp of coffee powder</label></label><br>
          
                            <h4 class = "shop-item-price" style="color:#432918;">£5.00</h4>
                            <button class="btn shop-item-btn" type="button">Add to cart</button>
                        </div></div>

</div>
</div>
<!-- 2nd slide-->
<div class="mySlides">
<h5>Our Confectionery</h5>
 <div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span>
</div>
                  <div class = "shop-items">

      <div class = "shop-item"> <img class = "shop-item-image" src="media/img/ConfectioneryImages/hazelnut.png" width="100" height="100"> <h3 class = "shop-item-title" style="color:#432918;">Hazelnut</h3><div class = "shop-item-detail">
  <!-- Coffee strength radio buttons-->        
 <input type="radio" id="1" name="strength" value="1">
  <label for="1"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 1 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="2" name="strength" value="2">
  <label for="2"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 2 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="3" name="strength" value="3">
  <label for="3"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 3 tbsp of coffee powder</label></label><br>
          
                            <h4 class = "shop-item-price" style="color:#432918;">£5.00</h4>
                            <button class="btn shop-item-btn" type="button">Add to cart</button>
                        </div></div>
  <!-- Coffee strength radio buttons-->    
      <div class = "shop-item"><img class = "shop-item-image" src="media/img/ConfectioneryImages/mint.png" width="100" height="100"> <h3 class = "shop-item-title" style="color:#432918;">Mint</h3><div class = "shop-item-detail">
   <!-- Coffee strength radio buttons-->       
  <input type="radio" id="1" name="strength" value="1">
  <label for="1"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 1 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="2" name="strength" value="2">
  <label for="2"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 2 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="3" name="strength" value="3">
  <label for="3"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 3 tbsp of coffee powder</label></label><br>
          
                            <h4 class = "shop-item-price" style="color:#432918;">£5.00</h4>
                            <button class="btn shop-item-btn" type="button">Add to cart</button>
                        </div></div>
      
      <div class = "shop-item"><img class = "shop-item-image" src="media/img/ConfectioneryImages/peanut_butter.png" width="100" height="100"> <h3 class = "shop-item-title" style="color:#432918;">Peanut butter</h3><div class = "shop-item-detail">
 <!-- Coffee strength radio buttons-->         
<input type="radio" id="1" name="strength" value="1">
  <label for="1"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 1 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="2" name="strength" value="2">
  <label for="2"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 2 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="3" name="strength" value="3">
  <label for="3"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 3 tbsp of coffee powder</label></label><br>
          
                            <h4 class = "shop-item-price" style="color:#432918;">£5.00</h4>
                            <button class="btn shop-item-btn" type="button">Add to cart</button>
                        </div></div>
      
      <div class = "shop-item"><img class = "shop-item-image" src="media/img/ConfectioneryImages/vanilla.png" width="100" height="100"> <h3 class = "shop-item-title" style="color:#432918;">Vanilla</h3><div class = "shop-item-detail">
 <!-- Coffee strength radio buttons-->         
<input type="radio" id="1" name="strength" value="1">
  <label for="1"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 1 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="2" name="strength" value="2">
  <label for="2"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 2 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="3" name="strength" value="3">
  <label for="3"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 3 tbsp of coffee powder</label></label><br>
                            <h4 class = "shop-item-price" style="color:#432918;">£5.00</h4>
                            <button class="btn shop-item-btn" type="button">Add to cart</button>
                        </div></div>
</div>

 <div id="unityPlayer">
    
</div>   
         
</div>

</div>
</div>

</div>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

          <div id="carouselItem" class="carousel-item">
            <img class="d-block w-100" src="bck.png" alt="Seventh Slide">
            <div class="carousel-caption d-none d-md-block" style="top: 10px">
                <h5>Specials</h5>
                These specials are availble for a limeted time only.
                <div class = "shop-items">
                    <div class = "shop-item">
                        <img class = "shop-item-image" src="media/img/ConfectioneryImages/vdayflav.png"
                        width="100" height="100">
                        <h3 class = "shop-item-title" style="color:#432918;">Valentine's Day</h3>
                        <div class = "shop-item-detail">
                  
 <!-- Coffee strength radio buttons-->                           
<input type="radio" id="1" name="strength" value="1">
  <label for="1"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 1 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="2" name="strength" value="2">
  <label for="2"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 2 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="3" name="strength" value="3">
  <label for="3"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 3 tbsp of coffee powder</label></label><br>
                        
                            <h4 class = "shop-item-price" style="color:#432918;">£5.00</h4>
                            <button class="btn shop-item-btn" type="button">Add to cart</button>
                        </div>
                    </div>
                    
                    <div class = "shop-item">
                        <img class = "shop-item-image" src="media/img/ConfectioneryImages/xmasflav.png"
                        width="100" height="100">
                        <h3 class = "shop-item-title" style="color:#432918;">Christmas</h3>
                        <div class = "shop-item-detail">
  <!-- Coffee strength radio buttons-->                            
  <input type="radio" id="1" name="strength" value="1">
  <label for="1"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 1 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="2" name="strength" value="2">
  <label for="2"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 2 tbsp of coffee powder</label><br></label><br>
  <input type="radio" id="3" name="strength" value="3">
  <label for="3"><img class="a" src="media/img/ConfectioneryImages/bean.png" width="30" height="50"><label style="color:#432918;"> 3 tbsp of coffee powder</label></label><br>
                        
                            <h4 class = "shop-item-price" style="color:#432918;">£5.00</h4>
                            <button class="btn shop-item-btn" type="button">Add to cart</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div id="carouselItem" class="carousel-item">
            <img class="d-block w-100" src="bck.png" alt="Eighth slide">
            <div class="carousel-caption d-none d-md-block" style="top: 10px">
              <div class="container">
                <h5>Contact Us</h5>
                
               
                <h5 class ="text-center text-success"><?php echo $result?></h5>
                <div id="error"></div>
                <form method="post" action="" class="needs-validation" id="myform" >
                    <div class="form-group">
                    <div class="input-group-prepend">
                        <label for="form_name">Name:*</label><br>
                        <input type="text" name="name" id = "myname"class="form-control" placeholder="Please enter your firstname" required>
                        <div class = "invalid-feedback">Please fill out this field</div>
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="input-group-prepend">
                        <label for="form_email">Email:*</label><br>
                        <input type="email" name="email" id="myemail" class="form-control" placeholder="Please enter your email" required>
                        <div class = "invalid-feedback">Please enter a valid email</div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="input-group-prepend">
                        <label for="form_message">Message:</label><br>
                        <textarea id="form_message" name="message" id="mymessage" class="form-control" placeholder="Your message goes here" rows="4"></textarea>
                        <div class = "invalid-feedback">Please fill out this field</div>
                    </div>
                    </div>

                    <div class="col-md-12">
                    <input type="submit" class="btn btn-success" name="submit" value="Send message" style="background-color:lightgrey; border:none; color:black; ">
                    </div>
                    
                </form>
                <script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
                
                <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse expedita libero quae quas quisquam inventore, error veritatis ratione cumque assumenda, sequi, quod magni maxime! Assumenda dicta minima dolor perspiciatis odit?</p> -->
              </div>
            </div>
        </div>

        <div id="carouselItem" class="carousel-item">
                <img class="d-block w-100" src="bck.png" alt="Ninth slide">
                <div class="carousel-caption d-none d-md-block" id="shopping-cart" >
                  <h5>Shopping Cart</h5>
                  <div class="cart-wrapper">

                    <div class ="cart-items">
                       
                    </div>

                 <div class="cart-total">
                     <h3 class="cart-total-title">Total</h3>
                     <span class="cart-total-price">£00.00</span><br><button onclick="checkout()">Checkout</button>
                 </div>
                      
                    </div>
                </div>
                     <script>
                     function checkout() {
                        window.location.href = "checkout.html.php";
                     }
                     </script>


          </div>

          <!--- Carousel Controls -->
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <!-- data-target attached to navigation li to change carousel item-->
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
<div class="row">
  <div class="column" style="background-color:black;">
    <h2>About Us</h2>
    <p>Privacy notice<br><br>Do not sell my information<br><br>Cookie policy<br><br>Accessibility statement<br><br>Terms of use</p>
  </div>
  <div class="column" style="background-color:black;">
    <h2>Contact Us</h2>
    <p>0208 000 0000<br><br>Old Royal Naval College,<br><br>Park Row, Greenwich,<br><br>London<br><br>SE10 9LS</p>
  </div>

   <div class="column" style="background-color:black;">
    <h2>Follow Us</h2>
    <p><img class="a" src="contacts.jpg" width="180" height="50"></p>
  </div>
</div>
<div class="row"><div class="topright"><?php include 'footer.html.php' ; ?></div>
</body>
</html>