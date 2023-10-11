<?php

class Database {
    // Variable to store the database connection
    private $connection;

    // Constructor aclled automatically 
    function __construct() {
      // database object to be created by invoking connectdb() method
        $this->connect_db();  
    }

    // Function to connect to the database
    public function connect_db() {
        // connect to my database inside localhost in library database using mysqli_connect()
        $this->connection = mysqli_connect('localhost', 'root', '', 'library');

        // Check for a connection error
        if (mysqli_connect_error()) {
          // immediately terminate script if error is found using mysqli_connect_error()
            die("Database connection failed: " . mysqli_connect_error());
        }
    }

    // fucntion to return data from database as an array of rows
    public function getData($query){
      // query executed on database and stored in $result
      $result = $this->connection->query($query);
      // check if query executed successfully
      if ($result == false){
          return false;
        }

        // initialised an empty array to store data rows
        $rows = array();
            // fetch each data row and put it in rows array
            while ($row = $result->fetch_assoc()){
              $rows[] = $row;
            }
            // return array having the fetched data
            return $rows;
          }


          public function execute($query){
            // execute sql query on database
            $result = $this->connection->query($query);
            // if command execution fails
            if ($result == false){
              echo 'Error: cannot execute the command';
              return false;
            // if command executes
            }else{
              return true;
            }
          }
      
    }
    
    // database object created inside database class to call different method
    $database = new Database();
  ?>
  