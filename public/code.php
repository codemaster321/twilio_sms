<?php include "../includes/header.php" ?>

<?php
use Twilio\Rest\Client;


$sid="XXXXXXXXXXXXX";
$token="xxxxxxxxxxx";
$from='xxxxxxxxx';
?>

<?php

  if(isset($_POST['submit1'])){


          if(isset($_POST['number']) ){


              $client = new Client($sid,$token);
              $SESSION['code']=$code=uniqid();

              $con -> query("INSERT INTO verifications(code) VALUES('$code')");


                $message = $client->messages->create(
                $_POST['number'], // Text this number
                [
                  'from' => $from, // From a valid Twilio number
                  'body' => $code;
                ]
              );

echo '<h3 class="bg-success text-center">Code sent</h3>';



         }




  }
  else
  {
    echo "hey";
  }




?>

<style>

  .container
  {
    padding:1%;
  }

</style>


<div class="container">
  <h4 class="display-4">Verification Code</h4>
</div>

<form role="form" class="" href="" method="post">

<div class="container">


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Code</label>
  <input name="number" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number">
</div>


 <input name="submit1" type="submit" class="btn btn-primary btn-block" value="Send Code">

</div>

</form>

<?php include "../includes/footer.php" ?>
