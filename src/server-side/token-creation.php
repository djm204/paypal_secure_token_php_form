<?php
    include_once('braintree-init.php'); // This was seperated and ignored from git for the sake of account security
    $clientToken = Braintree_ClientToken::generate();
?> 