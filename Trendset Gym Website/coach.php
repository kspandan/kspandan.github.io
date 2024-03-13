<?php
include "config.php";

if (isset($_REQUEST["submit"])) {
    
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $doj = $_REQUEST['doj'];
    $experience = $_REQUEST['experience'];

    

    $ins = "INSERT INTO `coach` VALUES ('$id','$name','$doj','$experience')";
        $query1 = mysqli_query($connection, $ins);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Coach</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bill.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/gym.ico">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Coach Registration</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Member ID</span>
            <input type="text" name="id" placeholder="Enter ID" required>
          </div>
          <div class="input-box">
            <span class="details">Member Name</span>
            <input type="text" name="name" placeholder="Enter name" required>
          </div>
          <div class="input-box">
            <span class="details">Date of Joining</span>
            <input type="date" name="doj" placeholder="Enter doj" required>
          </div>
          <div class="input-box">
            <span class="details">Experience</span>
            <input type="text" name="experience" placeholder="Enter experience" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>