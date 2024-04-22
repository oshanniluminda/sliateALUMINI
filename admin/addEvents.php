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

    <style>
form{
    margin-top: 50px;
    margin-left: 50px;
    
}

/* h1{
    text-align: center;
    margin-top: 50px;
    margin-bottom: 50px;
} */

label{
    margin-top: 10px;
    margin-bottom: 10px;
}

input{
    margin-top: 10px;
    margin-bottom: 10px;
    
}

button{
    margin-top: 20px;
    margin-bottom: 10px;
    padding: 8px 30px;
    background-color: #0d6efd;
    font-size: 20px;
    color: white;
    
}


    </style>

</head>
<body>
    <div class="container">

        <form action="" method="post" enctype="multipart/form-data">
        <h2 class="ru">Add Events</h2>
            <label for="">Display Image :</label><br>
            <input type="file" name="image" id="image" required><br>
            <label for="">Title :</label><br>
            <input type="text" name="title" id="title" required><br>
            <label for="">Description :</label><br>
            <input type="textarea" name="description" id="description" required><br>

            <button type="submit" name="add">Add </button>
        </form>
                   
    </div>     
</body>
</html>

<?php
    if(isset($_POST['add'])){
        $image = $_FILES['image'];
        $image = $_FILES['image']['name'];
        $tmp_image  = $_FILES['image']['tmp_name'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $sql = "INSERT INTO `addevent`(`image`, `title`, `description`) VALUES ('$image','$title','$description')";
        $result = mysqli_query($con,$sql);
        if($result){
          
            move_uploaded_file($tmp_image,"./eventImage/$image");
            echo "<script>alert('Event Added Successfully')</script>";
        }
        else{
            echo "<script>alert('Event Added Failed')</script>";
        }

    }
?>


