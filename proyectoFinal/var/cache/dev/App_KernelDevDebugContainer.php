<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCQbJrXY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCQbJrXY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCQbJrXY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCQbJrXY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCQbJrXY\App_KernelDevDebugContainer([
    'container.build_hash' => 'CQbJrXY',
    'container.build_id' => '68d324d8',
    'container.build_time' => 1613058883,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCQbJrXY');
