<?php 
    $nonce = $_POST['payment_method_nonce'];
    $total = $_POST['total'];
    echo $nonce;
    
    $result = BrainTree_Transaction::sale([
        'amount' => $total,
        'paymentMethodNonce' => $nonce
    ]);
?>