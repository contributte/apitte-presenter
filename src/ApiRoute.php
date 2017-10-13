<?php

namespace Apitte\Presenter;

use Nette\Application\Routers\Route;

class ApiRoute extends Route
{

	const APITTE_MODULE = 'Apitte:Api';

	/**
	 * @param string $prefix
	 * @param mixed[] $metadata
	 * @param int $flags
	 */
	public function __construct($prefix, array $metadata = [], $flags = 0)
	{
		if (empty($metadata)) {
			$metadata[Route::PRESENTER_KEY] = self::APITTE_MODULE;
		}
		parent::__construct(rtrim($prefix, '/') . '/<path .*>', $metadata, $flags);
	}

}
