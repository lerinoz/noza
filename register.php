<?php
   session_start();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>authorization and registration</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

   <!-- authorization and registration -->

   <form action="" method="">
       <label>Full name</label>
       <input type="text" name="full_name" placeholder="enter your full name">
       <label>login</label>
       <input type="text" name="login" placeholder="enter your login">
       <label>email</label>
       <input type="email" name="email" placeholder="enter your email">
       <label>password</label>
       <input type="password" name="password" placeholder="enter password">
       <label>password confirmation</label>
       <input type="password" name="password confirm" placeholder="password confirm">
       <button>sign in</button>
       <p>
           you already have an account? - <a href="/register.php">authorization</a>!
       </p>
       <p class="msg">
           <?php
              echo $_SESSION['message'];
              unset($_SESSION['message']);
           ?>
       </p>

   </form>

</body>
</html>


