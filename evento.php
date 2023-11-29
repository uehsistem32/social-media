<!DOCTYPE html>
<html lang="es">

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

    <!-- summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css.css">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include("sidebar.php"); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </nav>
            </div>




            <!-- Begin Page Content -->
            <div class="container" style="width:100%; max-width: 1450px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formTrabajo">
                    Agregar Evento
                </button>



                <div class="modal fade" id="formTrabajo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">INGRESE DATOS SOBRE EL EVENTO</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" id="registro-evento">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="titulo">Título del evento</label>
                                            <input type="text" id="nombre_evento" name="nombre_evento" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="descripcion">Fecha y hora</label>
                                            <input type="text" id="fecha_hora" name="fecha_hora" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="autor">Lugar del Evento</label>
                                            <input type="text" id="lugar_evento" name="lugar_evento" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Selecciona el estado del evento</label>
                                            <select class="form-control" id="estadoevento" name="estadoevento" required="estadoevento" required>
                                                <option value="Nuevo">Nuevo</option>
                                                <option value="Concluido">Concluido</option>
                                                <option value="Proximamente">Proximamente</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Color del botón</label>
                                            <select class="form-control" id="colorbtneventos" name="colorbtneventos" required="colorbtneventos" required>
                                                <option value="danger">Rojo</option>
                                                <option value="warning">Amarillo</option>
                                                <option value="info">Azul</option>
                                            </select>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                            <label class="form-check-label" for="exampleCheck1">Verificado</label>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <input type="submit" value="Crear Evento" name="submit" class="btn btn-success float-right">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-white-800 text-center">AÑADIR EVENTO</h1>


                <div class="row">
                    <div class="col-md-12">
                        <table id="datatable" class="display table-responsive" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Evento</th>
                                    <th>Fecha y hora</th>
                                    <th>Luegar del Evento</th>
                                    <th>Estado</th>
                                    <th>Color</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- MODAL PARA EDITAR -->
    <div id="editarModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarModalLabel">Editar Datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" id="editarForm">

                        <div class="form-group">
                            <label for="tituloCampo">Evento:</label>
                            <input type="text" class="form-control" id="eventoCampo" name="nombre_evento">
                        </div>
                        <div class="form-group">
                            <label for="horarioCampo">Fecha y hora:</label>
                            <input type="text" class="form-control" id="fechahoraCampo" name="fecha_hora">
                        </div>

                        <div class="form-group">
                            <label for="horarioCampo">Lugar del evento:</label>
                            <input type="text" class="form-control" id="lugareventoCampo" name="lugar_evento">
                        </div>


                        <div class="form-group">
                            <label>Selecciona el estado del evento</label>
                            <select class="form-control" id="estadoeventoCampo" name="estadoevento" required="estadoevento" required>
                                <option value="Nuevo">Nuevo</option>
                                <option value="Concluido">Concluido</option>
                                <option value="Proximamente">Proximamente</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Color del botón</label>
                            <select class="form-control" id="colorbtneventosCampo" name="colorbtneventos" required="colorbtneventos" required>
                                <option value="danger">Rojo</option>
                                <option value="warning">Amarillo</option>
                                <option value="info">Azul</option>
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" id="guardarButton">Guardar Cambios</button>
                        </div>
                        <!-- Agrega más campos para los otros datos del trabajo -->
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- summernote -->

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- SWEETALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>


    <script>
        $(document).ready(function() {
            var colorSeleccionado = $('#colorbtneventos').val(); // Obtener el color seleccionado del formulario
            //DATATABLE
            var table = $('#datatable').DataTable({
                "ajax": {
                    "url": "controllers/consulta.php",
                    "type": "POST",
                    "data": {
                        "funcion": "mostrarEvento"
                    },
                    "dataSrc": "data"
                },
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "nombre_evento"
                    },
                    {
                        "data": "fecha_hora"
                    },
                    {
                        "data": "lugar_evento"
                    },
                    {
                        "data": "estado"
                    },
                    {
                        "data": null,
                        "render": function(data, type, row) {
                            return '<center><span class="right badge badge-' + colorSeleccionado + '">' + row.estado + '</span></center>';
                        }
                    },
                    {
                        "data": null,
                        "render": function(data, type, row) {
                            return '<button class="btn btn-warning editar" id="ButtonEditar" data-id="' + data.id + '">Editar</button>';
                        }
                    },
                    {
                        "data": null,
                        "render": function(data, type, row) {
                            return '<button class="btn btn-danger eliminar" data-id="' + data.id + '">Eliminar</button>';
                        }
                    }

                ],
                paging: true,
                responsive: true,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json" // Enlace al archivo de idioma deseado
                }
            });


            //REGISTRO DEL EVENTO
            $('#registro-evento').submit(function(e) {
                e.preventDefault();

                var isValid = true;
                $('#registro-evento input[required]').each(function() {
                    if ($(this).val().trim() === '') {
                        isValid = false;
                        return false;
                    }
                });

                if (isValid) {
                    $.ajax({
                        type: 'POST',
                        url: 'controllers/consulta.php',
                        data: {
                            funcion: 'insertarEvento', // Identificador de la función PHP
                            nombre_evento: $('#nombre_evento').val(),
                            fecha_hora: $('#fecha_hora').val(),
                            lugar_evento: $('#lugar_evento').val(),
                            estadoevento: $('#estadoevento').val(),
                            colorbtneventos: $('#colorbtneventos').val(),


                            // Asegúrate de agregar aquí todos los campos que necesitas enviar al servidor
                        },
                        success: function(response) {
                            $('#formTrabajo').modal('hide');
                            Swal.fire({
                                icon: "success",
                                title: "Éxito",
                                text: response // Muestra la respuesta del servidor
                            }).then(function() {
                                $('#registro-evento')[0].reset();
                                location.reload();
                            });
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Por favor, llene todos los campos del formulario',
                    });
                }
            });


            // Evento de clic en el botón de "Editar"
            $('#datatable').on('click', '.editar', function() {
                var rowData = table.row($(this).closest('tr')).data();

                // Asignar valores a los campos del formulario del modal
                $('#eventoCampo').val(rowData.nombre_evento);
                $('#fechahoraCampo').val(rowData.fecha_hora);
                $('#lugareventoCampo').val(rowData.lugar_evento);
                $('#estadoeventoCampo').val(rowData.estadoevento);
                $('#colorbtneventosCampo').val(rowData.colorbtneventos);

                // Mostrar el modal de edición
                $('#editarModal').modal('show');


                $('#editarForm').submit(function(e) {
                    e.preventDefault();


                    var nombre_evento   = $('#eventoCampo').val();
                    var fecha_hora      = $('#fechahoraCampo').val();
                    var lugar_evento    = $('#lugareventoCampo').val();
                    var estadoevento    = $('#estadoeventoCampo').val();
                    var colorbtneventos = $('#colorbtneventosCampo').val();
                    var id = rowData.id; // Asegúrate de tener el campo 'id' en tu objeto rowData


                    $.ajax({
                        type: 'POST',
                        url: 'controllers/consulta.php',
                        data: {

                            id: id,
                            funcion: 'editarEvento',
                            nombre_evento: nombre_evento,
                            fecha_hora: fecha_hora,
                            lugar_evento: lugar_evento,
                            estadoevento: estadoevento,
                            colorbtneventos: colorbtneventos,

                        },
                        success: function(response) {
                            Swal.fire({
                                icon: "success",
                                title: "Éxito",
                                text: "Los datos se han guardado correctamente."
                            }).then(function() {
                                $('#editarModal').modal('hide');
                                location.reload();
                            });
                        },
                        error: function(error) {
                            console.log(error);
                            Swal.fire({
                                icon: "error",
                                title: "Error",
                                text: "Hubo un error al guardar los datos."
                            });
                        }
                    });
                });

            });


            //SWEETALERT PARA ELIMINAR
            $('#datatable tbody').on('click', 'button.eliminar', function() {
                var id = $(this).data('id');
                console.log(id);
                // Muestra un SweetAlert de confirmación
                Swal.fire({
                    title: '¿Estás seguro de que deseas eliminar este registro?',
                    text: 'Esta acción no se puede deshacer',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            url: 'controllers/consulta.php',
                            data: {
                                id: id,
                                funcion: 'eliminarEvento'
                            },
                            success: function(response) {
                                // Muestra un SweetAlert para informar sobre el resultado de la eliminación
                                Swal.fire('Eliminado', 'El registro ha sido eliminado correctamente', 'success');
                                window.location.reload(); // Recarga los datos de la tabla
                            },
                            error: function(xhr, status, error) {
                                Swal.fire('Error', 'Ha ocurrido un error al eliminar el registro', 'error');
                            }
                        })
                    }
                });
            });



        });
    </script>

</body>

</html>