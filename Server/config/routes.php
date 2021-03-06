<?php
/**
 * @author         Pierre-Henry Soria <hello@lifyzer.com>
 * @copyright      (c) 2018-2019, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace Lifyzer\Server;

use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

return simpleDispatcher(function (RouteCollector $route) {
    $route->addRoute('GET', '/', 'Product@homepage');
    $route->addRoute('POST', '/search', 'Product@search');
    $route->addRoute('GET', '/results/{keywords:\w+}[/{page:\d+}]', 'Product@result');
    $route->addRoute('GET', '/about', 'About@about');
    $route->addRoute('GET', '/product/{id:\d+}', 'Product@show');
});
