<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8p0B0VD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8p0B0VD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8p0B0VD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8p0B0VD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8p0B0VD\App_KernelDevDebugContainer([
    'container.build_hash' => '8p0B0VD',
    'container.build_id' => '7466dbd2',
    'container.build_time' => 1614264057,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8p0B0VD');
