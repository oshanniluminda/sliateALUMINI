<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>

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

    <!-- <section class="joinUs">

        <div class="container">
            <div class="type">
                <h3>Member</h3>
                <div class="mem">
                    <button><a href="#">Full Member</a></button>
                    <button><a href="#">Associate Member</a></button>
                    <button><a href="#">Honory Member</a></button>
                    <div class="memDetail">
                        <h5>Eligibility Criteria</h5>
                        <div class="full"> Full Member
                            <p>
                                Any person who is a graduate of the University or has obtained a postgraduate
                                qualification
                                of the University
                            </p>
                            <p>
                                Any person who was a student of the Ceylon Medical College and has
                                obtained the
                                licentiate
                                in
                                Medicine & Surgery and/or licentiate in Dental Surgery shall be eligible to apply for
                                full
                                membership of the Association
                            </p>
                            <p>
                                An associate member who has been a member for a continuous period of three years shall
                                be
                                eligible
                                on completion of such period, to apply for full membership of the Association
                            </p>
                        </div>
                        <div class="association">Associate Member
                            <p>
                                Any past student of the University who is not a graduate of the University
                            </p>
                            <p>
                                Any graduate of a recognized university who is or has been a member of the academic or
                                administrative or non-academic staff of the University
                            </p>
                            <p>
                                Any person who is or has been a member of the University Court or the University Council
                                shall be eligible to apply for associate membership of the Association
                            </p>
                        </div>
                        <div class="honory">Honory Member
                            <p>
                                Any person who is not eligible for full or associate membership but has rendered
                                distinguished service to the University and/or to the Association
                            </p>
                            <p>
                                Any person who has been conferred a degree honoris causa by the University shall be
                                eligible
                                for honorary membership of the Association
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="type">
                <h3>Register Now</h3>
                <div class="form">
                    <a href="">Membership Application</a>
                    <a href="">Register Online</a>
                </div>
            </div>
        </div>

    </section> -->
    <section class="joinUs">
        <div class="container">
            <div class="d-flex">
                <div class="p-2 flex-fill" style="flex: 1;">
                    <h3>Member</h3>
                    <button><a href="#full">Full Member</a></button>
                    <button><a href="#association">Associate Member</a></button>
                    <button><a href="#honory">Honory Member</a></button>
                    <div class="memDetail">
                        <h5>Eligibility Criteria</h5>
                        <div class="full" id="full">
                            <h4> Full Member</h4>
                            <p>
                                Any person who is a graduate of the University or has obtained a postgraduate
                                qualification
                                of the University
                            </p>
                            <p>
                                Any person who was a student of the Ceylon Medical College and has
                                obtained the
                                licentiate
                                in
                                Medicine & Surgery and/or licentiate in Dental Surgery shall be eligible to apply
                                for
                                full
                                membership of the Association
                            </p>
                            <p>
                                An associate member who has been a member for a continuous period of three years
                                shall
                                be
                                eligible
                                on completion of such period, to apply for full membership of the Association
                            </p>
                        </div>
                        <div class="association" id="association">
                            <h4>Associate Member</h4>
                            <p>
                                Any past student of the University who is not a graduate of the University
                            </p>
                            <p>
                                Any graduate of a recognized university who is or has been a member of the academic
                                or
                                administrative or non-academic staff of the University
                            </p>
                            <p>
                            Any person who is or has been a Chancellor of the University</p>
                            <p>
                                Any person who is or has been a member of the University Court or the University
                                Council
                                shall be eligible to apply for associate membership of the Association
                            </p>
                        </div>
                        <div class="honory" id="honory">
                            <h4>Honory Member</h4>
                            <p>
                                Any person who is not eligible for full or associate membership but has rendered
                                distinguished service to the University and/or to the Association
                            </p>
                            <p>
                                Any person who has been conferred a degree honoris causa by the University shall be
                                eligible
                                for honorary membership of the Association
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-2 flex-fill" style="flex: 1;">
                    <h4>Register Now</h4>
                    <div class="linkLink">
                        <a href="">Membership Application</a>
                        <a href="registerForm.php">Register Online</a>
                    </div>
                </div>
            </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>