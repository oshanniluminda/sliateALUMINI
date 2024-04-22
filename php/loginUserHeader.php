<?php
include 'connection.php';

?>

include 'connection.php';

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-lZmw9+6Hxy1C8GvPc0joQ9fR+npwVoUx0sTt8ivF03voU4ZcFtBqyJgDYRK2Y1Lb9PlMaFroW8+pxdaw8nbLQ==">


</head>

<body>
    <section class="head" id="home">

        <div class="header">
            <div class="container">
                <div class="societyName">
                    <h5>Sri Lanka Institute of Advanced Technological Education</h5>
                </div>

                <div class="log">
                    <?php
                    
                    $sql = "SELECT * FROM `approve_user` where `email` = '".$_SESSION['email']."'";
                    $result = mysqli_query($con, $sql);
                    if(mysqli_num_rows($result)>0){
                       $row = mysqli_fetch_assoc($result);
                        $id = $row['id'];
                        $img = $row['image'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];

                        echo"
                        <button type='button' onclick='toggleContainer()' name='profile' class=''> $email</button>

                        <div class='profileContainer'>
    
                            <img src='../admin/images/$img' alt='User Image'><br>
    
                            <label for=''>Email : </label>
                            <input type='text' name='email' value='$email'><br>
                            <label for=''>Mobile Number : </label>
                            <input type='text' name='mobile' value='$mobile' ><br>
                         

                            <button class='btn btn-primary px-4 py-2'><a href='update.php?updateid=$id' class='text-light'>Update</a></button>

                            <br>
                            <button onclick='toggleContainer()'><a class='logout-button' href = 'logout.php'>Logout</a></button><br>
                            <button class='close-button' onclick='toggleContainer()'>Close</button>
                        </div>
                        ";
                    }
                    
                    ?>

                    
                </div>
            </div>
        </div>

    </section>

    <script>
        function toggleContainer() {
            var profileContainer = document.querySelector('.profileContainer');
            profileContainer.style.right = profileContainer.style.right === '0px' ? '-300px' : '0px';
        }
    </script>



 

</body>

</html>

