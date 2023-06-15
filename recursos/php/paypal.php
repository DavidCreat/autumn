<script src="https://www.paypal.com/sdk/js?client-id=AT1WBbdcIJEb8FTgsRZLJdV1ZkbG3AOpgoi7Xnufq9uzUcf-qNzbkvRa7qeMx4k1bhuey6eDwP42LhF0&currency=USD"></script>

<!-- Configura un elemento de contenedor para el botón -->
<div id="paypal-button-container"></div>

<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // Aquí puedes personalizar la orden que se enviará a PayPal
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '<?php echo $freelancerData["cobro"]; ?>', // Precio del freelancer seleccionado
            currency_code: 'USD'
          },
          description: '<?php echo $freelancerData["descripcion"]; ?>' // Descripción del freelancer seleccionado
        }]
      });
    },
    onApprove: function(data, actions) {
      // Aquí puedes manejar el evento de aprobación del pago
      return actions.order.capture().then(function(details) {
        // Aquí puedes mostrar un mensaje de éxito o redirigir al usuario a una página de confirmación
        alert('Pago completado con éxito. ID de transacción: ' + details.id);
      });
    },
    onError: function(err) {
      // Aquí puedes manejar los errores que ocurran durante el proceso de pago
      console.log(err);
      alert('Ha ocurrido un error durante el proceso de pago. Por favor, inténtalo de nuevo.');
    }
  }).render('#paypal-button-container');
</script>