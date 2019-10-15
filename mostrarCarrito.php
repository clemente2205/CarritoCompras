<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>

<br>
<h3> Lista del carrito </h3>
<?php if(!empty($_SESSION['CARRITO'])){  ?>
<table class="table table-dark table-bordered">
    <tbody>       
        <tr>
            <th with ="40%">Descripción</th>
            <th with ="15%">Cantidad</th>
            <th with ="20%">Precio</th>
            <th with ="20%">Total</th>
            <th with ="5%">Borrar</th>
        </tr>
        <?php $total=0;?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
        <tr>
            <td with ="40%"><?php echo $producto['NOMBRE']?></td>
            <td with ="15%" class="text-center"><?php echo $producto['CANTIDAD']?></td>
            <td with ="20%" class="text-center"><?php echo $producto['PRECIO']?></td>
            <td with ="20%" class="text-center"><?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'],2);?></td>
            <td with ="5%">
            <form action="" method="post">
                <input 
                type="hidden" 
                name="id" 
                value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
                <button 
                 class="btn btn-danger" 
                 type="submit"
                 name="btnAccion"
                 value="Eliminar"
                 >Eliminar</button>
            </form>
        </td>
        </tr>
        <?php $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']);?>
        <?php } ?>
        <tr>
            <td colspan="3" align="right"><h3>Total</h3></td>
            <td align="right"><h3>$<?php echo number_format($total,2); ?></h3></td>
            <td with ="20%" class="text-ceter">Precio</td>
        </tr>
    </tbody>
</table>

<?php }else {?>
    <div class="alert alert-success">
    No hay productos en el carrito
    </div>
<?php } ?>
<?php include 'templates/pie.php'; ?>