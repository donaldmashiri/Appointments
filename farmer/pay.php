<?php

require_once '../paynow-sdk-2/autoloader.php';
include_once('../includes/db.php');

$price = $conn -> real_escape_string($_POST['price']);
$product_id = $conn -> real_escape_string($_POST['product_id']);
$quantity = $conn -> real_escape_string($_POST['quantity']);
$amount = $price*$quantity;


$sql = "INSERT INTO orders (farmer_id, product_id, quantity, amount, date)
                            VALUES ({$_SESSION['farmer_id']}, {$product_id},{$quantity},{$amount}, now())";

if ($conn->query($sql) === TRUE) {

$paynow = new Paynow\Payments\Paynow(
    '10490',
    'd9dedf29-8e42-4de0-ac3c-73248f8c24ad',
     'http://localhost/mitchel/farmer/your_orders.php',
//     'http://localhost/msu/prince/success.php?app_id='.$app_id,

    // The return url can be set at later stages. You might want to do this if you want to pass data to the return url (like the reference of the transaction)
    'http://example.com/return?gateway=paynow'
);

$payment = $paynow->createPayment('Sable Chicken Payment', 'donaldtondemashiri@gmail.com');

$payment->add('Sable Chicken', $amount);
//$payment->add('Water', 1.00);

$response = $paynow->send($payment);
// var_dump($response);
if ($response->success()) {
    // Or if you prefer more control, get the link to redirect the user to, then use it as you see fit
    $link = $response->redirectUrl();
    // save link
    $pollUrl = $response->pollUrl();

    header("Location: ".$link);
}

}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}










?>