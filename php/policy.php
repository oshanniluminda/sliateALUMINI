<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy</title>

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

    <section class="policy">
        <div class="container">
            <h4>SLIATE Alumni Association Policy</h4>
            <div class="policyDetail">
                <h5>Name and Mission</h5>
                <p>Name: The Alumni Association of SLIATE</p>

                <p>Mission: The mission of the association is to foster a strong and lasting connection among alumni,
                    support the institution, and provide opportunities for alumni to give back.</p>

                <h5>Membership</h5>
                <p>Eligibility: Membership is open to all graduates, former students, faculty, and staff of SLIATE.</p>


                <p>Membership Dues: Membership is free.</p>
                <p>
                    Membership Process: To become a member, individuals must submit a membership request through the
                    association's website.</p>

                <h5>Governance</h5>
                <p>The association is governed by an elected Board of Directors, which includes a President, Vice
                    President, Secretary, Treasurer, and several Members at Large.</p>

                <p>Board members are elected by the general membership during the annual meeting.</p>

                <h5>Meetings and Communication</h5>
                <p>The association holds an annual meeting in May to discuss activities, budget, and elect new board
                    members.</p>

                <p>Members are notified about meetings through email and the association's website..</p>

                <h5>Finances</h5>
                <p>Funds are raised through donations, fundraisers, and sponsorships.</p>
                <p>Any expenditure exceeding one thousand requires approval from the board.</p>
            </div>
            <hr>
            <hr>
        </div>
    </section>


    <?php
    include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>