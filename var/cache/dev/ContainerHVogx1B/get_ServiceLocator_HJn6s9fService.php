<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.HJn6s9f' shared service.

return $this->privates['.service_locator.HJn6s9f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'episode' => ['privates', '.errored..service_locator.HJn6s9f.App\\Entity\\Episode', NULL, 'Cannot autowire service ".service_locator.HJn6s9f": it references class "App\\Entity\\Episode" but no such service exists.'],
    'slugify' => ['privates', 'App\\Service\\Slugify', 'getSlugifyService.php', true],
], [
    'episode' => 'App\\Entity\\Episode',
    'slugify' => 'App\\Service\\Slugify',
]);
