<?php

if(isset($_POST["submit"]))
{
    //Grabbilng the data
   $uid = $_POST["uid"];
   $pwd = $_POST["pwd"];

   ///instatiate Sing upContr class
   include "../classes/dbh.classes.php";
   include "../classes/login.classes.php"; 
   include "../classes/login-contr.classes.php";

   $login =new loginContr($uid,$pwd);

   ///Running error handlers and user singup
   $login->loginusers();
   ///Going to back to front page
   header("location:../index.php?error=none");

}