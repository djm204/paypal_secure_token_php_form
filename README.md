# Paypal Secure Token PHP Form
A form that takes a running total from the three select lists, processes payment to BrainTree Paypal servers

##Installation
You will have to create a 'braintree-init.php' equivalent which initializes the braintree API with your merchant ID and private/public keys

`include_once(__DIR__.'/../../vendor/braintree/braintree_php/lib/Braintree.php');
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('Your-Merchant-ID');
Braintree_Configuration::publicKey('Your-Public-Key');
Braintree_Configuration::privateKey('Your-Private-Key');`

## Dependencies
Braintree-php-3.8.0 - In this case I am using composer.
jQuery