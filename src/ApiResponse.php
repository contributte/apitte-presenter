<?php declare(strict_types = 1);

namespace Apitte\Presenter;

use Nette\Application\IResponse;
use Nette\Http\IRequest;
use Nette\Http\IResponse as IHttpResponse;
use Psr\Http\Message\ResponseInterface;

class ApiResponse implements IResponse
{

	/** @var ResponseInterface */
	private $response;

	public function __construct(ResponseInterface $response)
	{
		$this->response = $response;
	}

	public function send(IRequest $httpRequest, IHttpResponse $httpResponse): void
	{
		$this->sendStatus($this->response);
		$this->sendHeaders($this->response);
		$this->sendBody($this->response);
	}

	protected function sendStatus(ResponseInterface $response): void
	{
		$version = $response->getProtocolVersion();
		$status = $response->getStatusCode();
		$phrase = $response->getReasonPhrase();
		header(sprintf('HTTP/%s %s %s', $version, $status, $phrase));
	}

	protected function sendHeaders(ResponseInterface $response): void
	{
		foreach ($response->getHeaders() as $name => $values) {
			$this->sendHeader($name, $values);
		}
	}

	/**
	 * @param string[] $values
	 */
	protected function sendHeader(string $name, array $values): void
	{
		$name = str_replace('-', ' ', $name);
		$name = ucwords($name);
		$name = str_replace(' ', '-', $name);
		foreach ($values as $value) {
			header(sprintf('%s: %s', $name, $value), false);
		}
	}

	protected function sendBody(ResponseInterface $response): void
	{
		$stream = $response->getBody();
		$stream->rewind();
		while (!$stream->eof()) {
			echo $stream->read(8192);
		}
	}

}
