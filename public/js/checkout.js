var stripe = Stripe('pk_test_1zfpfm7PYhMowPX7InhW3t4s');
var elements = stripe.elements();
var $form = $('#checkout-form');

var style = {
    base: {
      color: '#32325d',
      fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
      fontSmoothing: 'antialiased',
      fontSize: '16px',
      '::placeholder': {
        color: '#aab7c4'
      }
    },
    invalid: {
      color: '#fa755a',
      iconColor: '#fa755a'
    }
  };


var card = elements.create('card', {style: style});

card.mount('#card-element');

card.addEventListener('change', function(event) {
    var displayError = document.getElementById('charge-errors');
    if (event.error) {
      displayError.textContent = event.error.message;
    } else {
      displayError.textContent = '';
    }
  });
  
  // Handle form submission
  var form = document.getElementById('checkout-form');
  form.addEventListener('submit', function(event) {
    event.preventDefault();
  
    stripe.createToken(card).then(function(result) {
      if (result.error) {
        // Inform the user if there was an error
        var errorElement = document.getElementById('charge-errors');
        errorElement.textContent = result.error.message;
      } else {
        // Send the token to your server
        stripeTokenHandler(result.token);
      }
    });
  });
  
  function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('checkout-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);
  
    // Submit the form
    form.submit();
  }


$form.submit(function(event){
    $('charge-error').addClass('hidden');
    $form.find('button').prop('disabled', true); 
     stripe.createToken(card).then(function(stripeResponseHandler) {
        // Handle result.error or result.token
      });
      return false;
});

