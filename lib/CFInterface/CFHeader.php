<?php
namespace OpenAPI\Client\CFInterface;

class CFHeader {

    public string $requestId;
    public string $idempotencyKey = "";

    public function __construct(string $requestId = null, string $idempotencyKey = null) {
        
        if($requestId != null) {
            $this->requestId = $requestId;
        }
        if($idempotencyKey != null) {
            $this->idempotencyKey = $idempotencyKey;
        }
    }

    public function getRequestId() {
        if($this->requestId != null) {
            return $this->requestId;
        }
        return null;
    }
    public function getIdempotencyKey() {
        if($this->idempotencyKey != null) {
            return $this->idempotencyKey;
        }
        return null;
    }

}

?>