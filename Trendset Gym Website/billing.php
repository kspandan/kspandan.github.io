<?php
include "config.php";

if (isset($_REQUEST["submit"])) {
    
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $date = $_REQUEST['date'];
    $amount = $_REQUEST['amount'];

    

    $ins = "INSERT INTO `billing` VALUES ('$id','$name','$date','$amount')";
        $query1 = mysqli_query($connection, $ins);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bill.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" type="image/x-icon" href="images/gym.ico">

   </head>
<body>
  <div class="container">
    <div class="title">Payment</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Member ID</span>
            <input type="text" name="id" id="inputEmail4" placeholder="Enter ID" required>
          </div>
          <div class="input-box">
            <span class="details">Member Name</span>
            <input type="text" name="name" placeholder="Enter name" required>
          </div>
          <div class="input-box">
            <span class="details">Registration Date</span>
            <input type="date" name="date" placeholder="Enter billing data" required>
          </div>
          <div class="input-box">
            <span class="details">Amount</span>
            <input type="text" name="amount" placeholder="Enter amount" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>