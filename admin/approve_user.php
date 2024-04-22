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

    <h2 class="ru">Approved Users</h2>

    <?php
        $sql = "SELECT * FROM `approve_user`";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        if($num>0){
            echo" <table class='register_table'>
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
                <th>Password</th>

            <!-- <th>Action</th> -->
           
        </thead>

        <tbody>";
        while($row = mysqli_fetch_assoc($result)){
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
            <td>".$row['password']."</td>
            <!-- <td>
                <a href='#' class='btn-success'>Accept</a>
                <a href='#' class='btn-danger'>Reject</a>
            </td> -->
            </tr> ";
           
        }
        echo"
        </tbody>
        </table>";
        }
        else{
            echo "<h3>No Record Found</h3>";
         
        
        }
        
    ?>
    </div>
</body>
</html>