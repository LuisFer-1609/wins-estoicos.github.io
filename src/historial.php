<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Historal</title>
</head>

<body class="position-relative vh-100">
    <?php include_once "database/conexion.php" ?>

    <article class="position-absolute top-50 start-50 translate-middle">
        <section class="d-flex justify-content-center gap-4 py-4">
            <a class="text-decoration-none text-black" href="index.php" style="font-size: 18px;">Conteo total</a>
            <a class="text-decoration-none text-primary text-decoration-underline" href="historial.php" style="font-size: 18px;">Historial</a>
        </section>
        <section>
            <table class="table table-striped text-center" style="width: 300px;">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Bajas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sentencia = $bd->query("SELECT * FROM victorias");
                    $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($resultado as $consulta) {
                    ?>
                        <tr>
                            <td> <?php echo $consulta['fecha']; ?> </td>
                            <td> <?php echo $consulta['bajas']; ?> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </article>
</body>

</html>