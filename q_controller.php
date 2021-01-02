<!DOCTYPE html>
<html>

<?php require_once'q_controller_helper.php'?>

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
    <div class="container" style="padding: 10px;box-shadow: 0px 0px 15px 1px;border-radius: 10px;margin-top: 20px;margin-bottom: 20px;">
        <section>
            <h1 class="text-center text-capitalize" style="font-family: Archivo, sans-serif;">Quarantine Center</h1>
            <div class="container" style="padding: 10px;">
                <form action="q_controller_helper.php" method="POST">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col"><input class="form-control" type="date" name="date" required='true'></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                        <div class="col"><select class="custom-select" name="district" required>
                                    <option value="">-- Select An Item --</option>
                                    <option value="Kilinochchi">Kilinochchi</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Mulathiv">Mulathiv</option>
                                    <option value="Vavniya">Vavniya</option>
                                    <option value="Anuradapura">Anuradapura</option>
                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                    <option value="Kurunagala">Kurunagala</option>
                                    <option value="Puttalam">Puttalam</option>
                                    <option value="Ampara">Ampara</option>
                                    <option value="Batticaloa">Batticaloa</option>
                                    <option value="Trinco">Trinco</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Matale">Matale</option>
                                    <option value="NuwaraEliya">NuwaraEliya</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Kaluthara">Kaluthara</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Monaragala">Monaragala</option>
                                    <option value="Kegalle">Kegalle</option>
                                    <option value="Rathnapura">Rathnapura</option>
                                    <option value="Galle">Galle</option>
                                    <option value="Hambanthota">Hambanthota</option>
                                    <option value="Matara">Matara</option>
                                </select></div>
                        </div>
                    </div>
                    <div class="form-group"><input class="form-control" type="number" name="newsuspect" placeholder="New Suspects" required='true' pattern="^\d*(\.\d{0,2})?$" title="You can only enter integers. . !"></div>
                    <div class="form-group"><input class="form-control" type="number" name="release" placeholder="Releses" required='true' pattern="^\d*(\.\d{0,2})?$" title="You can only enter integers. . !"></div>
                    <div class="form-group"><button type="submit" class="btn btn-primary" name="save">Save</button></div>
                </form>
            </div>
        </section>
    </div>
    <div class="container" style="padding: 10px;border-radius: 10px;box-shadow: 0px 0px 15px;margin-bottom: 12.8px;">
        <div class="datagrid">
            <table class="table">
                <thead>
                    <tr>
                        
                        <th class="text-center" style="background: rgb(0,0,0);">Date</th>
                        <th class="text-center" style="background: rgb(0,0,0);">District</th>
                        <th class="text-center" style="background: rgb(0,0,0);">New Suspects</th>
                        <th class="text-center" style="background: rgb(0,0,0);">Releses</th>
                        <th colspan="1" class="text-center" style="background: rgb(0,0,0);">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        
                        <td class="text-center"><?php echo$row['date'];?></td>
                        <td class="text-center"><?php echo$row['district'];?></td>
                        <td class="text-center"><?php echo$row['new_suspect'];?></td>
                        <td class="text-center"><?php echo$row['releases'];?></td>
                        <td class="text-center">

                        <a href="q_controller.php?delete=<?php echo $row['q_update_id']; ?>" class="btn btn-danger">Delete</a>             

                        </td>
                    </tr>
<?php endwhile; ?>
                </tbody>
                <tfoot>
                    <tr></tr>
                </tfoot>
            </table>
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