<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>covid-19-new</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Application-Form.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-DataTables.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Payment-Form.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/Dynamic-Table.css">
    <link rel="stylesheet" href="assets/css/Edit-Form.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-media-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Mega-Menu-Dropdown-100-Editable---Ambrodu.css">
    <link rel="stylesheet" href="assets/css/Multi-Select-Dropdown-by-Jigar-Mistry.css">
    <link rel="stylesheet" href="assets/css/NZDropdown---Tree.css">
    <link rel="stylesheet" href="assets/css/NZDropdown-Singlee.css">
    <link rel="stylesheet" href="assets/css/Pretty-Table-1.css">
    <link rel="stylesheet" href="assets/css/Pretty-Table.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form-1.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/x-dropdown.css">
</head>

<body>
    <header style="background: url(&quot;951cfe_35d0552caf5a41e8a7e48e7fde8d8714_mv2.webp&quot;);">
        <nav class="navbar navbar-light navbar-expand-md" style="background: #000000;">
            <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: rgba(255,255,255,0.9);font-family: Alatsi, sans-serif;">
            <strong>Covid-19</strong>
            </a>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link active text-center" data-bs-hover-animate="pulse" href="dashboard.php" style="font-family: Alatsi, sans-serif;margin: 2px;padding: 8px;color: rgba(255,255,255,0.9);">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link active text-center" data-bs-hover-animate="pulse" href="donation.php" style="font-family: Alatsi, sans-serif;margin: 2px;padding: 8px;color: rgba(255,255,255,0.9);">Donate</a></li>
                        <li class="nav-item"><a class="nav-link active text-center" data-bs-hover-animate="pulse" href="main_login.php" style="font-family: Alatsi, sans-serif;margin: 2px;padding: 8px;color: rgba(255,255,255,0.9);">Admin</a></li>
                    </ul>
                </div>
                <?php
                session_start();
                    if(isset($_SESSION['user'])){
                    echo '<a href = "logout.php?logout" class="btn btn-info" role="button" style="float: right;">Logout</a>';
                    }else{
                header('location:main_login.php');
                }
                ?>
            </div>
        </nav>
    </header>
    <main>
        <div class="container" style="padding: 40px 15px;height: 100%;">
            <div class="row" style="padding: 55px;">
                <div class="col" data-bs-hover-animate="pulse" style="padding: 20px 15px;">
                    <div class="card text-center" style="background: rgb(26,121,142);box-shadow: -10px 10px 12px 3px;">
                        <div class="card-body">
                            <h4 class="card-title" style="font-family: Alatsi, sans-serif;">Hospital</h4>
                            <p class="text-white card-text" style="font-family: Alatsi, sans-serif;">Click here to update the information on all existing hospitals in Sri Lanka that treat covid-19 disease.</p><a class="card-link" href="hos_controller.php" style="color: rgb(0,0,0);font-family: Alatsi, sans-serif;">Click Here</a></div>
                    </div>
                </div>
                <div class="col" data-bs-hover-animate="pulse" style="padding: 20px 15px;">
                    <div class="card text-center" style="background: rgb(26,121,142);box-shadow: -10px 10px 12px 3px;">
                        <div class="card-body">
                            <h4 class="card-title" style="font-family: Alatsi, sans-serif;">Quarantine Center</h4>
                            <p class="text-white card-text" style="font-family: Alatsi, sans-serif;">Click here to update the information of all those involved in the quarantine process.</p><a class="card-link" href="q_controller.php" style="color: rgb(0,0,0);font-family: Alatsi, sans-serif;">Click Here</a></div>
                    </div>
                </div>
                <div class="col" data-bs-hover-animate="pulse" style="padding: 20px 15px;">
                    <div class="card text-center" style="background: rgb(26,121,142);box-shadow: -10px 10px 12px 3px;">
                        <div class="card-body">
                            <h4 class="card-title" style="font-family: Alatsi, sans-serif;">World</h4>
                            <p class="text-white card-text" style="font-family: Alatsi, sans-serif;">Click here to update the information of all global covid - 19 deaths and daily new cases.</p><a class="card-link" href="world_controller.php" style="color: rgb(0,0,0);font-family: Alatsi, sans-serif;">Click Here</a></div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 55px;">
                <div class="col" data-bs-hover-animate="pulse" style="padding: 20px 15px;">
                    <div class="card text-center" style="background: rgb(181,71,71);box-shadow: -10px 10px 12px 3px;">
                        <div class="card-body">
                            <h4 class="card-title" style="font-family: Alatsi, sans-serif;">Generate a Report&nbsp;</h4>
                            <p class="text-white card-text" style="font-family: Alatsi, sans-serif;">Click here to print a summary of covid-19 information in hospitals, quarantine centers and around the world.</p><a class="card-link" href="report.php" style="color: rgb(0,0,0);font-family: Alatsi, sans-serif;">Click Here</a></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer id="footerpad">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pinterest fa-stack-1x fa-inverse"></i></span></a></li>
                    </ul><p class="copyright text-muted text-center">Copyright &copy; Nadeeshan Wijesingha | 2020</p></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/Bootstrap-DataTables.js"></script>
    <script src="assets/js/Application-Form-1.js"></script>
    <script src="assets/js/Application-Form.js"></script>
    <script src="assets/js/Dynamic-Table.js"></script>
    <script src="assets/js/Multi-Select-Dropdown-by-Jigar-Mistry.js"></script>
</body>

</html>