<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="ruta/a/datatables.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../../css/web.css" rel="stylesheet"> 
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.7/datatables.min.css" rel="stylesheet">
 
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.7/datatables.min.js"></script>
    <script src="../../js/codigo.js" defer></script>
    <title>llista</title>
    <style>
        /* Agregamos el estilo para permitir el desplazamiento horizontal en pantallas más pequeñas */
        .table-responsive {
            overflow-x: auto;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#tablaInscripciones').DataTable({
                "paging": true,
                "pageLength": 10,
                "lengthMenu": [10, 25, 50, 75, 100],
                "searching": true
            });
        });
    </script>
</head>
<body>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" style="color:black;" href="index.php">Pagina Principal</a>
        </li>
    </ul>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h5 style="margin-top: 8px;">Listado de Inscripciones</h5>
                <!-- Agregamos el contenedor adicional con la clase table-responsive -->
                <div class="table-responsive">
                    <table id="tablaInscripciones" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Cognoms</th>
                                <th>Data_naix</th>
                                <th>Carrer</th>
                                <th>Número</th>
                                <th>Ciutat</th>
                                <th>Codi Postal</th>
                                <!-- Añadir más columnas según tus datos -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($inscripciones as $inscripcion): ?>
                                <tr>
                                    <td><?= $inscripcion['id'] ?></td>
                                    <td><?= $inscripcion['nombre'] ?></td>
                                    <td><?= $inscripcion['apellidos'] ?></td>
                                    <td><?= $inscripcion['fecha_nacimiento'] ?></td>
                                    <td><?= $inscripcion['calle'] ?></td>
                                    <td><?= $inscripcion['numero'] ?></td>
                                    <td><?= $inscripcion['ciudad'] ?></td>
                                    <td><?= $inscripcion['postal'] ?></td>
                                    <!-- Añadir más columnas según tus datos -->
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>
