<?php
// session_start();
?>

<head>
    <title><?php
            if (isset($_SESSION['title'])) {
                echo $_SESSION['title'];
            } else {
                echo "Welcome in Project 1";
            }
            ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 3rem 0;
        }

        .social-icons a {
            font-size: 1.25rem;
        }
    </style>
</head>