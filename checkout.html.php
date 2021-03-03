<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="media/Logo.png">
    
                    <script>
                     function checkout2() {
                       location.href = "checkout2.html.php";
                     }
                     </script>
    
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background-image: url('media/StoreAnimation.gif');
  font-family: 'Century Gothic', sans-serif;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #432918;
  color: white;
  width: 70%;
  margin: 200px; 
  margin-top: 10px;
  padding: 5px 20px 15px 20px;
  /*border-radius: 3px;*/
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: lightgrey;
  color: #432918;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: darkgrey;
}

a {
  color: black;
}



span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="checkout2.html.php">
      
        <div class="row">
          <div class="col-50">
            <h1 style="text-align:center;">Billing Address</h1>
            <label for="fname"> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="country"> Country</label>
            <input type="text" id="country" name="country" placeholder="United Kingdom">
            <label for="city"> City</label>
            <input type="text" id="city" name="city" placeholder="London">

            <div class="row">
              <div class="col-50">
                <label for="zip">Postcode</label>
                <input type="text" id="zip" name="zip" placeholder="SE10 9LS">
              </div>
            </div>
          </div>
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
                     
      </form>
    </div>
  </div>
  
    </div>
<a href="index-html.php">Back to Homescreen</a>
</body>
</html>
