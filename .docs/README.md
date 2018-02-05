# Apitte/Presenter

## Content

- [Installation - how to register an extension](#installation)
- [Configuration - all options](#configuration)

## Installation

Simpliest way to register this extension is via [Nette\DI\CompilerExtension](https://api.nette.org/2.4/Nette.DI.CompilerExtension.html).

```
composer require apitte/presenter
```

## Configuration

```yaml
application:
	mapping:
		...
		Apitte: Apitte\Presenter\*Presenter
```

### Router

You should prepend `ApiRoute` to your router. Therefor you can reach your API at `<projecc>/api`.s

```php
class RouterFactory
{
	use Nette\StaticClass;
	/**
	 * @return Nette\Application\IRouter
	 */
	public static function createRouter()
	{
		$router = new RouteList;
		$router[] = new ApiRoute('api');
		$router[] = new Route('<presenter>/<action>', 'Homepage:default');
		return $router;
	}
}
```
