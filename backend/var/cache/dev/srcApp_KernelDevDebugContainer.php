<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGQhg7Y3\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGQhg7Y3/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGQhg7Y3.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGQhg7Y3\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerGQhg7Y3\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'GQhg7Y3',
    'container.build_id' => '6d5d1743',
    'container.build_time' => 1624518250,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGQhg7Y3');