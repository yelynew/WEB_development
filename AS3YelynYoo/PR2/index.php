<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['custName'];
  $street = $_POST['custStreet'];
  $city = $_POST['custCity'];
  $state = $_POST['custState'];
  $zip = $_POST['custZip'];
  $phone = $_POST['custPhone'];
  $email = $_POST['custEmail'];
  $infosrc = "nothing";
  $infosrc = isset($_POST['infoSrc']) ? $_POST['infoSrc'] : false;
   if ($infosrc) {
   $infosrc = $_POST['infoSrc'];
   } else {
   $infosrc = "no answer";}

  $source="";
  foreach($infosrc as $item) {
    $source= $source + $item;
}

  $dish = "no answer";
  if(!empty($_POST['favDish'])){
    $dish = $_POST['favDish'];
}
  else{
  $dish = "no answer";}

  $dineout = $_POST['dineOut'];
  $mailag = "disagree";
  if(!empty($_POST['mailMe'])){
    $mailag = "agree";
}
  else{}
  $visit = $_POST['visitDate'];
  $ordert = $_POST['orderType'];
  
  $friendly = "no answer";
  if(!empty($_POST['sFriend'])){
    $friendly = $_POST['sFriend'];
}
  else{
    $friendly = "no answer";
  }
  
  $occorect = "no answer";
  if(!empty($_POST['oCorrect'])){
    $occorect = $_POST['oCorrect'];
    }
  else{
    $occorect = "no answer";
  }
  
  $foodhot = "no answer";
  if(!empty($_POST['foodHot'])){
    $foodhot = $_POST['foodHot'];
}
  else{
    $foodhot = "no answer";
  }

   $srate = $_POST['serviceRate'];
   $custExp = "no answer";
  if(!empty($_POST['custExp'])){
    $custExp = $_POST['custExp'];
}
  else{
    $custExp = "no answer";
  }
  
  

  if (empty($name)) {
    echo "Name is empty";
  } else {
    //echo $name;
  }
}

 
?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <title>Survey Result</title>

  </head>
  <body>
    <h1> Customer Information </h1>
    <p>Name is <?php echo $name; ?>.</p>
    <p>Street is <?php echo $street; ?>.</p>
    <p>City is <?php echo $city; ?>.</p>
    <p>State is <?php echo $state; ?>.</p>
    <p>Zipcode is <?php echo $zip; ?>.</p>
    <p>Street is <?php echo $street; ?>.</p>
    <p>Phone number is <?php echo $phone; ?>.</p>
    <p>Email is <?php echo $email; ?>.</p>
    <p>The customer heard Red Ball Pizza from where? <?php echo $source; ?>.</p>
    <p>The favorite food of this customer : <?php echo $dish; ?>.</p>
    <p>How many times do you dine out per month? <?php echo $dineout; ?>.</p>
    <p>Consent to receive mail : <?php echo $mailag; ?>.</p>
    
    <br/>
    <h1>Share your Experience at the Red Ball Pizza</h1>
    <p>Date of visit* <?php echo $visit; ?>.</p>
    <p>Order type* <?php echo $ordert; ?>.</p>
    <p>Was your service friendly? <?php echo $friendly; ?>.</p>
    <p>Was your order correct? <?php echo $occorect; ?>.</p>
    <p>Was your food hot? <?php echo $foodhot; ?>.</p>
    <p>Rate the overall service <?php echo $srate; ?>.</p>
    <p>Tell us more about your experience! <?php echo $custExp; ?>.</p>
    <br/>

   
  </body>
</html>