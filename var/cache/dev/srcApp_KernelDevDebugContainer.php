<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHVogx1B\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHVogx1B/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHVogx1B.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHVogx1B\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerHVogx1B\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'HVogx1B',
    'container.build_id' => 'cfd2f81f',
    'container.build_time' => 1576495615,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHVogx1B');
