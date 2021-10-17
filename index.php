<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<header>
<?php if(isset($_SESSION["userid"])){
?>
<Button>Logout</Button>
<?php
}  else {?>
<button>Login</button>
<?php } ?>

</header>


<div class="form-wrapper">
<h4>Sing up</h4>
<p>You dont have an account yet? Sing up here!</p>
<form action="includes/singup.inc.php" method="post" >
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="uid" placeholder="name@example.com">
    <label for="floatingInput">username</label>
    </div>


    <div class="form-floating mb-3">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwd">
    <label for="floatingPassword">Password</label>
    </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwdRepeat">
        <label for="floatingPassword">Repeat password</label>
      </div>

    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
        <label for="floatingInput">Username</label>
      </div>
       <button class="btn btn-primary" type="submit" name="submit">Sing up</button>
 </div>

</form>

<div class="form-wrapper" >
<h4>Login</h4>
<p>Already have an account ? Login</p>
<form action="">
    <div class="form-floating mb-3">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="uid">
    <label for="floatingInput">Email address</label>
    </div>


    <div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwd">
    <label for="floatingPassword">Password</label>
    </div>

    <button class="btn btn-primary" type="submit" name="submit">Login</button>
</form>
</div>

  



    

</body>
</html>