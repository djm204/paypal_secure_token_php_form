<?php
    include_once('../../vendor/braintree/braintree_php/lib/Braintree.php');
    Braintree_Configuration::environment('sandbox');
    Braintree_Configuration::merchantId('t54pcdgvjw9nycg9');
    Braintree_Configuration::publicKey('gvwcsnkpdtvp3vy2');
    Braintree_Configuration::privateKey('cfc8d194702d486179603a9099145e3d');
    
    echo($clientToken = Braintree_ClientToken::generate());
?> 