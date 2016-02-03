<?php 


    include_once('src/server-side/token-creation.php');
?>
<!DOCTYPE html>

<html>
<head>
    <title>Page Title</title>
</head>

<body>
    <form id="checkout" method="post" action="/checkout">
        <div id="payment-form"><?php include 'components/fieldset-1.php' ?></div>
        <input type="submit" value="Pay Online Now">
</form>
            
    
    <script src="src/front-end/scripts/braintree.js"></script>
    
    <script>
        var clientToken = <?=json_encode($clientToken)?>;
        
        braintree.setup(clientToken, "dropin", {
            container: "payment-form"
        });
        
        console.log(clientToken);
    </script>
</body>
</html>