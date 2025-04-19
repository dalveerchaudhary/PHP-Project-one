<?php
session_start();

// Title
$_SESSION['title'] = 'Home page';

// Heading
$_SESSION['Heading'] = 'Home page';
?>
<!-- 
    1. PHP Version
    2. How downgrade and upgrade php versions.
    3. PHP Extension
    4. php.ini
 -->

<!DOCTYPE html>
<html lang="en">

<?php require_once('./includes/head.php'); ?>

<body>

    <?php
    require_once('./includes/header.php');
    ?>
    <section>
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
    </section>

    <?php require_once('./includes/footer.php'); ?>

</body>

</html>