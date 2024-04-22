<?php

include('connection.php');
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
</head>

<body>
    <section class="head" id="home">

        <div class="header">
            <div class="container">
                <div class="societyName">
                    <h5>Sri Lanka Institue of Advanced Technological Education</h5>
                </div>

                <div class="log">
                    <form action="" method="post">
                    <button type="submit" name="login" class="">Login</button>
                    </form>
                    <!-- <button><a href="login.php" name="login">Login</a></button> -->
                   
                </div>

                <?php
                    if(isset($_POST['login'])){
                        header('location:login.php');
                    }
                       

                   
                ?>
            </div>

        </div>

    </section>

</body>

</html>