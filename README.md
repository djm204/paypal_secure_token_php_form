# Paypal Secure Token PHP Form
A form that takes a running total from the three select lists, processes payment to BrainTree Paypal servers

##Installation
run 'php composer.phar install'


You will have to create a 'braintree-init.php' equivalent which initializes the braintree API with your merchant ID and private/public keys


For mine I am using:

`include_once(__DIR__.'/../../vendor/braintree/braintree_php/lib/Braintree.php');
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('Your-Merchant-ID');
Braintree_Configuration::publicKey('Your-Public-Key');
Braintree_Configuration::privateKey('Your-Private-Key');`


