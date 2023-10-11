<?php
    // include database.php to connect to it
    include_once('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Submission</title>
    <link rel="stylesheet" type="text/css" href="myStyles.css"><!-- link for connecting to myStyles.css -->
</head>
<body>
    <!-- Page Header -->
<header>
        <h1>Jhajj Transport</h1>
        <ul class="navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="view.php">View</a></li>
        </ul>
</header>
 <!-- Page Main -->
    <main>
    <div>
        <br/>
        <br/>
        <h2 style="margin-left:25px;">Driver Details:</h2></div>
        <br/>
    <table class="table">
         <!-- php code to fetch data from truckdriver table -->
        <?php
            $query = 'SELECT * FROM truckdriver';
            $result = $database->getData($query);
        ?>
        <tr>
            <th>Driver_ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>License Number</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Vehicle Year</th>
            <th>Model</th>
            <th>Mileage</th>
            <th>Registration Number</th>
            <th>Capacity</th>
            <th>Engine Type</th>
        </tr>
        <!-- php code to get data from table in the form of arrays sby using a forach loop to iterate through each row -->
        <?php
            foreach($result as $key => $res){
      
            // print data in table
            echo "<tr>";
                echo "<td>".$res['driver_ID']."</td>";
                echo "<td>".$res['fname']."</td>";
                echo "<td>".$res['lname']."</td>";
                echo "<td>".$res['licenseNumber']."</td>";
                echo "<td>".$res['phoneNumber']."</td>";
                echo "<td>".$res['email']."</td>";
                echo "<td>".$res['vehicleYear']."</td>";
                echo "<td>".$res['model']."</td>";
                echo "<td>".$res['mileage']."</td>";
                echo "<td>".$res['registrationNumber']."</td>";
                echo "<td>".$res['capacity']."</td>";
                echo "<td>".$res['engineType']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
    </main>
     <!-- Page Footer -->
    <footer>
        <section>
            <div>
                <p class="conclusion">We invite you to join us on this journey. Whether you are a client, partner, or prospective team member, Jhajj Transport is here to provide you with the 
                    best in transportation and logistics services. Together, we'll drive success.Thank you for considering Jhajj Transport for your transportation needs.
                    We look forward to serving you and building a brighter future together.</p>
                   
            </div>
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
                <!-- List 1 of links -->
                <ul class="l1">
                    <li><h3>Contact us:</h3></li>   
                    <li><a href="www.google.com">Email</a></li>
                    <li><a href="www.google.com">Locations</a></li>
                    <li><a href="www.google.com">Delivery Schedules</a></li>    
                </ul>
            </div>
             <div class="sclinks">
                    <h3>Follow us on: </h3>
                    <i class="fab fa fa-linkedin"></i>
                    <i class="fab fa fa-twitter"></i>
                    <i class="fab fa fa-instagram"></i>
                    <i class="fab fa fa-youtube"></i>
                    <i class="fab fa fa-facebook-f"></i>
            </div>
            </div>
            <div class="copyright">
                 <p>&copy 2023 Jhajj Transport, Inc. All rights reserved</p>        
            </div>

        </section>
    </footer>
</body>
</html>