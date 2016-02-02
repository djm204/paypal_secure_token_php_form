<?php
    include_once('braintree-init'); // This was seperated and ignored from git for the sake of account security
    echo($clientToken = Braintree_ClientToken::generate());
?> 