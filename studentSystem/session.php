<?php
   include('dbConnection.php');
   session_start();



   if(isset($_SESSION['login_user'])){
     $user_check = $_SESSION['login_user'];

     $ses_sql = mysqli_query($db,"select username from studentlogintable where username = '$user_check' ");

     $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

     $login_session = $row['username'];
   }else{
     $login_session = "";
     header("Location: index.php");
   }
?>
