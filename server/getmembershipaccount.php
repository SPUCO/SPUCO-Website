<?php
include('connection.php');
if(isset($_GET['logout'])){
  if(isset($_SESSION['logged_in'])){
    unset($_SESSION['logged_in']);
    //Unset Úser Session
    unset($_SESSION['flduserid']);
    unset($_SESSION['flduserimage']);
    unset($_SESSION['flduserfirstname']);
    unset($_SESSION['flduserlastname']);
    unset($_SESSION['flduseremail']);
    unset($_SESSION['flduserphonenumber']);
    unset($_SESSION['flduseraddress']);
    unset($_SESSION['flduserprogramminglanguage']);
    //Go to login
    header('location: ../login.php');
    exit;
  }
}

//get Updates
if(isset($_SESSION['logged_in'])){
  $useremail = $_SESSION['flduseremail'];
  $userid = $_SESSION['flduserid'];
  $stmt = $conn->prepare("SELECT * FROM updates WHERE flduseremail = ?");
  $stmt->bind_param('s',$useremail);
  if($stmt->execute()){
    $updates = $stmt->get_result();
  }
}
?>