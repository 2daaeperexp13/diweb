<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPLUSZp4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPLUSZp4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPLUSZp4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPLUSZp4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPLUSZp4\App_KernelDevDebugContainer([
    'container.build_hash' => 'PLUSZp4',
    'container.build_id' => '4c4f132b',
    'container.build_time' => 1614070631,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPLUSZp4');
