<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOx53Vik\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOx53Vik/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOx53Vik.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOx53Vik\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerOx53Vik\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Ox53Vik',
    'container.build_id' => '4bd11d5b',
    'container.build_time' => 1571942551,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOx53Vik');
