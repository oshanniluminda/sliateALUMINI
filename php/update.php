
<?php
session_start();


include('connection.php');

$id = $_GET['updateid'];

$sql = "select * from approve_user where id =$id";

$result = mysqli_query($con, $sql);
if (!$result) {
    die('Error in the query: ' . mysqli_error($con));
}

$row = mysqli_fetch_assoc($result);


$title = $row['title'];
$name = $row['full_name'];
$address = $row['address'];
$email = $row['email'];
$image = $row['image'];
$mobile = $row['mobile'];
$nic = $row['nic'];
$organization = $row['organization'];
$profession = $row['profession'];
$faculty = $row['faculty'];
$degree = $row['degree'];
$graduate_year = $row['graduate_year'];
$password = $row['password'];

if (isset($_POST['submitBtn'])) {
    $title = $_POST['title'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $image = $_POST['image'];
    $mobile = $_POST['mobile'];
    $nic = $_POST['nic'];
    $organization = $_POST['organization'];
    $profession = $_POST['profession'];
    $faculty = $_POST['faculty'];
    $degree = $_POST['degree'];
    $graduate_year = $_POST['graduate_year'];
    $password = $_POST['password'];

    $sql = "UPDATE `approve_user` SET `id` = $id, `title`='$title',`full_name`='$name',`address`='$address',`email`='$email',`image`='$image',`mobile`='$mobile',`nic`='$nic',`organization`='$organization',`profession`='$profession',`faculty`='$faculty',`degree`='$degree',`graduate_year`='$graduate_year',`password`='$password' WHERE `id`=$id";
    $result = mysqli_query($con, $sql);
  
    if ($result) {
        echo "<script>alert('User Updated Successfully')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>

    <link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    body{
        background-color: #035878;
        display: flex;
    justify-content: center;
    align-items: center;
    
    }

    .container{
        width: 50%;
        margin-top: 50px;
        margin-bottom: 50px;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }


    .form-group{
        margin-bottom: 10px;
      
    }
    .form-label{
        font-weight: bold;
       
    }

    input[type=text]{
        width: 100%;
        
    }

    .ru{
        
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
        padding: 8px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #035878;
        color: rgb(254, 254, 254);
    }
</style>

</head>
<body>
    <div class="container">
        <form action="update.php?updateid=<?php echo $id; ?>" method="post">

            <h2 class="ru">Update Details</h2>
            <div class="form-group">
                <label class="form-label">Title</label><br>
                <input type="text" name="title" placeholder="Enter Your Title" autocomplete="off" class="form-control" readonly value="<?php echo htmlspecialchars($row['title']); ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Name</label><br>
                <input type="text" name="name" placeholder="Enter Your Name" autocomplete="off" class="form-control" readonly value="<?php echo htmlspecialchars($row['full_name']); ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Address</label><br>
                <input type="text" name="address" placeholder="Enter Your Address" autocomplete="off" class="form-control" readonly value="<?php echo htmlspecialchars($row['address']); ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Email</label><br>
                <input type="text" name="email" placeholder="Enter Your email" autocomplete="off" class="form-control" value="<?php echo htmlspecialchars($row['email']); ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Image</label><br>
                <input type="text" name="image" placeholder="Enter Your image" autocomplete="off" class="form-control" readonly value="<?php echo htmlspecialchars($row['image']); ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Mobile</label><br>
                <input type="text" name="mobile" placeholder="Enter Your mobile" autocomplete="off" class="form-control" value="<?php echo htmlspecialchars($row['mobile']); ?>">
            </div>
            <div class="form-group">
                <label class="form-label">NIC</label><br>
                <input type="text" name="nic" placeholder="Enter Your nic" autocomplete="off" class="form-control" readonly value="<?php echo htmlspecialchars($row['nic']); ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Organization</label><br>
                <input type="text" name="organization" placeholder="Enter Your organization" autocomplete="off" readonly class="form-control" value="<?php echo htmlspecialchars($row['organization']); ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Profession</label><br>
                <input type="text" name="profession" placeholder="Enter Your profession" autocomplete="off" readonly class="form-control" value="<?php echo htmlspecialchars($row['profession']); ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Faculty</label><br>
                <input type="text" name="faculty" placeholder="Enter Your faculty" autocomplete="off" readonly class="form-control" value="<?php echo htmlspecialchars($row['faculty']); ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Degree</label><br>
                <input type="text" name="degree" placeholder="Enter Your degree" autocomplete="off" readonly class="form-control" value="<?php echo htmlspecialchars($row['degree']); ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Graduate year</label><br>
                <input type="text" name="graduate_year" placeholder="Enter Your graduate_year" autocomplete="off" readonly class="form-control" value="<?php echo htmlspecialchars($row['graduate_year']); ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Passowrd</label><br>
                <input type="text" name="password" placeholder="Enter Your password " autocomplete="off" class="form-control" value="<?php echo htmlspecialchars($row['password']); ?>">
            </div>
            <div>
                <button type="submit" class="btn btn-primary" name="submitBtn">Update Details</button>
            </div>
            

        </form>
    </div>
    
</body>
</html>