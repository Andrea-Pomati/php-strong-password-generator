<?php

function generatePassword($passwordLength) {


  $lowercaseAlphabet = 'abcdefghijklmnopqrstuvwxyz';
  $uppercaseAlphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $numbers = '0123456789';
  $specialChar = '!@#$%^&*()_-+=;:<>/?';

 
  $alphanumericChars = $lowercaseAlphabet . $uppercaseAlphabet . $numbers . $specialChar;



  $generatedPassword = "";

  for($i = 0; $i < $passwordLength; $i++) {
    
 

    $newRandomChar = $alphanumericChars[rand(0, strlen($alphanumericChars) - 1)];

    $generatedPassword .= $newRandomChar;
  }

  return $generatedPassword;

}