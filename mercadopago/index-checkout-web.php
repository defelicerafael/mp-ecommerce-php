<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</head>
<body>
<?php
    $dinero = '500.00';
?>
    <form action="/mercadopago/procesar-pago" method="POST">
      <script
        src="https://www.mercadopago.com.ar/integrations/v1/web-tokenize-checkout.js"
        data-public-key="TEST-24bbf4ee-fc44-47fc-8c16-538392a680c6"
        data-transaction-amount="<?php echo $dinero;?>">
      </script>
    </form>
</body>    
 