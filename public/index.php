<?php include "../includes/header.php" ?>

<?php
use Twilio\Rest\Client;


$sid="AC6574dd10a860e092054fcdaea282eaeb";
$token="859712ceb59c57d9f4ff5547ebd43eab";
$from='9148098796';
?>

<?php

  if(isset($_POST['submit1'])){


          if(isset($_POST['number']) ){


              $client = new Client($sid,$token);

              $call = $client->calls->create(
  $_POST['number'], // call this number

    $from, // From a valid Twilio number
    [
      'url' => 'https://twimlets.com/holdmusic?Bucket=com.twilio.music.ambient'
  ]

);

echo '<h3 class="bg-success text-center">Call has been made</h3>';



         }




  }
  else
  {
    echo "hey";
  }




?>

<h3 class="bg-success text-center">Call has been made</h3>
<style>

  .container
  {
    padding:1%;
  }

</style>


<div class="container">
  <h4 class="display-4">Home Page</h4>
</div>

<form role="form" class="" href="" method="post">

<div class="container">


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
  <input name="number" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter the message"></textarea>
</div>

 <input name="submit1" type="submit" class="btn btn-primary btn-block" value="Send Message">

</div>

</form>

<?php include "../includes/footer.php" ?>
