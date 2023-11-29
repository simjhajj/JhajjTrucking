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
    <? 
        include("templates/header.php");
    ?>
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
    <? 
        include("templates/footer.php");
    ?>
    </footer>
</body>
</html>