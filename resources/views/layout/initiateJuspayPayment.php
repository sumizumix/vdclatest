<?php
namespace server;
require realpath(__DIR__ .  '/vendor/autoload.php'); # Required while running it as standalone, not required while integrating into existing project
require_once __DIR__ . '/init.php';
use Juspay\RequestOptions;
use Juspay\Exception\JuspayException;
use Juspay\Model\OrderSession;

$config = ServerEnv::$config;

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);
header('Content-Type: application/json');
$orderId = uniqid();
$amount = 1;
try {
    $params = array();
    $params['amount'] = $amount;
    $params['currency'] = "INR";
    $params['order_id'] = $orderId;
    $params["merchant_id"] = $config["MERCHANT_ID"]; # Add merchant id
    $params['customer_id'] = "testing-customer-one";
    $params['payment_page_client_id'] = $config["PAYMENT_PAGE_CLIENT_ID"];
    $params['action'] = "paymentPage";
    $params['return_url'] = "http://localhost/expresscheckout-php-sdk/handleJuspayResponse";
    $requestOption = new RequestOptions();
    $requestOption->withCustomerId("testing-customer-one");
    // var_dump($params);exit;
    $session = OrderSession::create($params, $requestOption);
    if ($session->status == "NEW") {
        $response = array("orderId" => $session->orderId, "id" => $session->id, "status" => $session->status, "paymentLinks" =>  $session->paymentLinks, "sdkPayload" => $session->sdkPayload );
    } else {
        http_response_code(500);
        $response = array("message" => "session status: " . $session->status);
    }
} catch ( JuspayException $e ) {
    http_response_code($e->getHttpResponseCode());
    $response = array("message" => $e->getErrorMessage());
    error_log($e->getErrorMessage());
}
echo json_encode($response);
?>