

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <header>
            <h1> <a href="../php/index.php">AA SLIATE</a> </h1>
            <a href="logout.php">Logout</a>
        </header>
        <nav>
            <ul>
                <li><a href="admin_dashboard.php?register_user">Register Users</a></li>
                <li><a href="admin_dashboard.php?approve_user">Approved Users</a></li>
                <li><a href="admin_dashboard.php?reject_user">Reject Users</a></li>
                <li><a href="admin_dashboard.php?addEvent">Add Events</a></li>
                <li><a href="admin_dashboard.php?addNotice">Add Notice</a></li>
            </ul>
        </nav>
        <main>
            <section class="overview">

            <?php
            if(isset($_GET['register_user'])){
                include 'register_user.php';
            }
            // else{
            //     include 'overview.php';
            // }
            ?>
             <?php
            if(isset($_GET['approve_user'])){
                include 'approve_user.php';
            }
            // else{
            //     include 'overview.php';
            // }
            ?>
            <?php
            if(isset($_GET['reject_user'])){
                include 'reject_user.php';
            }
            // else{
            //     include 'overview.php';
            // }
            ?>
            <?php
            if(isset($_GET['addEvent'])){
                include 'addEvents.php';
            }
            ?>
            <?php
            if(isset($_GET['addNotice'])){
                include 'addNotice.php';
            }?>
            
               
            </section>
            <!-- Add more sections for different functionalities -->
        </main>
    </div>
</body>
</html>
