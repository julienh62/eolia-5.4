<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHJoYQ3h\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHJoYQ3h/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHJoYQ3h.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHJoYQ3h\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHJoYQ3h\App_KernelDevDebugContainer([
    'container.build_hash' => 'HJoYQ3h',
    'container.build_id' => '0c927465',
    'container.build_time' => 1704812970,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHJoYQ3h');
