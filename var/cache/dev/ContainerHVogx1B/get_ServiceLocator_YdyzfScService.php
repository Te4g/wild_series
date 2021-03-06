<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ydyzfSc' shared service.

return $this->privates['.service_locator.ydyzfSc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService.php', true],
    'slugify' => ['privates', 'App\\Service\\Slugify', 'getSlugifyService.php', true],
], [
    'mailer' => '?',
    'slugify' => 'App\\Service\\Slugify',
]);
