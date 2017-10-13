<?php

namespace Apitte\Presenter;

use Nette\Application\IResponse;
use Nette\Http\IRequest;
use Nette\Http\IResponse as IHttpResponse;
use Psr\Http\Message\ResponseInterface;

class ApiResponse implements IResponse
{

	/** @var ResponseInterface */
	private $response;

	/**
	 * @param ResponseInterface $response
	 */
	public function __construct(ResponseInterface $response)
	{
		$this->response = $response;
	}

	/**
	 * @param IRequest $httpRequest
	 * @param IHttpResponse $httpResponse
	 * @return void
	 */
	public function send(IRequest $httpRequest, IHttpResponse $httpResponse)
	{
		$this->sendStatus($this->response);
		$this->sendHeaders($this->response);
		$this->sendBody($this->response);
	}

	/**
	 * @param ResponseInterface $response
	 * @return void
	 */
	protected function sendStatus(ResponseInterface $response)
	{
		$version = $response->getProtocolVersion();
		$status = $response->getStatusCode();
		$phrase = $response->getReasonPhrase();
		header(sprintf('HTTP/%s %s %s', $version, $status, $phrase));
	}

	/**
	 * @param ResponseInterface $response
	 * @return void
	 */
	protected function sendHeaders(ResponseInterface $response)
	{
		foreach ($response->getHeaders() as $name => $values) {
			$this->sendHeader($name, $values);
		}
	}

	/**
	 * @param string $name
	 * @param array $values
	 * @return void
	 */
	protected function sendHeader($name, $values)
	{
		$name = str_replace('-', ' ', $name);
		$name = ucwords($name);
		$name = str_replace(' ', '-', $name);
		foreach ($values as $value) {
			header(sprintf('%s: %s', $name, $value), FALSE);
		}
	}

	/**
	 * @param ResponseInterface $response
	 * @return void
	 */
	protected function sendBody(ResponseInterface $response)
	{
		$stream = $response->getBody();
		$stream->rewind();
		while (!$stream->eof()) {
			echo $stream->read(8192);
		}
	}

}
