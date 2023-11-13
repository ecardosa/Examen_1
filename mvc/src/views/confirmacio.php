<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Registro</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .confirmation-container {
            max-width: 600px;
            margin: auto;
            margin-top: 50px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
<ul class="nav justify-content-end">
  <li class="nav-item">
   <a class="nav-link" style="color:black;" href="index.php">Pàgina Principal</a>
  </li>
</ul>
    <div class="container confirmation-container">
        <h1 class="text-center">Les dades desades:</h1>

        <p class="lead text-center"></p>

        <ul class="list-group">
        <li class="list-group-item"><strong>Nom:</strong> <?php echo $userDetails['nombre']; ?></li>
    <li class="list-group-item"><strong>Cognoms:</strong> <?php echo $userDetails['apellidos']; ?></li>
            <li class="list-group-item"><strong>Data de naixement:</strong> <?php echo $userDetails['fecha_nacimiento']; ?></li>
            <li class="list-group-item"><strong>Carrer:</strong> <?php echo $userDetails['calle']; ?></li>
            <li class="list-group-item"><strong>Número:</strong> <?php echo $userDetails['numero']; ?></li>
            <li class="list-group-item"><strong>Ciutat:</strong> <?php echo $userDetails['ciudad']; ?></li>
            <li class="list-group-item"><strong>Codi Postal:</strong> <?php echo $userDetails['postal']; ?></li>

            <!-- Agregar otros detalles aquí -->
        </ul>



    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-r/6e9siU1ayk/fQ8Ofokq2v5trj/+dbwxg5L2FWOsIWTyrqJ/fH5bG2Z8LDZJdZN"
        crossorigin="anonymous"></script>
</body>

</html>