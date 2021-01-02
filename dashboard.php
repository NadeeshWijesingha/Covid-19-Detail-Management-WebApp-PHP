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

<body style="background: rgb(237,237,237);font-family: Archivo, sans-serif;">
    <header style="background: url(&quot;951cfe_35d0552caf5a41e8a7e48e7fde8d8714_mv2.webp&quot;);">
        <nav class="navbar navbar-light navbar-expand-md" style="background: #000000;">
            <div class="container-fluid"><a class="navbar-brand" href="#" style="color: rgba(255,255,255,0.9);font-family: Alatsi, sans-serif;"><strong>Covid-19</strong></a>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link active text-center" data-bs-hover-animate="pulse" href="dashboard.php" style="font-family: Alatsi, sans-serif;margin: 2px;padding: 8px;color: rgba(255,255,255,0.9);">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link active text-center" data-bs-hover-animate="pulse" href="donation.php" style="font-family: Alatsi, sans-serif;margin: 2px;padding: 8px;color: rgba(255,255,255,0.9);">Donate</a></li>
                        <li class="nav-item"><a class="nav-link active text-center" data-bs-hover-animate="pulse" href="main_login.php" style="font-family: Alatsi, sans-serif;margin: 2px;padding: 8px;color: rgba(255,255,255,0.9);">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="content-div" style="margin: 10px;padding: 10px;">
        <div>
            <div></div>
        </div>
        <header>
            <div style="border-radius: 5px;padding: 5px;margin: 5px;box-shadow: 0px 0px 4px;background: #ffffff;">
                <h2 style="text-align: center;margin-bottom: 0px;">Covid-19 :&nbsp;Live Situational Analysis Dashboard of Sri Lanka<br><img src="assets/img/coronavirus.png" style="padding: 5px;width: 100px;"></h2>
            </div>
        </header>
        <div class="container" id="upper-container" style="padding: 10px;">
            <div class="row">
                <div class="col" style="margin: 5px;border-radius: 10px;background: #ffffff;box-shadow: -4px 4px 13px 1px;">
                    <header>
                        <div>
                            <h5 class="text-center" style="padding: 10px;">Total Figures</h5>
                        </div>
                    </header>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Total Confirmed</h6>
                            <h3 style="color: rgb(0,128,255);">
                            
                            <!-- Total Case -->
                            <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(new_case) FROM hospital") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(new_case)']);    
                            ?> 
                            
                            </h3>
                        </div>
                    </div>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Total Deaths</h6>
                            <h3 style="color: rgb(255,0,153);">
                            
                            <!-- Total deaths -->
                            <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(death) FROM hospital") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(death)']);    
                            ?> 
                            
                            </h3>
                        </div>
                    </div>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Total Recovered</h6>
                            <h3 style="color: rgb(0,255,56);">
                            
                            <!-- Total recover -->
                            <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(recover) FROM hospital") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(recover)']);    
                            ?> 
                            
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col" style="margin: 5px;border-radius: 10px;background: #ffffff;box-shadow: -4px 4px 13px 1px;">
                    <header>
                        <div>
                            <h5 class="text-center" style="padding: 10px;">Daily Figures</h5>
                        </div>
                    </header>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Confirmed</h6>
                            <h3 style="color: rgb(0,128,255);">
                            <!-- Daily Case -->
                            <?php
                                $today = date("Y-m-d");
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(new_case) FROM hospital where date='$today'") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(new_case)']);    
                            ?> 
                            </h3>
                        </div>
                    </div>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Deaths</h6>
                            <h3 style="color: rgb(255,0,153);">
                            <!-- Daily Death -->
                            <?php
                                $today = date("Y-m-d");
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(death) FROM hospital where date='$today'") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(death)']);    
                            ?> 
                            
                            </h3>
                        </div>
                    </div>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Recovered</h6>
                            <h3 style="color: rgb(0,255,56);">
                            <!-- Daily Recover -->
                            <?php
                                $today = date("Y-m-d");
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(recover) FROM hospital where date='$today'") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(recover)']);    
                            ?> 
                            
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header>
            <div style="border-radius: 5px;padding: 5px;margin: 5px;box-shadow: 0px 0px 4px;background: #ffffff;">
                <h2 style="text-align: center;margin-bottom: 0px;">World Covid-19 Informations<br></h2>
            </div>
        </header>
        <div class="container" id="upper-container-1" style="padding: 10px;">
            <div class="row">
                <div class="col" style="margin: 5px;border-radius: 10px;background: #ffffff;padding-top: 15px;box-shadow: -4px 4px 13px 1px;">
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6 style="text-align: center;">Total Confirmed</h6>
                            <h3 style="color: rgb(0,128,255);text-align: center;"><strong>
                            
                            <!-- Total cases -->
                            <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(new_case) FROM world") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(new_case)']);    
                            ?> 
                            
                            </strong><br></h3>
                        </div>
                    </div>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6 style="text-align: center;">Total Deaths</h6>
                            <h3 style="color: rgb(255,0,153);text-align: center;"><strong>
                            
                             <!-- Total death -->
                             <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(death) FROM world") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(death)']);    
                            ?> 

                            </strong><br></h3>
                        </div>
                    </div>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6 style="text-align: center;">Total Recovered</h6>
                            <h3 style="color: rgb(0,255,56);text-align: center;"><strong>
                            
                             <!-- Total recover -->
                             <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(recover) FROM world") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(recover)']);    
                            ?> 

                            </strong><br></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header>
            <div style="border-radius: 5px;padding: 5px;margin: 5px;box-shadow: 0px 0px 4px;background: #ffffff;">
                <h2 style="text-align: center;">Total summary of five high-risk districts</h2>
            </div>
        </header>
        <div class="container" id="bottom-container" style="padding: 10px;">
            <div class="row">
                <div class="col" style="margin: 5px;border-radius: 10px;background: #ffffff;box-shadow: -4px 4px 13px 1px;">
                    <header>
                        <div>
                            <h5 class="text-center" style="padding: 10px;">Colombo</h5>
                        </div>
                    </header>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Total Confirmed</h6>
                            <h3>
                            
                            <!-- Total cases -->
                            <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(new_case) FROM hospital WHERE district='colombo'") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(new_case)']);    
                            ?> 

                            </h3>
                        </div>
                    </div>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Total Deaths</h6>
                            <h3>
                            
                            <!-- Total death -->
                            <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(death) FROM hospital WHERE district='colombo'") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(death)']);    
                            ?> 
                            
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col" style="margin: 5px;border-radius: 10px;background: #ffffff;box-shadow: -4px 4px 13px 1px;">
                    <header>
                        <div>
                            <h5 class="text-center" style="padding: 10px;">Gampaha</h5>
                        </div>
                    </header>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Total Confirmed</h6>
                            <h3>
                            
                            <!-- Total cases -->
                            <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(new_case) FROM hospital WHERE district='gampaha'") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(new_case)']);    
                            ?> 
                            
                            </h3>
                        </div>
                    </div>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Total Deaths</h6>
                            <h3>
                            
                            <!-- Total death -->
                            <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(death) FROM hospital WHERE district='gampaha'") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(death)']);    
                            ?> 
                            
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col" style="margin: 5px;border-radius: 10px;background: #ffffff;box-shadow: -4px 4px 13px 1px;">
                    <header>
                        <div>
                            <h5 class="text-center" style="padding: 10px;">Kaluthara</h5>
                        </div>
                    </header>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Total Confirmed</h6>
                            <h3>
                            
                            <!-- Total cases -->
                            <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(new_case) FROM hospital WHERE district='kaluthara'") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(new_case)']);    
                            ?> 
                            
                            </h3>
                        </div>
                    </div>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Total Deaths</h6>
                            <h3>
                            
                            <!-- Total death -->
                            <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(death) FROM hospital WHERE district='kaluthara'") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(death)']);    
                            ?> 
                            
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col" style="margin: 5px;border-radius: 10px;background: #ffffff;box-shadow: -4px 4px 13px 1px;">
                    <header>
                        <div>
                            <h5 class="text-center" style="padding: 10px;">Kandy</h5>
                        </div>
                    </header>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Total Confirmed</h6>
                            <h3>
                            
                            <!-- Total cases -->
                            <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(new_case) FROM hospital WHERE district='kandy'") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(new_case)']);    
                            ?> 
                            
                            </h3>
                        </div>
                    </div>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Total Deaths</h6>
                            <h3>
                            
                            <!-- Total death -->
                            <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(death) FROM hospital WHERE district='kandy'") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(death)']);    
                            ?> 
                            
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col" style="margin: 5px;border-radius: 10px;background: #ffffff;box-shadow: -4px 4px 13px 1px;">
                    <header>
                        <div>
                            <h5 class="text-center" style="padding: 10px;">Galle</h5>
                        </div>
                    </header>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Total Confirmed</h6>
                            <h3>
                            
                            <!-- Total cases -->
                            <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(new_case) FROM hospital WHERE district='galle'") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(new_case)']);    
                            ?>
                            
                            </h3>
                        </div>
                    </div>
                    <div style="padding-right: 10px;padding-left: 10px;padding-bottom: 20px;">
                        <div style="padding: 10px;box-shadow: 0px 0px 3px;border-radius: 5px;">
                            <h6>Total Deaths</h6>
                            <h3>
                            
                            <!-- Total death -->
                            <?php
                                $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
                                $daily = $mysqli->query("SELECT SUM(death) FROM hospital WHERE district='galle'") or die($mysqli->error);
                                $row = mysqli_fetch_array($daily);
                                print_r ($row['SUM(death)']);    
                            ?> 
                            
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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