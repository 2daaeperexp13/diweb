<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAYkWPYC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAYkWPYC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAYkWPYC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAYkWPYC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAYkWPYC\App_KernelDevDebugContainer([
    'container.build_hash' => 'AYkWPYC',
    'container.build_id' => 'e20daa30',
    'container.build_time' => 1613300052,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAYkWPYC');
