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
            <div class="container" style="width:100%; max-width: 1720px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formTrabajo">
                    Agregar Noticia
                </button>



                <div class="modal fade" id="formTrabajo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">INGRESE DATOS SOBRE LA NOTICIA</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" id="registro-noticia">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="titulo">Título de la noticia</label>
                                            <input type="text" id="titulo" name="titulo" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="descripcion">Descripción de la noticia</label>
                                            <input type="text" id="descripcion" name="descripcion" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="cuerpo_noticia">Cuerpo de la noticia (Opcional)</label>
                                            <textarea id="summernote" name="cuerpo_noticia" placeholder="[Escribe el contenido de tu noticia aqui]"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="autor">Autor</label>
                                            <input type="text" id="autor" name="autor" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="fecha">Fecha</label>
                                            <input type="date" id="fecha" name="fecha" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="" class="btn btn-secondary">Cancelar</a>
                                        <input type="submit" value="Crear Noticia" name="submit" class="btn btn-success float-right">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-white-800 text-center">AÑADIR NOTICIA</h1>


                <div class="row">
                    <div class="col-md-12">
                        <table id="datatable" class="display table-responsive" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Noticia</th>
                                    <th>Descripción</th>
                                    <th>Cuerpo Noticia</th>
                                    <th>Autor</th>
                                    <th>Fecha</th>
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
                            <label for="tituloCampo">Titulo:</label>
                            <input type="text" class="form-control" id="tituloCampo" name="titulo">
                        </div>
                        <div class="form-group">
                            <label for="horarioCampo">Descripción:</label>
                            <input type="text" class="form-control" id="descripcionCampo" name="descripcion">
                        </div>

                        <div class="form-group">
                            <label for="horarioCampo">Cuerpo Noticia:</label>
                            <input type="text" class="form-control" id="cuerpoNoticia" name="cuerpo_noticia">
                        </div>

                        <div class="form-group">
                            <label for="horarioCampo">Author:</label>
                            <input type="text" class="form-control" id="autorCampo" name="autor">
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
            $("#summernote").summernote();
            $('.dropdown-toggle').dropdown();

            //REGISTRO DE LA NOTICIA
            $('#registro-noticia').submit(function(e) {
                e.preventDefault();

                var isValid = true;
                $('#registro-noticia input[required]').each(function() {
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
                            funcion: 'insertarNoticia', // Identificador de la función PHP
                            titulo: $('#titulo').val(),
                            descripcion: $('#descripcion').val(),
                            cuerpo_noticia: $('#cuerpo_noticia').val(),
                            autor: $('#autor').val(),
                            fecha: $('#fecha').val()
                            // Asegúrate de agregar aquí todos los campos que necesitas enviar al servidor
                        },
                        success: function(response) {
                            $('#formTrabajo').modal('hide');
                            Swal.fire({
                                icon: "success",
                                title: "Éxito",
                                text: response // Muestra la respuesta del servidor
                            }).then(function() {
                                $('#registro-noticia')[0].reset();
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


            //DATATABLE
            var table = $('#datatable').DataTable({
                "ajax": {
                    "url": "controllers/consulta.php",
                    "type": "POST",
                    "data": {
                        "funcion": "mostrarNoticia"
                    },
                    "dataSrc": "data"
                },
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "titulo"
                    },
                    {
                        "data": "descripcion"
                    },
                    {
                        "data": "cuerpo_noticia"
                    },
                    {
                        "data": "autor"
                    },
                    {
                        "data": "fecha"
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
                    },

                ],
                paging: true,
                responsive: true,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json" // Enlace al archivo de idioma deseado
                }
            });



            // Evento de clic en el botón de "Editar"
            $('#datatable').on('click', '.editar', function() {
                var rowData = table.row($(this).closest('tr')).data();

                // Asignar valores a los campos del formulario del modal
                $('#tituloCampo').val(rowData.titulo);
                $('#descripcionCampo').val(rowData.descripcion);
                $('#cuerpoNoticia').val(rowData.cuerpo_noticia);
                $('#autorCampo').val(rowData.autor);

                // Mostrar el modal de edición
                $('#editarModal').modal('show');


                $('#editarForm').submit(function(e) {
                    e.preventDefault();


                    var titulo = $('#tituloCampo').val();
                    var descripcion = $('#descripcionCampo').val();
                    var cuerpo_noticia = $('#cuerpoNoticia').val();
                    var autor = $('#autorCampo').val();
                    var id = rowData.id; // Asegúrate de tener el campo 'id' en tu objeto rowData


                    $.ajax({
                        type: 'POST',
                        url: 'controllers/consulta.php',
                        data: {
                            
                            id: id,
                            funcion: 'editarNoticia',
                            titulo: titulo,
                            descripcion: descripcion,
                            cuerpo_noticia: cuerpo_noticia,
                            autor: autor
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
                                funcion: 'eliminarNoticia'
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