<?php

declare(strict_types=1);

namespace PCIT\Providers;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class MiscellaneousProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['miscellaneous'] = function ($app) {
            $class = 'PCIT\\'.$app->class_name.'\Service\Miscellaneous\Client';

            return new $class($app->curl, $app->config['api_url']);
        };
    }
}
