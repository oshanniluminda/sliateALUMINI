<?php
include ('../php/connection.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body>
    <div class="container-fluid">

    <h2 class="ru">Register Users</h2>
    <?php
            $sql = "SELECT * FROM `register_user`";
            $result = mysqli_query($con, $sql);
            $num = mysqli_num_rows($result);
            if($num>0)
            {
                echo"
                <table class='register_table'>
       
                <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Image</th>
                <th>Mobile</th>
                <th>NIC</th>
                <th>Organization</th>
                <th>Profession</th>
                <th>Faculty</th>
                <th>Degree</th>
                <th>Graduate Year</th>
                
                <th>Action</th>
            
            </thead>
                
            <tbody>
                ";
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "
                    <tr>
                    <td>".$row['id']."</td>
                    <td>".$row['title']."</td>
                    <td>".$row['full_name']."</td>
                    <td>".$row['address']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['image']."</td>
                    <td>".$row['mobile']."</td>
                    <td>".$row['nic']."</td>
                    <td>".$row['organization']."</td>
                    <td>".$row['profession']."</td>
                    <td>".$row['faculty']."</td>
                    <td>".$row['degree']."</td>
                    <td>".$row['graduate_year']."</td>
                   
                    
                    <td>
                    <form method='post'>
                    <input type='hidden' name='id' value='".$row['id']."'>
                    <button type='submit' class='btn-success' name='accept'>Accept</button>
                    <button class='btn-danger'>Reject</button>
                    </form>
                    </td>
                    </tr>
                    ";
                }
                echo "
            </tbody>
            </table>
                ";
            }
            else{
                echo "No record found";
            }
            ?>
            
</body>
</html>

<?php
include('../php/connection.php');

if (isset($_POST['accept'])) {
    $id = $_POST['id'];
    $select_user = "SELECT * FROM register_user WHERE id = '$id'";
    $result_user = mysqli_query($con, $select_user);

    if ($row = mysqli_fetch_assoc($result_user)) {
        // $id = $_POST['id'];
        $title = $row['title'];
        $full_name = $row['full_name'];
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

        $insert_query = "INSERT INTO approve_user (id,title, full_name, address, email, image, mobile, nic, organization, profession, faculty, degree, graduate_year) VALUES ('$id','$title','$full_name','$address','$email','$image','$mobile','$nic','$organization','$profession','$faculty','$degree','$graduate_year')";
        
        $result = mysqli_query($con, $insert_query);
        
        if ($result) {
            echo "<script>alert('User Approved')</script>";
            echo "<script>window.open('approve_user.php','_self')</script>";
        } else {
            echo "<script>alert('Error approving user')</script>";
        }
    } else {
        echo "<script>alert('User not found')</script>";
    }
}
?>

