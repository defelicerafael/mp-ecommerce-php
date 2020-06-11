<?php
$total = 1;
$titulo = "2 leblon";
$nombre = "Damian";
$apellido = "Beccar Varela";
$email = "damian@gmail.com";
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
MercadoPago\SDK::setAccessToken('APP_USR-8252776030650874-042714-cb683313524ab9048313c14b8096a521-25246282');
// Crea un objeto de preferencia

$payer = new MercadoPago\Payer();
$payer->name = $nombre;
$payer->surname = $apellido;
$payer->email = $email;
  
$preference = new MercadoPago\Preference();
$preference->back_urls = array(
    "success" => "https://www.teapoyamos.com.ar/success/",
    "failure" => "https://www.teapoyamos.com.ar/failure",
    "pending" => "https://www.teapoyamos.com.ar/pending"
);
$preference->auto_return = "approved";


// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->currency_id = "ARS";
$item->unit_price = $total;
$preference->items = array($item);
$preference->save();

 
?>
<h1>Pago</h1>
<h3><?php echo $titulo;?></h3>
<h4><?php echo $total;?></h4>
<form action="/procesar-pago" method="POST">
  <script
   src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
   data-preference-id="<?php echo $preference->id; ?>">
  </script>
</form>