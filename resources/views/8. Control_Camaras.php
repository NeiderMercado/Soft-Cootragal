<?php include "narbar-all.html"; ?>

<?php include "narbar-all.html"; ?>

<html>
    <!-- LINK BOSSTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- LINK PROPIOS -->
    <link rel="stylesheet" href="js/js-funciones.js">

    <div class="container mt-3">
    <h2>Relación de revisiones de cámars</h2>
    <p>Puedes buscar un registro con cualquiera de los ítem del encabezado:</p>
    <table>
        <thead>
            <th width="1200px"><input class="form-control" id="myInput" type="text" placeholder="Buscar.."></th>
            <th><button type="button" class="btn btn-success">AGREGAR</button></th>
            <th><button type="button" class="btn btn-success">AGREGAR</button></th>

        </thead>
        <tbody>
            <?php
            $conexion = mysqli_connect("localhost", "root", "", "nombre_basededatos");
            $sql = "SELECT * FROM tabla_camaras";
            $result = mysqli_query($conexion, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['interno'] . "</td>";
                echo "<td>" . $row['placa'] . "</td>";
                echo "<td>" . $row['conductor'] . "</td>";
                echo "<td>" . $row['observaciones'] . "</td>";
                echo "</tr>";
            }
            mysqli_close($conexion);
            ?>
        </tbody>
    </table>
    <body>
        <br>
        <table class="table">
            <thead class="table-white">
            <tr>
                <th>Interno</th>
                <th>Placa</th>
                <th>Conductor</th>
                <th>Observaciones</th>
            </tr>
        </thead>
    </body>
</html>