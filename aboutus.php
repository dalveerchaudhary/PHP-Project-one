<?php
session_start();

// Title
$_SESSION['title'] = 'About Us';

// Heading
$_SESSION['Heading'] = 'About Us';
?>


<!DOCTYPE html>
<html lang="en">

<?php include('./includes/head.php'); ?>

<body>

    <?php include('./includes/header.php'); ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <h3>Column 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h3>Column 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h3>Column 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
        </div>
    </div>

    <?php include('./includes/footer.php'); ?>

</body>

</html>