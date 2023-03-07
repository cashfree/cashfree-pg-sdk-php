<?php
namespace OpenAPI\Client\CFInterface;

enum CFEnvironment {
    case SANDBOX;
    case PRODUCTION;
}

class CFConfig {
    public CFEnvironment $environment;
    public string $apiVersion;
    public string $clientId;
    public string $clientSecret;
    public int $timeout = 180000;
    public string $proxy = "";

    public function __construct(CFEnvironment $environment, string $clientId, string $clientSecret, string $apiVersion = "2022-09-01", string $proxy = "", int $timeout = 180000) {
        $this->environment = $environment;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->apiVersion = $apiVersion;
        if($proxy != null) {
            $this->proxy = $proxy;
        }
        $this->timeout = $timeout;
    }

    public function getEnvironment() {
        return $this->environment;
    }

    public function getClientId() {
        return $this->clientId;
    }
    public function getClientSecret() {
        return $this->clientSecret;
    }
    public function getApiVersion() {
        return $this->apiVersion;
    }
    public function getProxy() {
        return $this->proxy;
    }
    public function getTimeout() {
        return $this->timeout;
    }
}

?>