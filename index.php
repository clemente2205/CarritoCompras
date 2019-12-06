<?php
error_reporting(E_ALL);
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>
        <br>
        <?php if($mensaje!="") {?>
            <div class="alert alert-success">
                <?php  echo ($mensaje);?>
                <a href="mostrarCarrito.php" class="badge badge-success"> Ver carrito </a>
            </div>
        <br/>
        <?php }?>
        <div class="row">
            <?php
                $sentencia=$pdo->prepare("SELECT * FROM `tblproductos`");
                $sentencia->execute();
                $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <?php foreach($listaProductos as $producto){ ?>
                <div class="col-3">                
                <div class="card">
                    <img 
                    title="<?php echo $producto['Nombre'];?>"
                    alt="Título"
                    class="card-img-top"
                     src="<?php echo $producto['Imagen'];?>"

                    
                     data-toggle="popover"
                     
                     data-trigger="hover"
                     data-content="<?php echo $producto['Descripcion'];?>"
                     height="200"
                     >
                    <div class="card-body">
                        <span><?php echo $producto['Nombre'];?></span>
                        <h5 class="card-title">$<?php echo $producto['Precio'];?></h5>
                        <p class="card-text">Descripción</p>

                        <form action="" method="post">
                            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY); ?>">
                            <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
                            <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
                            
                            <input  name="cantidad"step="1" data-step-max="10" type="number" id="cantidad" value="1" data-decimals="0" min="1" max="360"/>
                        <button 
                        class="btn btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit"
                        >
                            Agregar al carrito
                        </button>
                        </form>                        
                    </div>
                </div>
            </div>
            <?php  } ?>            
        </div>

    
    
    <script>
        $(function () {
        $('[data-toggle="popover"]').popover()
        })
    </script>
<?php
include 'templates/pie.php';
?>