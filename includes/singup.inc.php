<?php

if(isset($_POST["submit"]))
{
    //Grabbilng the data
   $uid = $_POST["uid"];
   $pwd = $_POST["pwd"];
   $pwdRepeat = $_POST["pwdRepeat"];
   $email = $_POST["email"];
   ///instatiate Sing upContr class
   include "../classes/dbh.classes.php";
   include "../classes/singup.classes.php"; 
   include "../classes/singup-contr.classes.php";

   $singup =new singupContr($uid,$pwd,$pwdRepeat,$email);

   ///Running error handlers and user singup
   $singup->singupusers();
   ///Going to back to front page
   header("location:../index.php?error=none");

}