<?php

include 'connection.php';

if (!isset($_SESSION['email'])) {
    // Redirect to the login page if not logged in
    header('Location: login.php');
    exit();
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AA SLIATE </title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  

</head>

<body>

    <?php
    include 'loginUserHeader.php';

    include 'header1.php';
    ?>

    <section class="main">

        <div class="detail">

            <h3>Welcome To </h3>
            <h1>SLIATE ALUMNI ASSOCIATION</h1>
            <button><a href="registerForm.php">JOIN US</a></button>

        </div>

    </section>

    <section class="event" id="news">
        <div class="container">
            <h3>News & Event</h3>
            <div class="mainCard">
               

                <?php
                        $sql = "SELECT * FROM addevent order by rand() limit 0,4";
                        $result = mysqli_query($con, $sql);
                        while($row=mysqli_fetch_assoc($result)){
                            echo"<div class='card'>";
                            echo"<div class='cardImg'>";
                            echo"<img src='../admin/eventImage/".$row['image']."' alt=''>";
                            echo"</div>";
                            echo"<div class='cardHead'>";
                            echo"<h4>".$row['title']."</h4>";
                            echo"</div>";
                            echo"<div class='cardPara'>";
                            echo"<p>".$row['description']."</p>";
                            echo"</div>";
                            echo"</div>";
                        }
                       

                       
                    ?>
            </div>
        </div>
    </section>

    <section class="notice">
        <div class="container">
            <h1>Notice</h1>

            <div class="mainNotice">

            <?php
                        $sql = "SELECT * FROM addnotice order by rand() limit 0,3";
                        $result = mysqli_query($con, $sql);
                        while($row=mysqli_fetch_assoc($result)){
                            echo"<div class='cardNotice'>";
                            echo"<div class='noticeH'>";
                            echo"<h4>".$row['title']."</h4>";
                            echo"</div>";
                            echo"<div class='noticeP'>";
                            echo"<p>".$row['description1']."</p>";
                            echo"<p>".$row['description2']."</p>";
                            echo"<p>".$row['description3']."</p>";
                            echo"</div>";
                            echo"</div>";
                        }
                       

                       
                    ?>
            
            </div>

        </div>

    </Section>

    <section class="gallery">

       
        <?php
            include 'image-slider.php';
        ?>
            

    </section>


    <?php
    include 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>