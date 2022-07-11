<?php
namespace OpenAPI\Client\CFInterface;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;
use OpenAPI\Client\Api;
use OpenAPI\Client\Model;
use GuzzleHttp\Client;
use OpenAPI\Client\Api\OrdersApi;
use Exception;

class CFPaymentGateway {

    public $abc = "TESTING";

    public function getABC() {
        return $this->abc;
    }

    public function createOrderAPI()
    {
        print "TESTING";
        $apiInstance = new OrdersApi(
            new Client(),
            null,
            null,
            0
        );
        $x_client_id = '1246921cc3ba7f37c7d3babbc2296421'; // string
        $x_client_secret = '91aec11bc730e17d3f0df528c4a25782d0e9d6cb'; // string
        $x_api_version = '2022-01-01'; // string
        $x_idempotency_key = 'x_idempotency_key_example'; // string
        $x_request_id = 'x_request_id_example'; // string
        $cf_order_request = new \OpenAPI\Client\Model\CFOrderRequest(); // \OpenAPI\Client\Model\CFOrderRequest
        
        try {
            $result = $apiInstance->createOrder($x_client_id, $x_client_secret, $x_api_version, false, $x_idempotency_key, $x_request_id, $cf_order_request);
            print_r($result);
        } catch (Exception $e) {
            print "Exception";
            echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
        }
    }

}

?>