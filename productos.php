<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/productos.css" >
        <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">
            <p class="logo">DETALLES DMPM</p>
            <div class="col-md-7">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="index.php">Bienvenidos</a></li>
                      <li><a href="productos.php">TIENDA</a></li>
                      <li><a href="contactanos.php">CONTACTANOS</a></li>
                    </ul>
                </div>
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
        </div>
        <div class="container">
            <div id="root"></div>
            <div class="sidebar">
                <div class="head"><p>Mi carrito</p></div>
                <div id="cartItem">Your cart is empty</div>
                <div class="foot">
                    <h3>Total</h3>
                    <h2 id="total">$ 0.00</h2>
                </div>
                <button onclick="realizarCompra()">Comprar</button>
            </div>
        </div>
        <script>
            // Función para simular la compra
function realizarCompra() {
    alert("Compra realizada con éxito. ¡Gracias por tu compra!");
    // Aquí podrías realizar acciones adicionales, como limpiar el carrito, etc.
    window.location.href = "ingresar.php";
}

        </script>
        <script src="imagenes.js"></script>
    </body>
</html>