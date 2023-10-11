<?php
// validate class
  class validate{
    // function to check if data is not entered by user
    public function checkEmpty($data, $fields){
      $msg = null; // initialise empty message
      foreach ($fields as $value){
        // check if vaue of field in data array is empty
        if (empty($data[$value])){
          $msg = "<p>$value field empty</p>"; // error message for empty field
        }
      }
      // return message
      return $msg;
    }

    // check phone number field
    public function validPhoneNumber($phoneNumber){
      // check to see if the phone number is numeric using preg_match function
      if (preg_match("/^[0-9]+$/", $phoneNumber)){
        return true;
      }
      return false;
    }

    // check to see if email follows the email format using filter_var method
    public function validEmail($email){
      if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
      }
      return false;
    }
  }
?> 