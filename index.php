<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- link for connecting to styles.css -->
    <script src="https://kit.fontawesome.com/457a315592.js"crossorigin="anonymous"></script> <!-- link for connecting to icons-->
    <title>Jhajj Transport</title>
</head>
<body>
    <!-- Page header -->
    <? 
        include("templates/header.php");
    ?>
    <!-- Page Main -->
    <main>
        <div class="container">
            <!-- Form -->
            <div class="formBox">
            <h2 style="margin-left:20px;">Enter the following Details: </h2>
            <form method="post" action="add.php">
                <label for="fname">Firstname:</label></br>
                <input type="text" name="fname" id="fname"></br>
                <label for="lname">Lastname:</label></br>
                <input type="text" name="lname" id="lname"><br/>
                <label for="licenseNumber">License Number</label><br/>
                <input type="text" name="licenseNumber" id="licenseNumber"><br/>
                <label for="phoneNumber">Phone Number:</label><br/>
                <input type="tel" name="phoneNumber" id="phoneNumber"><br/>
                <label for="email">Email:</label><br/>
                <input type="email" name="email" id="email"><br/>
           
                <br/>
                <h2>Enter your Vehicle's Details:</h2>
                <br/>
        
                <label for="vehicleYear">Vehicle Year:</label><br/>
                <input type="date" name="vehicleYear" id="vehicleYear"><br/>
                <label for="model">Model:</label><br/>
                <input type="text" name="model" id="model"><br/>
                <label for="mileage">Mileage:</label><br/>
                <input type="number" name="mileage" id="mileage"><br/>
                <label for="registrationNumber">Registration Number</label><br/>
                <input type="number" name="registrationNumber" id="registrationNumber"><br/>
                <label for="capacity">Capacity:</label><br/>
                <input type="number" name="capacity" id="capacity"><br/>
                <label for="engineType">Engine Type:</label><br/>
                <input type="text" name="engineType" id="engineType">
                <br/>
                <br/>
                <input type="submit" value="Submit" name="Submit">
            </div>

            <!-- Introdcution of Page -->
            <div class="image">
                <!-- Image inserted using absolute path -->
                <img src="https://i.pinimg.com/originals/17/46/5b/17465b5c4f691bef9c21a9f1dc8a0a60.jpg" title="Jhajj Truck" alt="Truck on highway"> 
                <!-- Introduction -->
                    <div class="introduction">
                    <h3>About us:</h3>
                    <p>Welcome to Jhajj Transport, your trusted partner in the world of transportation and logistics. With a rich history spanning 15 years, we have
                    been at the forefront of delivering excellence in the trucking industry.</p>
                    <br/>
                    <h3>Our Mission:</h3>
                    <p>At Jhajj Transport, our mission is simple yet profound: to deliver goods safely, efficiently, and reliably, while consistently exceeding our clients' expectations. 
                    We understand that your cargo is more than just products; it's your business, your reputation, and your livelihood. That's why we approach every delivery with the utmost care and dedication.</p>
                    <h3>About the Form:</h3>
                    <p>Fill in the form to submit your data:</p>
                    </div>
            </div>
    </main>
    <!-- Page Footer -->
    <?php
       include("templates/footer.php");
    ?>
</body>
</html>