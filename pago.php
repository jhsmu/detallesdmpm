<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pago.css">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <div class="card">
      <button class="proceed"><svg class="sendicon" width="24" height="24" viewBox="0 0 24 24">
    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
  </svg></button>
     <img src="https://seeklogo.com/images/V/VISA-logo-62D5B26FE1-seeklogo.com.png" class="logo-card">
   <label>Card number:</label>
   <input id="user" type="text" class="input cardnumber"  placeholder="1234 5678 9101 1121">
   <label>Name:</label>
   <input class="input name"  placeholder="Edgar Pérez">
   <label class="toleft">CCV:</label>
   <input class="input toleft ccv" placeholder="321">
    </div>
    <div class="receipt">
      <div class="col"><p>Cost:</p>
      <h2 class="cost">$400</h2><br>
      <p>Name:</p>
      <h2 class="seller">Codedgar</h2>
      </div>
      <div class="col">
        <p>Bought Items:</p>
        <h3 class="bought-items">Corsair Mouse</h3>
        <p class="bought-items description">Gaming mouse with shiny lights</p>
        <p class="bought-items price">$200 (50% discount)</p><br>
        <h3 class="bought-items">Gaming keyboard</h3>
        <p class="bought-items description">Look mommmy, it has colors!</p>
        <p class="bought-items price">$200 (50% discount)</p><br>
      </div>
      <p class="comprobe">This information will be sended to your email</p>
    </div>
  </div>
  <script>
    // Obtén el elemento de entrada del número de tarjeta
    var cardNumberInput = document.getElementById('user');

    // Obtén el elemento de la tarjeta donde se muestra el número
    var cardNumberDisplay = document.querySelector('.card .cardnumber');

    // Agrega un eventListener para el evento 'input'
    cardNumberInput.addEventListener('input', function () {
        // Actualiza el contenido de la tarjeta con el valor del campo de entrada
        cardNumberDisplay.textContent = this.value;
    });
</script>

</body>
</html>