<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/9/20 0020
 * Time: 11:55
 */
namespace CherryneChou\EasyDada\Balance;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers services on the given container.
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param \Pimple\Container $pimple A container instance
     */
    public function register(Container $pimple)
    {
        $pimple['balance'] = function ($app) {
            return new Client($app);
        };
    }
}
