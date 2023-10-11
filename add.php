<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="addStyles.css"> <!-- link for connecting to styles.css -->
    <title>Document</title>
</head>
<body>
   <!-- Page header -->
   <header>
        <h1>Jhajj Transport</h1>
        <!-- Navigation Bar -->
        <ul class="navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="view.php">View</a></li>
        </ul>
    </header>
<?php
      // including 2 php files to access their classes
      include_once ('validate.php');
      include_once ('database.php');
     
      // craete an object in validate class
      $valid = new validate();
      
      // check if form was submitted
      if(!empty($_POST['Submit'])){
        // retirieve and sanitize out validate class 
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $licenseNumber = $_POST['licenseNumber'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $vehicleYear = $_POST['vehicleYear'];
        $model = $_POST['model'];
        $mileage = $_POST['mileage'];
        $registrationNumber = $_POST['registrationNumber'];
        $capacity = $_POST['capacity'];
        $engineType = $_POST['engineType'];

        // check for empty fields using checkEmpty() method
        $msg = $valid->checkEmpty($_POST, array('fname', 'lname', 'licenseNumber', 'phoneNumber', 'email', 'vehicleYear', 'model', 'mileage', 'registrationNumber', 'capacity', 'engineType'));
        // check phone number using validPhoneNumber method
        $checkPhoneNumber = $valid->validPhoneNumber($_POST['phoneNumber']);
        // check email using validEmail method
        $checkEmail = $valid->validEmail($_POST['email']);
      
        // if data in inserted print msg
        if($msg != null){
          echo $msg;
          echo "<a href='javascript:self.history.back();'>Go Back</a>";
        }
        // if phone number is not valid
        elseif(!$checkPhoneNumber){
          echo '<p>Please provide a valid age.</p>';
          echo "<a href='javascript:self.history.back();'>Go Back</a>";
        }
        // if email is not valid
        elseif(!$checkEmail){
          echo '<p>Please provide a valid email.</p>';
          echo "<a href='javascript:self.history.back();'>Go Back</a>";
        }
        // if everything entered by user is correct insert data in database
        else{
          
          $result = $database->execute("INSERT INTO truckdriver(fname, lname, licenseNumber, phoneNumber, email, vehicleYear, model, mileage, registrationNumber, capacity, engineType) VALUES('$fname', '$lname', '$licenseNumber', '$phoneNumber', '$email', '$vehicleYear', '$model', '$mileage', '$registrationNumber', '$capacity', '$engineType')");
         
          if($result){
            echo "<p>Data added successfully.</p>";
            echo "<a href='view.php'>View Result</a>";
          }
               
        }
      }
    ?>
    <!-- Page Footer -->
    <footer>
        <section>
            <div>
                <p class="conclusion">We invite you to join us on this journey. Whether you are a client, partner, or prospective team member, Jhajj Transport is here to provide you with the 
                    best in transportation and logistics services. Together, we'll drive success.Thank you for considering Jhajj Transport for your transportation needs.
                    We look forward to serving you and building a brighter future together.</p>
                   
            </div>
            <!-- Footer Links -->
            <div class="impLinks">
            <div class="links1">
                <!-- List 1 of links -->
                <ul class="l1">
                    <li><h3>About</h3></li>   
                    <li><a href="www.google.com">Join Jhajj Transport</a></li>
                    <li><a href="www.google.com">Our locations</a></li>
                    <li><a href="www.google.com">CRS Initiatives</a></li>
                    <li><a href="www.google.com">Corporate Membership</a></li>    
                </ul>
            </div>
            <div class="links2">
                <!-- List 2 of links -->
                <ul class="l1">
                    <li><h3>Contact us:</h3></li>   
                    <li><a href="www.google.com">Email</a></li>
                    <li><a href="www.google.com">Locations</a></li>
                    <li><a href="www.google.com">Delivery Schedules</a></li>    
                </ul>
            </div>
            <!-- List 3 of links -->
             <div class="sclinks">
                    <h3>Follow us on: </h3>
                    <i class="fab fa fa-linkedin"></i>
                    <i class="fab fa fa-twitter"></i>
                    <i class="fab fa fa-instagram"></i>
                    <i class="fab fa fa-youtube"></i>
                    <i class="fab fa fa-facebook-f"></i>
            </div>
            </div>
            <!-- Copyright Message by Company -->
            <div class="copyright">
                 <p>&copy 2023 Jhajj Transport, Inc. All rights reserved</p>        
            </div>
        </section>
    </footer>
</body>
</html>