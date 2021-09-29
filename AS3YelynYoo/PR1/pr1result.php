<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $correctcnt=0;
  $q1 = $_POST['Q1'];
  if($q1 > 0){
    $correctcnt+=1;
  }


  $q2 = $_POST['Q2'];
  if($q2 > 0){
    $correctcnt+=1;
  }

  $q3 = $_POST['Q3'];
  $q3total=0;
  foreach ($q3 as &$value) {
    $q3total = $q3total + $value;
}
    if($q3total == 20){
        $correctcnt+=1;
    }
    else{
      $q3total = 0;
    }
  $q3str = implode(" ", $q3);

  $q4 = $_POST['Q4'];
  $q4total=0;
  foreach ($q4 as &$val) {
    $q4total = $q4total + $val;
}
    if($q4total == 30){
        $correctcnt+=1;
    }
    else{
      $q4total = 0;
    }
  $q4str = implode(" ", $q4);
  $q5 = $_POST['Q5'];
  if($q5 > 0){
    $correctcnt+=1;
  }

  $q6 = $_POST['Q6'];
  if($q6 > 0){
    $correctcnt+=1;
  }

  $tot=$q1+$q2+$q3total+$q4total+$q5+$q6;
  $pass="";
  if($tot >= 70){
      $pass="Pass";
  }
  else{
    $pass="Fail";
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
  <h1 style="text-align: center; color:palevioletred;">Simple Quiz</h1>
  <h2>Overall score 100 <br>
        Pass if score of 70 or higher</h2>
    <p>Q1 score is <?php echo $q1; ?>.</p>
    <p>Q2 score is <?php echo $q2; ?>.</p>
    <p>Q3 score is <?php echo $q3total; ?>.</p>
    <p>Q4 score is <?php echo $q4total; ?>.</p>
    <p>Q5 score is <?php echo $q5; ?>.</p>
    <p>Q6 score is <?php echo $q6; ?>.</p>
    <p style="color:blueviolet;">Number of correct problem : <?php echo $correctcnt; ?> </p>
    <p style="color:blueviolet;">Total point : <?php echo $tot; ?> </p>
    <p style="color:blueviolet;">Pass or not : <?php echo $pass; ?> </p>

    <br/>

   
  </body>
  <footer style="color: palevioletred; text-align: center;"> Made by Yelyn Yoo </footer>
</html>