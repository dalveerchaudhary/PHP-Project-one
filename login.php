<?php
session_start();

// Title
$_SESSION['title'] = 'Login';

// Heading
$_SESSION['Heading'] = 'Login';
?>

<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password =  $_POST['password'];
    // $_GET
    // $_POST
    // $_REQUIRE
    echo $email . "<br>";
    echo $password;
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include('./includes/head.php'); ?>

<body>

    <?php include('./includes/header.php'); ?>

    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="card p-5 mt-5 mb-5">
                <form action="login.php" method="post">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>


    <?php include('./includes/footer.php'); ?>

</body>

</html>