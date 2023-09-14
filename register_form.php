<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM register WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO register(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>
   <style>
      /* Reset some default styles */
      body, html {
         margin: 0;
         padding: 0;
         height: 100%;
         font-family: Arial, sans-serif;
      }
      /* Center the form vertically and horizontally */
      .form-container {
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
      }
      /* Style the form */
      form {
         background-color: #f2f2f2;
         padding: 20px;
         border-radius: 10px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      h3 {
         text-align: center;
      }
      .error-msg {
         color: red;
      }
      input[type="text"],
      input[type="email"],
      input[type="password"],
      select {
         width: 100%;
         padding: 10px;
         margin-bottom: 10px;
         border: 1px solid #ccc;
         border-radius: 5px;
      }
      .form-btn {
         background-color: #007BFF;
         color: #fff;
         border: none;
         padding: 10px 20px;
         border-radius: 5px;
         cursor: pointer;
      }
      .form-btn:hover {
         background-color: #0056b3;
      }
      p {
         text-align: center;
      }
   </style>
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Register Now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter your name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="password" name="cpassword" required placeholder="Confirm your password">
      <select name="user_type">
         <option value="user">User</option>
         <option value="admin">Admin</option>
      </select>
      <input type="submit" name="submit" value="Register Now" class="form-btn">
      <p>Already have an account? <a href="http://localhost/login%20system/login_form.php/user_page.php">Login now</a></p>
   </form>

</div>

</body>
</html>
