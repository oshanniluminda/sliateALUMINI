
<?php
   session_start();
include 'connection.php';


if(isset($_POST['loginBtn'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `approve_user` WHERE `email` = '$email' AND `password` = '$password'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  $num = mysqli_num_rows($result);

  if($num == 1){
    
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['email'] = $row['email'];

      echo "<script>alert('Login Successful')</script>";
      header('location:index.php');
  }
  else{
      echo "<script>alert('Invalid Credentials')</script>";
      header('location:login.php');
  }
 }
 ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Login Form</title>

  <link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

<?php
    include 'header.php';

    include 'header1.php';
    ?>

<div class="login-container">
  
  <form class="login-form"  method="post">
  <h2>Login</h2>
    <div class="form-group">
      <label for="username">Email:</label>
      <input type="text" id="username" name="email" required>
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>

    <div class="form-group">
      <button type="submit" name="loginBtn">Login</button>
      <!-- <button name="loginBtn" class='btn btn-primary px-4 py-2'><a href='loginUser.php?logid=$id' class='text-light'>Login</a></button> -->
    </div>
  </form>
</div>


<?php
    include 'footer.php';
    ?>

</body>
</html>
