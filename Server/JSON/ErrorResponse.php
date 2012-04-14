<?php

class ErrorResponse extends BaseResponse
{
	public function __construct($error, $callback="", $responseType="")
	{
		parent::__construct("", "error", $error, $callback, $responseType, FALSE);
	}
}