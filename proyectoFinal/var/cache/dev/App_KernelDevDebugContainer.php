<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2z7i8Md\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2z7i8Md/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2z7i8Md.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2z7i8Md\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2z7i8Md\App_KernelDevDebugContainer([
    'container.build_hash' => '2z7i8Md',
    'container.build_id' => '9e53acf7',
    'container.build_time' => 1613979533,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2z7i8Md');
