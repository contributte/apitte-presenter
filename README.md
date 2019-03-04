# Apitte Presenter

Integrate [Apitte](https://github.com/apitte/core) into [nette/routing](https://github.com/nette/routing) with a presenter. 

> Usage of that package is not recommended as it requires unnecessary conversion of nette request into psr-7 request.
> It also adds headers from nette response configuration which are usually mean for UI, not an API.

> Presenter is currently incompatible with [middlewares](https://github.com/apitte/middlewares)

[![Build Status](https://img.shields.io/travis/apitte/presenter.svg?style=flat-square)](https://travis-ci.org/apitte/presenter)
[![Code coverage](https://img.shields.io/coveralls/apitte/presenter.svg?style=flat-square)](https://coveralls.io/r/apitte/presenter)
[![Licence](https://img.shields.io/packagist/l/apitte/presenter.svg?style=flat-square)](https://packagist.org/packages/apitte/presenter)
[![Downloads this Month](https://img.shields.io/packagist/dm/apitte/presenter.svg?style=flat-square)](https://packagist.org/packages/apitte/presenter)
[![Downloads total](https://img.shields.io/packagist/dt/apitte/presenter.svg?style=flat-square)](https://packagist.org/packages/apitte/presenter)
[![Latest stable](https://img.shields.io/packagist/v/apitte/presenter.svg?style=flat-square)](https://packagist.org/packages/apitte/presenter)
[![PHPStan](https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat-square)](https://github.com/phpstan/phpstan)

## Discussion / Help

[![Join the chat](https://img.shields.io/gitter/room/apitte/apitte.svg?style=flat-square)](https://gitter.im/apitte/apitte)

## Version

| State       | Version      | Branch   | PHP      | Composer                                        |
|-------------|--------------|----------|----------|-------------------------------------------------|
| development | `^0.5.0`     | `master` | `>= 7.1` | `minimum-stability: dev`, `prefer-stable: true` |
| stable      | `^0.4.0`     | `master` | `>= 7.1` |                                                 |
| stable      | `^0.3.0`     | `master` | `>= 5.6` |                                                 |

## Documentation

- [Setup](.docs/README.md#setup)

## Maintainers

<table>
  <tbody>
    <tr>
      <td align="center">
        <a href="https://github.com/f3l1x">
            <img width="150" height="150" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=150">
        </a>
        </br>
        <a href="https://github.com/f3l1x">Milan Felix Šulc</a>
      </td>
      <td align="center">
        <a href="https://github.com/mabar">
            <img width="150" height="150" src="https://avatars0.githubusercontent.com/u/20974277?s=150&v=4">
        </a>
        </br>
        <a href="https://github.com/mabar">Marek Bartoš</a>
      </td>
    </tr>
  </tbody>
</table>

## Sponsoring

<a href="https://github.com/tlapnet"><img  width="200" src="https://cdn.rawgit.com/f3l1x/xsource/2463efb7/assets/tlapdev.png"></a>

The development is sponsored by [Tlapnet](https://www.tlapnet.cz)
