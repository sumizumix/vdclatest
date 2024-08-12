<?php
namespace server;





require realpath(dirname(getcwd(), 2) . '/vendor/autoload.php'); # Required while running it as standalone, not required while integrating into existing project
require_once __DIR__ . '\init.php';

use Illuminate\Support\Facades\URL;
use Juspay\RequestOptions;
use Juspay\Exception\JuspayException;
use Juspay\Model\OrderSession;

$return_url = "http://localhost/vdclatest/";//local
// $return_url = "https://vijayadiagnosticcentre.com/";//live


$config = ServerEnv::$config;
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);
header('Content-Type: application/json');
$orderId = uniqid();

$user_id = $_POST['user_id'];


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "db_vdc";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Correct SQL query for selecting all records from 'cart'
$sql = "UPDATE cart SET razorid='" . $orderId . "' WHERE user_id='" . $user_id . "' and paystatus = '0'";


// Execute the query
$result = $conn->query($sql);


// Close the connection
$conn->close();


$amount = $_POST['amount'];
try {
    $params = array();
    $params['amount'] = $amount;
    $params['currency'] = "INR";
    $params['order_id'] = $orderId;
    $params["merchant_id"] = $config["MERCHANT_ID"]; # Add merchant id
    $params['customer_id'] = "testing-customer-one";
    $params['payment_page_client_id'] = $config["PAYMENT_PAGE_CLIENT_ID"];
    $params['action'] = "paymentPage";
    // var_dump();exit;
    $params['return_url'] = $return_url . "razorpay-payment";
    $requestOption = new RequestOptions();
    $requestOption->withCustomerId("testing-customer-one");
    // var_dump($params);exit;
    $session = OrderSession::create($params, $requestOption);
    if ($session->status == "NEW") {
        $response = array("orderId" => $session->orderId, "id" => $session->id, "status" => $session->status, "paymentLinks" => $session->paymentLinks, "sdkPayload" => $session->sdkPayload);
    } else {
        http_response_code(500);
        $response = array("message" => "session status: " . $session->status);
    }
} catch (JuspayException $e) {
    http_response_code($e->getHttpResponseCode());
    $response = array("message" => $e->getErrorMessage());
    error_log($e->getErrorMessage());
}
echo json_encode($response);
?>