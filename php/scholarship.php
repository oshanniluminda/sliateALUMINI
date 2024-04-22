<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship</title>
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

    <section class="scholar">
        <div class="container">
            <h4>Welcome to Scholarship Program</h4>
            <div class="schoDetail">
                <h5>Scholarship Application Requirements</h5>
                <h6>Eligibility Criteria</h6>
                <p>Must be a high school senior or current undergraduate student.</p>
                <p>Must be a legal resident or citizen of Sri Lanka</p>

                <h6> Academic Records</h6>
                <p>Submit official high school or college transcripts.</p>
                <p>Provide proof of a minimum cumulative GPA of 3.2.</p>

                <h6> Letters of Recommendation:</h6>
                <p>Letters should speak to the applicant's character, achievements, and potential.</p>
                <p>Submit two letters of recommendation. At least one letter must be from a current or former teacher or
                    professor..</p>

                <h6>Financial Need Documentation (if applicable)</h6>
                <p>If applying for a need-based scholarship, provide a copy of your most recent FAFSA or equivalent
                    financial aid application.
                </p>
                <p>Include any additional documentation that demonstrates financial need</p>

                <h6> Resume or Curriculum Vitae (CV)</h6>
                <p>Include a comprehensive resume or CV detailing your educational background, work experience,
                    community service, and achievements.</p>

                <h6>Test Scores </h6>
                <p>If required, provide official standardized test scores, such as SAT or ACT results (for undergraduate
                    applicants) or GRE/GMAT scores (for graduate applicants).</p><br><br>

                <p>Applicants are encouraged to thoroughly read the scholarship guidelines and ensure they meet all
                    specified requirements. Your application should be submitted through the
                    by the deadline.

                    We look forward to receiving your application and considering you for the scholarship. Good luck to
                    all applicants!</p>
            </div>
            <hr>

            <div class="applyBtn">
                <button type="button">Apply</button>
            </div>
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