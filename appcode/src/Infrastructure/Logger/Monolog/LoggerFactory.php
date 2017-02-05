<?php declare(strict_types = 1);
/**
 * This file is part of the vasildakov/tms project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Vasil Dakov <vasildakov@gmail.com>
 * @link https://github.com/vasildakov/tms GitHub
 */

namespace Infrastructure\Logger\Monolog;

use Interop\Container\ContainerInterface;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * Monolog Logger Factory
 * @see  https://github.com/Seldaek/monolog
 */
class LoggerFactory
{
    /**
     * @param ContainerInterface $container
     * @return Monolog\Logger
     */
    public function __invoke(ContainerInterface $container)
    {
        $logger = new Logger('monolog');

        $logger->pushHandler(
            new StreamHandler('./data/log/application.log', Logger::INFO)
        );

        return $logger;
    }
}
