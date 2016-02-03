<?php
    include_once('braintree-init.php');

    
    $nonce = $_POST['payment_method_nonce'];
    $total = $_POST['total'];

    print_r($_POST);
    echo $nonce;
    
    $result = Braintree_Transaction::sale([
        'amount' => $total,
        'paymentMethodNonce' => $nonce
    ]);
    
    echo $result;
?>