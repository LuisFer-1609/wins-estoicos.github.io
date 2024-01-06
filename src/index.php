<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Wins 2024</title>
</head>

<body class="position-relative vh-100">

    <?php
    include_once "database/conexion.php";
    ?>

    <article class="position-absolute top-50 start-50 translate-middle">
        <section class="d-flex gap-4 py-4">
            <a class="text-decoration-none text-primary text-decoration-underline " href="index.php" style="font-size: 18px;">Conteo total</a>
            <a class="text-decoration-none text-black" href="historial.php" style="font-size: 18px;">Historial</a>
        </section>
        <section>
            <?php
            $total = $bd->query("SELECT COUNT(*) AS total FROM victorias");
            $resultado = $total->fetchAll(PDO::FETCH_ASSOC);
            foreach ($resultado as $conteo) {
            ?>
                <h1 class="text-primary d-flex justify-content-center" style="font-size: 100px;"> <?php echo $conteo['total']; ?> </h1>
            <?php
            }
            ?>
            <h6>Wins totales de 2024</h6>
        </section>
        <section>
            <?php
            $consulta = $bd->query("SELECT * FROM victorias ORDER BY id DESC LIMIT 1");
            $ultimoDato = $consulta->fetch(PDO::FETCH_ASSOC);
            ?>
            <span>Última win: <strong><?php print_r($ultimoDato['fecha']) ?></strong> </span>
        </section>
    </article>

</body>

</html>