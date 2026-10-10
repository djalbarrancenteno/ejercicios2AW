<?php
//Script para calcular el impuesto IVA y descuento si aplica de un articulo a comprar y emitir factura
    $descripcion_articulo = $_POST['descripcion_articulo'];
    $cantidad_articulo = $_POST['cantidad_articulo'];
    $precio_articulo = $_POST['precio_unitario'];

    function procesarFacturacion($descripcion_articulo, $cantidad_articulo, $precio_articulo)
    {
        $subtotal = $precio_articulo * $cantidad_articulo; //Variable que almacena el precio bruto (subtotal)

        $montoIva = $subtotal * 0.12; //Variable que almacena el iva calculado del subtotal
        $totalConIva = $subtotal + $montoIva; //Variable que almacena el monto total con iva aplicado

        //Parametros para descuento en caso no aplicar
        $montoDescuento = 0;
        $aplicaDescuento = "No aplica";
        //Calculo para descuento en caso de aplicar
        if ($totalConIva > 150) {
            $montoDescuento = $totalConIva * 0.15;
            $aplicaDescuento = "Sí aplica (15%)";
        }

        $totalNeto = $totalConIva - $montoDescuento; //Variable que almacena el monto total

        //Emision de factura
        echo "--- FACTURA DE VENTA ---<br>";
        echo "Artículo: " . $descripcion_articulo . "<br>";
        echo "Cantidad: " . $cantidad_articulo . "<br>";
        echo "Precio Unitario: $" . number_format($precio_articulo, 2) . "<br>";
        echo "------------------------<br>";
        echo "Subtotal (Precio Base): $" . number_format($subtotal, 2) . "<br>";
        echo "IVA (12%): $" . number_format($montoIva, 2) . "<br>";
        echo "Precio con IVA incluido: $" . number_format($totalConIva, 2) . "<br>";
        echo "¿Aplica Descuento?: " . $aplicaDescuento . "<br>";
        echo "Monto descontado: -$" . number_format($montoDescuento, 2) . "<br>";
        echo "------------------------<br>";
        echo "Total Neto a Pagar: $" . number_format($totalNeto, 2) . "<br>";
    }

?>
    <h2> <?php procesarFacturacion($descripcion_articulo, $cantidad_articulo, $precio_articulo) ?> </h2>