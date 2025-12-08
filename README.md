![](https://heatbadger.now.sh/github/readme/contributte/apitte-presenter/?deprecated=1)

<p align=center>
    <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
    <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
    <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
    Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

## Disclaimer

| :warning: | This project is no longer being maintained.
|---|---|

| Composer | [`apitte/presenter`](https://packagist.org/packages/apitte/presenter) |
|---|---|
| Version | ![](https://badgen.net/packagist/v/apitte/presenter) |
| PHP | ![](https://badgen.net/packagist/php/apitte/presenter) |
| License | ![](https://badgen.net/github/license/contributte/apitte-presenter) |

## About

This package integrated [Apitte](https://github.com/apitte/core) into [nette/routing](https://github.com/nette/routing) with a presenter.

> **Note:** Usage of this package was not recommended as it required unnecessary conversion of nette request into psr-7 request.
> It also added headers from nette response configuration which were usually meant for UI, not an API.

> The presenter was incompatible with [middlewares](https://github.com/apitte/middlewares).

## Usage

To install the latest version of `apitte/presenter` use [Composer](https://getcomposer.org).

```bash
composer require apitte/presenter
```

## Setup

First of all, setup [core](https://github.com/apitte/core) package.

Install `apitte/presenter`

```bash
composer require apitte/presenter
```

Configure presenter mapping

```neon
application:
    mapping:
        Apitte: Apitte\Presenter\*Presenter
```

Prepend `ApiRoute` to your router. Therefore you can reach your API at `<project>/api`.

```php
namespace App\Router;

use Apitte\Presenter\ApiRoute;
use Nette\Application\IRouter;
use Nette\StaticClass;

class RouterFactory
{
    use StaticClass;

    public static function createRouter(): IRouter
    {
        $router = new RouteList;
        $router[] = new ApiRoute('api');
        $router[] = new Route('<presenter>/<action>', 'Homepage:default');
        return $router;
    }
}
```

In `index.php` drop `Apitte\Core\Application\IApplication` and keep `Nette\Application\Application` only.

## Version

| State       | Version | Branch   | Nette | PHP     |
|-------------|---------|----------|-------|---------|
| stable      | `^0.8`  | `master` | 3.0+  | `>=7.3` |
| stable      | `^0.5`  | `master` | 2.4   | `>=7.1` |

## Development

This package was maintained by these authors.

<a href="https://github.com/f3l1x">
  <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team.
Also thank you for using this package.
