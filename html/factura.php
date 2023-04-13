
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Factura de compra</title>
    <link rel="stylesheet" href="../css/test.css">
    <link rel="stylesheet" href="../css/init.css">
    <link rel="stylesheet" href="../css/style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body><?php
include '../procesos/conexion.php';
$stmt = $conexion->prepare("SELECT * FROM detalleventa");
$stmt->execute();
?>
<?php include 'navadmin.php'; ?>
	 <div class="main-container" >
     <div class="tite-table" > 
        <h1>Facturas</h1>
    </div>
     <div class="edit">
        <a href="detVenta.php">Detalles de venta</a>
     </div>
	<table class="styled-table" >
        <thead>
            <tr>
                <td class="table__header">N. Venta</td>
                <td class="table__header">N. Det. Venta</td>
                <td class="table__header">N. Cliente</td>
                <td class="table__header">Nom.Cliente</td>
                <td class="table__header">Fecha y Hora</td>
                <td class="table__header">N. Producto</td>
                <td class="table__header">Nom. Producto</td>
                <td class="table__header">Cantidad</td>
                <td class="table__header">Precio Unitario</td>
                <td class="table__header">Importe</td>
                <td class="table__header">Subtotal</td>
                <td class="table__header">IGV</td>
                <td class="table__header">Total</td>
            </tr>
        </thead>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <tbody>
            <tr>
                <td class="table__item"><?php echo $row['idventa']; ?></td>
                <td class="table__item"><?php echo $row['idDetVenta']; ?></td>
                <td class="table__item"><?php echo $row['idcliente']; ?></td>
                <td class="table__item"><?php echo $row['nombre']; ?></td>
                <td class="table__item"><?php echo $row['fecha_hora']; ?></td>
                <td class="table__item"><?php echo $row['item_FK']; ?></td>
                <td class="table__item"><?php echo $row['nombre']; ?></td>
                <td class="table__item"><?php echo $row['cantidad']; ?></td>
                <td class="table__item"><?php echo $row['precio']; ?></td>
                <td class="table__item"><?php echo $row['importe']; ?></td>
                <td class="table__item"><?php echo $row['subtotal']; ?></td>
                <td class="table__item"><?php echo $row['igv']; ?></td>
                <td class="table__item"><?php echo $row['total']; ?></td>
            </tr>
        </tbody>
        <?php endwhile; ?>
    </table>
     </div>

      <!----===== JS ===== -->
      <script src="../js/navbar.js"></script>
</body>
</html>
