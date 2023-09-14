<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM register WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:http://localhost/login%20system/hakathon/index.php/');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/style.css">
   
   <style>
      /* Reset default margin and padding */
      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }

      body {
         font-family: Arial, sans-serif;
         background-color: #f0f0f0;
      }

      .form-container {
         background: #fff;
         padding: 20px;
         border-radius: 5px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
         text-align: center;
         width: 300px;
         margin: 0 auto;
         margin-top: 100px;
      }

      h3 {
         margin-bottom: 20px;
      }

      .error-msg {
         color: #ff0000;
         margin-bottom: 10px;
         display: block;
      }

      input[type="email"],
      input[type="password"] {
         width: 100%;
         padding: 10px;
         margin-bottom: 20px;
         border: 1px solid #ccc;
         border-radius: 5px;
         font-size: 16px;
      }

      input[type="submit"] {
         background-color: #007BFF;
         color: #fff;
         border: none;
         padding: 10px 20px;
         cursor: pointer;
         border-radius: 5px;
         font-size: 18px;
      }

      input[type="submit"]:hover {
         background-color: #0056b3;
      }

      p {
         margin-top: 10px;
      }

      a {
         text-decoration: none;
         color: #007BFF;
      }
   </style>
</head>
<body>
   <div class="form-container">
      <form action="" method="post">
         <h3>Login Now</h3>
         <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            };
         };
         ?>
         <input type="email" name="email" required placeholder="Enter your email">
         <input type="password" name="password" required placeholder="Enter your password">
         <input type="submit" name="submit" value="Login Now">
         <p>Don't have an account? <a href="http://localhost/login%20system/register_form.php/login_form.php">Register Now</a></p>
      </form>
   </div>
</body>
</html>
