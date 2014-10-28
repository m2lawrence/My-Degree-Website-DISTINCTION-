<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $firstname = $_REQUEST['firstname'] ;
  $lastname = $_REQUEST['lastname'] ;
  $address = $_REQUEST['address'] ;
  $city = $_REQUEST['city'] ;
  $country = $_REQUEST['country'] ;
  $postcode = $_REQUEST['postcode'] ;
  $phonenumber = $_REQUEST['phonenumber'] ;
  $email = $_REQUEST['email'] ;
  $CreditCard = $_REQUEST['CreditCard'] ;
  $ExpirationDate = $_REQUEST['ExpirationDate'] ;
  $x3SecurityNumbers = $_REQUEST['x3SecurityNumbers'] ;
  
  $L1 = $_REQUEST['L1'] ;
  $L2 = $_REQUEST['L2'] ;
  $L3 = $_REQUEST['L3'] ;
  
  $F1 = $_REQUEST['F1'] ;
  $F2 = $_REQUEST['F2'] ;
  $F3 = $_REQUEST['F3'] ;
  $F4 = $_REQUEST['F4'] ;
  
  $B1 = $_REQUEST['B1'] ;
  $B2 = $_REQUEST['B2'] ;
  $B3 = $_REQUEST['B3'] ;
  $B4 = $_REQUEST['B4'] ;
  
  $G1 = $_REQUEST['G1'] ;
  $G2 = $_REQUEST['G2'] ;
  $G3 = $_REQUEST['G3'] ;
  $G4 = $_REQUEST['G4'] ;
  $G5 = $_REQUEST['G5'] ;
  $G6 = $_REQUEST['G6'] ;
    
  $day = $_REQUEST['day'] ;
  $time = $_REQUEST['time'] ;
  $PreDeliveryCall = $_REQUEST['PreDeliveryCall'] ;
  $GrassSquared = $_REQUEST['GrassSquared'] ;
  
  $T = $_REQUEST['T'] ;
  $E = $_REQUEST['E'] ;
  $P = $_REQUEST['P'] ;
  
  $emailNewsLetter = $_REQUEST['emailNewsLetter'] ;
  $TextMessage = $_REQUEST['TextMessage'] ;
  mail( "xhtml@live.co.uk", "$firstname $lastname", 
  $question, "From: $email" );
  }
// --------------------------------------------------------------------
// An Error Message is a message printed on the screen.
// An Alert is a Message Box that is displayed in the middle of the screen and looks great!
// If no email entered: Print an error. 

elseif (empty($email))
{
alert("No email address was entered." <br /> "Please enter your email now.");
}
// If both no text message and no email entered then: Print an error message. 
elseif (empty($TextMessage) && empty($email))
{
alert("No email address and no message was entered." <br /> "Please include an email and a text message");
}
// If no text message entered: Print an error message.
elseif (empty($TextMessage))
{
alert("No message was entered today." <br /> "Please include the time of your delivery in text message box.");
}
?>