<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7ZJAwpa\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7ZJAwpa/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7ZJAwpa.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7ZJAwpa\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7ZJAwpa\App_KernelDevDebugContainer([
    'container.build_hash' => '7ZJAwpa',
    'container.build_id' => '58d45141',
    'container.build_time' => 1613549927,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7ZJAwpa');
