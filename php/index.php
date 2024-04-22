<?php

include 'connection.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AA SLIATE </title>

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
        include 'loginUser.php';
    } else {
        include 'header.php';
include 'header1.php';
        displayWelcomeSection();
        displayNewsAndEventsSection();
        displayNoticeSection();
        displayGallerySection();
        displayFooter();
    }
?>
       
<?php



function displayWelcomeSection() {
    echo '
        <section class="main">
        <div class="detail">

        <h3>Welcome To </h3>
        <h1>SLIATE ALUMNI ASSOCIATION</h1>
        <button><a href="registerForm.php">JOIN US</a></button>

    </div>
        </section>
    ';
}

function displayNewsAndEventsSection() {
    global $con;
    echo '
        <section class="event" id="news">
            <div class="container">
                <h3>News & Event</h3>
                <div class="mainCard">';

    $sql = "SELECT * FROM addevent ORDER BY rand() LIMIT 0,4";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '
                    <div class="card">
                        <div class="cardImg">
                            <img src="../admin/eventImage/' . $row['image'] . '" alt="">
                        </div>
                        <div class="cardHead">
                            <h4>' . $row['title'] . '</h4>
                        </div>
                        <div class="cardPara">
                            <p>' . $row['description'] . '</p>
                        </div>
                    </div>';
    }

    echo '
                </div>
            </div>
        </section>';
}




function displayNoticeSection() {
    global $con;
    echo '
        <section class="notice">
            <div class="container">
                <h1>Notice</h1>

                <div class="mainNotice">';

    $sql = "SELECT * FROM addnotice ORDER BY rand() LIMIT 0,3";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '
                    <div class="cardNotice">
                        <div class="noticeH">
                            <h4>' . $row['title'] . '</h4>
                        </div>
                        <div class="noticeP">
                            <p>' . $row['description1'] . '</p>
                            <p>' . $row['description2'] . '</p>
                            <p>' . $row['description3'] . '</p>
                        </div>
                    </div>';
    }

    echo '
                </div>
            </div>
        </section>';
}


function displayGallerySection() {
    
      
        include 'image-slider.php';
       
    ;
}

function displayFooter() {
    include 'footer.php';
}
              
?>
</body>

</html>