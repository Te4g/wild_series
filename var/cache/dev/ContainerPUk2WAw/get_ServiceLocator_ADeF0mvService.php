<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ADeF0mv' shared service.

return $this->privates['.service_locator.ADeF0mv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'season' => ['privates', '.errored..service_locator.ADeF0mv.App\\Entity\\Season', NULL, 'Cannot autowire service ".service_locator.ADeF0mv": it references class "App\\Entity\\Season" but no such service exists.'],
], [
    'season' => 'App\\Entity\\Season',
]);
