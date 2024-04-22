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

        <form action="" method="post">
        <h2 class="ru">Add Notice</h2>
            <!-- <label for="">Display Image :</label><br>
            <input type="file" name="image" id="image" required><br> -->
            <label for="">Title :</label><br>
            <input type="text" name="title" id="title" required><br>
            <label for="">Description 01 :</label><br>
            <input type="textarea" name="description1" id="description" required><br>
            <label for="">Description 02 :</label><br>
            <input type="textarea" name="description2" id="description" required><br>
            <label for="">Description 03 :</label><br>
            <input type="textarea" name="description3" id="description" required><br>

            <button type="submit" name="add">Add </button>
        </form>
                   
    </div>     
</body>
</html>
<?php
    if(isset($_POST['add'])){
        $title = $_POST['title'];
        $description1 = $_POST['description1'];
        $description2 = $_POST['description2'];
        $description3 = $_POST['description3'];

        $sql = "INSERT INTO addnotice(title,description1,description2,description3) VALUES('$title','$description1','$description2','$description3')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<script>alert('Notice Added Successfully')</script>";
        }
        else{
            echo "<script>alert('Notice Added Failed')</script>";
        }
    }


