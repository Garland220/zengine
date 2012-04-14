<?php

require_once('../Functions.php');

/*
 * 
 */
class BaseResponse
{
	protected $callback = "";
	protected $response;
	protected $success = true;

	/*
	 * BaseResponse constructor, requires a JSON string or array (array prefered),
	 *  and takes a callback function, and 'success' result (used for error reporting).
	 */
	public function __construct($data,$result,$message,$callback="",$responseType="",$success=true)
	{
		$this->success = $success;
		$this->callback = $callback;
		
		$output = array(
			"data" => $data,
			"result" => $result,
			"message" => $message,
		);

		$output = toJson($output,$responseType);
		//$json = toJsonP($json,$this->callback);
		$this->response = $output;
	}

	/*
	 * Sends response back and a JSON object.
	 */
	public function send()
	{
		if (empty($this->response))
			return;

		header('Content-type: application/json');
		die($this->response);
	}

	// TODO
	public function __toString()
	{
		return $success;
	}
}