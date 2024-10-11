<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">

    <title>Shopping Portal Home Page</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/css/main.css?a=126">
    <link rel="stylesheet" href="assets/css/green.css?a=123">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
    <link href="assets/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="assets/css/config.css">

    <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
    <link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
    <link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
    <link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
    <link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>

<body>
    <div class=" container-fluid d-flex py-3" style="background-color: lightgrey; color: grey !important;"> <a class="bi bi-arrow-left" style="font-size: 1.5rem !important; color: #676767 !important; font-weight: 500; text-decoration: none;" href="http://localhost/arts"> Back to Shopping</a></div>
    <div class=" container d-flex flex-column w-100 justify-content-center align-items-center text-center"
        style="height: 100vh; ">
        <h3 style="color: #a7a7a7;">Accessing Retail</h3>
        <h2>SELECT YOUR ROLE</h2>
        <div class=" container pt-4">
            <button onclick="goToAdmin()" id="admin-btn" class="btn-primary" style="aspect-ratio: 4 / 2; width:10rem">ADMIN</button>
            <button onclick="goToEmpl()" id="empl-btn" class="btn-primary" style="aspect-ratio: 4 / 2; width:10rem">EMPLOYEE</button>
        </div>
    </div>

    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script>
        function goToAdmin () {
            window.location.href = "admin/index.php";
        }
        function goToEmpl () {
            window.location.href = "employee/index.php";
        }
    </script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>