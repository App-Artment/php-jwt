<?php
namespace Firebase\JWT;

class ExpiredException extends \UnexpectedValueException
{
    protected $payload;

    public function __construct($message, $payload)
    {
        $this->payload = $payload;
        parent::__construct($message);
    }

    public function getPayload()
    {
        return $this->payload;
    }
}
