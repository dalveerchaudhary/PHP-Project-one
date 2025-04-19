<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Project-1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-secondary mx-1" href="login.php">Login</a>
                    <a class="btn btn-primary" href="register.php">Register</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1><?php
            if (isset($_SESSION['Heading'])) {
                echo $_SESSION['Heading'];
            } else {
                echo "Dummy page";
            }
            ?></h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>
</header>