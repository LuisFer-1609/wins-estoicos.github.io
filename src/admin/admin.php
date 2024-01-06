<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Admin</title>
</head>

<body class="position-relative vh-100">
    <?php
    include_once "../database/conexion.php";
    ?>

    <article class="w-100 position-absolute top-50 start-50 translate-middle d-flex justify-content-around align-items-center">
        <section class="w-50">
            <table class="table table-striped">
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
        <section>
            <form action="agregarWin.php" method="post" class="d-grid gap-4">
                <input class="form-control" type="date" name="fecha" required>
                <input class="form-control" type="number" name="bajas" placeholder="Bajas" required>
                <input class="btn btn-primary" type="submit">
            </form>
        </section>
    </article>
</body>

</html>