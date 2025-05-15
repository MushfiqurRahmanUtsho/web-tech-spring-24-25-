<?php
session_start();
  if(isset($_POST['submit']))
   {
   	if(empty($_POST['id']) || empty($_POST['pass']))
   		 {
        $_SESSION['error']= "ID or Pass is empty";
        header('location:../logview/login.php');
   		 }
       else
        {
          $_SESSION['status']=true;
           header('location:../Home/home.php');
       }
   }
?>