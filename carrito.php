<?php
session_start();

$mensaje="";

echo "<pre>";
var_dump($_POST);
echo "</pre>";



if(isset($_POST['btnAccion'])){}
switch(($_POST['btnAccion'])){
    case 'Agregar':

    if(is_numeric( openssl_decrypt( $_POST['id'],COD,KEY )))
    {
        $ID=openssl_decrypt( $_POST['id'],COD,KEY );
    }else{
        $mensaje = "La encriptacion fue modificada";
    }
    $NOMBRE=openssl_decrypt( $_POST['nombre'],COD,KEY );
    $PRECIO=openssl_decrypt( $_POST['precio'],COD,KEY );
    $CANTIDAD= $_POST['cantidad']; 
    
    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
    
    
    if(!isset($_SESSION['CARRITO']))
    {        
        $producto=array(
            'ID'=>$ID,
            'NOMBRE'=>$NOMBRE,
            'PRECIO'=>$PRECIO,
            'CANTIDAD'=>$CANTIDAD
        );
        $_SESSION['CARRITO'][0]=$producto;
        $mensaje = "Producto agregado al carrito";
    }else {
        $NumeroProductos=count($_SESSION['CARRITO']);
        $producto=array(
            'ID'=>$ID,
            'NOMBRE'=>$NOMBRE,
            'PRECIO'=>$PRECIO,
            'CANTIDAD'=>$CANTIDAD
        );
        $_SESSION['CARRITO'][$NumeroProductos]=$producto;
        $mensaje = "Producto agregado al carrito";
    }
    //$mensaje = print_r($_SESSION,true);
    
    break;

    case 'Eliminar':
        if(is_numeric(openssl_decrypt( $_POST['id'],COD,KEY)))
        {
            $ID=openssl_decrypt( $_POST['id'],COD,KEY);

            foreach($_SESSION['CARRITO'] as $indice=>$producto)
            {
                if($producto['ID']==$ID)
                {
                    unset($_SESSION['CARRITO'][$indice]);
                    echo "<script>alert('Elemento borrado');</script>";
                }
            }
        }
        break;
}
?>