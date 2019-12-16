<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.wyrb61.' shared service.

return $this->privates['.service_locator.wyrb61.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'authenticator' => ['privates', 'App\\Security\\LoginFormAuthenticator', 'getLoginFormAuthenticatorService.php', true],
    'guardHandler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService.php', true],
    'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService.php', true],
], [
    'authenticator' => 'App\\Security\\LoginFormAuthenticator',
    'guardHandler' => '?',
    'passwordEncoder' => '?',
]);
