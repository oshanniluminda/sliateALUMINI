<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php
  session_start();

  $isLoggedIn = isset($_SESSION['user_id']); 
  
  
  if ($isLoggedIn) {
      include 'loginUserHeader.php';
  } else {
      include 'header.php';
  }
  
  include 'header1.php';
  ?>
    ?>

    <section class="fillForm">
        <div class="container">
            <div class="fillForm1">
                <h4>Fill the Form</h4>
                <!-- <h5>Personal Information</h5> -->


                <form method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputselect" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-5">
                            <select class="form-select" aria-label="Default select example" name="select" id="inputselect">
                                <option selected>Select</option>
                                <option value="1">DR.</option>
                                <option value="2">MR.</option>
                                <option value="3">MRS.</option>
                                <option value="3">MISS.</option>
                                <option value="3">PROF.</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-3 col-form-label">Full Name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputName" name="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputaddress" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-5">
                            <input type="textarea " class="form-control" id="inputaddress" name="address">
                        </div>
                    </div>
                    <!-- <div class="row mb-2">
                        <label for="inputName3" class="col-sm-3 col-form-label">Address Line 02</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputName3">
                        </div>
                    </div> -->
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" id="inputEmail" name="email">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="inputimage" class="col-sm-3 col-form-label">Profile Image</label>
                        <div class="col-sm-5">
                            <input type="File" class="form-control" id="inputimage" name="image">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="inputmobile" class="col-sm-3 col-form-label">Mobile Number</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" id="inputmobile" name="mobile">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputnic" class="col-sm-3 col-form-label">NIC No</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputnic" name="nic">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputorganization" class="col-sm-3 col-form-label">Organization</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputorganization" name="organization">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputprofession" class="col-sm-3 col-form-label">Profession / Designation
                        </label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputprofession" name="profession">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputprofession" class="col-sm-3 col-form-label">Faculty
                        </label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputprofession" name="faculty">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputprofession" class="col-sm-3 col-form-label" >Degree
                        </label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputprofession" name="degree">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputprofession" class="col-sm-3 col-form-label">Graduate Year
                        </label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputprofession" name="graduate_year">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>

            </div>
            <div class="fillForm2">
                <h4>Details</h4>
                <a href="">Application Form</a>
                <a href="">Membership</a>
                <a href="">Contact</a>
            </div>
        </div>

    </section>
    <?php
    include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>

<?php
    include 'connection.php';

   if(isset($_POST['submit'])){
        $select = $_POST['select'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $image = $_FILES['image'];
        $image = $_FILES['image']['name'];
        $tmp_image = $_FILES['image']['tmp_name'];
        $mobile = $_POST['mobile'];
        $nic = $_POST['nic'];
        $organization = $_POST['organization'];
        $profession = $_POST['profession'];
        $faculty = $_POST['faculty'];

        $degree = $_POST['degree'];
        $graduate_year = $_POST['graduate_year'];

        $select_query  = "select * from register_user where email = '$email' or mobile = '$mobile' or nic = '$nic'";
        $request = mysqli_query($con,$select_query);
        $count = mysqli_num_rows($request);
        if($count>0){
            echo "<script>alert('Email or Mobile or NIC already exists')</script>";
            echo "<script>window.location.href='registerForm.php';</script>";
        }else{
            move_uploaded_file($tmp_image,"../admin/images/$image");

            $insert_quaery = "insert into register_user (title,full_name,address,email,image,mobile,nic,organization,profession,faculty,degree,graduate_year) values ('$select','$name','$address','$email','$image','$mobile','$nic','$organization','$profession','$faculty','$degree','$graduate_year')";
            $request = mysqli_query($con,$insert_quaery);
    
            if($request){

                session_start();

                
                $_SESSION['email'] = $email;

                echo "<script>alert('Data Inserted Successfully')</script>";
                echo "<script>window.location.href='index.php';</script>";
    
            }else{
                echo "<script>alert('Data Insertion Failed')</script>";
            }
        }

       
   }
    
?>