<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador | Social Media</title>

    <link rel="shortcut icon" href="img/escudo.png" type="image/x-icon">


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include("sidebar.php"); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </nav>



                <div class="container">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title"><i class="far fa-file-image"></i> Imagen del slider 1</h3>
                        </div>
                        <form action="controllers/procesar_imagen.php"" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Subír</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="imagen" accept="image/*" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label">Elija el archivo..</label>
                                </div>
                            </div>

                            <!-- <input type="file" name="imagen" accept="image/*"> -->
                            <label for="posicion">Selecciona la posición en el carrusel:</label>
                            <select name="posicion" id="posicion" class="form-control">
                                <option value="0">Al principio</option>
                                <option value="1">Después de la primera imagen</option>
                                <option value="2">Después de la segunda imagen</option>
                            </select>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Subir Imagen">
                        </form>
                    </div>

                
                    <br>

                    <!-- SEGUNDO SLIDER -->

                    <!-- <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title"><i class="far fa-file-image"></i> Imagen del slider 2</h3>
                        </div>
                        <form action="controllers/procesar_imagen_slider2.php"" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Subír</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="imagen" accept="image/*" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label">Elija el archivo..</label>
                                </div>
                            </div>

                            <label for="posicion">Selecciona la posición en el carrusel:</label>
                            <select name="posicion" id="posicion" class="form-control">
                                <option value="3">Al principio</option>
                                <option value="4">Después de la primera imagen</option>
                                <option value="5">Después de la segunda imagen</option>
                            </select>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Subir Imagen">
                        </form>
                    </div> -->










                </div>

                <br><br>


                <!-- <div class="container">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title"><i class="far fa-file-image"></i> Imagen del slider 2</h3>
                        </div>
                        <form action="controllers/procesar_imagen.php" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Subír</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="imagen" accept="image/*" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label">Elija el archivo..</label>
                                </div>
                            </div>

                            <label for="posicion">Selecciona la posición en el carrusel:</label>
                            <select name="posicion" id="posicion" class="form-control">
                                <option value="0">Al principio</option>
                                <option value="1">Después de la primera imagen</option>
                                <option value="2">Después de la segunda imagen</option>
                            </select>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Subir Imagen">
                        </form>
                    </div>
                </div> -->






            </div>


        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>






</body>

</html>