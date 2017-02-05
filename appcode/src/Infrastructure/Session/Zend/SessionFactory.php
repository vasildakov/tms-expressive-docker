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

namespace Infrastructure\Session\Zend;

use Interop\Container\ContainerInterface;

/**
 * Class SessionFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 */
class SessionFactory
{
    /**
     * @param  ContainerInterface $container
     * @return \Zend\Session\Container
     */
    public function __invoke(ContainerInterface $container) : Session
    {
        $config = $container->get('config');

        return new Session('namespace');

    }
}
