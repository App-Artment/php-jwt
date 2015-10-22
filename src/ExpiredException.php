<?php
namespace Firebase\JWT;

class ExpiredException extends \UnexpectedValueException
{

	protected $payload;

    public function __contruct($message, $payload)
    {
        $this->payload = payload;
        parent::__construct($message);
    }

    public method getPayload()
	{
		return $this->payload;
	}

}
