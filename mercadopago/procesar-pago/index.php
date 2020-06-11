<?php
  require_once '../vendor/autoload.php';
  
    $token = $_REQUEST["token"];
    $payment_method_id = $_REQUEST["payment_method_id"];
    $installments = $_REQUEST["installments"];
    $issuer_id = $_REQUEST["issuer_id"];
  
   MercadoPago\SDK::setAccessToken("TEST-8252776030650874-042714-9a05714165150fd297fa432441698541-25246282");
    
   
   
   
    $payment = new MercadoPago\Payment();
    $payment->transaction_amount = 101;
    $payment->token = $token;
    $payment->description = "Ergonomic Steel Hat";
    $payment->installments = $installments;
    $payment->payment_method_id = $payment_method_id;
    $payment->issuer_id = $issuer_id;
    $payment->payer = array(
    "email" => "defelicerafael@gmail.com"
    );
    // Guarda y postea el pago
    $payment->save();
    //...
    // Imprime el estado del pago
    echo $payment->status;
    //...
