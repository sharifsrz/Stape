<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stape</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Make the dropdown menu visible on hover */
    .dropdown:hover .dropdown-menu {
        display: block;
    }

    /* Ensure the toggle doesn't collapse */
    .dropdown:hover .dropdown-toggle::after {
        transform: rotate(180deg);
    }

    .dropdown-toggle::after {
        content: none;
    }
    </style>

</head>

<body>
    <!-- Wrapper -->
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4">
                <h4>Dashboard</h4>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="/" class="text-decoration-none d-block">Dashboard</a>
                </li>
                <li class="list-group-item dropdown">
                    <a href="/sgtm.php" class="text-decoration-none d-block dropdown-toggle" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        sGTM
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="/paysensa.php">paysensa</a></li>
                        <li><a class="dropdown-item" href="/mytest.php">my test</a></li>
                    </ul>
                </li>
                <li class="list-group-item">
                    <a href="/billing.php" class="text-decoration-none d-block">Billing</a>
                </li>

            </ul>

        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="menu-toggle">☰ Menu</button>
                </div>
            </nav>