<?php
namespace Cashfree\CFInterface;

use GuzzleHttp\Client;
use Cashfree\Api\OrdersApi;
use Exception;
use Cashfree\CFInterface\CFHeader;
use Cashfree\CFInterface\CFEnvironment;
use Cashfree\CFInterface\CFConfig;
use Cashfree\Model\CFOrderRequest;
use Cashfree\Model\CFOrderPayRequest;
use Cashfree\Model\CFAuthorizationRequest;
use Cashfree\Api\PaymentsApi;
use Cashfree\Api\RefundsApi;
use Cashfree\Model\CFRefundRequest;
use Cashfree\Api\SettlementsApi;
use Cashfree\Api\PaymentLinksApi;
use Cashfree\Model\CFLinkRequest;
use Cashfree\Configuration;

class CFPaymentGateway {

    public function __construct() {
    }

    public function createOrder(CFConfig $config, CFHeader $header, CFOrderRequest $cfOrderRequest)
    {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        \Sentry\init([
            'dsn' => 'https://f694e61bc6394e80bd2f687a4249a204@o330525.ingest.sentry.io/4505248768327680',
            'environment' => $config->getEnvironment()->name. "_CREATEORDER",
            'attach_stacktrace' => true,
            'release' => '2.2.0',
            'traces_sample_rate' => 1.0,
            'before_send' => function (\Sentry\Event $event, \Sentry\State\Scope $scope): ?\Sentry\Event {
                if($config->getExceptionCaptureBoolean() === false) {
                    $exception = $event->getExceptions()[0] ?? null;
                    if ($exception instanceof \Throwable) {
                        $frames = $exception->getTrace();
                        foreach ($frames as &$frame) {
                            if (isset($frame['file'])) {
                                $frame['file'] = "";
                            }
                        }
                        unset($frame); // Clear the reference
            
                        $exception->setTrace($frames);
                    }

                    $extraData = $event->getExtra();
                    
                    unset($extraData['system']['kernel_version']);
                    unset($extraData['system']['kernel_release']);
                    
                    $event->setExtra($extraData);
                }
                return $event;
            }
        ]);
        $configuration = new Configuration();
        if($hostURL == 0) {
            $configuration->setHost("https://sandbox.cashfree.com/pg");
        } else {
            $configuration->setHost("https://api.cashfree.com/pg");
        }
        $apiInstance = new OrdersApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy()
            ]),
            $configuration,
            null,
            $hostURL
        );
        $x_client_id = $config->getClientId(); // string
        $x_client_secret = $config->getClientSecret(); // string
        $x_api_version = $config->getApiVersion(); // string
        $x_idempotency_key = $header->getIdempotencyKey(); // string
        $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->createOrder($x_client_id, $x_client_secret, $x_api_version, false, $x_idempotency_key, $x_request_id, $cfOrderRequest);
            return $result;
        } catch (Exception $e) {
            \Sentry\captureException($e);
            throw $e;
        }
    }

    public function getOrder(CFConfig $config, CFHeader $header, string $orderId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        \Sentry\init([
            'dsn' => 'https://f694e61bc6394e80bd2f687a4249a204@o330525.ingest.sentry.io/4505248768327680',
            'environment' => $config->getEnvironment()->name . "_GETORDER",
            'attach_stacktrace' => true,
            'release' => '2.2.0',
            'traces_sample_rate' => 1.0,
            'before_send' => function (\Sentry\Event $event, \Sentry\State\Scope $scope): ?\Sentry\Event {
                if($config->getExceptionCaptureBoolean() === false) {
                    $exception = $event->getExceptions()[0] ?? null;
                    if ($exception instanceof \Throwable) {
                        $frames = $exception->getTrace();
                        foreach ($frames as &$frame) {
                            if (isset($frame['file'])) {
                                $frame['file'] = "";
                            }
                        }
                        unset($frame); // Clear the reference
            
                        $exception->setTrace($frames);
                    }

                    $extraData = $event->getExtra();
                    
                    unset($extraData['system']['kernel_version']);
                    unset($extraData['system']['kernel_release']);
                    
                    $event->setExtra($extraData);
                }
                return $event;
            }
        ]);
        $configuration = new Configuration();
        if($hostURL == 0) {
            $configuration->setHost("https://sandbox.cashfree.com/pg");
        } else {
            $configuration->setHost("https://api.cashfree.com/pg");
        }
        $apiInstance = new OrdersApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy()
            ]),
            $configuration,
            null,
            $hostURL
        );
        $x_client_id = $config->getClientId(); // string
        $x_client_secret = $config->getClientSecret(); // string
        $x_api_version = $config->getApiVersion(); // string
        $x_idempotency_key = $header->getIdempotencyKey(); // string
        $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->getOrder($x_client_id, $x_client_secret, $orderId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            return $result;
        } catch (Exception $e) {
            \Sentry\captureException($e);
            throw $e;
        }
    }

    public function orderPaySessions(CFConfig $config, CFHeader $header, CFOrderPayRequest $cfOrderPayRequest) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        \Sentry\init([
            'dsn' => 'https://f694e61bc6394e80bd2f687a4249a204@o330525.ingest.sentry.io/4505248768327680',
            'environment' => $config->getEnvironment()->name. "_ORDERPAYSESSIONS",
            'attach_stacktrace' => true,
            'release' => '2.2.0',
            'traces_sample_rate' => 1.0,
            'before_send' => function (\Sentry\Event $event, \Sentry\State\Scope $scope): ?\Sentry\Event {
                if($config->getExceptionCaptureBoolean() === false) {
                    $exception = $event->getExceptions()[0] ?? null;
                    if ($exception instanceof \Throwable) {
                        $frames = $exception->getTrace();
                        foreach ($frames as &$frame) {
                            if (isset($frame['file'])) {
                                $frame['file'] = "";
                            }
                        }
                        unset($frame); // Clear the reference
            
                        $exception->setTrace($frames);
                    }

                    $extraData = $event->getExtra();
                    
                    unset($extraData['system']['kernel_version']);
                    unset($extraData['system']['kernel_release']);
                    
                    $event->setExtra($extraData);
                }
                return $event;
            }
        ]);
        $configuration = new Configuration();
        if($hostURL == 0) {
            $configuration->setHost("https://sandbox.cashfree.com/pg");
        } else {
            $configuration->setHost("https://api.cashfree.com/pg");
        }
        $apiInstance = new OrdersApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy(),
            ]),
            $configuration,
            null,
            $hostURL
            );
        $x_api_version = $config->getApiVersion(); // string
        $x_idempotency_key = $header->getIdempotencyKey(); // string
        $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->orderPaySessions($x_api_version, $x_request_id, $cfOrderPayRequest);
            return $result;
        } catch (Exception $e) {
            \Sentry\captureException($e);
            throw $e;
        }
    }

    public function orderPay(CFConfig $config, CFHeader $header, CFOrderPayRequest $cfOrderPayRequest) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        \Sentry\init([
            'dsn' => 'https://f694e61bc6394e80bd2f687a4249a204@o330525.ingest.sentry.io/4505248768327680',
            'environment' => $config->getEnvironment()->name. "_ORDERPAY",
            'attach_stacktrace' => true,
            'release' => '2.2.0',
            'traces_sample_rate' => 1.0,
            'before_send' => function (\Sentry\Event $event, \Sentry\State\Scope $scope): ?\Sentry\Event {
                if($config->getExceptionCaptureBoolean() === false) {
                    $exception = $event->getExceptions()[0] ?? null;
                    if ($exception instanceof \Throwable) {
                        $frames = $exception->getTrace();
                        foreach ($frames as &$frame) {
                            if (isset($frame['file'])) {
                                $frame['file'] = "";
                            }
                        }
                        unset($frame); // Clear the reference
            
                        $exception->setTrace($frames);
                    }

                    $extraData = $event->getExtra();
                    
                    unset($extraData['system']['kernel_version']);
                    unset($extraData['system']['kernel_release']);
                    
                    $event->setExtra($extraData);
                }
                return $event;
            }
        ]);
        $configuration = new Configuration();
        if($hostURL == 0) {
            $configuration->setHost("https://sandbox.cashfree.com/pg");
        } else {
            $configuration->setHost("https://api.cashfree.com/pg");
        }
        $apiInstance = new OrdersApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy(),
            ]),
            $configuration,
            null,
            $hostURL
            );
        $x_api_version = $config->getApiVersion(); // string
        $x_idempotency_key = $header->getIdempotencyKey(); // string
        $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->orderPay($x_api_version, $x_request_id, $cfOrderPayRequest);
            return $result;
        } catch (Exception $e) {
            \Sentry\captureException($e);
            throw $e;
        }
    }

    public function getPaymentsForOrder(CFConfig $config, CFHeader $header, string $orderId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        \Sentry\init([
            'dsn' => 'https://f694e61bc6394e80bd2f687a4249a204@o330525.ingest.sentry.io/4505248768327680',
            'environment' => $config->getEnvironment()->name. "_GETPAYMENTSFORORDER",
            'attach_stacktrace' => true,
            'release' => '2.2.0',
            'traces_sample_rate' => 1.0,
            'before_send' => function (\Sentry\Event $event, \Sentry\State\Scope $scope): ?\Sentry\Event {
                if($config->getExceptionCaptureBoolean() === false) {
                    $exception = $event->getExceptions()[0] ?? null;
                    if ($exception instanceof \Throwable) {
                        $frames = $exception->getTrace();
                        foreach ($frames as &$frame) {
                            if (isset($frame['file'])) {
                                $frame['file'] = "";
                            }
                        }
                        unset($frame); // Clear the reference
            
                        $exception->setTrace($frames);
                    }

                    $extraData = $event->getExtra();
                    
                    unset($extraData['system']['kernel_version']);
                    unset($extraData['system']['kernel_release']);
                    
                    $event->setExtra($extraData);
                }
                return $event;
            }
        ]);
        $configuration = new Configuration();
        if($hostURL == 0) {
            $configuration->setHost("https://sandbox.cashfree.com/pg");
        } else {
            $configuration->setHost("https://api.cashfree.com/pg");
        }
        $apiInstance = new PaymentsApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy()
            ]),
            $configuration,
            null,
            $hostURL
        );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->getPaymentsfororder($x_client_id, $x_client_secret, $orderId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            return $result;
        } catch (Exception $e) {
            \Sentry\captureException($e);
            throw $e;
        }
    }

    public function getPaymentsByPaymentId(CFConfig $config, CFHeader $header, string $orderId, int $cfPaymentId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        \Sentry\init([
            'dsn' => 'https://f694e61bc6394e80bd2f687a4249a204@o330525.ingest.sentry.io/4505248768327680',
            'environment' => $config->getEnvironment()->name. "_GETPAYMENTSBYID",
            'attach_stacktrace' => true,
            'release' => '2.2.0',
            'traces_sample_rate' => 1.0,
            'before_send' => function (\Sentry\Event $event, \Sentry\State\Scope $scope): ?\Sentry\Event {
                if($config->getExceptionCaptureBoolean() === false) {
                    $exception = $event->getExceptions()[0] ?? null;
                    if ($exception instanceof \Throwable) {
                        $frames = $exception->getTrace();
                        foreach ($frames as &$frame) {
                            if (isset($frame['file'])) {
                                $frame['file'] = "";
                            }
                        }
                        unset($frame); // Clear the reference
            
                        $exception->setTrace($frames);
                    }

                    $extraData = $event->getExtra();
                    
                    unset($extraData['system']['kernel_version']);
                    unset($extraData['system']['kernel_release']);
                    
                    $event->setExtra($extraData);
                }
                return $event;
            }
        ]);
        $configuration = new Configuration();
        if($hostURL == 0) {
            $configuration->setHost("https://sandbox.cashfree.com/pg");
        } else {
            $configuration->setHost("https://api.cashfree.com/pg");
        }
        $apiInstance = new PaymentsApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy()
            ]),
            $configuration,
            null,
            $hostURL
        );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->getPaymentbyId($x_client_id, $x_client_secret, $orderId, $cfPaymentId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            return $result;
        } catch (Exception $e) {
            \Sentry\captureException($e);
            throw $e;
        }
    }

    public function createRefund(CFConfig $config, CFHeader $header, string $orderId, CFRefundRequest $cfRefundRequest) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        \Sentry\init([
            'dsn' => 'https://f694e61bc6394e80bd2f687a4249a204@o330525.ingest.sentry.io/4505248768327680',
            'environment' => $config->getEnvironment()->name. "_CREATEREFUND",
            'attach_stacktrace' => true,
            'release' => '2.2.0',
            'traces_sample_rate' => 1.0,
            'before_send' => function (\Sentry\Event $event, \Sentry\State\Scope $scope): ?\Sentry\Event {
                if($config->getExceptionCaptureBoolean() === false) {
                    $exception = $event->getExceptions()[0] ?? null;
                    if ($exception instanceof \Throwable) {
                        $frames = $exception->getTrace();
                        foreach ($frames as &$frame) {
                            if (isset($frame['file'])) {
                                $frame['file'] = "";
                            }
                        }
                        unset($frame); // Clear the reference
            
                        $exception->setTrace($frames);
                    }

                    $extraData = $event->getExtra();
                    
                    unset($extraData['system']['kernel_version']);
                    unset($extraData['system']['kernel_release']);
                    
                    $event->setExtra($extraData);
                }
                return $event;
            }
        ]);
        $configuration = new Configuration();
        if($hostURL == 0) {
            $configuration->setHost("https://sandbox.cashfree.com/pg");
        } else {
            $configuration->setHost("https://api.cashfree.com/pg");
        }
        $apiInstance = new RefundsApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy()
            ]),
            $configuration,
            null,
            $hostURL
        );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->createrefund($x_client_id, $x_client_secret, $orderId, $x_api_version, false, $x_idempotency_key, $x_request_id, $cfRefundRequest);
            return $result;
        } catch (Exception $e) {
            \Sentry\captureException($e);
            throw $e;
        }
    }

    public function getRefund(CFConfig $config, CFHeader $header, string $orderId, string $refundId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        \Sentry\init([
            'dsn' => 'https://f694e61bc6394e80bd2f687a4249a204@o330525.ingest.sentry.io/4505248768327680',
            'environment' => $config->getEnvironment()->name. "_GETREFUND",
            'attach_stacktrace' => true,
            'release' => '2.2.0',
            'traces_sample_rate' => 1.0,
            'before_send' => function (\Sentry\Event $event, \Sentry\State\Scope $scope): ?\Sentry\Event {
                if($config->getExceptionCaptureBoolean() === false) {
                    $exception = $event->getExceptions()[0] ?? null;
                    if ($exception instanceof \Throwable) {
                        $frames = $exception->getTrace();
                        foreach ($frames as &$frame) {
                            if (isset($frame['file'])) {
                                $frame['file'] = "";
                            }
                        }
                        unset($frame); // Clear the reference
            
                        $exception->setTrace($frames);
                    }

                    $extraData = $event->getExtra();
                    
                    unset($extraData['system']['kernel_version']);
                    unset($extraData['system']['kernel_release']);
                    
                    $event->setExtra($extraData);
                }
                return $event;
            }
        ]);
        $configuration = new Configuration();
        if($hostURL == 0) {
            $configuration->setHost("https://sandbox.cashfree.com/pg");
        } else {
            $configuration->setHost("https://api.cashfree.com/pg");
        }
        $apiInstance = new RefundsApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy()
            ]),
            $configuration,
            null,
            $hostURL
        );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->getRefund($x_client_id, $x_client_secret, $orderId, $refundId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            return $result;
        } catch (Exception $e) {
            \Sentry\captureException($e);
            throw $e;
        }
    }

    public function getAllRefundsForOrder(CFConfig $config, CFHeader $header, string $orderId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        \Sentry\init([
            'dsn' => 'https://f694e61bc6394e80bd2f687a4249a204@o330525.ingest.sentry.io/4505248768327680',
            'environment' => $config->getEnvironment()->name. "_GETALLREFUNDSFORANORDER",
            'attach_stacktrace' => true,
            'release' => '2.2.0',
            'traces_sample_rate' => 1.0,
            'before_send' => function (\Sentry\Event $event, \Sentry\State\Scope $scope): ?\Sentry\Event {
                if($config->getExceptionCaptureBoolean() === false) {
                    $exception = $event->getExceptions()[0] ?? null;
                    if ($exception instanceof \Throwable) {
                        $frames = $exception->getTrace();
                        foreach ($frames as &$frame) {
                            if (isset($frame['file'])) {
                                $frame['file'] = "";
                            }
                        }
                        unset($frame); // Clear the reference
            
                        $exception->setTrace($frames);
                    }

                    $extraData = $event->getExtra();
                    
                    unset($extraData['system']['kernel_version']);
                    unset($extraData['system']['kernel_release']);
                    
                    $event->setExtra($extraData);
                }
                return $event;
            }
        ]);
        $configuration = new Configuration();
        if($hostURL == 0) {
            $configuration->setHost("https://sandbox.cashfree.com/pg");
        } else {
            $configuration->setHost("https://api.cashfree.com/pg");
        }
        $apiInstance = new RefundsApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy()
            ]),
            $configuration,
            null,
            $hostURL
        );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->getallrefundsfororder($x_client_id, $x_client_secret, $orderId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            return $result;
        } catch (Exception $e) {
            \Sentry\captureException($e);
            throw $e;
        }
    }

    public function getSettlements(CFConfig $config, CFHeader $header, string $orderId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        \Sentry\init([
            'dsn' => 'https://f694e61bc6394e80bd2f687a4249a204@o330525.ingest.sentry.io/4505248768327680',
            'environment' => $config->getEnvironment()->name. "_GETSETTLEMENTS",
            'attach_stacktrace' => true,
            'release' => '2.2.0',
            'traces_sample_rate' => 1.0,
            'before_send' => function (\Sentry\Event $event, \Sentry\State\Scope $scope): ?\Sentry\Event {
                if($config->getExceptionCaptureBoolean() === false) {
                    $exception = $event->getExceptions()[0] ?? null;
                    if ($exception instanceof \Throwable) {
                        $frames = $exception->getTrace();
                        foreach ($frames as &$frame) {
                            if (isset($frame['file'])) {
                                $frame['file'] = "";
                            }
                        }
                        unset($frame); // Clear the reference
            
                        $exception->setTrace($frames);
                    }

                    $extraData = $event->getExtra();
                    
                    unset($extraData['system']['kernel_version']);
                    unset($extraData['system']['kernel_release']);
                    
                    $event->setExtra($extraData);
                }
                return $event;
            }
        ]);
        $configuration = new Configuration();
        if($hostURL == 0) {
            $configuration->setHost("https://sandbox.cashfree.com/pg");
        } else {
            $configuration->setHost("https://api.cashfree.com/pg");
        }
        $apiInstance = new SettlementsApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy()
            ]),
            $configuration,
            null,
            $hostURL
        );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->getsettlements($x_client_id, $x_client_secret, $orderId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            return $result;
        } catch (Exception $e) {
            \Sentry\captureException($e);
            throw $e;
        }
    }

    public function createPaymentLinks(CFConfig $config, CFHeader $header, CFLinkRequest $cfLinkRequest) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        \Sentry\init([
            'dsn' => 'https://f694e61bc6394e80bd2f687a4249a204@o330525.ingest.sentry.io/4505248768327680',
            'environment' => $config->getEnvironment()->name. "_CREATEPAYMENTLINKS",
            'attach_stacktrace' => true,
            'release' => '2.2.0',
            'traces_sample_rate' => 1.0,
            'before_send' => function (\Sentry\Event $event, \Sentry\State\Scope $scope): ?\Sentry\Event {
                if($config->getExceptionCaptureBoolean() === false) {
                    $exception = $event->getExceptions()[0] ?? null;
                    if ($exception instanceof \Throwable) {
                        $frames = $exception->getTrace();
                        foreach ($frames as &$frame) {
                            if (isset($frame['file'])) {
                                $frame['file'] = "";
                            }
                        }
                        unset($frame); // Clear the reference
            
                        $exception->setTrace($frames);
                    }

                    $extraData = $event->getExtra();
                    
                    unset($extraData['system']['kernel_version']);
                    unset($extraData['system']['kernel_release']);
                    
                    $event->setExtra($extraData);
                }
                return $event;
            }
        ]);
        $configuration = new Configuration();
        if($hostURL == 0) {
            $configuration->setHost("https://sandbox.cashfree.com/pg");
        } else {
            $configuration->setHost("https://api.cashfree.com/pg");
        }
        $apiInstance = new PaymentLinksApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy()
            ]),
            $configuration,
            null,
            $hostURL
        );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->createPaymentLink($x_client_id, $x_client_secret, $x_api_version, false, $x_idempotency_key, $x_request_id, $cfLinkRequest);
            return $result;
        } catch (Exception $e) {
            \Sentry\captureException($e);
            throw $e;
        }
    }

    public function getPaymentLinkDetails(CFConfig $config, CFHeader $header, string $linkId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        \Sentry\init([
            'dsn' => 'https://f694e61bc6394e80bd2f687a4249a204@o330525.ingest.sentry.io/4505248768327680',
            'environment' => $config->getEnvironment()->name. "_GETPAYMENTLINKDETAILS",
            'attach_stacktrace' => true,
            'release' => '2.2.0',
            'traces_sample_rate' => 1.0,
            'before_send' => function (\Sentry\Event $event, \Sentry\State\Scope $scope): ?\Sentry\Event {
                if($config->getExceptionCaptureBoolean() === false) {
                    $exception = $event->getExceptions()[0] ?? null;
                    if ($exception instanceof \Throwable) {
                        $frames = $exception->getTrace();
                        foreach ($frames as &$frame) {
                            if (isset($frame['file'])) {
                                $frame['file'] = "";
                            }
                        }
                        unset($frame); // Clear the reference
            
                        $exception->setTrace($frames);
                    }

                    $extraData = $event->getExtra();
                    
                    unset($extraData['system']['kernel_version']);
                    unset($extraData['system']['kernel_release']);
                    
                    $event->setExtra($extraData);
                }
                return $event;
            }
        ]);
        $configuration = new Configuration();
        if($hostURL == 0) {
            $configuration->setHost("https://sandbox.cashfree.com/pg");
        } else {
            $configuration->setHost("https://api.cashfree.com/pg");
        }
        $apiInstance = new PaymentLinksApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy()
            ]),
            $configuration,
            null,
            $hostURL
        );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->getPaymentLinkDetails($x_client_id, $x_client_secret, $linkId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            return $result;
        } catch (Exception $e) {
            \Sentry\captureException($e);
            throw $e;
        }
    }

    public function cancelPaymentLink(CFConfig $config, CFHeader $header, string $linkId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        \Sentry\init([
            'dsn' => 'https://f694e61bc6394e80bd2f687a4249a204@o330525.ingest.sentry.io/4505248768327680',
            'environment' => $config->getEnvironment()->name. "_CANCELPAYMENTLINK",
            'attach_stacktrace' => true,
            'release' => '2.2.0',
            'traces_sample_rate' => 1.0,
            'before_send' => function (\Sentry\Event $event, \Sentry\State\Scope $scope): ?\Sentry\Event {
                if($config->getExceptionCaptureBoolean() === false) {
                    $exception = $event->getExceptions()[0] ?? null;
                    if ($exception instanceof \Throwable) {
                        $frames = $exception->getTrace();
                        foreach ($frames as &$frame) {
                            if (isset($frame['file'])) {
                                $frame['file'] = "";
                            }
                        }
                        unset($frame); // Clear the reference
            
                        $exception->setTrace($frames);
                    }

                    $extraData = $event->getExtra();
                    
                    unset($extraData['system']['kernel_version']);
                    unset($extraData['system']['kernel_release']);
                    
                    $event->setExtra($extraData);
                }
                return $event;
            }
        ]);
        $configuration = new Configuration();
        if($hostURL == 0) {
            $configuration->setHost("https://sandbox.cashfree.com/pg");
        } else {
            $configuration->setHost("https://api.cashfree.com/pg");
        }
        $apiInstance = new PaymentLinksApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy()
            ]),
            $configuration,
            null,
            $hostURL
        );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->cancelPaymentLink($x_client_id, $x_client_secret, $linkId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            return $result;
        } catch (Exception $e) {
            \Sentry\captureException($e);
            throw $e;
        }
    }

    public function preauthorization(CFConfig $config, CFHeader $header, string $orderId, CFAuthorizationRequest $cfAuthorizationRequest) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        \Sentry\init([
            'dsn' => 'https://f694e61bc6394e80bd2f687a4249a204@o330525.ingest.sentry.io/4505248768327680',
            'environment' => $config->getEnvironment()->name. "_PREAUTH",
            'attach_stacktrace' => true,
            'release' => '2.2.0',
            'traces_sample_rate' => 1.0,
            'before_send' => function (\Sentry\Event $event, \Sentry\State\Scope $scope): ?\Sentry\Event {
                if($config->getExceptionCaptureBoolean() === false) {
                    $exception = $event->getExceptions()[0] ?? null;
                    if ($exception instanceof \Throwable) {
                        $frames = $exception->getTrace();
                        foreach ($frames as &$frame) {
                            if (isset($frame['file'])) {
                                $frame['file'] = "";
                            }
                        }
                        unset($frame); // Clear the reference
            
                        $exception->setTrace($frames);
                    }

                    $extraData = $event->getExtra();
                    
                    unset($extraData['system']['kernel_version']);
                    unset($extraData['system']['kernel_release']);
                    
                    $event->setExtra($extraData);
                }
                return $event;
            }
        ]);
        $configuration = new Configuration();
        if($hostURL == 0) {
            $configuration->setHost("https://sandbox.cashfree.com/pg");
        } else {
            $configuration->setHost("https://api.cashfree.com/pg");
        }
        $apiInstance = new OrdersApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy()
            ]),
            $configuration,
            null,
            $hostURL
        );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->preauthorization($x_client_id, $x_client_secret, $orderId, $x_api_version, false, $x_idempotency_key, $x_request_id, $cfAuthorizationRequest);
            return $result;
        } catch (Exception $e) {
            \Sentry\captureException($e);
            throw $e;
        }
    }

    private function getURL(CFEnvironment $environment) {
        if($environment == CFEnvironment::SANDBOX) {
            return 0;
        }
        return 1;
    }

}

?>